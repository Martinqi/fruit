<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/10 0010
 * Time: 4:58
 */

class login extends indexMain{
    function info(){
        $this->smarty->display("hyylogininfo.html");
    }
    function log(){
        $this->smarty->display("hyylogin.html");
    }
    function reg(){
        $this->smarty->display("hyyreg.html");
    }
    function phone(){
        $this->smarty->display("hyyphonelogin.html");
    }
    public function phoneCheck(){
        //初始化必填
        $options['accountsid']='d8671aa4a9ee4321fc496ac1ccb8f125';
        $options['token']='dcd00d8cb91bfdf606c7004e542d66d2';
//初始化 $options必填
        $ucpass = new Ucpaas($options);
//短信验证码（模板短信）,默认以65个汉字（同65个英文）为一条（可容纳字数受您应用名称占用字符影响），超过长度短信平台将会自动分割为多条发送。分割后的多条短信将按照具体占用条数计费。
        $appId = "62800da4c7a846dca9ed9d0627a868bf";
        $to =$_POST['phone'];
        $templateId = "85555";
        $param=mt_rand(1000,9999);
        $ucpass->templateSMS($appId,$to,$templateId,$param);
        echo $param;
        $this->session->set("param",$param);

    }
    public function phoneCheckagin(){
        $yanzheng=$_POST['yanzheng'];
        $phonenum=$_POST['phone'];
        $param=$this->session->get("param");
        if($yanzheng==$param){
            echo "ok";
            $db=new db("member");
            $result=$db->select();
            foreach ($result as $v){
                if($v["phonenum"]==$phonenum){
                    $this->session->set("hyylogin","yes");
                    $this->session->set("mname",$v["mname"]);
                    $this->session->set("mid",$v["mid"]);
                }
            }
        }else{
            echo "no";
        }
    }
    public function code(){
        $code=new code();
        $code->fonturl="static/font/georgiai.ttf";
        $code->output();
        $code->getstr();
    }

    function regcheck(){
        if($_POST["code"]!==$this->session->get("code")){
            echo "验证码错误";
            exit;
        }
        $mname=$_POST["mname"];
        if(empty($mname)){
            echo "用户名不能为空";
            exit;
        }
        $phonenum=$_POST["phonenum"];
        if(empty($phonenum)){
            echo "手机号不能为空";
            exit;
        }
        $db=new db("member");
        $result=$db->where("mname='{$mname}'")->select();
        if(count($result)>0){
            echo "用户名存在";
            exit;
        }
        $mpass=$_POST["mpass"];
        if(empty($mpass)){
            echo "密码不能为空";
            exit;
        }
        $mpass=md5($mpass);
        if($db->insert("mname='{$mname}',mpass='{$mpass}',phonenum='$phonenum'")){
            echo "ok";
            exit;
        }else{
            echo "no";
        }
    }
    function indexlogin(){
        $mname=$_POST['mname'];
        $db=new db("member");
        $result=$db->where("mname='{$mname}'")->select();
        if(count($result)>0){
            echo "aaa";
        }
    }
    function logincheck(){
        $mname=$_POST["mname"];
        if(empty($mname)){
            echo "用户不能为空";
            exit;
        }
        $mpass=$_POST["mpass"];
        if(empty($mpass)){
            echo "密码不能为空";
            exit;
        }
        $db=new db("member");
        $result=$db->select();
        foreach ($result as $v){
            if($v["mname"]==$mname){
                if($v["mpass"]==md5($mpass)){
                    $this->session->set("hyylogin","yes");
                    $this->session->set("mname",$v["mname"]);
                    $this->session->set("mid",$v["mid"]);
                    echo "ok";
                    exit();
                }
            }
        }
        echo "用户名或密码有误";
    }

    function logout(){
        $this->session->clear();
        header("location:index.php?m=index&f=mypage&a=add");
    }

    function edit(){
        $db=new db("member");
        $mid=$this->session->get("mid");
        $arr=$db->where("mid=$mid")->select();
        $this->smarty->assign("arr",$arr);
        $this->smarty->display("zcy-change.html");
    }

}