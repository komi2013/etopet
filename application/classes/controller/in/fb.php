<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_In_Fb extends Controller {
	public function action_index()
  {
  	$this->lang = $this->request->param('lang');
    $func = $this->request->param('one');
    $this->$func();
  }
  public function login()
  {
    $login_url = 'https://www.facebook.com/dialog/oauth?client_id=478243252250047&redirect_uri=https://'.$_SERVER['HTTP_HOST'].'/en/in/fb/login/';

    $fb_url = 'https://graph.facebook.com/oauth/access_token?';
    $redirect_uri = 'redirect_uri=https://'.$_SERVER['HTTP_HOST'].'/en/in/fb/login/&';
    
    $domain = new Model_Domain;
    
    $client_id = $domain->client_id;
    $client_secret = $domain->client_secret;
    
    $contents = file_get_contents($fb_url.$client_id.$redirect_uri.$client_secret.'code='.$_GET['code']);
    $arr_url = preg_split('/=/', $contents, -1, PREG_SPLIT_OFFSET_CAPTURE);
    $contents = file_get_contents('https://graph.facebook.com/me?access_token='.$arr_url[1][0]);
    $contents = json_decode($contents);

    echo Debug::vars($contents);
    
    $id = $contents->id;
    echo '<img src="'.'http://graph.facebook.com/'.$id.'/picture'.'">';
    $session = Session::instance();
    $session->set('pv_u_id',$contents->id);
    Cookie::set('name', $contents->first_name);
    Cookie::set('img', 'http://graph.facebook.com/'.$contents->id.'/picture');

    $usr = ORM::factory('usr')->where('pv_u_id', '=', $contents->id)->find();

    if ($usr->loaded())
    {
      $session->set('u_id',$usr->id);
      $usr->name = $contents->first_name;
      $usr->img = 'http://graph.facebook.com/'.$contents->id.'/picture';
//       $usr->date = date("Y-m-d", time());
      $usr->save();
      $this->request->redirect('/en/main/ ');
    }
    else
    {
      $u_id = ORM::factory('usr')->getnextval();
      $usr->pv_u_id = $contents->id;
//       $usr->stage = 1;
      $usr->name = $contents->first_name;
      $usr->img = 'http://graph.facebook.com/'.$contents->id.'/picture';
      $usr->id = $u_id;
      $usr->save();
      
      $status = ORM::factory('status');
      $status->level = 1;
      $status->food = 3;
      $status->manpuku = 3;
      $status->u_id = $u_id;
      $status->date = date("Y-m-d H:i:s");
      $status->save();

      $cnt = ORM::factory('team')->where('monster_lv', '=',1)->count_all();
//       $status = ORM::factory('status')->where('u_id', '=', $this->usr->id)->find();

      $team_id = ceil(($cnt+1)/4);
      $team = ORM::factory('team');
      $team->id = '1_'.$team_id;
      $team->pet_lv = 1;
      $team->u_id = $u_id;
      $team->monster_lv = 1;
      $team->save();

      $session->set('u_id',$u_id);
      $this->request->redirect('/en/main/start/ ');
    }
  }

  public function redirect()
  {
    $domain = new Model_Domain;
    $client_id = $domain->client_id;
 	  $this->request->redirect("https://www.facebook.com/dialog/oauth?".$client_id."redirect_uri=https://".$_SERVER['HTTP_HOST']."/en/in/fb/login/");
  }

  public function logout()
  {
    Session::instance()->destroy();
    $domain = new Model_Domain;    
 	  $this->request->redirect($domain->users.'/ja/in/users/logout/');
  }

}
//end