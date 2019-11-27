<?php
$title = '考研课程'; // 模块页标题，每个页面自定义
$page_path = dirname(__FILE__); // 项目index的根目录
include $page_path.'/common/head.php';
include $page_path.'/common/nav.php';
?>
<style>
	
	
	
	
	
	
	
	
	
	
	
</style>
<!--开始-模块页内容-->
<section class="view-section clear kaoyankecheng" id="view-main">

    <div class="banner-div select-none">
        <div class="banner-slider-div">
			<img src="<?=$file_url?>/static/img/kaoyankecheng-banner.png" data-img_name="kaoyankecheng-banner.png" alt="考研课程">
        </div>
<!--        <div class="banner-info-div width-1200-center hide"></div>-->

        <div class="show-imp-sub select-text kaoyankecheng-sub">
            <h1 class="kaoyankecheng-sub-title">免费约课</h1>
			<div class="kaoyankecheng-sub-body">
				<i class="fa fa-file-text-o kaoyankecheng-sub-icon"></i>
				<span class="kaoyankecheng-sub-name">科目</span>
				<input class="noBorder input-kemu" type="text">
			</div>
			<div class="kaoyankecheng-sub-body">
				<i class="fa fa-user-o kaoyankecheng-sub-icon"></i>
				<span class="kaoyankecheng-sub-name">姓名</span>
				<input class="noBorder input-name" type="text" >
			</div>
			<div class="kaoyankecheng-sub-body">
				<i class="fa fa-mobile-phone kaoyankecheng-sub-icon"></i>
				<span class="kaoyankecheng-sub-name">手机号</span>
				<input class="noBorder input-phone" type="text">
			</div>
			<div class="kaoyankecheng-btn kaoyankecheng-btn-yuyue">立即预约</div>
			<div class="kaoyankecheng-btn kaoyankecheng-btn-ask">微信在线咨询</div>
        </div>

    </div>

    <!--面包屑导航-->
    <div class="nav-top-div select-none border-bottom-0">
        <div class="width-1200-center">
            <div class="dir-div roll-txt">
                <i class="fa fa-home"></i>
                <a class="dir-a" href="./home.php?route=nav&nav=home" target="_self" title="文都首页">文都首页</a>
                <i class="fa fa-angle-right dir-fa"></i>
                <a class="dir-a" href="./kaoyankecheng.php?route=nav&nav=kaoyankecheng" target="_self" title="考研课程">考研课程</a>
            </div>
        </div>
    </div>

    <!--鹰飞训练营模板-->
<!--    <div class="width-1200-center bg-white home-cell">
        <h3 class="home-cell-title"><span class="home-cell-title-span">鹰飞训练营</span></h3>
        <div class="home-cell-content">
            <div class="cell-left">
				<img src="<?=$file_url?>/static/img/kaoyankecheng-left1.png" data-img_name="kaoyankecheng-left1.png" alt="考研课程">
            </div>
            <div class="cell-right jixunying">
				<div class="kaoyankecheng-course-item noBorder">
					<div class="kaoyankecheng-course-item-vip-img"></div>
					<div class="kaoyankecheng-course-item-vip-bottom">
						<h1 class="WordJustOneLine">VIP高端辅导</h1>
						<p class="WordJustOneLine noMargin">五阶四轮公共课面授五阶四轮公共课面授五阶四轮公共课面授五阶四轮公共课面授五阶四轮公共课面授</p>
						<p class="WordJustOneLine noMargin">五阶四轮公共课面授</p>
						<p class="WordJustOneLine noMargin">五阶四轮公共课面授</p>
						<div class="kaoyankecheng-course-item-vip-ask click">在线咨询</div>
					</div>
				</div>
            </div>
            <div class="clear"></div>
        </div>
    </div> -->
	
	
	

    <!--彩虹卡模板-->
