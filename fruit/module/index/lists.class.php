<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/9 0009
 * Time: 10:22
 */
class lists extends indexMain{
    function add(){
        $db=new db("content");
        $result=$db->where("posid=5 or posid=1")->select();
        $this->smarty->assign("result",$result);
        $this->smarty->display("p-list.html");
    }
    function dapei(){
        $db=new db("messages");
        $result=$db->select();
        $this->smarty->assign("result",$result);
        $this->smarty->display("yzf-tese.html");
    }

}