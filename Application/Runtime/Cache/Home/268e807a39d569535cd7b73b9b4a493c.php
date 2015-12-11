<?php if (!defined('THINK_PATH')) exit();?><html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/public_security/Public/images/icon.png">
    <title>Signin Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link href="/public_security/Public/css/bootstrap.min.css" rel="stylesheet">
    <script src="/public_security/Public/js/jquery.min.js"></script>
</head>

<body>
    <div class="container" style="margin-top:150px">
        <form id="login" class="form-signin" style="max-width: 330px;padding: 15px;margin: 0 auto;">
            <h2 class="form-signin-heading" style="margin-bottom:20px">Please sign in</h2>
            <label for="inputUsername" class="sr-only">Username</label>
            <input type="username" id="username" class="form-control" placeholder="用户名" required="" autofocus="">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="password" class="form-control" placeholder="密码" required="">
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> 记住我
                </label>
            </div>
        </form>
        <div style="max-width: 330px;padding: 15px;margin: 0 auto;margin-top: -30px">
            <button onclick="login()" class="btn btn-lg btn-primary btn-block" type="submit">登 录</button>
            <hr>
            <a style="text-decoration:none" href="<?php echo U('Index/register_page');?>"><button class="btn btn-lg btn-success btn-block" type="submit">注 册</button></a>
        </div>
    </div>
</body>

</html>
<script type="text/javascript">
function login() {
    var post_data = {
        username: $('#username').val(),
        password: $('#password').val(),
    };
    $(".container").html('<center style="margin:50px"><h4>请稍后...</h4><div class="progress progress-striped active" style="width: 50%"><div class="progress-bar"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div></div></center>');
    $.ajax({
        type: "post",
        url: 'login',
        data: post_data,
        success: function(data) {
            if (data == 1) {
                setTimeout(window.location.assign("<?php echo U('User/homepage');?>"),6000);
            } else {
                setTimeout(alert("用户名或密码错误"),6000);
                window.location.assign("<?php echo U('Index/login_page');?>")
            }
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            console.log("Error:Ajax_Content_Load" + errorThrown);
            console.log("XMLHttpRequest.status:" + XMLHttpRequest.status);
            console.log("XMLHttpRequest.readyState:" + XMLHttpRequest.readyState);
            console.log("textStatus:" + textStatus);
        }
    });
}
</script>