var tipsnow = false;
var posonshow = false;
var maxnum = 50;

// 图片上传demo
jQuery(function() {
    var $ = jQuery,
        $list = $('#imgattachlist'),
        // 优化retina, 在retina下这个值是2
        ratio = window.devicePixelRatio || 1,

        // 缩略图大小
        thumbnailWidth = 100 * ratio,
        thumbnailHeight = 100 * ratio,

        // Web Uploader实例
        uploader;

    // 初始化Web Uploader
    uploader = WebUploader.create({

        // 自动上传。
        auto: true,

        // swf文件路径
        swf: 'http://static.8264.com/static/flash/webuploader.swf',

        // 文件接收服务端。
        server: $("#url_action").val(),

        // 选择文件的按钮。可选。
        // 内部根据当前运行是创建，可能是input元素，也可能是flash.
        pick: '#filePicker',
		
		threads: 1,

		fileNumLimit: maxnum,
		
		runtimeOrder: 'html5,flash',

        // 只允许选择文件，可选。
//        accept: {
//            title: 'Images',
//            extensions: 'gif,jpg,jpeg,bmp,png',
//            mimeTypes: 'image/jpg,image/jpeg,image/png,image/gif,image/bmp'
//        },
		
		formData: {
			policy: $("#url_policy").val(),
			signature: $("#url_signature").val()
		}
    });
	
    // 当有文件添加进来的时候
    uploader.on( 'fileQueued', function( file ) {
		$("#filePicker input").attr("disabled", true);
    });
	
	// 文件上传upyun以后，从upyun服务器获取返回值
	uploader.on('uploadAccept', function(obj, ret){
		if(ret.code == '200'){

			if(ret.mimetype.indexOf("image") >= 0){
				$('#table_img').clone().attr('id', 'attach_list_' + obj.file.id).appendTo('#attach_image_body').show()
					.find('#setconver').attr('id', 'setconver' + obj.file.id)
					.parent().parent().find('#setmconver').attr('id', 'setmconver' + obj.file.id);
			}else{
				$('#table_file').clone().attr('id', 'attach_list_' + obj.file.id).appendTo('#attach_file_body').show();
			}
			
			var catid = $("#catid").val();
			var editorid = $("editorid").val();
			var url = "/portal.php?mod=portalcp&ac=upload&aid=0&catid="+catid;
			$.ajax({
				type : 'POST',
				url : url,
				data : {'code':ret.code, 'filesize':ret.file_size, 'type':ret.mimetype, 'url':ret.url, 'filename':obj.file.name},
				dataType : 'json',
				async: false,
				success:function(result){
					if(result.flag == 1){
						var attachobj = $('#attach_list_' + obj.file.id);
						
						attachobj.attr('id', 'attach_list_'+result.attachid);

						if(result.isimage == 1){
							attachobj.find('.list_img a').attr('href', result.img_url);
							attachobj.find('.list_img img').attr('src', result.small_img_url).show();

							$('#setconver' + obj.file.id).attr('id', 'setconver'+result.attachid)
								.attr('onclick', 'setConver(\''+ result.setConver +'\')').parent().attr('for', 'setconver'+result.attachid);

							$('#setmconver' + obj.file.id).attr('id', 'setmconver'+result.attachid)
								.attr('onclick', 'setMConver(\''+ result.setMConver +'\')').parent().attr('for', 'setmconver'+result.attachid);
							
							attachobj.find('.insert_small').attr('onclick', 'insertImage(\''+ result.small_img_url +'\', \''+ result.img_url +'\')')
								.next().next().attr('onclick', 'insertImage(\''+ result.img_url +'\')');

							attachobj.find('.delete_img').attr('onclick', 'deleteAttach(\''+ result.attachid +'\', \''+ result.delete_url +'\')');
						}else{
							attachobj.find('.list_file a').html(result.filename).attr('href', 'portal.php?mod=attachment&id='+result.attachid);
							attachobj.find('.insert_file a').attr('onclick', 'insertFile(\''+ result.filename +'\', \'portal.php?mod=attachment&id='+ result.attachid +'\')')
								.next().next().attr('onclick', 'deleteAttach(\''+ result.attachid +'\', \'portal.php?mod=attachment&id='+ result.attachid +'&op=delete\')');
						}
						var attach_ids = $('#attach_ids').val();
						$('#attach_ids').val(attach_ids + ','+result.attachid);
					}
				}
			});		
			
		}
	});

    // 文件上传成功，给item添加成功class, 用样式标记上传成功。
    uploader.on( 'uploadSuccess', function( file ) {
        $( '#'+file.id ).addClass('upload-state-done');
    });

    // 文件上传失败，现实上传出错。
    uploader.on( 'uploadError', function( file, reason ) {
		// 修改了webuploader.js 6886-6889行

		var rea = eval("("+reason+")");
		$('.error_tips').append("<div>"+ file.name +" 上传失败！</div>")
		if(rea.message == 'authorization has expired'){
			alert("签名失效，请刷新页面后再上传图片。");
		}

		//通过upyun cdn检测工具，获取目标upyun的ip、用户ip、用户省份、用户网络运营商
		$.getJSON("http://pubstatic.b0.upaiyun.com/?_upnode&t="+(+new Date()), function(json) {
			// 将portalcp article form上传过程中出现的错误，记录到日志中
			var catid = $("#catid").val();
			var url = "/portal.php?mod=portalcp&ac=upload&op=upyunlog&catid="+catid;
			$.ajax({
				type : 'POST',
				url : url,
				data : {'flag':0 , 'reason':reason, 'upyun_ip':json.addr, 'user_ip':json.remote_addr, 'user_location':json.remote_addr_location},
				dataType : 'json',
				success:function(result){
					if(1){
						
					}
				}
			});

		});

		
    });

    // 完成上传完了，成功或者失败，先删除进度条。
    uploader.on( 'uploadComplete', function( file ) {
        $( '#'+file.id ).find('.progress').remove();
    });
	
	uploader.on( 'uploadFinished', function( file ) {
		$("#filePicker input").removeAttr("disabled");
    });

	// 当validate不通过时，会以派送错误事件的形式通知调用者。
	uploader.on('error', function( handler ) {
		
		if(handler == 'Q_EXCEED_NUM_LIMIT'){
			showDialog("当前最多只允许一次性添加 " + maxnum + " 张图片");
			$('#fwin_dialog_submit').click(function(){
				setTimeout(function(){tipsnow = false;}, 1000);
			})
		}
	});
});