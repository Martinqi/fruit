<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/9 0009
 * Time: 10:18
 */
class category extends indexMain{
    function add(){
        $db=new db("category");
        $result=$db->where("pid=43")->limit("0,1")->select();
        $this->smarty->assign("result",$result);
        $result2=$db->where("pid=43")->limit("1,4")->select();
        $this->smarty->assign("result2",$result2);
        $this->smarty->display("p-spfl.html");
    }
}