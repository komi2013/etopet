<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_In_Team extends Controller {
	public function action_index()
	{
    $func = $this->request->param('one');
    $this->$func();
	}
	public function msg()
	{
    $this->session = Session::instance();
    $this->lang = $this->request->param('lang');
    $team = ORM::factory('team')->where('u_id', '=', $this->session->get('u_id'))->find();
    if ($team->monster_lv < 500)
    {
      $stage = new Model_Stg1in;
    } 
    elseif ($team->monster_lv < 1000)
    {
      $stage = new Model_Stg2in;
    } 
    $stage->team = $team;
    $stage->one = $this->request->param('one');
    $stage->lang = $this->lang;
    $stage->session = $this->session;
    $stage->post = $_POST;
    $stage->msg();
  }

}
//end