/**
 * Created by Administrator on 2017/7/6 0006.
 */
$(document).ready(function () {
    touch.on(".lose section:first-child","tap",function () {
        $(".bottom p").toggleClass("jizhu");
        $(".bottom").toggleClass("jizhu");
    });
    $("input").focus(function () {
        $(".loginword").css("display","none");
        $(".login").css("display","none");
        $(".loginbtn").css("margin-top","0.1rem");
    })

    $("#Form").validate({
        rules: {
            mname: {
                required:true,
            },
            mpass: {
                required: true,
                minlength: 6
            },
        },
        messages: {
            mname: {
                required: "用户名不能为空",
            },
            mpass: {
                required:"密码不能为空",
                minlength: $.validator.format("密码不能小于6个"),
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
    $(".loginbtn").on("touchend",function(){
        var that=$(this);
        var mname=$('.user').val();
        console.log(mname);
        $(this).css("background","green").html("<img src='static/img/loading_03.png'  style='width:2rem;margin-top: 0.2rem;' alt=''>");

        $.ajax({
            url:"index.php?m=index&f=login&a=indexlogin",
            type:"post",
            data:{mname:mname},
            success:function(e){
                if(e=="aaa"){
                    $('#mname-error').html("ok");
                    that.css("background","#fff").html("登录");
                }
            }
        })
    })
    $(".willLogin").on("touchstart",function(){
        var str=$(".loginBox").serialize();
        $.ajax({
            url:"index.php?m=index&f=login&a=logincheck",
            type:"post",
            data:str,
            success:function(e){
                if(e=="ok"){
                    location.href="index.php?m=index&f=mypage&a=add";
                }else{
                    alert(e);
                }
            }


        })
    })

});