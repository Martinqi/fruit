/**
 * Created by Administrator on 2017/7/10 0010.
 */
$(document).ready(function () {

    $('.user').on("blur",function(){
        var mname=$('.user').val();
        $.ajax({
            url:"index.php?m=index&f=login&a=indexlogin",
            type:"post",
            data:{mname:mname},
            success:function(e){
                if(e=="aaa"){
                    $('#mname-error').html("用户名已存在");
                }
            }
        })
    })

    $(".input").validate({
        rules: {
            mname: {
                required:true,
            },
            mpass: {
                required: true,
                minlength: 6
            },
            mpass1: {
                required: true,
                equalTo:".mpass"
            },
        },
        messages: {
            mname: {
                required: "请输入用户名",
            },
            mpass: {
                required:"请输入密码",
                minlength: $.validator.format("密码不能小于6个"),
            },
            mpass1: {
                required:"不能为空",
                equalTo:"两次密码要一致",
            },
        },
        errorPlacement: function(error, element) {
            $('<div id="box">').html(error).insertAfter(element);
            error.css({'width':'1.9rem','text-align':'right','height':'0.26rem','color':'red',fontSize:'0.12rem',position:'absolute',left:'3rem',top:'0.35rem'});
        },
        success:function(val,element){
            $(val).html('ok').insertAfter(element);
        }
    });



$(".willReg").on("touchstart",function(){
    var str=$(".input").serialize();
    $.ajax({
        url:"index.php?m=index&f=login&a=regcheck",
        type:"post",
        data:str,
        success:function(e){
            console.log(e);
            if(e=="ok"){
                $(".input input").val("");
                location.href="index.php?m=index&f=login&a=log";
            }

        }
    })
})





})