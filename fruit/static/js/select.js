window.onload=function () {
    var myScroll=new IScroll('#wrapper',{click:true,mouseWheel:true,});
    var lis=$(`.nav > ul >li`);
    var cons=$(`section > nav`);
    lis.each(function(index,value){
        value.addEventListener('touchend',function(){
            lis.removeClass('display');
            $(this).addClass('display')
            cons.removeClass()
            cons.eq(index).addClass(`first`);
            var mark=$(".mark")
            var myScroll=new IScroll('#wrapper',{click:true,mouseWheel:true,});
            mark.each(function(index,value){
                value.addEventListener('touchend',function(){
                    $(this).toggleClass(`act`)
                })
                var myScroll=new IScroll('#wrapper',{click:true,mouseWheel:true,});
            })
            $(".quanxuan")[0].addEventListener("touchend",function(){

                $(".dibu >div.markst").addClass('act')
                mark.addClass(`act`);
                var myScroll=new IScroll('#wrapper',{click:true,mouseWheel:true,});
            })
            var t=setInterval(function(){
                $('.mark').each(function(index,value){
                    if($(value).attr("class")=="mark"){
                        $(".dibu >div.markst").removeClass('act');
                    }
                })
            },1)

        })
    })
}


