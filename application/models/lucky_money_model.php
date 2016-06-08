<?php
/**
 * Created by PhpStorm.
 * User: wxsz
 * Date: 2016/6/8
 * Time: 10:18
 */


class Lucky_money_model extends  CI_Model{
    function  __construct()
    {
        parent::__construct();
    }


    /**
     *
     */
    function  getAllLuckyMoney(){
        
        $query = $this->db->query("SELECT * FROM lucky_money");
        if ($query->num_rows()>0){
            return $query-> result();
        } else{
            return NULL;
        }
    }


}