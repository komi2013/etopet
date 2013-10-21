<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_In_Tmpusr extends Controller {
	public function action_index()
  {
  	$this->lang = $this->request->param('lang');
    $func = $this->request->param('one');
    $this->$func();
  }
  public function register()
  {
  	$post1 = Validation::factory($_POST);
  	$post1
  	->rule('name', 'not_empty')
  	->rule('name', 'max_length', array(':value', '30'))
  	;
  	if (!$post1->check())
    {
  		$results = $post1->errors($this->lang);
      $err = '';
      foreach ($results as $d)
      {
        Cookie::set('err_msg',$d);
        $this->request->redirect('/'.$this->lang.'/home/ ');
      }
    }
    
    $pet_id = ORM::factory('pet')->getnextval();
    $pet = ORM::factory('pet');
    $pet->level = 1;
    $pet->id = $pet_id;
    $pet->save();

    $status = ORM::factory('status');
    $status->pet_id = $pet_id;
    $status->level = 1;
    $status->food = 1;
    $status->manpuku = 1;
    $status->pet_id = $pet_id;
//     $status->name = $_POST['name'];
    $status->save();

    $u_id = ORM::factory('usr')->getnextval();
    $usr = ORM::factory('usr');
    $usr->name = $_POST['name'];
    $usr->pet_id = $pet_id;
    $usr->id = $u_id;
    $usr->save();
    
    Session::instance()->set('u_id',$u_id);
    Cookie::set('name', $_POST['name']);
    $this->request->redirect('/'.$this->lang.'/main/start/ ');

  }
  public function logout()
  {
    Session::instance()->destroy();
    $domain = new Model_Domain;    
 	  $this->request->redirect($domain->users.'/en/in/users/logout/');
  }
	public function err_msg()
	{
    foreach ($this->message as $k => $d)
    {
      $this->err[$k] = $d;
    }
//     return json_encode($this->err);
  }

}
//end