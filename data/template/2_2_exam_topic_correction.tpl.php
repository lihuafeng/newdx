<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="gbk">
<title>������� - 8264�����˶�ѧУ</title>
<meta name="viewport" content="minimal-ui,width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="MobileOptimized" content="width">
<meta name="description" content="">
<meta name="author" content="">
<meta name="renderer" content="webkit"/>
<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
<title>�������</title>

<link rel="stylesheet" href="http://static.8264.com/static/css/exam/style.css?<?php echo VERHASH;?>">
<script src="http://static.8264.com/static/js/exam/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="http://static.8264.com/static/js/exam/swiper.min.js" type="text/javascript"></script>
<style>
    body,html{background:#f8f8fa;}
    .biaotititlebox{border-bottom: #ccc solid 1px; font-size:16px; padding:15px 20px 15px 20px; color: #666; margin-bottom: 5px;}
    .textareabox textarea{ width:100%; height:145px; resize: none; outline:none; border:#d1d1d1 solid 1px;  font-size: 15px; padding:15px;}
</style>
<script>
var _hmt = _hmt || [];
(function() {
var hm = document.createElement("script");
hm.src = "https://hm.baidu.com/hm.js?49299785f8cc72bacc96c9a5109227da";
var s = document.getElementsByTagName("script")[0];
s.parentNode.insertBefore(hm, s);
})();
</script>

</head>

<body>
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
<?php } else { if($phonetype == 'android') { ?>
<a href="<?php echo $back_url;?>" class="chat-back"></a>
<?php } } ?>
<div class="biaotititlebox">
    <?php echo $title;?>
</div>
<div class="page">
        <div class="textareabox"><textarea id="error_content" placeholder="��д��������"></textarea></div>
        <div class="submit">
            <button id="correction" class="button">�ύ</button>
        </div>
</div><?php include template('exam/topic/footer'); ?><script type="text/javascript">
jQuery(function(){
$("#correction").click(function() {
var error_content = $('#error_content').val();
        var qid = '<?php echo $qid;?>';
        if(error_content.length == 0){
            alert('����д������Ϣ');
            return false;
        }
        $.ajax({
            type: 'POST',
            url: '/exam.php?ctl=topic&act=correction',
            async:false,
            data: {'qid':qid,'error_content':error_content},
            dataType: 'json',
            success: function(data){
                if(data.code == 0){
                    alert('��л�������ṩ��Ϣ��');
                    history.go(-1);
                }else{
                    alert('����ʧ�ܣ�����ϵ����Ա');
                }
            }
        });
});


});
</script>
</body>
</html>