<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Stg2 extends Model_Stg1 {
  public function main()
  {
  	View::bind_global('page_title', $this->page_title);
    $this->template = View::factory('eto/template');
//     $pet = ORM::factory('pet')->where('id', '=', $this->usr->pet_id)->find();
    $this->status = ORM::factory('status')->where('u_id', '=', $this->usr->id)->find();
    $this->mt_level_1 = ORM::factory('mtLevelOne')->where('id', '=', $this->status->level)->find();

    $this->now = date("Y-m-d H:i:s");
    $this->uni_now = strtotime('today');
    $this->uni_date = strtotime($this->status->date);
    $stamina = floor(($this->uni_now - $this->uni_date) / 28800);

    $this->err_msg = '';
    $this->ch_lv = '';
    if ($this->status->exp >= $this->mt_level_1->goal_exp)
    {
//       $this->lv_up();
      parent::lv_up();
    }
    elseif ($this->one == 'play')
    {
//       $this->play();
      parent::play();
    }
    elseif ($this->one == 'eat')
    {
//       $this->eating();
      parent::eating();
    }
    elseif ($this->one == 'think')
    {
      parent::think();
//       $this->think();
    }
    elseif ($this->one == 'buy')
    {
      parent::buy();
//       $this->buy();
    }
    elseif ($this->one == 'team')
    {
      $this->team();
    }
    elseif ($this->one == 'fight')
    {
      $this->fight();
    }
    else
    {
      if ($stamina > 0)
      {
        $this->status->manpuku = $this->status->manpuku + $stamina;
        
        if ($this->status->manpuku > $this->mt_level_1->max_mpk) $this->status->manpuku = $this->mt_level_1->max_mpk;
        $this->status->date = $this->now;
        $this->status->save();
      }

      $this->page_title = 'ETO pet';
      $this->template->content = View::factory('eto/main');    
      $this->template->content->status = $this->status;
      $this->template->content->mt_level = $this->mt_level_1;
    }
    $this->template->content->err_msg = $this->err_msg;
    $this->template->content->ch_lv = $this->ch_lv;
    $this->template->content->lang = $this->lang;
      
  }

  public function team()
  {
    $this->page_title = 'team';
    $this->template = View::factory('eto/template');
    $this->template->content = View::factory('stg2/team');
    $monster = ORM::factory('monster')->where('u_id', '=', $this->usr->id)->find();
    $team = ORM::factory('monster')->where('id', '=', $monster->id)->find_all();
    
    $team_usr = DB::select()->from('usr')
      ->where('id', 'in', DB::select('u_id')->from('monster')->where('id','=',$monster->id))
      ->execute();
    
    $this->template->content->team = $team;
    $this->template->content->team_usr = $team_usr;
    $this->template->content->usr = $this->usr;
  }
  public function fight()
  {
    if ($this->status->manpuku > 0) // make center of X.Y 
    {
      $this->page_title = 'fight';
      $this->template = View::factory('eto/game');
      $this->template->content = View::factory('stg2/puzzle');
      for($z=0; $z<300; $z++) {
        $framequeue[$z] = rand(0, 5);
      }
      $monster = ORM::factory('monster')->where('u_id', '=', $this->usr->id)->find();
      $mt_monster_lv = ORM::factory('mtMonsterLv')->where('id', '=', $monster->stg)->find();
//       if (!$monster->loaded())
//       {
//         $mt_monster_lv = ORM::factory('mtMonsterLv')->where('id', '=', 3)->find();
//         $monster->hp = 400;
//         $monster->u_id = $this->usr->id;
//         $monster->stg = $this->usr->stage;
//         $team = ORM::factory('monster')->count_all();
//         $team = floor($team + 1)/4; //higher rank upper than 3 is only 3 user
//         $monster->id = $team;
//         $monster->save();
//       }
//       else
//       {
//         $mt_monster_lv = ORM::factory('mtMonsterLv')->where('id', '=', $monster->stg)->find();
//       }
      
      $this->session->set('framequeue',$framequeue);
      $this->template->content->framequeue = $framequeue;
      $this->template->content->status = $this->status;
      $this->template->content->usr = $this->usr;
      $this->template->content->mt_level = $this->mt_level_1;
      $this->template->content->energy = $this->status->manpuku;
      $this->template->content->monster = $monster;
      $this->template->content->mt_monster_lv = $mt_monster_lv;
      $this->status->manpuku = 0;
      $this->status->update();
    }
    else
    {
      $this->template = View::factory('eto/template');
      $this->template->content = View::factory('eto/main');
//       $this->template->content->goto_quiz = '';
      $this->err_msg = 'you do not have energy';
      $this->template->content->status = $this->status;
      $this->template->content->mt_level = $this->mt_level_1;
    }

  }
  public function score()
  {
    parent::score();
  }
  public function turn()
  {
    parent::score();
  }
  public function damage()
  {
    parent::lv_up();
    $this->template = View::factory('eto/template');
    $this->template->content = View::factory('eto/rank');
    $status = ORM::factory('status')->where('u_id', '=', $this->usr->id)->find();
    $rank = ORM::factory('monster')->where('stg', '=', $this->usr->stage)->order_by('damage','DESC')->limit('5')->find_all();
    $this->template->content->rank = $rank;
  }

}