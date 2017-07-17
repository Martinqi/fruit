/**
 * Created by Administrator on 2017/7/14 0014.
 */
window.onload=function () {
    touch.on(".lose section:first-child","tap",function () {
        $(".bottom p").toggleClass("jizhu");
        $(".bottom").toggleClass("jizhu");
    });
    $("input").focus(function () {
        $(".login").css("display","none");
        $(".loginbtn").css("margin-top","0.1rem");
    })
    $(".tap").on("touchstart",function(){
        $(this).toggleClass("back");
    })

    $('.tap').on("touchstart",function(){
        $(this).html("60");
        let i = 60;
        let t = setInterval(function () {
            i--;
            $(".tap").html(i);
            if (i == 0) {
                $(".tap").html("获取验证码");
                clearInterval(t);
            }

        }, 1000);
        var val=$('.user').val();
        $.ajax({
            url:"index.php?m=index&f=login&a=phoneCheck",
            type:"post",
            data:{phone:val},
        })
    })
    $('.loginbtn').on("touchstart",function(){
        var yanzheng=$('input[name=yanzheng]').val();
        var val=$('.user').val();
        $.ajax({
            url:"index.php?m=index&f=login&a=phoneCheckagin",
            type:"post",
            data:{yanzheng:yanzheng,phone:val},
            success:function (e) {
                if(e=="ok"){
                    location.href="index.php?m=index&f=mypage&a=add";
                }else{
                    alert("验证码不正确");
                }
            }
        })

    })
}