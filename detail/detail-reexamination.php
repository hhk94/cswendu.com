<?php
$title = '实例页面'; // 模块页标题，每个页面自定义
$page_path = dirname(dirname(__FILE__)); // 项目index的根目录
include $page_path.'/common/head.php';
include $page_path.'/common/secNav.php';
?>
	<style>
		
	</style>

<!--开始-二级/三级页面内容-->
<div class="view-page detail-reexamination" id="view-page">
	<section class="banner">
		<img src="<?=$file_url?>/static/img/detail-reexamination-banner.png"
				data-img_name="detail-reexamination-banner.png"  alt="复试集训营" title="复试集训营"/>
	</section>
	<section class="serve">
		<h1 class="title1">
			<img src="<?=$file_url?>/static/img/detail-reexamination-title1.png"
					data-img_name="detail-reexamination-title1.png"  alt="复试集训营" title="复试集训营"/>
		</h1>
		<div class="serve-body width-1200-center">
			<div class="serve-item serve-item1">
				<div class="bg">
					<div class="icon"></div>
				</div>
				<h1>复习规划+配套资料</h1>
			</div>
			<div class="serve-item serve-item2">
				<div class="bg">
					<div class="icon"></div>
				</div>
				<h1>老师团队+实战模拟</h1>
			</div>
			<div class="serve-item serve-item3">
				<div class="bg">
					<div class="icon"></div>
				</div>
				<h1>综合面试+英语口语</h1>
			</div>
			<div class="serve-item serve-item4">
				<div class="bg">
					<div class="icon"></div>
				</div>
				<h1>复试调剂+专业定向</h1>
			</div>
		</div>
	</section>
	<section class="dingzhi">
		<img src="<?=$file_url?>/static/img/detail-reexamination-dingzhi.png"
				data-img_name="detail-reexamination-dingzhi.png"  alt="复试集训营" title="复试集训营"/>
	</section>
	<section class="beizhan">
		<img src="<?=$file_url?>/static/img/detail-reexamination-beizhan.png"
				data-img_name="detail-reexamination-beizhan.png"  alt="复试集训营" title="复试集训营"/>
	</section>
	<section class="process">
		<img src="<?=$file_url?>/static/img/detail-reexamination-process.png"
				data-img_name="detail-reexamination-process.png"  alt="复试集训营" title="复试集训营"/>
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

    }
</script>
<!--结束-页面js-->


<?php
include $page_path.'/common/must.php';
include $page_path.'/common/foot.php';
?>

