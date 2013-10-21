<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_Main extends Controller_Template {
	public function action_index()
  {
    $slash = substr($_SERVER["REQUEST_URI"], -1);
    if ($slash != "/") $this->request->redirect($_SERVER["REQUEST_URI"]."/ ");
    $this->session = Session::instance();
    $this->lang = $this->request->param('lang');
		if (!$this->session->get('u_id')) $this->request->redirect('/'.$this->lang.'/home/ ');
    $team = ORM::factory('team')->where('u_id', '=', $this->session->get('u_id'))->find();
    if ($team->monster_lv < 500)
    {
      $stage = new Model_Stg1;
    } 
    elseif ($team->monster_lv < 1000)
    {
      $stage = new Model_Stg2;
    } 
    
    $stage->team = $team;
    $stage->one = $this->request->param('one');
    $stage->lang = $this->lang;
    $stage->session = $this->session;
    $stage->main();

    $this->template = $stage->template;

//     $promo = ORM::factory('promo')->where('lang', '=', $this->lang)->find_all();
//     $this->template->pr_tpl = View::factory('/eto/pr_tpl');
//     $this->template->pr_tpl->promo = $promo;

  }
}
//end