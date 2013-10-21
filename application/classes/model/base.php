<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Base extends ORM {

public $_table_name = 'team';
public $_primary_key = 'u_id';
public $_object_name;

// public $_as_object;
// public $team_id = 0;
//   public function rules()
//   {
//     return array(
//       'msg' => array(
//         array('not_empty'),
//         array('max_length', array(':value', 30)),
//       ),
//     );
//   }


}