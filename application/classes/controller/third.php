<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_Third extends Controller_Template {
	public function action_index()
  {
    $slash = substr($_SERVER["REQUEST_URI"], -1);
    if ($slash != "/") $this->request->redirect($_SERVER["REQUEST_URI"]."/ ");
    $this->session = Session::instance();
    $this->lang = $this->request->param('lang');
		if (!$this->session->get('pv_u_id')) $this->request->redirect('/'.$this->lang.'/home/ ');
    
    $usr = ORM::factory('usr')->where('pv_u_id', '=', $this->session->get('pv_u_id'))->find();
    $pet = ORM::factory('pet')->where('id', '=', $usr->pet_id)->find();
    if ($pet->level < 50)
    {
      $level = new Model_Stg1;
    } 
    elseif ($pet->level < 100)
    {
      $level = new Model_Stg2;
    } 
    
    $level->pet = $pet;
    $level->one = $this->request->param('one');
    $level->lang = $this->lang;
    $level->session = $this->session;
    $level->jump();

    $this->template = $level->template;

    $promo = ORM::factory('promo')->where('lang', '=', $this->lang)->find_all();
    $this->template->pr_tpl = View::factory('/eto/pr_tpl');
    $this->template->pr_tpl->promo = $promo;

  }
}
//end