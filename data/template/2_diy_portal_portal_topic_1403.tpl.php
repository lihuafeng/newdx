<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>The North Face&reg; 2012��������ԽҰ��ս��</title>
</head>
<link rel="stylesheet" type="text/css" href="http://static.8264.com/oldcms/moban/zt/TNF1/style.css"/>
<body>


<div class="wai">
<div class="banner"></div>
<div class="jiaodian">
        	<div class="lun">
        		<div id="myFocus" class="mF_expo2010">
            		<div class="loading"><span></span></div><!--���뻭��-->
            			<ul class="pic"><!--�����б�-->
                            <li><a href="http://www.8264.com/viewnews-76058-page-1.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/TNF1/images/tiger3.jpg" /></a></li><!--alt������Ϊ����-->
                            <li><a href="http://bbs.8264.com/thread-1245781-1-1.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/TNF1/images/tiger2.jpg" /></a></li>
                            <li><a href="http://www.8264.com/viewnews-76079-page-1.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/TNF1/images/tiger1.jpg" /></a></li>
           			</ul>
        		</div>
                <script type="text/javascript">
var myFocus={
//Design By Koen @ 2010.7.x
//http://hi.baidu.com/koen_li
//koen_lee@qq.com
$:function(id){return document.getElementById(id);},
$$:function(tag,obj){return (typeof obj=='object'?obj:this.$(obj)).getElementsByTagName(tag);},
linear:function(t,b,c,d){return c*t/d + b;},
easeIn:function(t,b,c,d){return c*(t/=d)*t*t*t + b;},
easeOut:function(t,b,c,d){return -c*((t=t/d-1)*t*t*t - 1) + b;},
opa:function(obj,v){
if(v!=undefined) {v=v>100?100:(v<0?0:v); obj.style.filter = "alpha(opacity=" + v + ")"; obj.style.opacity = (v / 100);}
else return (document.all)?((obj.filters.alpha)?obj.filters.alpha.opacity:100):((obj.style.opacity)?obj.style.opacity*100:100);
},
move:function(obj,dir,val,type,spd,fn){
var t=0,b=parseInt(obj.style[dir])||0,c=val-b,d=spd||50,st=type||'linear',m=c>0?'ceil':'floor';
if(obj[dir+'timer']) clearInterval(obj[dir+'timer']);
obj[dir+'timer']=setInterval(function(){
if(t<d){obj.style[dir]=Math[m](myFocus[st](t++,b,c,d))+'px';}
else {clearInterval(obj[dir+'timer']);fn&&fn.call(myFocus);}
},10);return this;
},
fade:function(obj,type,spd,fn){
var o=this.opa(obj),m=spd||5;
if(o==0) obj.style.display='';
if(type=='out') m=-m;
if(obj.fadeTimer) clearInterval(obj.fadeTimer);
obj.fadeTimer=setInterval(function(){
o+=m;myFocus.opa(obj,o);
if(o<=0) obj.style.display='none';
if(o>=100||o<=0){clearInterval(obj.fadeTimer);fn&&fn.call(myFocus);}
},10);return this;
},
addList:function(obj,cla,arr){
var s=[],n=this.$$('li',this.$$('ul',obj)[0]).length,num=cla.length;
for(var j=0;j<num;j++){
s.push('<ul class='+cla[j]+'>');
for(var i=0;i<n;i++){s.push('<li>'+(cla[j]=='num'?(i+1):(cla[j]=='txt'?this.$$('li',obj)[i].innerHTML.replace(/\<img.*?\>/i,this.$$('img',obj)[i].alt):''))+'<span></span></li>')};
s.push('</ul>');
}; obj.innerHTML+=s.join('');
},
setting:function(par){//����DOM/�ĵ����ؾ�����ִ�е�����
if(window.attachEvent){window.attachEvent('onload',function(){myFocus[par.style](par)});}
����		else{window.addEventListener('load',function(){myFocus[par.style](par)},false);}
},
mF_expo2010:function(par){
var box=this.$(par.id),t=par.time*1000;
this.addList(box,['txt-bg','txt','num-bg','num']);
var pic=this.$$('ul',box)[0],txt=this.$$('ul',box)[2],num=this.$$('ul',box)[4],img=this.$$('li',pic),tip=this.$$('li',txt);
var H=tip[0].clientHeight+60;
var n=img.length;
var index=0;
for(var i=0;i<img.length;i++){this.opa(img[i],0); img[i].style.display='none'; tip[i].style.bottom=-H+'px'}
box.removeChild(this.$$('div',box)[0]);
this.fade(img[index],'in');
this.move(tip[index],'bottom',0,'easeOut',40)
this.$$('li',num)[index].className='current';
var run=function(idx){
myFocus.fade(img[index],'out');
myFocus.move(tip[index],'bottom',-H,'easeIn',10);
myFocus.$$('li',num)[index].className='';
if(index==n-1) index=-1;
var N=idx!=undefined?idx:index+1;
myFocus.fade(img[N],'in');
myFocus.move(tip[N],'bottom',0,'easeOut',40);
myFocus.$$('li',num)[N].className='current';
index=N;
}
var auto=setInterval(function(){run()},t);
for (var j=0;j<n;j++){
this.$$('li',num)[j].j=j;
this.$$('li',num)[j].onclick=function(){run(this.j)}
this.$$('li',num)[j].onmouseover=function(){if(!this.className) this.className = 'hover';}
this.$$('li',num)[j].onmouseout=function(){if(this.className=='hover') this.className ='';}
}
box.onmouseover=function(){clearInterval(auto);}
    	box.onmouseout=function(){auto=setInterval(function(){run()},t);}
}
}
myFocus.setting({style:'mF_expo2010',id:'myFocus',time:2});//styleΪ�����ʽ��idΪ����ͼID��timeΪÿ֡���ʱ��(��) 
</script>
</div>
            <div class="jiaodian1">
