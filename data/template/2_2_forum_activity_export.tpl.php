<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<?php echo $activity['class'];?>: <?php echo $thread['subject'];?><?php echo "\n";; ?>��ʼʱ��: <?php if($activity['starttimeto']) { ?><?php echo $activity['starttimefrom'];?> �� <?php echo $activity['starttimeto'];?> �̶�<?php } else { ?><?php echo $activity['starttimefrom'];?><?php } echo "\n";; ?>��ص�: <?php echo $activity['place'];?><?php echo "\n";; if($activity['cost']) { ?>
ÿ�˻���: <?php echo $activity['cost'];?> Ԫ<?php echo "\n";; } ?>
�Ա�: <?php if($activity['gender'] == 1) { ?>��<?php } elseif($activity['gender'] == 2) { ?>Ů<?php } else { ?>����<?php } echo "\n";; if($activity['expiration']) { ?>������ֹ����: <?php echo $activity['expiration'];?><?php } echo "\n";; ?>�ѱ�������: <?php echo $applynumbers;?> ��<?php echo "\n\n";; ?>�����: <?php echo $activity['message'];?><?php echo "\n\n";; ?>������,����,<?php if($activity['cost']) { ?>ÿ�˻���,<?php } ?>����ʱ��,״̬<?php echo $ufield;?><?php echo "\n";; if(is_array($applylist)) foreach($applylist as $apply) { if(!empty($apply['appusername']) && $apply['uid'] == 40269021) { ?><?php echo $apply['appusername'];?><?php } elseif(!empty($apply['wechatusername']) && $apply['uid'] == 40269021) { ?><?php echo $apply['wechatusername'];?><?php } else { ?><?php echo $apply['username'];?><?php } ?>,<?php echo $apply['message'];?>,<?php if($activity['cost']) { if($apply['payment'] >= 0) { ?><?php echo $apply['payment'];?> Ԫ<?php } else { ?>�Ը�<?php } } ?>,<?php echo $apply['dateline'];?>,<?php if($apply['verified']) { ?>�����μ�<?php } else { ?>��δ���<?php } if($apply['fielddata']) { ?><?php echo $apply['fielddata'];?><?php } echo "\n";; } ?>