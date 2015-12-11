<?php
//通用的控制器
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller{
	//自动执行的方法，判断是否通过登录跳转
	public function _initialize() {
		if ( !isset( $_SESSION['user_id'] ) || !isset( $_SESSION['user_category'] ) ) {
			$this->redirect( 'Home/Index/login_page' );
		}
	}
}
?>