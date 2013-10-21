<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Status extends ORM {

protected $_table_name = 'status';
protected $_primary_key = 'u_id';

	public function getnextval()
	{
		$sql = "select nextval('pet_id_seq')";
		$query = DB::query(Database::SELECT, $sql);
		$res = $query->execute();
		return $res['nextval']['nextval'];
// 		return $newid;
	}

}