<?php
$title = '文件下载'; // 模块页标题，每个页面自定义
$page_path = dirname(dirname(__FILE__)); // 项目index的根目录
include $page_path.'/common/head.php';
include $page_path.'/common/nav.php';
?>
	<style>
		
	</style>

<!--开始-二级/三级页面内容-->
<div class="view-page detail-download" id="view-page">
	<section>
		<img src="<?=$file_url?>/static/img/detail-download-banner.png" data-img_name="detail-download-banner.png" alt="文件下载">
		<div class="width-1200-center">
			<div class="logo-image"><img src="<?=$file_url?>/static/img/detail-download-logo.png" data-img_name="detail-download-logo.png" alt="文件下载"></div>
			<div class="download-info">
				<div class="download-info-top">
					<div class="info-img">
						<img src="<?=$file_url?>/static/img/detail-download-pdf.png" data-img_name="detail-download-pdf.png" alt="文件下载">
					</div>
					<div class="info-name WordJustOneLine">xxxxxxxxxxxxx</div>
				</div>
				<div class="download-btn">点击下载</div>
			</div>
		</div>
	</section>
	<div class="black-bg">
		<div class="form-body">
			<div class="input-item input-name">
				<h1>姓名</h1>
				<input type="text">
			</div>
			<div class="input-item input-phone">
				<h1>电话</h1>
				<input type="text">
			</div>
			<div class="input-item input-check">
				<h1>验证码</h1>
				<input type="text">
				<div class="check-btn">获取验证码</div>
			</div>
			<h3 class="form-body-alert">填写信息立即下载链接</h3>
			<div class="download-up-btn">点击提交</div>
			<div class="black-bg-close"><img src="<?=$file_url?>/static/img/black-download-close.png" data-img_name="black-download-close.png" alt="文件下载"></div>
		</div>
		
		<div class="true-download">
			<div class="true-download-top">
				<div class="info-img">
					<img src="<?=$file_url?>/static/img/detail-download-pdf.png" data-img_name="detail-download-pdf.png" alt="文件下载">
				</div>
				<div class="info-name WordJustOneLine">xxxxxxxxxxxxx</div>
			</div>
			<a href="" target="_blank" class="true-download-btn"><i class="fa fa-upload"></i>立即下载</a>
		</div>
	</div>
	
</div>
<!--结束-二级/三级页面内容-->

<!--开始-页面js-->
<script>

