<?php
$title = '实例页面'; // 模块页标题，每个页面自定义
$page_path = dirname(dirname(__FILE__)); // 项目index的根目录
include $page_path.'/common/head.php';
include $page_path.'/common/nav.php';
?>
<style>
	
</style>

<!--开始-二级/三级页面内容-->
<div class="view-page foot-pay" id="view-page">
	<div>
		<img src="<?=$file_url?>/static/img/foot-pay-1.jpg" data-img_name="foot-pay-1.jpg" class="nav-logo-img" alt="文都考研" title="文都考研"/>
	</div>
	<!--面包屑导航-->
	<div class="nav-top-div select-none border-bottom-0">
	    <div class="width-1200-center">
	        <div class="dir-div roll-txt">
	            <i class="fa fa-home"></i>
	            <a class="dir-a" href="<?=$file_url?>/home.php?route=nav&nav=home" target="_self" title="文都首页">文都首页</a>
	            <i class="fa fa-angle-right dir-fa"></i>
	            <a class="dir-a" href="#" target="_self" title="支付方式">支付方式</a>
	        </div>
	    </div>
	</div>
	<div class="foot-pay-center">
		<div class="width-1200-center">
			<h1>
				<img src="<?=$file_url?>/static/img/foot-pay-2.jpg" data-img_name="foot-pay-2.jpg" class="nav-logo-img" alt="文都考研" title="文都考研"/>
			</h1>
			<div class="center-border">
				<h1>考研报名家长或考生可以通过湖南文都考研对公账号打款!</h1>
				<h2>湖南文都对公账号</h2>
				<h3>户   名： <span>长沙道信教育科技有限公司</span></h3>
				<h3>开户行： <span>招商银行长沙湘府路支行</span></h3>
				<h3>账   号： <span>731905381210102</span></h3>
			</div>
			<div class="border-color"></div>
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
		geAllArea()
    }
</script>
<!--结束-页面js-->


<?php
include $page_path.'/common/must.php';
include $page_path.'/common/foot.php';
?>
