<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_Cron_Tbl extends Controller {
	public function action_index()
	{
    $this->lang = $this->request->param('lang');
    $this->place = $this->request->param('two');
  	$this->session = Session::instance();
//   	$this->u_id = Session::instance()->get('u_id');
//     $this->u_id = '24';
// 
//   	if ($this->u_id == 0)
//   	{
//   		die('you must login');
//   	}
    $certify = ORM::factory('certify')->where('u_id', '=', $this->u_id)->where('place', '=', $this->place)->find();
  
    if ($certify->loaded())
    {
      die('you are already certified');
    }
    
    $message = array('you are certified'."\n".'you should guide with experience guide');
    $error = 0;
  	try
  	{
  		$certify->u_id = $this->u_id;
  		$certify->place = $this->place;
  		$certify->save();
    }
  	catch (ORM_Validation_Exception $e)
  	{
  		$message = $e->errors('models');
      ++$error;
  	}
    foreach ($message as $k => $d)
    {
    	$rowsrows = $d;
    	echo __($rowsrows);
    }
//     die();      
	}
}
//end