<div class="jiaodian_t">
                	<span>�����ע</span>
                    <em style="display:none"><a href="#" target="_blank">����>></a></em>
                </div>
                <div class="jiaodianw">
                                                        <a href="http://www.8264.com/viewnews-76079-page-1.html" target="_blank">
                            <h3>TNF100 ������"����"��ҫ�ٹ�������

</h3></a>
                            <p>
                            ��Ϊ��һ�βμӴ������µ�&ldquo;����&rdquo;��Kamiսʤ��ȥ�����µ�����ھ�������ͱ��й����ѳ�Ϊ"�Ͻ�"�������棬����˱������µĹھ��������˷ֱ����˵ڶ��͵�������
  </p>
                </div>
                <div class="jiaodianw" style="border-bottom:none;">
                		
                            <a href="http://bbs.8264.com/thread-1245781-1-1.html" target="_blank">
                            <h3>TNF 100 ʮ�������ֳ�����

</h3></a>

<p>
8264Ѷ 12�������100���Ｐ50����˫��ͽ��������ʼ֮����Ľ�2012��TheNorthFace100ԽҰ��ս��10���50���������Ŀ��ʮ����ˮ��ӵ�ƽ̨��ʽ���ܡ�</p>
                </div>
            </div>
            <div class="jiaodian2">
<div class="jiaodian_t" style="width:230px;">
                	<span>TNF 100 ʱ���</span>
                    <em style="display:none"><a href="#" target="_blank">����>></a></em>
                </div>
                <div class="log"><a href="#" target="_blank"> <img src="http://static.8264.com/oldcms/moban/zt/TNF1/images/logo.jpg" /></a></div>
                <div class="jiaodian2w">
                    	<h4>TNF 100 ʱ�䰲��</h4>
                        <p>
                        ʱ�䣺2012��5��12��<br />
