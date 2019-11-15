<?php
$title = '考研课程'; // 模块页标题，每个页面自定义
$page_path = dirname(__FILE__); // 项目index的根目录
include $page_path.'/common/head.php';
include $page_path.'/common/nav.php';
?>
<style>
	
	.banner-slider-div{
		background: black;
	}
	.kaoyankecheng-sub{
		padding: 0;
		width: 272px;
		border-radius: 20px;
		overflow: hidden;
		background: white;
	}
	.kaoyankecheng-sub-title{
		height: 50px;
		width:100%;
		background-image: linear-gradient(to right, #ef4c4f,#f66aa9);
		font-size: 18px;
		text-align: center;
		line-height: 50px;
		font-weight: bold;
	}
	.kaoyankecheng-sub-body{
		margin: 9px 16px;
		border-bottom:1px solid #f9f9f9;
		color:black;
	}
	.kaoyankecheng-sub-body:nth-of-type(1){
		margin-top: 55px;
	}
	.kaoyankecheng-sub-icon{
		color: #dedede;
	}
	.kaoyankecheng-sub-name{
		color: #050505;
		margin:0 10px
	}
	.kaoyankecheng-sub-body>input{
		width: 145px;
		outline: none;
	}
	.kaoyankecheng-btn{
		width: 144px;
		height: 36px;
		border-radius: 36px;;
		line-height: 36px;
		text-align: center;
		margin: 9px auto;
	}
	.kaoyankecheng-btn-yuyue{
		color: white;
		background: #ef4c4f;
		
	}
	.kaoyankecheng-btn-ask{
		border: 1px solid #d5d5d5;
		color: #393939;
	}
	.banner-slider-div{
		overflow: hidden;
	}
	.banner-slider-div>img{
		width: 100%;
	}
</style>
<!--开始-模块页内容-->
<section class="view-section clear" id="view-main">

    <div class="banner-div select-none">
        <div class="banner-slider-div">

        </div>
<!--        <div class="banner-info-div width-1200-center hide"></div>-->

        <div class="show-imp-sub select-text kaoyankecheng-sub">
            <h1 class="kaoyankecheng-sub-title">免费约课</h1>
			<div class="kaoyankecheng-sub-body">
				<i class="fa fa-file-text-o kaoyankecheng-sub-icon"></i>
				<span class="kaoyankecheng-sub-name">科目</span>
				<input class="noBorder" type="text">
			</div>
			<div class="kaoyankecheng-sub-body">
				<i class="fa fa-user-o kaoyankecheng-sub-icon"></i>
				<span class="kaoyankecheng-sub-name">姓名</span>
				<input class="noBorder" type="text">
			</div>
			<div class="kaoyankecheng-sub-body">
				<i class="fa fa-mobile-phone kaoyankecheng-sub-icon"></i>
				<span class="kaoyankecheng-sub-name">手机号</span>
				<input class="noBorder" type="text">
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

    <!---->
    <div class="width-1200-center bg-white home-cell">
        <h3 class="home-cell-title"><span class="home-cell-title-span">鹰飞训练营</span></h3>
        <div class="home-cell-content">
            <div class="cell-left">

            </div>
            <div class="cell-right">
				<div class="kaoyankecheng-course-item">
					<div class="kaoyankecheng-course-item-img"></div>
					<a href="#" target="_self" title="课程详情" class="kaoyankecheng-course-item-btn">课程详情</a>
				</div>
				<div class="kaoyankecheng-course-item">
					<div class="kaoyankecheng-course-item-img"></div>
					<a href="#" target="_self" title="课程详情" class="kaoyankecheng-course-item-btn">课程详情</a>
				</div>
				<div class="kaoyankecheng-course-item">
					<div class="kaoyankecheng-course-item-img"></div>
					<a href="#" target="_self" title="课程详情" class="kaoyankecheng-course-item-btn">课程详情</a>
				</div>
				<div class="kaoyankecheng-course-item">
					<div class="kaoyankecheng-course-item-img"></div>
					<a href="#" target="_self" title="课程详情" class="kaoyankecheng-course-item-btn">课程详情</a>
				</div>

            </div>

            <div class="clear"></div>
        </div>

    </div>

    <!---->
    <div class="width-1200-center bg-white home-cell">
        <h3 class="home-cell-title"><span class="home-cell-title-span">VIP高端辅导</span></h3>
        <div class="home-cell-content">
            <div class="cell-left">

            </div>
            <div class="cell-right">
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

    </div>

    <!---->
    <div class="width-1200-center bg-white home-cell">
        <h3 class="home-cell-title"><span class="home-cell-title-span">精品定制课程</span></h3>
        <div class="home-cell-content">
            <div class="cell-left half-height">

            </div>
            <div class="cell-right">
				<div class="kaoyankecheng-course-item noBorder">
					<div class="kaoyankecheng-course-item-vip-img jingping-img"></div>
					<div class="kaoyankecheng-course-item-vip-bottom">
						<h1 class="WordJustOneLine jingping-word">VIP高端辅导</h1>
						<div class="jingping-btn-parent">
							<a class="jingping-btn" href="#" target="_self" title="查看详情">查看详情</a>
							<div class="jingping-btn click">在线咨询</div>
						</div>
					</div>
				</div>
				<div class="kaoyankecheng-course-item noBorder">
					<div class="kaoyankecheng-course-item-vip-img jingping-img"></div>
					<div class="kaoyankecheng-course-item-vip-bottom">
						<h1 class="WordJustOneLine jingping-word">VIP高端辅导</h1>
						<div class="jingping-btn-parent">
							<a class="jingping-btn" href="#" target="_self" title="查看详情">查看详情</a>
							<div class="jingping-btn click">在线咨询</div>
						</div>
					</div>
				</div>
				<div class="kaoyankecheng-course-item noBorder">
					<div class="kaoyankecheng-course-item-vip-img jingping-img"></div>
					<div class="kaoyankecheng-course-item-vip-bottom">
						<h1 class="WordJustOneLine jingping-word">VIP高端辅导</h1>
						<div class="jingping-btn-parent">
							<a class="jingping-btn" href="#" target="_self" title="查看详情">查看详情</a>
							<div class="jingping-btn click">在线咨询</div>
						</div>
					</div>
				</div>

            </div>

            <div class="clear"></div>
        </div>

    </div>



</section>
<!--结束-模块页内容-->


<!--开始-页面js-->
<script>

</script>
<script>
    // 页面数据入口，如有动态数据渲染，请以此函数为调用作为开始
    function page_data_init(){
        console_log("开始渲染数据");
		getBanner()
    }
	//获取kaoyankecheng-banner
	function getBanner(){
		let datas = {
			url:"<?=$api_url?>" + 'app/get_array_cover_img',
			key:'course_cover',
			changeDomFn:function(content){
				$('.banner-slider-div').html('');
				console.log(content)
				$.isArray(content)&&content.forEach((item,index)=>{
					if(index==content.length-1){
						var html = `<img src="${item}" alt=""></div>`
					}else{
						var html = ``
					}
					$('.banner-slider-div').append(html)
				})
				
			},
			dealWithEmptyDom:function(){
				$('.banner-slider-div').html('');
			}
		}
		all.getBanner(datas)
	}
</script>
<!--结束-页面js-->


<?php
include $page_path.'/common/must.php';
include $page_path.'/common/foot.php';
?>

