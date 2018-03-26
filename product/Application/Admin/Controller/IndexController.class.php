<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {

	public function index() {
		header("Content-type:text/html;charset=utf-8");


		$user_login = session('user_login');
		if(!$user_login){
			$this->redirect('admin/login/index');
			exit;
		}
		
		
		$this->display();
	}
	

	public function xuanze(){
		header("Content-type:text/html;charset=utf-8");

		$id = I('id');
		if(!$id){
			$this->error("ID不存在");
		}
		$sitting = M('sitting')->where(array('id'=>$id))->find();
		if(!$sitting){
			$this->error("首页不存在该模块");
		}

		$sitting_value = $sitting['sitting_value'];
	

		$con['ID'] = array('gt',2);
		$list = M('posts')->where(array('post_status'=>'publish'))->where($con)->field('id,post_author,post_date,post_date_gmt,post_title,post_excerpt,post_status,post_name,guid')->select();
		// dump($list);
		$this->assign('list',$list);


		$title = $sitting['sitting_name'];
		$this->assign('title',$title);

		$this->assign('id',$id);
		$this->display();

	} 
	

	public function xuanze_add(){

		
		if(IS_POST){
			$post = I('post.');

			$id = $post['id'];
			if(!$id){
				$this->error("ID不存在");
			}

			
			$k = array_keys($post);

			$c = count($k);

			if((int)$c!==9){
				$this->error("只能选8个");
			}

			for($i=1;$i<$c;$i++){
				$v = $k[$i];
				$vv = $vv.$v;
				if($i<$c-1){
					$vv = $vv.",";
				}
			}	

			 M('sitting')->where(array('id'=>$id))->save(array('sitting_value'=>$vv));
			
			$this->success("修改成功",U('admin/index/index'));

		}






	}
}