�ص㣺����<br />
���⣺�ܳ���������Ұ��· <br />
                    </p>
                </div>
            </div>
        </div>
        <div class="mian">
        	<div class="mianl">
<div class="mianl_t">
                	<span>The North Face �������˶�Ա</span>
                    <em><a href="http://www.thenorthface.com.cn/catalog/sc-brand/dean-karnazes.html
" target="_blank">����>></a></em>
                </div>
                <div class="mianl_js">
                		<div class="mianl_jst">
                			<a><img src="http://static.8264.com/oldcms/moban/zt/TNF1/images/tiger22.jpg" /></a></div>
                        <div class="mianl_jsw">
                        	The North Face<br />
��Ϊ���ʻ���֪��Ʒ�ƣ�ӵ��ǿ����˶�Ա�Ŷӡ����а�����ɽ�˶�Ա�Ŷӡ������˶�Ա�Ŷӡ���ѩ�˶�Ա�Ŷ��Լ��������˶�Ա�Ŷӵȡ�����The North Face 100������Ҳӿ�ֳ�������רҵ��ҵ����������˶�Ա���磺100KM Ů����ھ������桢�������Ǿ������ŵȡ�
                        </div>
                </div>
                <div style="height:15px; display:inline;"></div>
                <div class="mianl_js">
                		<div class="mianl_jst">
                			<a href="http://www.thenorthface.com.cn/catalog/sc-brand/dean-karnazes.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/TNF1/images/tiger5.jpg" /></a></div>
                <div class="mianl_jsw">
                        	������Diane Van Deren<br />
               	  ���޳����˶�Ա�����缶���������˶�Ա����100Ӣ��ԽҰ�ܣ���ѩ�����ܣ��ٵ�lditarod����������......Dianeһ�δοͷ�����Ӧ�Ը�����ս�����������ԣ�������˫�ȴ��������뷨����������Ӯ��ȡ�óɹ�������ϧÿһ������յ��ߵ�˲�䡱��ÿһλ����һ�£�����ð�ղ���������ð�ջ�����ˣ������������ĵĻ�顣</div>
                </div>
                <div style="height:15px; display:inline;"></div>
                <div class="mianl_js">
                		<div class="mianl_jst">
                			<a href="#" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/TNF1/images/tiger6.jpg" /></a></div>
                        <div class="mianl_jsw">
                        	������������<br />
�����˶�����ʼ��38�꣬������ڸ������������ºͻ����˶�����ȡ�úóɼ�����2009��The North Face100 ��������ս��Ů����ھ���ʼ�����߳����Լ���������֮·��2011���ٴ�The North Face100 ��������ս������վ�������Ů�����Ǿ���ͬ��8�£���UTMB�����ʷ������ܱ���CCC����98��������У���1800������������ӱ������
                        </div>
                </div>
                <div style="height:15px; display:inline;"></div>
                <div class="mianl_js" style="border-bottom:none;">
                		<div class="mianl_jst">
                			<a href="http://www.thenorthface.com.cn/catalog/sc-brand/conrad-anker.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/TNF1/images/tiger7.jpg" /></a></div>
                        <div class="mianl_jsw">
                        	������������<br />
�Ƚ�ϲ��������ս���������ʱϲ�����������ɣ������ѧ���ת�Ƶ���������һ��Ŀ�ϣ���Ϊ��˵�ܲ��ܸ����������֡���2009��ٰ��The North Face100 ��������ս������վ�У�������һƥ�����ɱ���ĺ��������ɻ��������ڶ���������2009����¼��� The North Face100 ��������ս���л�ùھ���
                        </div>
                </div>
                <div style="height:15px; display:inline;"></div>
                          
            </div>
            <div class="mianr">
            		<div class="mianr_1">
