<?php
$title = '实例页面'; // 模块页标题，每个页面自定义
$page_path = dirname(dirname(__FILE__)); // 项目index的根目录
include $page_path.'/common/head.php';
include $page_path.'/common/nav.php';
?>
	<style>
		
	</style>

<!--开始-二级/三级页面内容-->
<div class="view-page detail-full-year" id="view-page">
	<div class="full-banner">
		
	</div>
	<section>
		<img src="<?=$file_url?>/static/img/detail-full-year1.png" 
				data-img_name="detail-full-year1.png"  alt="全年集训营" title="全年集训营"/>
	</section>
	<section>
		<img src="<?=$file_url?>/static/img/detail-full-year2.png" 
				data-img_name="detail-full-year2.png"  alt="全年集训营" title="全年集训营"/>
	</section>
	<section>
		<img src="<?=$file_url?>/static/img/detail-full-year3.png" 
				data-img_name="detail-full-year3.png" alt="全年集训营" title="全年集训营"/>
	</section>
	<section class="detail-full-year-yuyue">
		<h1 class="yuyue-title">
			<img src="<?=$file_url?>/static/img/detail-full-year-title1.png"
					data-img_name="detail-full-year3.png" alt="全年集训营" title="全年集训营"/>
		</h1>
		<div class="width-1200-center ">
			<div class="full-year-yuyue-item">
				<div class="img-box">
					
				</div>
				<div class="title">课堂实景</div>
			</div>
			<div class="full-year-yuyue-item">
				<div class="img-box">
					
				</div>
				<div class="title">课堂实景</div>
			</div>
			<div class="full-year-yuyue-item">
				<div class="img-box">
					
				</div>
				<div class="title">课堂实景</div>
			</div>
			<div class="full-year-yuyue-item">
				<div class="img-box">
					
				</div>
				<div class="title">课堂实景</div>
			</div>
		</div>
		<div class="width-996-center">
			<div class="full-year-yuyue-item">
				<div class="img-box">
					
				</div>
				<div class="title">课堂实景</div>
			</div>
			<div class="full-year-yuyue-item">
				<div class="img-box">
					
				</div>
				<div class="title">课堂实景</div>
			</div>
			<div class="full-year-yuyue-item">
				<div class="img-box">
					
				</div>
				<div class="title">课堂实景</div>
			</div>
		</div>
		<div class="full-year-yueyue-btn">预约参加训练营</div>
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
