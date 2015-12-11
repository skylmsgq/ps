<?php
namespace Home\Controller;
use Think\Controller;
class LabeledController extends CommonController {
    public function index(){
    	$this->news = M('news_new')->order('id desc')->where(array('flag'=>1,'user_id'=>session('user_id')))->select();   
        $this->display();
    }

    public function postdata($news_id=""){
    	$news = M('news_new'); 
		$data['label_1'] = I('post.checkbox_1');
		$data['label_2'] = I('post.checkbox_2');
		$data['label_3'] = I('post.checkbox_3');
		$data['label_4'] = I('post.checkbox_4');
		$data['label_6'] = I('post.checkbox_6');
		$data['label_7'] = I('post.checkbox_7');
		$data['flag'] = 1;
		$result = $news->where( array( 'id' => $news_id ) )->data($data)->save();
		if ($result) {
			$this->ajaxReturn(1);
		} else {
			$this->ajaxReturn(0);
		}
    }
}