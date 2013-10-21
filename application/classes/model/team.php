<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Team extends ORM {

protected $_table_name = 'team';
protected $_primary_key = 'u_id';
public $team_id = 0;
//   public function rules()
//   {
//     return array(
//       'msg' => array(
//         array('not_empty'),
//         array('max_length', array(':value', 30)),
//       ),
//     );
//   }

  public function change_team()
  {
    $query = "
    update team a set id = b.id, damage = 0, date = CAST(CURRENT_TIMESTAMP AS timestamp(0)) 
    from (select u_id, 
    monster_lv || '_' || floor(Row_Number() over(PARTITION by monster_lv order by pet_lv desc)/4)+1 as id
    from team) 
    b where a.u_id=b.u_id
    ";
    DB::query(null,DB::expr($query))->execute();

    $query = "
    truncate table team_msg
    ";
    DB::query(null,DB::expr($query))->execute();

    $query = "
    insert into team_msg 
    (team_id, msg)
    select id, 'monster is refresh and team is changed every 5 days' from team group by id
    ";
    DB::query(null,DB::expr($query))->execute();
    
    echo 'success';
  }
  public function sum()
  {
    $query = "select sum(damage) from team where id = '".$this->team_id."'";
    $return = DB::query(null,DB::select($query))->execute();
    $query = DB::select('sum(damage)')->from->where('id',$this->team_id);
//     $return = DB::query(Database::SELECT, "select sum(damage) from team where id = '".$this->team_id."'");
    echo $return;
    return $return;
    
  }



}