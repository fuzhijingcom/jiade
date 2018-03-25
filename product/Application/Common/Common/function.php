<?php

    function getpic($id)  
    {  
       
        $pic = M('posts')->where(array('post_parent'=>$id,'post_type'=>'attachment'))->field('id,guid')->select();
  
        $c = count($pic);
        if((int)$c == 0){
            return "http://www.liandoutrading.com/product/Public/images/no.jpg";
        }

        return $pic['0']['guid'];
        
    }  
  
    