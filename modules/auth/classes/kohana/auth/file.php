<?php defined('SYSPATH') or die('No direct access allowed.');
class Kohana_Auth_File extends Auth {

	protected $_users;
	public function __construct($config = array())
	{
		parent::__construct($config);
		$this->_users = Arr::get($config, 'users', array());
	}
	protected function _login($username, $password, $remember)
	{
//		echo Debug::vars($password);
//		if (is_string($password))
//		{
			$password = $this->hash($password);
//		}
		//echo Debug::vars($password);
		
		$users = ORM::factory('users')->where('email', '=', $username)->where('password', '=', $password)->find();
		
		
		//if (isset($this->_users[$username]) AND $this->_users[$username] === $password)
		if ($users->loaded())
		{
			return $this->complete_login($username);
			echo 'success';
		}
		return FALSE;
	}
	public function force_login($username)
	{
		return $this->complete_login($username);
	}
	public function password($username)
	{
		return Arr::get($this->_users, $username, FALSE);
	}
	public function check_password($password)
	{
		$username = $this->get_user();

		if ($username === FALSE)
		{
			return FALSE;
		}

		return ($password === $this->password($username));
	}
	public function add($email,$passwd,$account)
	{
		$passwd = $this->hash($passwd);
		//hash_password($password)
		//$passwd = $this->ecrypt->encode($passwd);
		//$email = "'".$email."'";
		//$passwd = "'".$passwd."'";
		//$sql='INSERT INTO users("email", "passwd") VALUES ('.$email.', '.$passwd.' )';
		$query = DB::insert('users', array('email', 'password', 'name'))->values(array($email, $passwd, $account));
		//$query = DB::query(Database::INSERT, $sql);
		echo Debug::vars($query);
		$query->execute();
	}

} // End Auth File