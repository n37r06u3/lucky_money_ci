<?php
/**
 * Created by PhpStorm.
 * User: wxsz
 * Date: 2016/6/8
 * Time: 10:18
 */


class LuckyMoney extends  CI_Model{
    function  __construct()
    {
        parent::__construct();
    }

    function  getAllLuckyMoney(){
        
        $query = $this->db->query("SELECT * FROM lucky_money");
        if ($query->num_rows()>0){
            return $query-> result();
        } else{
            return NULL;
        }
    }

    function find_by_id($id){
       return $this -> db -> where('id' , $id) -> limit(1)->get('lucky_money')->row();
    }

    function  find(){
        return $this-> db-> get('lucky_money')->result();
    }
    function  add(){
        return $this-> db-> get('lucky_money')->result();
    }
}