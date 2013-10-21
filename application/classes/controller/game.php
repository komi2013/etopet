<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_Game extends Controller_All {

	public function action_index()
	{
    parent::all();
    $this->template = View::factory('eto/game');
    $func = $this->request->param('one');
    $this->$func();
	}
	public function touch()
	{
    $this->template->content = View::factory('game/touch');    
    View::bind_global('page_title', $this->page_title);
    $this->page_title = 'game';
    $this->template->content->lang = $this->lang;
    $this->template->pr_tpl = '';
  }
	public function rankscore()
	{
    $this->template->content = View::factory('game/rank');
    $rank = ORM::factory('rank')->where('type', '=', 'lv_1')->order_by('score','DESC')->limit('5')->find_all();
    $this->template->content->rank = $rank;
    $promo = ORM::factory('promo')->where('lang', '=', $this->lang)->find_all();
    $this->template->pr_tpl = View::factory('/eto/pr_tpl');
    $this->template->pr_tpl->promo = $promo;
  }
	public function puzzle()
	{
    for($z=0; $z<300; $z++) {
      $rand = rand(0, 5);
      
      $framequeue[$z] = $rand;
    }
    $this->template->content = View::factory('game/puzzle');    
    View::bind_global('page_title', $this->page_title);
    $this->page_title = 'puzzle';
    $this->template->content->lang = $this->lang;
    $this->template->pr_tpl = '';
    $this->template->content->framequeue = $framequeue;
  }
	public function fbwall()
	{
    $this->template->content = View::factory('game/fbwall');    
    View::bind_global('page_title', $this->page_title);
    $this->page_title = 'fbwall';
    $this->template->content->lang = $this->lang;
    $this->template->pr_tpl = '';
  }
	public function doodle()
	{
    $request = Request::factory('en/home');
    $response = Request::factory('en/home')->execute();
    $obj = new Controller_Home($request,$response);
//     $obj->width  = 5;
//     $obj->height = 10;
    echo $obj->triangle();
    
    
//     echo Debug::vars($team);
//     $orm->_table_name = 'team';
    $this->template->content = ''; 
  }
	public function sketch()
	{
    $theme = $this->request->param('two') ?: 'first';
    $sketch = ORM::factory('sketch')->where('theme', '=', $theme)->order_by('timestamp','DESC')->limit(1)->find();
    if (!$sketch->loaded())
    {
      $sketch->timestamp = '';
      $sketch->theme = '';
    }
    $this->template->content = View::factory('game/sketch');    
    View::bind_global('page_title', $this->page_title);
    $this->page_title = 'sketch';
    $this->template->content->lang = $this->lang;
    $this->template->content->sketch_bg = '/public/png/'.$sketch->theme.'/'.$sketch->timestamp.'.png';
    $this->template->pr_tpl = '';
  }
	public function movie()
	{
    $theme = $this->request->param('two') ?: 'first';
    $sketch = ORM::factory('sketch')->where('theme', '=', $theme)->order_by('timestamp','DESC')->find_all();
    $this->template->content = View::factory('game/movie');    
    View::bind_global('page_title', $this->page_title);
    $this->page_title = $theme;
    $this->template->content->lang = $this->lang;
    $arr_sketch = array();
    foreach ($sketch as $k => $d)
    {
      $arr_sketch[] = $d->timestamp;
    }
    
    $this->template->content->json_timestamp = json_encode($arr_sketch);
    $this->template->content->cnt_all = $k++;
    $this->template->pr_tpl = '';
  }

}
//end