<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends CommonController {
	public function homepage(){
	$this->news = M('news_new')->where('flag != 1')->order('rand()')->limit(1)->select();
	$this->display();
    }

    public function postdata($news_id=""){
    	$news = M('news_new'); 
		$data['label_1'] = I('post.checkbox_1');
		$data['label_2'] = I('post.checkbox_2');
		$data['label_3'] = I('post.checkbox_3');
		$data['label_4'] = I('post.checkbox_4');
		$data['label_5'] = 'false';
		$data['label_6'] = I('post.checkbox_6');
		$data['label_7'] = I('post.checkbox_7');
		$data['flag'] = 1;
		$data['user_id'] = session('user_id');
		$result = $news->where( array( 'id' => $news_id ) )->data($data)->save();
		if ($result) {
			$this->ajaxReturn(1);
		} else {
			$this->ajaxReturn(0);
		}
    }
}
