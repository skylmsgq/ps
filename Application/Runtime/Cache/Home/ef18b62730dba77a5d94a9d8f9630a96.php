<?php if (!defined('THINK_PATH')) exit();?><html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="skylmsgq">
    <link rel="icon" href="/public_security/Public/images/icon.png">
    <title>新闻标注平台</title>
    <!-- Bootstrap core CSS -->
    <link href="/public_security/Public/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/public_security/Public/css/homepage.css">
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo U('Index/index');?>">上海交通大学公共安全研究中心</a>
            </div>
            <nav id="bs-navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a>用户名：<?php echo (session('user_name')); ?></a></li>
                    <li><a href="<?php echo U('Index/logout');?>"><span class="glyphicon glyphicon-log-out"></span> 退出登录</a></li>
                </ul>
            </nav>
            <!--/.nav-collapse -->
        </div>
    </nav>
    <div class="container" style="margin-top:50px">
        <div class="page-header">
            <!-- <h1>请为以下新闻选择合适标签</h1> -->
            <h1>下课啦，明日再战吧。</h1>
        </div>
        <!-- <div class="row" id="news">
            <?php if(is_array($news)): foreach($news as $key=>$v): ?><div class="col-md-12">
                    <div class="thumbnail">
                        <div class="caption">
                            <a href="<?php echo ($v["url"]); ?>"><h2><?php echo ($v["title"]); ?></h2></a>
                            <p><strong>新闻来源：<?php echo ($v["author"]); ?></strong>，<strong><?php echo ($v["time"]); ?></strong></p>
                            <p id="abstract"><?php echo ($v["abstract"]); ?></p>
                        </div>
                    </div>
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-default">
                            <input type="checkbox" name="options" id="option1" autocomplete="off"> 新闻背景
                        </label>
                        <label class="btn btn-default">
                            <input type="checkbox" name="options" id="option2" autocomplete="off"> 事实陈述
                        </label>
                        <label class="btn btn-default">
                            <input type="checkbox" name="options" id="option3" autocomplete="off"> 各方态度
                        </label>
                        <label class="btn btn-default">
                            <input type="checkbox" name="options" id="option4" autocomplete="off"> 事件演化
                        </label>
                        <label class="btn btn-default">
                            <input type="checkbox" name="options" id="option6" autocomplete="off"> 直接关联
                        </label>
                        <label class="btn btn-default">
                            <input type="checkbox" name="options" id="option7" autocomplete="off"> 暂无关联
                        </label>
                        <button class="btn btn-primary" id="submit" type="button" onclick="ajaxAction()">提交 »</button>
                    </div>
                </div><?php endforeach; endif; ?>
        </div> -->
        <br>
        <div class="page-header">
            <h1>我已打过的标签</h1>
        </div>
        <div>
            <p><a class="btn btn-danger" style="width:400px" href="<?php echo U('Labeled/index');?>" role="button">浏览我已打过的标签 »</a></p>
        </div>
        <br>
        <hr>
        <footer>
            <p>© 上海交通大学 OMNILab 2015-2016</p>
        </footer>
    </div>
</body>

</html>
<script type="text/javascript">
function ajaxAction() {
    var news_id = <?php echo ($v["id"]); ?>;
    var label = {
        checkbox_1: document.getElementById('option1').checked,
        checkbox_2: document.getElementById('option2').checked,
        checkbox_3: document.getElementById('option3').checked,
        checkbox_4: document.getElementById('option4').checked,
        checkbox_6: document.getElementById('option6').checked,
        checkbox_7: document.getElementById('option7').checked
    };
    $("#news").html('<center style="margin:50px"><h4>提交中...</h4><div class="progress progress-striped active" style="width: 50%"><div class="progress-bar"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div></div></center>');
    $.ajax({
        url: 'postdata?news_id=' + news_id,
        data: label,
        type: 'post',
        dataType: 'text',
        success: function(data) {
            console.log(data);
            location.reload();
        }
    })
}
</script>
<script src="/public_security/Public/js/jquery.min.js"></script>
<script src="/public_security/Public/js/bootstrap.min.js"></script>