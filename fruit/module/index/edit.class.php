<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/14 0014
 * Time: 23:56
 */
class edit extends indexMain{
    function change(){
        $photo=$_POST["photo"];
        $nicheng=$_POST["nicheng"];
        $phonenum=$_POST["phonenum"];
        $englishname=$_POST["englishname"];
        $jianjie=$_POST["jianjie"];
        $mid=$this->session->get("mid");
        $db=new db("member");
        $re=$db->where("mid=$mid")->setField("photo='$photo',nicheng='$nicheng',phonenum='$phonenum',englishname='$englishname',jianjie='$jianjie'")->update();
        if($re>0){
            echo "<script>location.href='index.php?m=index&f=mypage&a=add'</script>";
        }else{
            echo "<script>location.href='index.php?m=index&f=login&a=edit'</script>";
        }
    }
}