<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_Foo extends Controller_Template {

	public function action_index()
	{
    echo 'foo';
//     parent::all();
//     $this->page_title = __('ETO pet');
//     $this->template->content = View::factory('home/'.$this->lang);
//     
//     if ($this->request->param('one') == 'trial')
//     {
//       $this->template->content = View::factory('home/trial_'.$this->lang);
//     }
//     
//     $this->template->content->err_msg = Cookie::get('err_msg');
//     Cookie::set('err_msg', '');
//     $this->template->content->lang = $this->lang;
	}
  public function test1()
  {
    echo 'test1';
  }

}
//end