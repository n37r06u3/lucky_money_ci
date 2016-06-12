<?php
/**
 * Created by PhpStorm.
 * User: wxsz
 * Date: 2016/6/8
 * Time: 10:18
 */


class LuckyMoneyPackage extends  CI_Model{
    function  __construct()
    {
        parent::__construct();
    }



    function find_by_fk($id){
       return $this -> db -> where('lucky_money_id' , $id) ->get('lucky_money_package')->result();
    }
    function count($id){
        return $this -> db -> where('lucky_money_id' , $id) ->from('lucky_money_package')->count_all_results();
    }
    function count_amount($id){

        $query = $this->db->query("SELECT SUM(amount) as amount FROM lucky_money_package where lucky_money_id =".$id);
        if ($query->num_rows()>0){
            return $query-> result()[0]->amount;
        } else{
            return 0;
        }
    }
    function  find(){
        return $this-> db-> get('lucky_money_package')->result();
    }
    function  add(){
        return $this-> db-> get('lucky_money_package')->result();
    }
}