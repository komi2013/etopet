<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_In_Game extends Controller {
	public function action_index()
	{
    $func = $this->request->param('one');
    $this->$func();
	}
	public function getscore()
	{
    $this->session = Session::instance();

    if ($this->session->get('score_pass') == $_POST['score_pass'])
    {
//       $this->session = Session::instance();
      $this->lang = $this->request->param('lang');
//   		if (!$this->session->get('pv_u_id')) $this->request->redirect('/'.$this->lang.'/home/ ');
      $team = ORM::factory('team')->where('u_id', '=', $this->session->get('u_id'))->find();
//       $pet = ORM::factory('pet')->where('id', '=', $usr->pet_id)->find();
      if ($team->monster_lv < 500)
      {
        $stage = new Model_Stg1in;
      } 
      elseif ($team->monster_lv < 1000)
      {
        $level = new Model_Stg2in;
      } 
      
//       $stage->pet = $pet;
      $stage->team = $team;
      $stage->one = $this->request->param('one');
      $stage->lang = $this->lang;
      $stage->session = $this->session;
      $stage->score = $_POST['score'];
      $stage->getscore();
//       $this->request->redirect('/'.$this->lang.'/main/ ');
    }
    else
    {
      die('fail');
    }
  }
	public function attack()
	{
    $this->session = Session::instance();

    if ($this->session->get('u_id'))
    {
      $this->lang = $this->request->param('lang');
      $usr = ORM::factory('usr')->where('id', '=', $this->session->get('u_id'))->find();
      if ($usr->stage < 4)
      {
        $level = new Model_Stg1in;
      } 
      elseif ($usr->stage < 100)
      {
        $level = new Model_Stg2in;
      } 
      $level->usr = $usr;
      $level->one = $this->request->param('one');
      $level->lang = $this->lang;
      $level->session = $this->session;
      $level->post = $_POST;
      $level->attack();
    }
    else
    {
//       die('fail');
      $level->res['code'] = 3;
    }
    echo json_encode($level->res);
  }

	public function checkscore()
	{
    echo 'score';
    echo $_SERVER["SERVER_NAME"]."</br>";
 		$one = $this->request->param('one');
 		$two = $this->request->param('two');
    Log::instance()->add(Log::NOTICE, $_SERVER["REMOTE_ADDR"].' ssid > '.$one.' score > '.$two);
    
    $this->session = Session::instance();
    $this->pv_u_id = $this->session->get('pv_u_id');  
  } 
	public function sketch()
	{
    $domain = new Model_Domain;
    $dir = $domain->dir;
//     $draw = ORM::factory('sketch')->where('u_id', '=', $this->team->u_id)->order_by('timestamp','DESC')->limit(1)->find();
//     $draw = ORM::factory('sketch')->where('u_id', '=', $this->usr->id)->find();
    $theme = $this->request->param('two') ?: 'first';
    $timestamp = date("Y-m-d H:i:s");
    $sketch = ORM::factory('sketch');
    $sketch->timestamp = $timestamp;
//     $sketch->edit = 0;
    $sketch->theme = $theme;
    $sketch->save();
    

    $fp = fopen($dir.'/fb-etopet/public/png/'.$theme.'/'.$timestamp.'.png','w');
//     $this->request->param('two');
    $chars = preg_split('/base64,/', $_POST['img'], -1, PREG_SPLIT_NO_EMPTY);
    echo Debug::vars($chars);
    fwrite($fp,base64_decode($chars[1]));
    fclose($fp);

  } 
	public function test2()
	{


  }
}
//end