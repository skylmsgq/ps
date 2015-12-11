<?php if (!defined('THINK_PATH')) exit();?><html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="skylmsgq">
    <link rel="icon" href="../../favicon.ico">
    <title>新闻标注平台</title>
    <!-- Bootstrap core CSS -->
    <link href="/public_security/Public/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/public_security/Public/css/jumbotron.css">
</head>

<body>
    <header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="#" class="navbar-brand">上海交通大学公共安全应急中心</a>
    </div>
    <nav id="bs-navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo U('Index/login_page');?>">登录</a></li>
        <li><a href="<?php echo U('Index/register');?>">注册</a></li>
      </ul>
    </nav>
  </div>
</header>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1>新闻标注平台</h1>
            <br>
            <p>新闻标注平台由<strong>上海交通大学公共安全研究中心</strong>创立，搜集整理了国内外主流媒体新闻报道，面向公众以众包方式标注恐怖主义事件相关新闻报道，为每一条新闻报道打上专属标签，人人为建立中国恐怖主义事件数据库（CTD）贡献一份力量。</p>
            <p><a id="labeled" class="btn btn-primary btn-lg" href="http://omnilab.sjtu.edu.cn" role="button">关于 公共安全研究中心 »</a></p>
        </div>
    </div>
    <div class="container">
        <h1>关于标签</h1>
        <h4>我们给出以下几条原则（分别点击以查看详情）。</h4>
        <hr>
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <新闻背景> 标签
        </a>
      </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        凡是有关于事件发生的<strong>时间、地点、原因</strong>和<strong>内幕</strong>介绍的新闻条目，我们打上新闻背景标签。
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <事实陈述> 标签
        </a>
      </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        <strong>当下</strong>的事实，也包括<strong>后期</strong>被补充的事实，我们打上事实陈述标签。
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <事件演化> 标签
        </a>
      </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                        关于<strong>事实后期</strong>的变化，我们打上事件演化标签。
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFour">
                    <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          <各方态度> 标签
        </a>
      </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                    <div class="panel-body">
                        <strong>政府、团体组织、民间机构、社会人士</strong>对事件本身的<strong>判断观点、情绪、意向</strong>,我们打上各方态度标签。
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFive">
                    <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          <直接关联> 标签
        </a>
      </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                    <div class="panel-body">
                        与事件有直接关系，但又独立于事件外的新闻，我们打上直接关联标签。
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingSix">
                    <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
          <暂无关联> 标签
        </a>
      </h4>
                </div>
                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                    <div class="panel-body">
                        如果你找不到新闻与事件有什么关联的话，就只好打上暂无关联标签了。
                    </div>
                </div>
            </div>
        </div>
        <br>
        <h1>如果你还不是很明白</h1>
        <h4>请点击案例浏览按钮，查看专家已经标注的新闻案例。</h4>
        <hr>
        <div>
            <p><a id="labeled" class="btn btn-primary" style="width:400px" href="<?php echo U('Index/example');?>" role="button">案例浏览 »</a></p>
        </div>
        <br>
        <h1>反恐英雄榜</h1>
        <h4>对的，你没有看错，公共安全研究中心有一个反恐英雄榜。</h4>
        <hr>
        <div class="panel panel-primary">
            <!-- Default panel contents -->
            <div class="panel-heading">反恐英雄榜（20151210期）</div>
            <!-- Table -->
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br>
        <h1>加入我们</h1>
        <h4>点击注册按钮，拥有自己的反恐账号。</h4>
        <hr>
        <div>
            <p><a class="btn btn-primary" style="width:400px" href="<?php echo U('Index/register');?>" role="button">点击注册 »</a></p>
        </div>
        <div class="row" id="news">
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
                    <!-- <div class="added-label input-group">
                <input type="text" class="form-control" id="option6" placeholder="其他标签">
                <span class="input-group-btn">
                    <button class="btn btn-primary" id="submit" type="button" onclick="ajaxAction()">提交 »</button>
                </span>
            </div> -->
                </div><?php endforeach; endif; ?>
        </div>
        <br>
        <hr>
        <footer>
            <p>© 上海交通大学 OMNILab 2015-2016</p>
        </footer>
    </div>
    <!-- /container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/public_security/Public/js/jquery.min.js"></script>
    <script src="/public_security/Public/js/bootstrap.min.js"></script>
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
            // checkbox_5: document.getElementById('option5').checked,
            // checkbox_6: $("#option6").val()
    };
    $("#news").html('<center style="margin:50px"><h4>提交中...</h4><div class="progress progress-striped active" style="width: 50%"><div class="progress-bar"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div></div></center>');
    $.ajax({
        url: 'index.php/Home/Index/postdata?news_id=' + news_id,
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