</script>
<script>
	
    // 页面数据入口，如有动态数据渲染，请以此函数为调用作为开始
    function page_data_init(){
        console_log("开始渲染数据");
		let file_upload_id = all.getQueryString("file_upload_id")
		getThisFile(file_upload_id)
		geAllArea()
    }
	$(".form-body").click(function(event){
	    event.stopPropagation();//阻止事件冒泡即可
	})
	$(".true-download").click(function(event){
	    event.stopPropagation();//阻止事件冒泡即可
	})
	$('.download-btn').click(function(){
		$('.black-bg').slideDown(300)
		$('.input-name input').val('')
		$('.input-phone input').val('')
		$('.input-check input').val('')
	})
	$('.black-bg').click(function(){
		$('.black-bg').slideUp(300)
	})
	$('.black-bg-close').click(function(){
		$('.black-bg').slideUp(300)
	})
	//发送验证码 
	$('.check-btn').click(function(){
		let name = $('.input-name input').val()
		let phone = $('.input-phone input').val()
		if(name==''||name==null||name.length==0){
			all.notification({
				type:'error',
				text:'请填写您的姓名',
				timeout:3000
			})
			return false;
		}else if(phone==''||phone==null||phone.length==0){
			all.notification({
				type:'error',
				text:'请填写您的联系电话',
				timeout:3000
			})
			return false;
		}else{
			let isPhone = /^1(3|4|5|6|7|8|9)\d{9}$/;
			if(!isPhone.test(phone)){
				all.notification({
					type:'error',
					text:'对不起，您的手机号格式不正确，请检查',
					timeout:3000
				})
				return false;
			}else{
				// ajax
				let params = {
					method:'POST',//ajax请求方法
					data:{
						app_class:'web',
						user_token:window.token,
						resource:'pc_download',
						user_info:name+"#@资料下载页面",
						user_phone:phone
					},//ajax请求参数
					url:"<?=$api_url?>"+"app/check_user_phone",//ajax请求url
					successfn:function(res){//ajax请求成功的回调
						let jsonRes = $.parseJSON( res );
						if(jsonRes.state==1){
							// let params={
							// 	type:'success',
							// 	text:'恭喜您，报名成功',
							// 	timeout:2000
							// }
							// all.message(params)	
							all.notification({
								type:'success',
								text:'短信验证码已下发至您的手机，请注意查收',
								timeout:3000
							})
							
						}
					}
				}
				all.sendAjax(params)
			}
		}
	})
	//提交报名
	$('.download-up-btn').click(function(){
		let name = $('.input-name input').val()
		let phone = $('.input-phone input').val()
		let check = $('.input-check input').val()
		if(name==''||name==null||name.length==0){
			all.notification({
				type:'error',
				text:'请填写您的姓名',
				timeout:3000
			})
			return false;
		}else if(phone==''||phone==null||phone.length==0){
			all.notification({
				type:'error',
				text:'请填写您的联系电话',
				timeout:3000
			})
			return false;
		}else{
			let isPhone = /^1(3|4|5|6|7|8|9)\d{9}$/;
			if(!isPhone.test(phone)){
				all.notification({
					type:'error',
					text:'对不起，您的手机号格式不正确，请检查',
					timeout:3000
				})
				return false;
			}else{
				// ajax
				let params = {
					method:'POST',//ajax请求方法
					data:{
						app_class:'web',
						user_token:window.token,
						resource:'pc_download',
						name:name+"#@资料下载页面",
						phone:phone,
						code:check
						
					},//ajax请求参数
					url:"<?=$api_url?>"+"app/check_code_sms",//ajax请求url
					successfn:function(res){//ajax请求成功的回调
						let jsonRes = $.parseJSON( res );
						console.log(jsonRes)
						if(jsonRes.state==1){
						//制作下载链接
						let file_upload_id = all.getQueryString("file_upload_id")
						createDownload(file_upload_id)
						showDownload()
						}
					}
				}
				all.sendAjax(params)
			}
		}
	})
	function showDownload(){
		$('.form-body').css('display','none')
		$('.true-download').slideDown()
	}
	//制作下载href
	function createDownload(file_upload_id){
		let params = {
			method:'POST',//ajax请求方法
			data:{
				app_class:'web',
				user_token:window.token,
				file_upload_id:file_upload_id
			},//ajax请求参数
			url:"<?=$api_url?>"+"app/make_file_href",//ajax请求url
			successfn:function(res){//ajax请求成功的回调
				let jsonRes = $.parseJSON( res );
				console.log(jsonRes)
				if(jsonRes.state==1){
					$('.true-download-btn').attr("href",jsonRes.content.file_url)
				}
			}
		}
		all.sendAjax(params)
	}
	//读取这个文件的数据
	function getThisFile(file_upload_id){
		let params = {
			method:'POST',
			url: "<?=$api_url?>"+"app/that_file" ,
			text:{
				textWarn:'请求成功，暂无数据',
				textError:'请求失败',
			},
			data :{
				app_class:'web',
				user_token:window.token,
				file_upload_id:file_upload_id
			},
			changeDomFn:function(content){
				console.log(content)
				if(content.length!=0){
					// console.log('aas')
					let html = content.file_zh_name
					$('.info-name').text(html)
				}
				
				
				
			},
			dealWithEmptyDom:function(){
				
			}
		}
		all.dealWithDomAfterAjax(params)
	}
</script>
<!--结束-页面js-->


<?php
include $page_path.'/common/must.php';
include $page_path.'/common/foot.php';
?>