<div class="mianr_t">
                			<span>������Ѷ</span>
                    		<em style="display:none"><a href="#" target="_blank">����>></a></em>
                		</div>
                        <ul>
                        <li><a href="http://www.8264.com/viewnews-76075-page-1.html" target="_blank">.TNF100��������ԽҰ��ս�������Ļ</a></li>
                        <li><a href="http://www.8264.com/viewnews-76079-page-1.html" target="_blank">.TNF100������"����"��ҫ�ٹ�������</a></li>
                          <li><a href="http://www.8264.com/viewnews-76058-page-1.html" target="_blank">.TheNorthFace100ԽҰ��ս��ͼƬ����</a></li>
                          <li><a href="http://www.8264.com/viewnews-76053-page-1.html" target="_blank">.TNF100ԽҰ��ս�������賿��ʽ����</a></li>
                          <li><a href="http://u.8264.com/home-space-uid-50811-do-blog-id-401274.html" target="_blank">.The North Face �˶�Ա�����</a></li>

                            <li><a href="http://u.8264.com/home-space-uid-50811-do-blog-id-401151.html" target="_blank">.The North Face "ȥҰ"��������</a></li>
                        </ul>
                    </div>
                    <div class="mianr_2">
<div class="mianr_t">
                			<span>�ٹ�����ս��ȫ·��ͼ</span>
                    		<em style="display:none"><a href="#" target="_blank">����>></a></em>
                		</div>
                        <div class="mianr_2tu">
                        	<a href="http://www.thenorthface100.com.cn/download/TNF100_All%20Map.jpg" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/TNF1/images/tiger4.jpg" /></a></div> 
                        <div class="mianr_2wen">
                            <p>
                           
&nbsp;&nbsp;&nbsp;&nbsp;�������Χ����ӹ�س��ǡ�ʮ����ˮ���ܱߡ���ɽ����ɭ�ֹ�԰��������Ȼ�羰���ȱ����в�ƽ���ڲ��ֵ�·��������ɽ�أ�


                            </p>
                        </div>      
                    </div>
            </div>
            
        </div>
        <div class="zongb">
        	<div class="title">
                <span>The North Face 100 2012��������ԽҰ��ս����·ͼ</span>
                <em><a href="http://www.thenorthface100.com.cn/macth.php?cid=38" target="_blank">����>></a></em>
            </div>
            <div class="tuw">
            	<a href="http://www.thenorthface100.com.cn/download/TNF100_50KM.jpg" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/TNF1/images/tiger8.jpg" /><br /><br />
            	50����·��ͼ</a>
        </div>
<div class="tuw">
            	<a href="http://www.thenorthface100.com.cn/download/TNF100_100KM.jpg" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/TNF1/images/tiger43.jpg" /><br /><br />
            	100������·ͼ</a>
        </div>
<div class="tuw">
            	<a href="http://www.thenorthface100.com.cn/download/TNF100_10KM.jpg" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/TNF1/images/tiger10.jpg" /><br /><br />
            	10������·ͼ</a>
        </div>
<div class="tuw">
            	<a href="http://www.thenorthface100.com.cn/download/TNF100_ct50km.jpg" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/TNF1/images/tiger21.jpg" /><br /><br />
            	˫��ͽ����·ͼ</a>
            </div>
        </div>
        <div class="waituw" style="height:370px;">
        	<div class="title">
                <span>The North Face 100 2012 ����������ͼ��</span>
                <em><a href="http://bbs.8264.com/thread-1245781-1-1.html" target="_blank">����>></a></em>
            </div>
<div class="tuw1">
            	<a><img src="http://static.8264.com/oldcms/moban/zt/TNF1/images/tiger11.jpg" /><br /><br /></a>
            </div>
<div class="tuw1">
            	<a><img src="http://static.8264.com/oldcms/moban/zt/TNF1/images/tiger12.jpg" /><br /><br /></a>
            </div>
<div class="tuw1">
            	<a><img src="http://static.8264.com/oldcms/moban/zt/TNF1/images/tiger13.jpg" /><br /><br /></a>
            </div>
