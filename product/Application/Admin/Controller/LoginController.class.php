<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {

	public function index() {
		$user_login = session('user_login',$name);
		if($user_login){
			$this->redirect('admin/index/index');
		}

		if(IS_POST){

			$name = I('name');
			$password = I('password');

			$user = M('users')->where(array('user_login'=>$name))->find();
	
			if(!$user){
				$this->error("用户不存在");
			}
			if(md5($password) !== 'ea8df69e73902ceb6774c611bbc78a9b'){
				$this->error("密码错误");
			}else{
				session('user_login',$name);
				$this->success('登录成功',U('admin/index/index'));
				exit;
			}
			
		}

		$this->display();

	}

	public function logout(){
		session('user_login',null);
		$this->success('退出成功',U('admin/login/index'));
	}
	
}