/**
 * Created by Administrator on 2017/5/12.
 */
window.onload=function(){
    "use strict";

    class  Upload{
        constructor(fileobj,imgobj,url,fun){
            this.fileobj=fileobj;
            this.imgobj=imgobj;
            this.size=20*1028*1028;
            this.type=['jpeg','png','gif','svg'];
            this.url=url;
            this.fun=fun;
        }
        change(){
            // alert(11);
            let that=this;
            this.fileobj.onchange=function(){
                // console.log(this.files);
                that.file=this.files[0];
                // console.log(that.file);
                //开启阅读
                let filereader=new FileReader();
                filereader.readAsDataURL(that.file);
                //判断图片的格式/大小
                that.check();
                //阅读完成之后
                filereader.onload=function (e) {
                    that.imgobj.src=e.target.result;
                    that.upload();
                }
            }

        }

        check(){
            let that=this;
            if(this.file.size>this.size){
                alert('图片过大');
                return;
            }
            if(!this.file.type.includes(this.file.name.split('.')[1])){
                // alert('图片的格式不对');
                // console.log(this.file.name);
            }
        }

        upload(){
           let that=this;
           // 实例化一个ajax
           let ajax=new XMLHttpRequest();
           let formdata=new FormData();
           formdata.append('img',this.file);
           //侦测ajax传输是否完成
           ajax.onload=function (e) {
               that.fun(ajax.responseText);
               // console.log(ajax.responseText);
           }
           //开启ajax
           ajax.open('post',this.url,true);
           // 发送ajax
           ajax.send(formdata);
        }

    }
    let file=document.querySelector('.file');
    let img=document.querySelector('#img');
    let form=document.querySelector('.form');

    let obj=new Upload(file,img,'index.php?m=index&f=uploadimg&a=add',function (text) {
        // console.log(text)
        form.value=text;
    });
    obj.change();


}

