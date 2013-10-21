<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Usr extends ORM {

protected $_table_name = 'usr';
// protected $_primary_key = 'pv_u_id';

  public function rules()
  {
    return array(
      'name' => array(
          array('not_empty'),
          array('max_length', array(':value', 20)),
      ),
    );
  }

	public function getnextval()
	{
		$sql = "select nextval('usr_id_seq')";
		$query = DB::query(Database::SELECT, $sql);
		$res = $query->execute();
		return $res['nextval']['nextval'];
// 		return $newid;
	}


}