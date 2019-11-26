<?php
$title = '在职考研'; // 模块页标题，每个页面自定义
$page_path = dirname(dirname(__FILE__)); // 项目index的根目录
include $page_path.'/common/head.php';
include $page_path.'/common/secNav.php';
?>
	<style>
		
	</style>

<!--开始-二级/三级页面内容-->
<div class="view-page detail-onwork" id="view-page">
	<section class="banner">
		
		<img src="<?=$file_url?>/static/img/detail-onwork-banner.jpg" data-img_name="detail-onwork-banner.jpg" alt="在职考研">
	</section>
	<section>
	   
	</section>
	<section>
	   <img src="<?=$file_url?>/static/img/detail-onwork-2.png" data-img_name="detail-onwork-2.png" alt="在职考研">
	</section>
	<section>
	   <img src="<?=$file_url?>/static/img/detail-onwork-3.png" data-img_name="detail-onwork-3.png" alt="在职考研">
	</section>
	<section class="zhuanye">
	   <img src="<?=$file_url?>/static/img/detail-onwork-4.png" data-img_name="detail-onwork-4.png" alt="在职考研">
	   
	   <div class="width-1200-center">
		   <div class="zhuanye-btn">》》更多热门专业</div>
	   </div>
	</section>
	<section class="on-work-form">
		<div class="width-1200-center">
			<h1>各大院校招生简章，报名条件，报名流程，院校专业详细研究，院校往年数据，我们来帮你分析。</h1>
			
		</div>
		<div class="work-body shadow-lg">
			<div class="item center-name">
				<h1>姓名</h1>
				<input type="text">
			</div>
			<div class="item phone-item center-phone">
				<h1>电话</h1>
				<input type="text" class="shadow-lg noBorder">
			</div>
			<div class="item center-xueli">
				<h1>最高学历</h1>
				<input type="text">
			</div>
			<div class="item center-school">
				<h1>目标院校</h1>
				<input type="text">
			</div>
			<div class="item">
				<div class="work-btn work-center-btn">确认</div>
			</div>
		</div>
	</section>
	<section>
   	   <img src="<?=$file_url?>/static/img/detail-onwork-5.png" data-img_name="detail-onwork-5.png" alt="在职考研">
	</section>
  
	<section>
   	   <img src="<?=$file_url?>/static/img/detail-onwork-6.png" data-img_name="detail-onwork-6.png" alt="在职考研">
	</section>
	<section>
	   <img src="<?=$file_url?>/static/img/detail-onwork-7.png" data-img_name="detail-onwork-7.png" alt="在职考研">
	</section>
	<section>
	   <img src="<?=$file_url?>/static/img/detail-onwork-8.png" data-img_name="detail-onwork-8.png" alt="在职考研">
	</section>
	<section>
	   <img src="<?=$file_url?>/static/img/detail-onwork-9.png" data-img_name="detail-onwork-9.png" alt="在职考研">
	</section>
	<section class="last-form">
		<div class="width-1200-center">
			<h1>
				<img src="<?=$file_url?>/static/img/detail-onwork-title.png" data-img_name="detail-onwork-title.png" alt="在职考研">
			</h1>
		</div>
		<div class="last-work-body shadow-lg">
			<div class="item last-name">
				<h1>姓名</h1>
				<input type="text">
			</div>
			<div class="item phone-item last-phone">
				<h1>电话</h1>
				<input type="text" class="shadow-lg noBorder">
			</div>
			<div class="item">
				<div class="work-btn work-last-btn">欢迎您来考查</div>
			</div>
		</div>
	</section>
</div>
<!--结束-二级/三级页面内容-->

<!--开始-页面js-->
<script>

</script>
<script>
	
    // 页面数据入口，如有动态数据渲染，请以此函数为调用作为开始
    function page_data_init(){
        console_log("开始渲染数据");
		geAllArea()
    }
	$('.work-center-btn').click(function(){
		let name = $('.center-name input').val()
		let phone = $('.center-phone input').val()
		let xueli = $('.center-xueli input').val()
		let school = $('.center-school input').val()
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
						resource:'pc_baoming',
						user_info:name+"#@"+xueli+"#@"+school+"#@在职考研报名",
						user_phone:phone
					},//ajax请求参数
					url:"<?=$api_url?>"+"app/user_phone_order",//ajax请求url
					successfn:function(res){//ajax请求成功的回调
						let jsonRes = $.parseJSON( res );
						if(jsonRes.state==1){
							let params={
								type:'success',
								text:'恭喜您，报名成功',
								timeout:2000
							}
							all.message(params)	
						}
						// all.log(jsonRes)
					
					}
				}
				all.sendAjax(params)
			}
		}
	})
	$('.work-last-btn').click(function(){
		let name = $('.last-name input').val()
		let phone = $('.last-phone input').val()
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
						resource:'pc_baoming',
						user_info:name+"#@在职考研报名",
						user_phone:phone
					},//ajax请求参数
					url:"<?=$api_url?>"+"app/user_phone_order",//ajax请求url
					successfn:function(res){//ajax请求成功的回调
						let jsonRes = $.parseJSON( res );
						if(jsonRes.state==1){
							let params={
								type:'success',
								text:'恭喜您，报名成功',
								timeout:2000
							}
							all.message(params)	
						}
						// all.log(jsonRes)
					
					}
				}
				all.sendAjax(params)
			}
		}
	})
</script>
<!--结束-页面js-->


<?php
include $page_path.'/common/must.php';
include $page_path.'/common/foot.php';
?>

