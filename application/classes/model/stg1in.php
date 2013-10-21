<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Stg1in extends Model {
  public function beat_monster()
  {
    if ($this->post['beat'] == 1)
    {
      Cookie::set('beat',1);
      $mt_monster_lv = ORM::factory('mtMonsterLv')->where('id', '=', $this->team->monster_lv)->find();
      Cookie::set('monster_lv', $mt_monster_lv->id);
      Cookie::set('monster_img', $mt_monster_lv->img);
                     
      $team_all = ORM::factory('team')->where('id', '=', $this->team->id)->find_all();
      $datetime1 = new DateTime('2020-07-18 15:46:24');
      foreach ($team_all as $k => $d)
      {
        $present = ORM::factory('present');
        $present->u_id = $d->u_id;
        $present->item = 'food';
        $present->amount = 1;
        $present->msg = 'your team beat monster';
        $present->img = '/public/img/food.png';
        
        $team = ORM::factory('team')->where('id', '=', $d->id)->find();
        $datetime2 = new DateTime($team->date);
        if($team->loaded())
        {
          if ($datetime1 > $datetime2) $datetime1 = $datetime2; 
          $present->save();
          ++$team->monster_lv;
          $team->date = date("Y-m-d H:i:s");
          $team->damage = 0;
          $team->save();
        }
        
      }
      $datetime2 = new DateTime();
      $interval = $datetime1->diff($datetime2);
      $team_msg = new Model_TeamMsg;
      $team_msg->team_id = $this->team->id;
      $team_msg->new_monster();
      $rank = ORM::factory('rank')->where('u_id', '=', $this->team->u_id)->find();
      $rank->score = $interval->format("%D%H%I%S");
      $rank->name = Cookie::get('name') ?: '';
      $rank->img = Cookie::get('img') ?: '';
      $rank->type = 'beat_lv_'.$this->team->monster_lv;
      $rank->u_id = $this->team->u_id;
      $rank->save();

    }
    else
    {
//       echo View::factory('profiler/stats');
      $this->team->damage += floor($this->post['damage']);
      $this->team->update();
      $team_msg = ORM::factory('teamMsg');
      $team_msg->msg  = floor($this->post['damage']).' damage';
      $team_msg->u_id = $this->team->u_id;
      echo $this->team->id;
      $team_msg->team_id = $this->team->id;
      $team_msg->save();

      $rank = ORM::factory('rank')->where('u_id', '=', $this->team->u_id)->find();
      $rank->score = floor($this->post['damage']);
      $rank->name = Cookie::get('name') ?: '';
      $rank->img = Cookie::get('img') ?: '';
      $rank->type = 'm_lv_'.$this->team->monster_lv;
      $rank->u_id = $this->team->u_id;
      $rank->save();
    }    

  }
  public function getscore()
  {
    $get_item = rand(1, 20);
    $this->status = ORM::factory('status')->where('u_id', '=', $this->team->u_id)->find();
    $this->status->exp = $this->status->exp + $this->score;
    if ($get_item == 1) 
    {
//       ++$this->status->food;
      $present = ORM::factory('present');
      $present->u_id = $this->team->u_id;
      $present->item = 'food';
      $present->amount = 1;
      $present->msg = 'food is from game';
      $present->img = '/public/img/food.png';
      $present->save();
    }
    $this->status->update();
        
    $rank = ORM::factory('rank')->where('u_id', '=', $this->team->u_id)->find();
    $rank->score = $this->score;
    $rank->name = Cookie::get('name') ?: '';
    $rank->img = Cookie::get('img') ?: '';
    $rank->type = 'lv_'.$this->status->level;
    $rank->u_id = $this->team->u_id;
    $rank->save();
  }
  public function msg()
  {
//     $team = ORM::factory('team')->where('u_id', '=', $this->team->u_id)->find();
    $err['chk'] = 1;
    $team_msg = ORM::factory('teamMsg')->where('u_id', '=', $this->team->u_id)->order_by('date','DESC')->limit(1)->find();
//     echo $team_msg->date.' == '.date("Y-m-d");
    if ($team_msg->date == date("Y-m-d"))
    {
      ++$err['chk'];
			$err['message'] = 'you can post only once a day';
    }
    else
    {
  		try
    	{
        $team_msg = ORM::factory('teamMsg');
        $team_msg->u_id = $this->team->u_id;
        $team_msg->team_id = $this->team->id;
        $team_msg->msg = $this->post['msg'];
        $team_msg->date = date("Y-m-d");
        $team_msg->save();
      }
  		catch (ORM_Validation_Exception $e)
  		{
        ++$err['chk'];
  			$err['message'] = $e->errors($this->lang);
  		}
    }
    echo json_encode($err);
    
  }

}