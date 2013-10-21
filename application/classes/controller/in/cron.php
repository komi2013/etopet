<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_In_Cron extends Controller {
	public function action_index()
	{
    $func = $this->request->param('one');
    $this->$func();
	}
	public function chteam()
	{
    if ($_SERVER["REMOTE_ADDR"] == $_SERVER['SERVER_ADDR'])
    {
      $this->lang = $this->request->param('lang');
      $usr = ORM::factory('team')->change_team();
    }
    else
    {
      die('fail');
    }
  }
	public function test1()
	{
    echo Debug::vars($_SERVER["REMOTE_ADDR"]);
    echo Debug::vars($_SERVER['SERVER_ADDR']);
  } 
}
//end