<!--    <div class="width-1200-center bg-white home-cell">
        <h3 class="home-cell-title"><span class="home-cell-title-span">VIP高端辅导</span></h3>
        <div class="home-cell-content">
            <div class="cell-left">
				<img src="<?=$file_url?>/static/img/kaoyankecheng-left2.png" data-img_name="kaoyankecheng-left2.png" alt="考研课程">
            </div>
            <div class="cell-right rainbow">
				<div class="kaoyankecheng-course-item noBorder">
					<div class="kaoyankecheng-course-item-vip-img"></div>
					<div class="kaoyankecheng-course-item-vip-bottom">
						<h1 class="WordJustOneLine">VIP高端辅导</h1>
						<p class="WordJustOneLine noMargin">五阶四轮公共课面授五阶四轮公共课面授五阶四轮公共课面授五阶四轮公共课面授五阶四轮公共课面授</p>
						<p class="WordJustOneLine noMargin">五阶四轮公共课面授</p>
						<p class="WordJustOneLine noMargin">五阶四轮公共课面授</p>
						<p class="WordJustOneLine noMargin">￥ <span class="kaoyankecheng-course-item-vip-price">8892</span><span>起</span></p>
						<div class="kaoyankecheng-course-item-vip-ask click">在线咨询</div>
					</div>
				</div>
            </div>
            <div class="clear"></div>
        </div>
    </div> -->

    <!--定制课模板-->
   <!-- <div class="width-1200-center bg-white home-cell">
        <h3 class="home-cell-title"><span class="home-cell-title-span">精品定制课程</span></h3>
        <div class="home-cell-content">
            <div class="cell-left half-height">
				<img src="<?=$file_url?>/static/img/kaoyankecheng-left3.png" data-img_name="kaoyankecheng-left3.png" alt="考研课程">
            </div>
            <div class="cell-right zhuanyeke">
				<div class="kaoyankecheng-course-item noBorder">
					<div class="kaoyankecheng-course-item-vip-img jingping-img"></div>
					<div class="kaoyankecheng-course-item-vip-bottom">
						<h1 class="WordJustOneLine jingping-word">VIP高端辅导</h1>
						<div class="jingping-btn-parent">
							<a class="jingping-btn" href="#" target="_self" title="查看详情" >查看详情</a>
							<div class="jingping-btn click">在线咨询</div>
						</div>
					</div>
				</div>
            </div>
            <div class="clear"></div>
        </div>
    </div> -->



</section>
<!--结束-模块页内容-->


<!--开始-页面js-->
<script>

