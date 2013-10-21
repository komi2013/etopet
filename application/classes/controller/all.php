<?php defined('SYSPATH') OR die('No direct access allowed.');
abstract class Controller_All extends Controller_Template {
//   public function __construct()
	public function all()
	{
// 		parent::tpl();
//     echo 'test';
    $slash = substr($_SERVER["REQUEST_URI"], -1);
    if ($slash != "/") $this->request->redirect($_SERVER["REQUEST_URI"]."/ ");
    $this->session = Session::instance();
    $this->pv_u_id = $this->session->get('pv_u_id');
    $this->session->set('posted', 1);
		$this->template = View::factory('eto/template');
  	View::bind_global('page_title', $this->page_title);
		$this->lang = $this->request->param('lang');
		I18n::lang($this->lang);
    $this->enqu_id = $this->request->param('one');
    $promo = ORM::factory('promo')->where('lang', '=', $this->lang)->find_all();
    $this->template->pr_tpl = View::factory('/eto/pr_tpl');
    $this->template->pr_tpl->promo = $promo;
  }
}