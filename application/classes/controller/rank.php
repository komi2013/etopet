<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_Rank extends Controller_Template {
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
    $stage->lang = $this->lang;
    $stage->session = $this->session;

    $one = $this->request->param('one'); // score or turn
    $stage->$one();
    View::bind_global('page_title', $this->page_title);
    $this->page_title = 'rank';
    $this->template = $stage->template;

//     $promo = ORM::factory('promo')->where('lang', '=', $this->lang)->find_all();
//     $this->template->pr_tpl = View::factory('/eto/pr_tpl');
//     $this->template->pr_tpl->promo = $promo;

  }
}
//end