<div class="tuw1">
            	<a><img src="http://static.8264.com/oldcms/moban/zt/TNF1/images/tiger14.jpg" /><br /><br /></a>
            </div>
<div class="tuw1">
            	<a><img src="http://static.8264.com/oldcms/moban/zt/TNF1/images/tiger15.jpg" /><br /><br /></a>
            </div>
            			<div class="tuw1">
            	<a><img src="http://static.8264.com/oldcms/moban/zt/TNF1/images/tiger16.jpg" /><br /><br /></a>
            </div>
<div class="tuw1">
            	<a><img src="http://static.8264.com/oldcms/moban/zt/TNF1/images/tiger17.jpg" /><br /><br /></a>
            </div>
<div class="tuw1">
            	<a><img src="http://static.8264.com/oldcms/moban/zt/TNF1/images/tiger18.jpg" /><br /><br /></a>
            </div>
<div class="tuw1">
            	<a><img src="http://static.8264.com/oldcms/moban/zt/TNF1/images/tiger19.jpg" /><br /><br /></a>
            </div>
<div class="tuw1">
            	<a><img src="http://static.8264.com/oldcms/moban/zt/TNF1/images/tiger20.jpg" /><br /><br /></a>
            </div>
        </div>
<div class="waituw" style="height:350px;">
        	<div class="title">
                <span>The North Face 100 2011�ɽ�ɽ50Ӣ�������ܻع�</span>
                <em><a href="http://bbs.8264.com/forum-redirect-goto-findpost-ptid-1071029-pid-16121460-fromuid-34626185.html" target="_blank">����>></a></em>
    </div>
<div class="tuw1">
            	<a><img src="http://static.8264.com/oldcms/moban/zt/TNF1/images/tiger23.jpg" /><br /><br /> </a>
            </div>
<div class="tuw1">
            	<a><img src="http://static.8264.com/oldcms/moban/zt/TNF1/images/tiger24.jpg" /><br /><br /> </a>
            </div>
<div class="tuw1">
            	<a><img src="http://static.8264.com/oldcms/moban/zt/TNF1/images/tiger25.jpg" /><br /><br /> </a>
            </div>
<div class="tuw1">
            	<a><img src="http://static.8264.com/oldcms/moban/zt/TNF1/images/tiger26.jpg" /><br /><br /> </a>
            </div>
<div class="tuw1">
            	<a><img src="http://static.8264.com/oldcms/moban/zt/TNF1/images/tiger27.jpg" /><br /><br /> </a>
            </div>
            			<div class="tuw1">
            	<a><img src="http://static.8264.com/oldcms/moban/zt/TNF1/images/tiger28.jpg" /><br /><br /> </a>
            </div>
<div class="tuw1">
            	<a><img src="http://static.8264.com/oldcms/moban/zt/TNF1/images/tiger29.jpg" /><br /><br /> </a>
            </div>
<div class="tuw1">
            	<a><img src="http://static.8264.com/oldcms/moban/zt/TNF1/images/tiger30.jpg" /><br /><br /> </a>
            </div>
<div class="tuw1">
            	<a><img src="http://static.8264.com/oldcms/moban/zt/TNF1/images/tiger31.jpg" /><br /><br /> </a>
            </div>
<div class="tuw1">
            	<a><img src="http://static.8264.com/oldcms/moban/zt/TNF1/images/tiger32.jpg" /><br /><br /> </a>
            </div>
        </div>
<div class="waituw1">
        	<div class="title">
                <span>The North Face �����ܲ�Ʒ�Ƽ�</span>
                <em><a href="#" target="_blank">����>></a></em>
            </div>
<div class="tuw2">
            	<a href="http://www.thenorthface100.com.cn/tshirt.php?id=92&amp;cid=1" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/TNF1/images/tiger33.jpg" /><br /><br />Ů��v��������</a>
          </div>
