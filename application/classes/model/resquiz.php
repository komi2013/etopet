<?php defined('SYSPATH') or die('No direct access allowed.');
class Model_ResQuiz extends ORM {
  protected $_table_name = 'res_quiz';
//   public function save()
//   {
//     parent::save();
//     if ($this->saved())
//     {
//       $usr = ORM::factory('usr')->where('pv_u_id', '=', $this->pv_u_id)->find();
//       $pet = ORM::factory('pet')->where('id', '=', $usr->pet_id)->find();
//       if ($pet->level < 10)
//       {
//         $level = new Model_Lv1;
//       }
//       elseif ($pet->level < 20)
//       {
//         $level = new Model_Lv10;
//       } 
//       
//       $level->pet = $pet;
//       $level->condition = $this->condition;
//       $level->pv_u_id = $this->pv_u_id;
//       $level->maker = $this->maker;
//       $level->resquiz();
//     }
//   }

}