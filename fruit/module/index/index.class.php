<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/9 0009
 * Time: 9:28
 */
class index extends indexMain{
    function init(){
        $this->smarty->display("zjl-spy.html");
    }
    function main(){
        $db=new db("content");
        $banner=$db->where("posid=4")->select();
        $this->smarty->assign("banner",$banner);
        $lunbo=$db->where("posid=5")->select();
        $this->smarty->assign("lunbo",$lunbo);
        $result=$db->where("posid=1")->select();
        $this->smarty->assign("result",$result);
//        var_dump($banner);
        $this->smarty->display("index.html");
    }
}