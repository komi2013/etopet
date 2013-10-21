<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_TeamMsg extends ORM {

protected $_table_name = 'team_msg';
// protected $_primary_key = 'u_id';
// public $team_id = '';
  public function rules()
  {
    return array(
      'msg' => array(
        array('not_empty'),
        array('max_length', array(':value', 30)),
      ),
    );
  }

  public function new_monster()
  {
    $query = "delete from team_msg where team_id = '".$this->team_id."'";
    DB::query(null,DB::expr($query))->execute();
    $query = "insert into team_msg (team_id, msg) values ('".$this->team_id."','new monster')";
    DB::query(null,DB::expr($query))->execute();

  }



}