<div class="tuw2">
            	<a href="http://www.thenorthface100.com.cn/tshirt.php?id=88&amp;cid=1" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/TNF1/images/tiger34.jpg" /><br /><br />�п����T��</a>
  </div>
<div class="tuw2">
            	<a href="http://www.thenorthface100.com.cn/tshirt.php?cid=15" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/TNF1/images/tiger35.jpg" /><br /><br />�п�����ͨ��̿�</a>
          </div>
<div class="tuw2">
            	<a href="http://www.thenorthface100.com.cn/tshirt.php?id=29&amp;cid=15" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/TNF1/images/tiger36.jpg" /><br /><br />
           	  Ů���˶��̿�</a>
          </div>
<div class="tuw2">
            	<a href="http://www.thenorthface100.com.cn/tshirt.php?cid=16" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/TNF1/images/tiger37.jpg" /><br /><br />�п�ԽҰ��Ь</a>
          </div>
<div class="tuw2">
            	<a href="http://www.thenorthface100.com.cn/tshirt.php?id=56&amp;cid=16" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/TNF1/images/tiger38.jpg" /><br /><br />Ů�������Ь</a>
          </div>
<div class="tuw2">
            	<a href="http://www.thenorthface100.com.cn/tshirt.php?cid=2" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/TNF1/images/tiger39.jpg" /><br /><br />������ר��ˮ����</a>
          </div>
<div class="tuw2">
            	<a href="http://www.thenorthface100.com.cn/tshirt.php?id=70&amp;cid=2" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/TNF1/images/tiger40.jpg" /><br /><br />�ռ�������ˮ����</a>
          </div>
<div class="tuw2">
            	<a href="http://www.thenorthface100.com.cn/tshirt.php?cid=9" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/TNF1/images/tiger41.jpg" /><br /><br />
           	  �п�͸����ˮ�п�</a>
          </div>
<div class="tuw2">
            	<a href="http://www.thenorthface100.com.cn/tshirt.php?id=38&amp;cid=9" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/TNF1/images/tiger42.jpg" /><br /><br />Ů����ˮ�ܲ��п�</a>
            </div>
        </div>
        
        <div class="bottom">
    	<a href="http://www.8264.com/template/8264/about/aboutus.htm" target="_blank">8264���</a>&nbsp;|&nbsp;<a href="http://www.8264.com/template/8264/about/ggservice/index.html" target="_blank" >������</a>&nbsp;|&nbsp;<a href="http://www.8264.com/zhuanti" target="_blank">�����ȵ�</a>&nbsp;|&nbsp;<a href="http://www.8264.com/template/8264/about/aboutus.htm" target="_blank">��ϵ��ʽ</a>&nbsp;|&nbsp;<a href="http://bbs.8264.com/plugin.php?id=drc_qqgroup:main" target="_blank" >QQȺ����</a>&nbsp;|&nbsp;<a href="http://www.8264.com/link/" target="_blank">������ַ��ȫ</a><br>
          �������ߣ�022-23708264&nbsp;|&nbsp;���棺022-23857291&nbsp;|&nbsp;��ַ������л�Է��ҵ԰����ï�Ƽ�԰C2��6��AB��Ԫ<br>
          <a href="http://bx.8264.com" target="_blank">�����з��գ�8264����������</a> <a href="http://bx.8264.com">���Ᵽ��</a><br>
          ���˽�ӡʲô�������� ������Ӱʲô�������ߣ���ӭ����ý��ת�����ǵ�ԭ����Ʒ[ת����ע������]��8264&nbsp;��Ȩ����   <a href="http://www.miibeian.gov.cn/" target="_blank">��ICP��05004140��-10</a>&nbsp;&nbsp;&nbsp;<a href="http://www.8264.com/template/8264/image/icp.jpg" target="_blank">ICP֤ ��B2-20110106</a>
    </div>
        
</div>
</body>
</html>