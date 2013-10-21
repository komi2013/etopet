<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Stg2in extends Model {
  public function stage_up()
  {
    $monster = ORM::factory('monster')->where('u_id', '=', $this->usr->id)->find();
    $monster->damage = $monster->damage + $this->post['damage'];
    $monster->hp = $monster->hp - $this->post['damage'];
    $monster->save();
    if ($monster->hp < 1) //stage up  usr table
    {
      $next_stg = $monster->stg + 1;
      DB::update('usr')->set(array('stage' => $next_stg))
      ->where('id', 'in', '(select u_id from monster where id = '.$monster->id.')')
      ->execute();
      DB::update('monster')->set(array('stg' => $next_stg))
      ->where('u_id', 'in', '(select u_id from monster where id = '.$monster->id.')')
      ->execute();
    }
    else //hp update monster table
    {
      DB::update('monster')->set(array('hp' => $monster->hp))
      ->where('u_id', 'in', '(select u_id from monster where id = '.$monster->id.')')
      ->execute();
    }
  }
  public function getscore()
  {
    $get_item = rand(1, 20);
    $this->status = ORM::factory('status')->where('u_id', '=', $this->usr->id)->find();
    ++$this->status->exp;
    if ($get_item == 1) 
    {
      ++$this->status->food;
      Cookie::set('msg','you got food');
    }
    elseif ($get_item == 2) 
    {
      ++$this->status->magic;
      Cookie::set('msg','you got magic power');
    }
    $this->status->update();
        
    $rank = ORM::factory('rank')->where('u_id', '=', $this->usr->id)->find();
    $rank->score = $this->score;
    $rank->name = $this->usr->name;
    $rank->img = $this->usr->img;
    $rank->type = 'lv_'.$this->status->level;
    $rank->u_id = $this->usr->id;
    $rank->save();
  }
  public function damage()
  {
    $this->template = View::factory('eto/template');
    $this->template->content = View::factory('eto/rank');
    $status = ORM::factory('status')->where('u_id', '=', $this->usr->id)->find();
    $rank = ORM::factory('monster')->where('stg', '=', $this->usr->stage)->order_by('damage','DESC')->limit('5')->find_all();
    $this->template->content->rank = $rank;
  }
  public function turn()
  {
    $this->template = View::factory('eto/template');
    $this->template->content = View::factory('eto/rank');
    $rank = ORM::factory('rank')->where('type', '=', 'stg_'.$this->usr->stage)->order_by('score','ASC')->limit('5')->find_all();
    $this->template->content->rank = $rank;
  }

}