<?php
namespace Admin\Controller;
use Think\Controller;
class SittingController extends Controller {
	/*
     * 初始化操作
     */
    
    public function _initialize() {
		header("Content-type:text/html;charset=utf-8");
		
		$user_login = session('user_login');
		if(!$user_login){
			$this->redirect('admin/login/index');
			exit;
		}
		
	}

	public function index() {
		
		
		$this->display();
	}
	

	public function link(){

		$link = M('link')->select();
		$this->assign('link',$link);

		$this->display();
	}
	

	public function link_add(){

		if(IS_POST){
			$post = I('post.');
			if($post['name']==""){
				$this->error("名字不能为空");
			}
			if($post['url']==""){
				$this->error("链接不能为空");
			}
			if(substr($post['url'],0,4) !== 'http'){
				$this->error("链接URL错误");
				exit;
			}
			 M('link')->data($post)->add();
		
			$this->success("增加成功",U('admin/index/index'));
		}

	}
}