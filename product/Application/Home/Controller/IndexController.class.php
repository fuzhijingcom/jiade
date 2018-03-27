<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

        $title = M('sitting')->where(array('id'=>1))->getField('sitting_value');
        $this->assign('title',$title);


        //Recommended Products   2
        $Recommended = M('sitting')->where(array('id'=>2))->getField('sitting_value');
        $conRe['ID'] = array('in',$Recommended);
        $Recommended = M('posts')->where($conRe)->where(array('post_status'=>'publish'))->field('id,post_name,post_title,guid')->select();
        $this->assign('Recommended',$Recommended);


        $Sellingwell = M('sitting')->where(array('id'=>3))->getField('sitting_value');
        $conSe['ID'] = array('in',$Sellingwell);
        $Sellingwell = M('posts')->where($conSe)->where(array('post_status'=>'publish'))->field('id,post_name,post_title,guid')->select();
        $this->assign('Sellingwell',$Sellingwell);

        
        $Hot = M('sitting')->where(array('id'=>4))->getField('sitting_value');
        $conHot['ID'] = array('in',$Hot);
        $Hot = M('posts')->where($conHot)->where(array('post_status'=>'publish'))->field('id,post_name,post_title,guid')->select();
        $this->assign('Hot',$Hot);

        $link = M("link")->select();
        $this->assign('link',$link);

        $this->display();
    }
}