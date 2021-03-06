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
    <script type="text/javascript" src="/public_security/Public/js/jquery.min.js"></script>
</head>

<body>
    <div class="container" style="margin-top:150px">
        <div class="panel panel-primary" style="margin:0 auto;width:600px">
            <!-- Default panel contents -->
            <div class="panel-heading" style="font-size:20px;">注 册</div>
            <div class="panel-body">
                <p>请准确填写以下信息并提交。</p>
                <hr>
                <form>
                    <div class="form-group">
                        <label for="InputUsername">用户名</label>
                        <input type="username" class="form-control" id="username" placeholder="用户名">
                    </div>
                    <div class="form-group">
                        <label for="InputPhonenumber">手机号</label>
                        <input type="phonenumber" class="form-control" id="phonenumber" placeholder="手机号">
                    </div>
                    <div class="form-group">
                        <label for="InputPassword">密码</label>
                        <input type="password" class="form-control" id="password" placeholder="密码">
                    </div>
                </form>
                <div style="padding-top:10px;width:100px;margin:0 auto">
                    <button type="submit" style="width:100px" onclick="reg()" class="btn btn-primary">提 交</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script type="text/javascript">
function reg() {
    var post_data = {
        username: $('#username').val(),
        phonenumber: $('#phonenumber').val(),
        password: $('#password').val(),
    };
    $(".container").html('<center style="margin:50px"><h4>请稍后...</h4><div class="progress progress-striped active" style="width: 50%"><div class="progress-bar"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div></div></center>');
    $.ajax({
        type: "post",
        url: 'register',
        data: post_data,
        success: function(data) {
            switch (data) {
                case (0):
                    setTimeout(alert("该用户名已存在"),6000);
                    window.location.assign("<?php echo U('Index/register_page');?>");
                    break;
                case (1):
                    alert("注册成功！");
                    setTimeout(window.location.assign("<?php echo U('Index/login_page');?>"),6000);
                    break;
                default:
                    setTimeout(alert("注册失败"),6000);
                    window.location.assign("<?php echo U('Index/register_page');?>");
                    break;
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