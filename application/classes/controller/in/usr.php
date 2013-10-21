<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_In_Usr extends Controller {
	public function action_index()
  {
  	$this->lang = $this->request->param('lang');
    $func = $this->request->param('one');
    $this->$func();
  }
  public function login()
  {
		$domain = new Model_Domain;
		$api = new Model_Api;
		$api->receive_data = $_GET['data'];
    $api->salt_key = $domain->users_key;
		$raw_data = $api->receive();
    $session = Session::instance();
    $session->set('pv_u_id',$raw_data['pv_u_id']);
    Cookie::set('name', $raw_data['name']);
    Cookie::set('img', $raw_data['img']);

    $usr = ORM::factory('usr')->where('pv_u_id', '=', $raw_data['pv_u_id'])->find();

    if ($usr->loaded())
    {
      $session->set('u_id',$usr->id);
      $usr->name = $raw_data['name'];
      $usr->img = $raw_data['img'];
//       $usr->date = date("Ymd", time());
      $usr->save();
      
      
      $status = ORM::factory('status')->where('pet_id', '=', $usr->pet_id)->find();
//       $status->date = date("Ymd", time());
      $status->name = $raw_data['name'];
      $status->save();

      $this->request->redirect('/'.$raw_data['lang'].'/main/ ');
    }
    else
    {
      $pet_id = ORM::factory('pet')->getnextval();
      $pet = ORM::factory('pet');
      $pet->level = 1;
      $pet->id = $pet_id;
      $pet->save();

      $status = ORM::factory('status');
      $status->level = 1;
      $status->food = 3;
      $status->manpuku = 1;
      $status->pet_id = $pet_id;
//       $status->date = date("Y-m-d", time());
      $status->name = $raw_data['name'];
      $status->pv_u_id = $raw_data['pv_u_id'];
      $status->save();

      $u_id = ORM::factory('usr')->getnextval();
      $usr->pv_u_id = $raw_data['pv_u_id'];
      $usr->pet_id = $pet_id;
      $usr->name = $raw_data['name'];
      $usr->img = $raw_data['img'];
//       $usr->date = date("Y-m-d", time());
      $usr->id = $u_id;
      $usr->save();
      $session->set('u_id',$u_id);

      $this->request->redirect('/'.$raw_data['lang'].'/main/start/ ');
    }
  }
  public function logout()
  {
    Session::instance()->destroy();
    $domain = new Model_Domain;    
 	  $this->request->redirect($domain->users.'/en/in/users/logout/');
  }

}
//end