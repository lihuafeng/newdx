<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="gbk">
    <title>��ȡװ�� - 8264�����˶�ѧУ</title>
    <meta name="viewport" content="minimal-ui,width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="MobileOptimized" content="width">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="renderer" content="webkit"/>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
    <link rel="stylesheet" href="http://static.8264.com/static/css/exam/style.css?20170907">
    <script src="http://static.8264.com/static/js/exam/jquery-1.9.1.min.js" type="text/javascript"></script>
    <style>
        html,body{ background: #f8f8f9; }
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
<div class="zhuangbeibranner">
    <a href="#" target="_black">
        <img src="http://static.8264.com/static/images/exam/zhuangbeibranner.jpg">
        <span>1500Ԫ8264����װ����������</span>
    </a>
</div>
<div class="page bggray">
    <div class="zhuangbeiinfo">
        �������ɽ��1�������ⱳ��1����˯��1������ɫ�������
    </div>
    <form id="loginForm" class="mlogin" style="padding-top: 10px;<?php if($vip_status == 0 || $equipment_order == 1) { ?>display: none;<?php } ?>">
        <div class="field borderradius20 username">
            <div class="label username">��ϵ��</div>
            <div class="field-control">
                <input type="text" id="username" class="input-required" name="username" placeholder="��ϵ��">
            </div>
            <div class="icon-clear"></div>
        </div>
        <div class="field borderradius20 phone">
            <div class="label password">�ֻ���</div>
            <div class="field-control">
                <input type="text" id="phone" class="input-required" name="phone" placeholder="��׼ȷ��д�ֻ���">
            </div>
            <div class="icon-clear"></div>
        </div>
        <div class="field borderradius20 address">
            <div class="label dizhiicon">��ַ</div>
            <div class="field-control">
                <input type="text" id="address" class="input-required" name="address" placeholder="��׼ȷ��д�ջ���ַ">
            </div>
            <div class="icon-clear"></div>
        </div>
        <div class="tips" style="display:none;margin-bottom: 5px"><i class="icon-mark"></i>�û����Ѵ���</div>
    </form>
    <?php if($vip_status == 0) { ?>
    <br/>
    <br/>
    <a href="http://www.8264.com/xuexiao/user.html" class="uerlinkbutton" style="width: 100%;">��Ϊ��Ա</a>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <?php } else { ?>
        <?php if($equipment_order == 1) { ?>
    <br/>
    <br/>
    <br/>
            <a href="javascript:///" class="uerlinkbutton" style="width: 100%;">�Ѿ���ȡ</a>
        <?php } else { ?>
            <a href="javascript:///" class="uerlinkbutton" style="width: 100%;" onclick="validate();">�����ȡ</a>
        <?php } ?>
    <?php } ?>
</div><?php include template('exam/topic/footer'); include template('exam/topic/wechat_share'); ?><script type="text/javascript">
    function checkMobileState(){
        var phone = jQuery("#phone").val();
        phone = jQuery.trim(phone);

        if(phone == ''){
            r_error("�������ֻ���", 'tips', 'phone');
            return false;
        }

        if(!(/^1[3|4|5|7|8]\d{9}$/.test(phone))){
            r_error("��������ȷ�ֻ���", 'tips', 'phone');
            return false;
        }

        rm_error("tips", "tel");
        return phone;
    }
    function validate() {
        var username = jQuery("#username").val();
        username = jQuery.trim(username);
        if(username.match(/<|"/ig)) {
            r_error("��ϵ�˰��������ַ�", 'tips', 'username');
            return false;
        }else if(username.length == 0){
            r_error("����д��ϵ��", 'tips', 'username');
            return false;
        }
        rm_error("tips", "username");
        var phone = checkMobileState();
        if(!phone){
            return false;
        }
        var address = jQuery("#address").val();
        address = jQuery.trim(address);
        if(address.match(/<|"/ig)) {
            r_error("��ַ���������ַ�", 'tips', 'address');
            return false;
        }else if(address.length == 0){
            r_error("����д��ַ", 'tips', 'address');
            return false;
        }
        rm_error("tips", "address");

        $.ajax({
            type: 'POST',
            url: '/exam.php?ctl=topic&act=equipment_order',
            async:false,
            data: {address:address, phone:phone, username:username},
            dataType: 'json',
            success:function(data){
                console.log(data);
                if(data.code == 0){
                    alert('�ύ�ɹ�');
                    setTimeout(function(){
                        window.location.href = 'http://www.8264.com/xuexiao/user.html';
                    },1300);
                }else if(data.code == 1){
                    alert('ȱ�ٲ���');
                }else if(data.code == 2){
                    alert('���Ѿ��ύ����,�����ĵȴ�');
                }else if(data.code == 3){
                    alert('�ύʧ��,���Ժ�����');
                }else{
                    alert('�ֻ��Ÿ�ʽ����');
                }
            }
        });
        return false;
    }


    function r_error(msg, tipclass, errorclass){
        jQuery("."+tipclass).html("<i class='icon-mark'></i>"+msg).show();
        jQuery("."+errorclass).addClass("error");
    }
    function rm_error(tipclass, errorclass){
        jQuery("."+tipclass).html("").hide();
        jQuery("."+errorclass).removeClass("error");
    }
</script>
</body>
</html>