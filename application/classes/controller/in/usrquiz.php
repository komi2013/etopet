<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_In_UsrQuiz extends Controller {
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
    $api->salt_key = $domain->quiz_key;
		$raw_data = $api->receive();
    Session::instance()->set('pv_u_id',$raw_data['pv_u_id']);
    Cookie::set('name', $raw_data['name']);
    Cookie::set('img', $raw_data['img']);

    $usr = ORM::factory('usr')->where('pv_u_id', '=', $raw_data['pv_u_id'])->find();

    if ($usr->loaded())
    {
      $usr->name = $raw_data['name'];
      $usr->img = $raw_data['img'];
      $usr->date = date("Ymd", time());
      $usr->save();

      $status = ORM::factory('status')->where('pet_id', '=', $usr->pet_id)->find();
      $status->date = date("Ymd", time());
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
      $status->food = 1;
      $status->manpuku = 1;
      $status->pet_id = $pet_id;
      $status->date = date("Ymd", time());
      $status->name = $raw_data['name'];
      $status->pv_u_id = $raw_data['pv_u_id'];
      $status->save();

      $usr->pv_u_id = $raw_data['pv_u_id'];
      $usr->pet_id = $pet_id;
      $usr->name = $raw_data['name'];
      $usr->img = $raw_data['img'];
      $usr->date = date("Ymd", time());
      $usr->save();

      $this->request->redirect('/'.$raw_data['lang'].'/main/start/ ');
    }

  }
}
//end