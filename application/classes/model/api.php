<?php defined('SYSPATH') or die('No direct script access.');
class Model_Api extends Model {
	public $https;
	public $salt_key;
	public $send_data;
	public $receive_data;
//   public $users_key = 'vtourtest';
  public function send()
  {
  	$json_data = json_encode($this->send_data);
//     $ecrypt =  new Encrypt($this->salt_key, MCRYPT_MODE_NOFB, MCRYPT_RIJNDAEL_128);
  	$ecrypt =  new Encrypt($this->salt_key, MCRYPT_MODE_NOFB, MCRYPT_RIJNDAEL_128);
  	$encry_data = $ecrypt->encode($json_data);
  	$url_safe_base64 = strtr($encry_data, "+/", "-_" );
//    	echo $this->https.$url_safe_base64.'/';
  	$send_res = @file_get_contents($this->https.$url_safe_base64.'/');
//   	echo Debug::vars($send_res);
  	return $send_res ?: 'false';
  }

  public function receive()
  {
  	//$url_safe_base64 = $this->request->param('two');
  	$base64_string = strtr($this->receive_data, "-_", "+/" );
  	$this->ecrypt =  new Encrypt($this->salt_key, MCRYPT_MODE_NOFB, MCRYPT_RIJNDAEL_128);
  	$json_data = $this->ecrypt->decode($base64_string);
  	$obj_data = json_decode($json_data);
  
  	if (!$obj_data)
  	{
  		header('HTTP/1.0 404 Not Found');
  		echo "<h1>404 Not Found</h1>";
  		echo "The page that you have requested could not be found.";
  		exit();
  	}
  	$arr_data = $this->obj2arr($obj_data);
  	return $arr_data;
  }
  public function obj2arr($obj)  
	{
		if ( !is_object($obj) ) return $obj;
		$arr = (array) $obj;
		foreach ( $arr as $k => $d )
		{
			$arr_data[$k] = $this->obj2arr($d);
		}
		return $arr_data;
	}


//array(3) (
//    "email" => string(20) "seijirok@infoseek.jp"
//    "password" => string(7) "1234567"
//    "account" => string(7) "komatsu"
//)

}

?>