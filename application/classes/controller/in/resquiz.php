<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_In_Resquiz extends Controller_Template {
	public function action_index()
	{
    $this->lang = $this->request->param('lang');
		$domain = new Model_Domain;
		$api = new Model_Api;
    $api->receive_data = $this->request->param('one');
    $api->salt_key = $domain->quiz_key;
		$raw_data = $api->receive();
    if (!$raw_data['pv_u_id']) die('you do not login yet');
//     echo Debug::vars($raw_data);


    $usr = ORM::factory('usr')->where('pv_u_id', '=', $raw_data['pv_u_id'])->find();
    $pet = ORM::factory('pet')->where('id', '=', $usr->pet_id)->find();
//     if (!$pet->loaded()) $this->request->redirect('/'.$this->lang.'/main/start/ ');
    if ($pet->level < 10)
    {
      $level = new Model_Stg1;
    }
    elseif ($pet->level < 20)
    {
      $level = new Model_Lv1to3;
    } 
    
    $level->pet = $pet;
    $level->raw_data = $raw_data;
    $level->lang = $this->lang;
//     $level->session = $this->session;
    $level->resquiz();

    $this->template = $level->template;

	}
}
//end