<?php

class uploadimg extends indexMain{
    function add(){
        $file=$_FILES['img'];

        //var_dump($file);
        $path='upload';
        if(!file_exists($path)){
            mkdir($path);
        }
        $name=explode('.',$file['name']);
        $name[0]=time();
        $namenew=$name[0].".".$name[1];

        if(is_uploaded_file($file['tmp_name'])){
            if(move_uploaded_file($file['tmp_name'],$path.'/'.$namenew)){
                echo 'upload'.'/'.$namenew;
            }
        }
    }

}












