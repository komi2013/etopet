<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_Home extends Controller_All {

public $width;
public $height;

	public function action_index()
	{
    parent::all();
    $this->page_title = __('ETO pet');
    $this->template->content = View::factory('home/'.$this->lang);
    
    if ($this->request->param('one') == 'trial')
    {
      $this->template->content = View::factory('home/trial_'.$this->lang);
    }
    
    $this->template->content->err_msg = Cookie::get('err_msg');
    Cookie::set('err_msg', '');
//     $this->template->content->lang = $this->lang;
	}
	public function triangle()
	{
        $base = new Model_Base;
//     echo $base->_table_name;
//     $base->_object_name = 'team_msg';
    $base->_table_name = $base->_object_name = 'team_msg';
    
    $base->_primary_key = 'id';
    
    $team = $base->find()->msg;

    return $team;
//     return $this->width * $this->height / 2;  
	}
  

}
//end