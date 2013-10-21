<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Present extends ORM {

protected $_table_name = 'present';
// public $all;
	public function receive()
	{
    $status = ORM::factory('status')->where('u_id', '=', $this->u_id)->find();
    $present_all = ORM::factory('present')->where('receive', '=', 0)->where('u_id', '=', $this->u_id)->find_all();
    foreach ($present_all as $k => $d)
    {
      if ($d->item == 'food')
      {
        $status->food += $d->amount;
        $status->u_id = $this->u_id;
        $status->save();
        
        $present = ORM::factory('present')->where('id', '=', $d->id)->find();
        $present->id = $d->id;
        $present->receive = 1;
        $present->u_id = $this->u_id;
        $present->save();
      }
    }
//     DB::update('present')->set(array('receive' => 1))
//       ->where('u_id', '=', $this->u_id)->execute();
//     echo View::factory('profiler/stats');  

	}

}