<?php
namespace Admin\Controller;
use Think\Controller;
class StudentController extends Controller {
	public function showlist() {
		$model = M('student');
		$class_id = I('param.class_id', 1);
		$where = array('class_id' => $class_id);
		$student_info = $model->where($where)->select();
		$this->assign('class_id',$class_id);
		$this->assign('student_info',$student_info);
		$major_info = D('major')->relation(true)->select();
		$this->assign('major_info',$major_info);
		$this->display();
	}
	public function add() {
		$class_id = I('get.class_id');
		if (IS_POST) {
			$model = M('student');
			$model->create();
			if ($model->add()) {
				$this->success('学生添加成功，正在跳转，请稍后！',U("showList?class_id={$class_id}"));
				return;
			}
			$this->error('学生添加失败，请重新输入!');
			return;
		}
		$major_info = D('major')->relation(true)->select();
		$this->assign('major_info',$major_info);
		$this->assign('class_id',$class_id);
		$this->display();
	}
	public function update() {
		$model = M('student');
		$where = array(
				'student_id' => I('get.student_id'),
		);
		if (IS_POST) {
			$student_info = $model->create();
			if ($model->save() !==false) {
				$this->success('学生信息更新成功，正在跳转，请稍候！',
						U("showList?class_id={$student_info['class_id']}"));
				return;
			}
			$this->error('学生信息更新失败，请重新输入！');
			return;
		}
		$student_info = $model->where($where)->find();
		if(!isset($student_info)){
			$this->error('查询的学生信息不存在，请重新选择！');
			return;
		}
		$major_info = D('major')->relation(true)->select();
		$this->assign('student_info',$student_info);
		$this->assign('major_info',$major_info);
		$this->display();
	}
	public function delete() {
		$model = M('student');
		$where = array(
				'student_id' => I('get.student_id'),
		);
		$class_id = I('class_id');
		$res = $model->where($where)->delete();
		if ($res === false) {
			$this->error('删除失败，正在返回，请稍后！');
			return;
		}elseif ($res === 0) {
			$this->error('要删除的学生信息不存在，请重新选择！');
			return;
		}
		$this->success('删除成功，正在跳转，请稍后！',U("showList?class_id={$class_id}"));
		return;
	}
	
}