</script>
<script>
    // 页面数据入口，如有动态数据渲染，请以此函数为调用作为开始
    function page_data_init(){
        console_log("开始渲染数据");
		getCourseType()
		geAllArea()
    }
	
	//获取课程分类 - 根据分类插入dom-body - 根据class_id 插入不同分类的数据
	function getCourseType(){
		let params = {
			method:'POST',//ajax请求方法
			data:{
				app_class:'web',
				user_token:window.token,
				course_class_id:'all'
			},//ajax请求参数
			url: "<?=$api_url?>"+"app/list_course_class" ,//ajax请求url
			successfn:function(res){//ajax请求成功的回调
				let jsonRes = $.parseJSON( res );
				console_log(jsonRes)
				$.isArray( jsonRes.content)&& jsonRes.content.forEach((item,index)=>{
					if(item.course_class_name =='集训营'){
						let html = `<div class="width-1200-center bg-white home-cell">
									<h3 class="home-cell-title"><span class="home-cell-title-span">${item.course_class_name}</span></h3>
									<div class="home-cell-content">
										<div class="cell-left">
											<img src="${item.course_class_cover}" data-img_name="" alt="考研课程">
										</div>
										<div class="cell-right jixunying">
										</div>
										<div class="clear"></div>
									</div>
								</div>`
						$('.kaoyankecheng').append(html)
						let course_class_id = item.course_class_id
						getListCourse_jixun(course_class_id)
						
					}else if(item.course_class_name =='彩虹卡'){
						let html = `
						<div class="width-1200-center bg-white home-cell">
						    <h3 class="home-cell-title"><span class="home-cell-title-span">${item.course_class_name}</span></h3>
						    <div class="home-cell-content">
						        <div class="cell-left">
									<img src="${item.course_class_cover}" data-img_name="" alt="考研课程">
						        </div>
						        <div class="cell-right rainbow">
						        </div>
						        <div class="clear"></div>
						    </div>
						</div>`
						$('.kaoyankecheng').append(html)
						let course_class_id = item.course_class_id
						getListCourse_rainbow(course_class_id)
					}else if(item.course_class_name =='定制课'){
						let html = `
						<div class="width-1200-center bg-white home-cell">
						    <h3 class="home-cell-title"><span class="home-cell-title-span">${item.course_class_name}</span></h3>
						    <div class="home-cell-content">
						        <div class="cell-left half-height">
									<img src="${item.course_class_cover}" data-img_name="" alt="考研课程">
						        </div>
						        <div class="cell-right zhuanyeke">
						        </div>
						        <div class="clear"></div>
						    </div>
						</div>`
						$('.kaoyankecheng').append(html)
						let course_class_id = item.course_class_id
						getListCourse_dingzhi(course_class_id)
					}
					
				})
			}
		}
		all.sendAjax(params)
	}
	//ji集训营
	function getListCourse_jixun(course_class_id){
		let params = {
			method:'POST',
			url: "<?=$api_url?>"+"app/list_course" ,
			text:{
				textWarn:'请求成功，暂无数据',
				textError:'请求失败',
			},
			data :{
				app_class:'web',
				user_token:window.token,
				course_id:'all',
				course_class_id:course_class_id
			},
			changeDomFn:function(content){
				console_log(content)
				$('.jixunying').html('')
				$.isArray(content)&&content.forEach((item,index)=>{
					let html = `<div class="kaoyankecheng-course-item noBorder">
					<a href="${item.course_url}" target="_blank" class="kaoyankecheng-course-item-vip-img"><img src="${item.course_cover}" alt=""></a>
					<div class="kaoyankecheng-course-item-vip-bottom">
						<h1 class="WordJustOneLine">${item.course_name}</h1>
						<p class="WordJustOneLine ">${item.course_slogan}</p>
						<p class="WordJustOneLine ">${item.course_description}</p>
						<div class="kaoyankecheng-course-item-vip-ask click">在线咨询</div>
					</div>
				</div>`
					$('.jixunying').append(html)
				})
			},
			dealWithEmptyDom:function(){
			}
		}
		all.dealWithDomAfterAjax(params)
	}
	//彩虹卡
	function getListCourse_rainbow(course_class_id){
		let params = {
			method:'POST',
			url: "<?=$api_url?>"+"app/list_course" ,
			text:{
				textWarn:'请求成功，暂无数据',
				textError:'请求失败',
			},
			data :{
				app_class:'web',
				user_token:window.token,
				course_id:'all',
				course_class_id:course_class_id
			},
			changeDomFn:function(content){
				console_log(content)
				$('.rainbow').html('')
				$.isArray(content)&&content.forEach((item,index)=>{
					let html = `<div class="kaoyankecheng-course-item noBorder">
					<a href="${item.course_url}" target="_blank" class="kaoyankecheng-course-item-vip-img"><img src="${item.course_cover}" alt=""></a>
					<div class="kaoyankecheng-course-item-vip-bottom">
						<h1 class="WordJustOneLine">${item.course_name}</h1>
						<p class="WordJustOneLine ">${item.course_slogan}</p>
						<p class="WordJustOneLine ">${item.course_description}</p>
						<div class="kaoyankecheng-course-item-vip-ask click">在线咨询</div>
					</div>
				</div>`
					$('.rainbow').append(html)
				})
			},
			dealWithEmptyDom:function(){
			}
		}
		all.dealWithDomAfterAjax(params)
	}
	//专业课
	function getListCourse_dingzhi(course_class_id){
		let params = {
			method:'POST',
			url: "<?=$api_url?>"+"app/list_course" ,
			text:{
				textWarn:'请求成功，暂无数据',
				textError:'请求失败',
			},
			data :{
				app_class:'web',
				user_token:window.token,
				course_id:'all',
				course_class_id:course_class_id
			},
			changeDomFn:function(content){
				console_log(content)
				$('.zhuanyeke').html('')
				$.isArray(content)&&content.forEach((item,index)=>{
					let html = `<div class="kaoyankecheng-course-item noBorder">
					<a href="${item.course_url}" target="_blank" class="kaoyankecheng-course-item-vip-img jingping-img"><img src="${item.course_cover}" alt=""></a>
					<div class="kaoyankecheng-course-item-vip-bottom">
						<h1 class="WordJustOneLine jingping-word">${item.course_name}</h1>
						<div class="jingping-btn-parent">
							<a class="jingping-btn" href="${item.course_url}" target="_blank" title="查看详情">查看详情</a>
							<div class="jingping-btn click">在线咨询</div>
						</div>
					</div>
				</div>`
					$('.zhuanyeke').append(html)
				})
			},
			dealWithEmptyDom:function(){
			}
		}
		all.dealWithDomAfterAjax(params)
	}
	
	//课程报名
	$('.kaoyankecheng-btn-yuyue').click(function(){
		let name = $('.input-name').val()
		let phone = $('.input-phone').val()
		let kemu = $('.input-kemu').val()
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
						user_info:name+"#@"+kemu+"#@课程页面报名",
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

