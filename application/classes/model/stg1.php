<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Stg1 extends Model {
  public function main()
  {
  	View::bind_global('page_title', $this->page_title);
    $this->template = View::factory('eto/template');
    $this->status = ORM::factory('status')->where('u_id', '=', $this->team->u_id)->find();
    $this->mt_level_1 = ORM::factory('mtLevelOne')->where('id', '=', $this->status->level)->find();

    $this->now = date("Y-m-d H:i:s");
    $this->uni_now = strtotime($this->now);
    $this->uni_date = strtotime($this->status->date);
    $stamina = floor(($this->uni_now - $this->uni_date) / 28800);

    $this->err_msg = '';
    $this->ch_lv = '';
    $this->page_title = $this->one;
    if ($this->one == 'start')
    {
      $this->page_title = 'birth';
      $this->template = View::factory('eto/game');
	    $this->template->content = View::factory('eto/start');    
      $this->template->content->status = $this->status;
      $this->template->content->mt_level = $this->mt_level_1;
    }
    elseif ($this->status->exp >= $this->mt_level_1->goal_exp)
    {
      $this->lv_up();
    }
    elseif ($this->one == 'play')
    {
      $this->play();
    }
    elseif ($this->one == 'eat')
    {
      $this->eating();
    }
    elseif ($this->one == 'think')
    {
      $this->think();
    }
    elseif ($this->one == 'buy')
    {
      $this->buy();
    }
    elseif ($this->one == 'fight')
    {
      $this->fight();
    }
    elseif ($this->one == 'present')
    {
      $this->present();
    }
    elseif ($this->one == 'team')
    {
      $this->team();
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
    $present_cnt = ORM::factory('present')->where('u_id', '=', $this->team->u_id)->where('receive', '=', 0)->count_all();
    $this->template->content->present_cnt = $present_cnt;
    $this->template->content->err_msg = $this->err_msg;
    $this->template->content->ch_lv = $this->ch_lv;
    $this->template->content->lang = $this->lang;
      
  }

  public function lv_up()
  {
    $this->page_title = 'level up';
//     $this->status->exp = $this->status->exp - $this->mt_level_1->goal_exp;
    $this->status->exp = 0;
    ++$this->status->level;
    $this->status->save();
    
//     $team->u_id = $this->team->u_id;
    $this->team->pet_lv = $this->status->level;
    $this->team->update();
    
    $this->template = View::factory('eto/template');
    $this->template->content = View::factory('eto/main');
    $this->ch_lv = 'up';
    $this->template->content->status = $this->status;
    $this->template->content->mt_level = $this->mt_level_1;
  }
  public function eating()
  {
    $this->page_title = 'eating';
    $this->template = View::factory('eto/game');
    if ($this->status->manpuku < $this->mt_level_1->max_mpk AND $this->status->food > 0)
    {
	    $this->template->content = View::factory('eto/eat');    
      $this->status->manpuku = $this->status->manpuku + 2;
      if($this->status->manpuku > $this->mt_level_1->max_mpk) $this->status->manpuku = $this->mt_level_1->max_mpk;
      --$this->status->food;
      $this->status->save();
    }
    else
    {
      $this->template = View::factory('eto/template');
      $this->template->content = View::factory('eto/main');
      if ($this->status->manpuku >= $this->mt_level_1->max_mpk) $this->err_msg = 'full energy';
      if ($this->status->food <= 0) $this->err_msg = 'no food';
    }
    $this->template->content->status = $this->status;
    $this->template->content->mt_level = $this->mt_level_1;

  }
  public function think()
  {
    $this->page_title = 'think';
    $this->template = View::factory('eto/template');
    $this->template->content = View::factory('eto/think');
    $this->template->content->status = $this->status;
  }
  public function buy()
  {
    $this->page_title = 'buy';
    $this->template = View::factory('eto/template');
    $this->template->content = View::factory('eto/buy');
  }
  public function present()
  {
    $this->page_title = 'present';
    $this->template = View::factory('eto/template');
    $this->template->content = View::factory('eto/present');
    $present_all = ORM::factory('present')->where('u_id', '=', $this->team->u_id)
      ->where('receive', '=', 0)->order_by('timestamp','DESC')->limit('10')->find_all();
    $this->template->content->present = $present_all;
    $present = ORM::factory('present');
    $present->u_id = $this->team->u_id;
//     $present->all = $present_all;
    $present->receive();
  }
  public function play()
  {
    if ($this->status->manpuku > 1) // make center of X.Y 
    {
      $this->status->manpuku = $this->status->manpuku -2;
      $this->status->update();
      $this->page_title = 'play';
      $this->template = View::factory('eto/game');
      $this->template->content = View::factory('eto/play');
      $this->template->content->status = $this->status;
      $score_pass = Text::random();
      $this->session->set('score_pass',$score_pass);
      $this->template->content->score_pass = $score_pass;
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
  public function fight()
  {
    if ($this->status->manpuku > 0) // make center of X.Y 
    {
      $this->page_title = 'fight';
      $this->template = View::factory('eto/game');
      $this->template->content = View::factory('eto/puzzle');
      for($z=0; $z<300; $z++) {
        $framequeue[$z] = rand(0, 5);
      }
      $this->session->set('framequeue',$framequeue);
      $this->template->content->framequeue = $framequeue;
      $this->template->content->status = $this->status;
      $this->template->content->mt_level = $this->mt_level_1;
      $this->template->content->energy = $this->status->manpuku;

      $mt_monster_lv = ORM::factory('MtMonsterLv')->where('id', '=', $this->team->monster_lv)->find();
      $team_all = ORM::factory('team')->where('id', '=', $this->team->id)->find_all();
      $monster_hp = $mt_monster_lv->hp;
      foreach ($team_all as $k => $d)
      {
        $monster_hp = $monster_hp - $d->damage; 
      }
      
      $this->template->content->mt_monster_lv = $mt_monster_lv;
      $this->template->content->monster_hp = $monster_hp;

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
  public function team()
  {
    $this->template = View::factory('eto/template');
    $this->template->content = View::factory('eto/team');
    $team = ORM::factory('team')->where('u_id', '=', $this->team->u_id)->find();
    $team_msg = ORM::factory('teamMsg')->where('team_id', '=', $team->id)->order_by('id','DESC')->find_all();
    $arr_team_msg = array();
    
    foreach ($team_msg as $k => $d)
    {
      $usr = ORM::factory('usr')->where('id', '=', $d->u_id)->find();
      $arr_team_msg[$k]['name'] = $usr->name ?: 'monster';
      $arr_team_msg[$k]['img'] = $usr->img;
      $arr_team_msg[$k]['msg'] = $d->msg;
    }
//     $obj_team = new Model_Team;
//     $obj_team->team_id = $team->id;
//     $damage_sum = $obj_team->sum();
    $team_sum = ORM::factory('team')->where('id', '=', $team->id)->find_all();
    $damage_sum = 0;
    foreach ($team_sum as $d)
    {
      $damage_sum += $d->damage;
    }
    
//     echo $damage_sum; 
//     $damage_sum = ORM::factory('team')->where('id', '=', $team->id)->sum();
    $mt_monster_lv = ORM::factory('mtMonsterLv')->where('id', '=', $team->monster_lv)->find();
    $this->template->content->arr_team_msg = $arr_team_msg;
    $this->template->content->mt_monster_lv = $mt_monster_lv;
    
    $this->template->content->monster_hp = $mt_monster_lv->hp - $damage_sum;

  }
  public function score()
  {
    $this->template = View::factory('eto/template');
    $this->template->content = View::factory('eto/rank');
    $status = ORM::factory('status')->where('u_id', '=', $this->team->u_id)->find();
    $rank = ORM::factory('rank')->where('type', '=', 'lv_'.$status->level)->order_by('score','DESC')->limit('5')->find_all();
    $this->template->content->rank = $rank;
//     $this->template->content->beat = 0;
  }
  public function damage()
  {
    $this->template = View::factory('eto/template');
    $this->template->content = View::factory('eto/rank');
    $rank = ORM::factory('rank')->where('type', '=', 'm_lv_'.$this->team->monster_lv)->order_by('score','DESC')->limit('5')->find_all();
    $this->template->content->rank = $rank;

//     Cookie::set('beat',1);
    $mt_monster_lv = ORM::factory('mtMonsterLv')->where('id', '=', $this->team->monster_lv)->find();
    Cookie::set('monster_lv', $mt_monster_lv->id);
    Cookie::set('monster_img', $mt_monster_lv->img);
  }
  public function beat()
  {
    $this->template = View::factory('eto/template');
    $this->template->content = View::factory('eto/beat');
    $rank = ORM::factory('rank')->where('type', '=', 'beat_lv_'.--$this->team->monster_lv)->order_by('score','ASC')->limit('5')->find_all();
    $this->template->content->rank = $rank;

//     Cookie::set('beat',1);
//     $mt_monster_lv = ORM::factory('mtMonsterLv')->where('id', '=', $this->team->monster_lv)->find();
//     Cookie::set('monster_lv', $mt_monster_lv->id);
//     Cookie::set('monster_img', $mt_monster_lv->img);
  }
                                                                                
}