<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/9 0009
 * Time: 11:20
 */
class mypage extends indexMain{
    function add(){
        $login=$this->session->get("hyylogin");
        $this->smarty->assign("login",$login);
        if($this->session->get("hyylogin")!=null){
            $db=new db("member");
            $mid=$this->session->get("mid");
            $arr=$db->where("mid=$mid")->select();
            $this->smarty->assign("arr",$arr);
        }
        $this->smarty->display("hyymypage.html");
    }
}