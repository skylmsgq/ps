<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$this->users = M('news_new')->field('user_id,count(*),user_name,last_login_time')->group('user_id')->join('JOIN user ON user.id = news_new.user_id')->select();        
        $this->display();
    }

    public function login_page(){
    	$this->display();
    }

    public function register_page(){
    	$this->display();
    }

    public function login(){
    	//防止直接输入路径登录页面
		if ( !IS_POST ) halt( "页面不存在" );
		$username = I( 'username' );
		$password = I( 'password' , '', 'md5' );
		//查询数据库
		$user = M( 'user' )->where( array( 'user_name' => $username ) )->find();
		//判断用户名或密码是否错误
		if ( !$user || ( $user['pass_word'] != $password ) ) {
			$this->ajaxReturn( $password );//用户名或密码错误
		}
		//更新数据库中的本次登录时间和登录IP
		$current_login_time = date( 'Y-m-d H:i:s', time() );
		$current_login = array(
			'last_login_time' => $current_login_time,
			'last_login_ip' => get_client_ip(),
		);
		M( 'user' )->where(array('id'=>$user['id']))->save( $current_login );
		//存入session中
		session( 'user_id', $user['id'] );
		session( 'user_category', $user['user_category'] );
		session( 'user_name', $user['user_name'] );
		session( 'current_login_time', $current_login['last_login_time'] );
		session( 'current_login_ip', $current_login['last_login_ip'] );
		$this->ajaxReturn( 1 );
    }

    public function register(){

    	//防止直接输入路径登录页面
		if ( !IS_POST ) halt( "页面不存在" );
    	$username = I( 'username' );
    	$phonenumber = I( 'phonenumber' );
		$password = I( 'password' , '', 'md5' );
		$user = M( 'user' )->where( array( 'user_name' => $username ) )->find();
		if ( $user ){
			$this->ajaxReturn( 0 ); //用户名已存在
		}
		$data['user_name'] = $username;
		$data['phone_number'] = $phonenumber;
		$data['pass_word'] = $password;
		$data['user_category'] = 2;
		$data['last_login_time'] = date( 'Y-m-d H:i:s', time() );
		$data['last_login_ip'] = get_client_ip();
		$data['locked'] = 0;
		$user = M('user');
		$result = $user->add($data);
		if ($result){
			$this->ajaxReturn(1); //注册成功	
		} else{
			$this->ajaxReturn(2); //注册失败
		}
		
    }

    public function example(){
    	$this->news = M('news_new')->order('id desc')->where('flag = 1 and user_id = 1')->limit(60)->select();
        $this->display();
    }

    public function logout(){
		session_unset();
		session_destroy();
		session(null);
		header("Location: index");   
    	exit;
    }
}


