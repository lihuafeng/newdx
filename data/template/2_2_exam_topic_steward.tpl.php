<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="gbk">
<title>�����ܼ� - 8264�����˶�ѧУ</title>
<meta name="viewport" content="minimal-ui,width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="MobileOptimized" content="width">
<meta name="description" content="">
<meta name="author" content="">
<meta name="renderer" content="webkit"/>
<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
<title>��ҳ</title>

<link rel="stylesheet" href="http://static.8264.com/static/css/exam/style.css?20170901">
<script src="http://static.8264.com/static/js/exam/jquery-1.9.1.min.js" type="text/javascript"></script>
    <style>
        body,html{ background-color: #f8f8f9; }
        .ewmboxxjbgimg{ padding:20% 0px 0px 0px; text-align: center;  }
        .ewmboxxjbgimg img{ width:50%; height:; }
        .sfxjbgimg img{ width: 100%; }

        .fontxjbg span{ font-size:20px; color: #333333; display: block; text-align: center; padding:7% 0px 3% 0px; }
        .fontxjbg em{ font-size: 14px; color: #999999; display: block;text-align: center; padding-bottom: 15%; }
    </style>
</head>

<body style="background: #f8f8f9;">
<!--ͷ����ʼ-->
<?php if($isWechat == 0) { ?>
<div class="header-content">
<div class="home-icons" style="display: none;">
<a href="http://www.8264.com/xuexiao/">��ҳ</a>
</div>
<div class="goback-icons">
<a href="http://www.8264.com/xuexiao/">����</a>
</div>
<div class="logo">
<a href="#">
<img src="http://static.8264.com/static/images/exam/logo.png" alt="">
</a>
</div>
</div>
<?php } if($phonetype == 'android') { ?>
<a href="<?php echo $back_url;?>" class="chat-back"></a>
<?php } ?>
<!--ͷ������-->
<div class="zixunbox">
    <div class="zixunbranner">
        <img src="http://static.8264.com/static/images/exam/zixunbg.jpg" alt="">
        <div class="zixunwembox"><img src="http://static.8264.com/static/images/exam/zixunewm.png" alt=""></div>
    </div>
    <div class="zixuntitle">�����ܼ�</div>
    <?php if($steward_zh) { ?>
    <div style="font-size:16px; color:#c49c56; text-align: center; padding:10px 0px 0px 0px;"><?php echo $steward_zh;?></div>
    <?php } ?>
    <div class="zixuntitlebg">
        1v1ר����ѯ����
    </div>
    <div class="zixunlistbox">
        <ul>
            <li><i>1</i>�۸������ѯ</li>
            <li><i>2</i>������Ŀ��ѯ</li>
            <li><i>3</i>��Ӧ�̶Խӷ���</li>
            <li><i>4</i>��ɱ����Խ�</li>
            <li><i>5</i>װ��ɸѡ����</li>
            <li><i>6</i>���߼�ʱ���</li>
        </ul>
    </div>
</div>

<div class="zixunbottom"><img src="http://static.8264.com/static/images/exam/zixunbottom.png" alt=""></div>
</body>
</html>