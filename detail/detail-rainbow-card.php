<?php
$title = '高端彩虹卡'; // 模块页标题，每个页面自定义
$page_path = dirname(dirname(__FILE__)); // 项目index的根目录
include $page_path.'/common/head.php';
include $page_path.'/common/secNav.php';
?>
	<style>
		
	</style>

<!--开始-二级/三级页面内容-->
<div class="view-page detail-rainbow-card" id="view-page">
	<section class="banner">
		<img src="<?=$file_url?>/static/img/detail-rainbow-banner.png" data-img_name="detail-rainbow-banner.png" alt="高端彩虹卡" title="高端彩虹卡">
	</section>
	<section>
		<img src="<?=$file_url?>/static/img/detail-rainbow-1.png" data-img_name="detail-rainbow-1.png" alt="高端彩虹卡" title="高端彩虹卡">
	</section>
	<section>
		<img src="<?=$file_url?>/static/img/detail-rainbow-2.png" data-img_name="detail-rainbow-2.png" alt="高端彩虹卡" title="高端彩虹卡">
	</section>
	<section class="rainbow-table">
		<h1>
			<img src="<?=$file_url?>/static/img/detail-rainbow-title1.png" data-img_name="detail-rainbow-title1.png" alt="高端彩虹卡" title="高端彩虹卡">
		</h1>
		<div class="width-1200-center">
			<div class="rainbow-tabs">
				<div class="tabs-item selected" data-img_name="detail-rainbow-quanke.png">全科系列</div>
				<div class="tabs-item" data-img_name="detail-rainbow-gonggong.png">公共课系列</div>
				<div class="tabs-item" data-img_name="detail-rainbow-zhuanye.png">专业课系列</div>
				<div class="tabs-item" data-img_name="detail-rainbow-199.png">199管综系列</div>
			</div>
			<div class="rainbow-img">
				<img class="" src="<?=$file_url?>/static/img/detail-rainbow-quanke.png" data-img_name="detail-rainbow-quanke.png" alt="高端彩虹卡" title="高端彩虹卡">
			</div>
		</div>
	</section>
	<section>
		<img src="<?=$file_url?>/static/img/detail-rainbow-3.png" data-img_name="detail-rainbow-3.png" alt="高端彩虹卡" title="高端彩虹卡">
	</section>
	<section>
		<img src="<?=$file_url?>/static/img/detail-rainbow-4.png" data-img_name="detail-rainbow-4.png" alt="高端彩虹卡" title="高端彩虹卡">
	</section>
	<section>
		<img src="<?=$file_url?>/static/img/detail-rainbow-5.png" data-img_name="detail-rainbow-5.png" alt="高端彩虹卡" title="高端彩虹卡">
	</section>
	<section>
		<img src="<?=$file_url?>/static/img/detail-rainbow-6.png" data-img_name="detail-rainbow-6.png" alt="高端彩虹卡" title="高端彩虹卡">
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
	$('.tabs-item').click(function(){
		let img_name = $(this).data("img_name")
		console_log(img_name)
		$('.rainbow-img img').attr({
			src:'<?=$file_url?>/static/img/'+img_name,
			'data-img_name':img_name
		})
		$(this).addClass('selected').siblings().removeClass('selected')
	})
</script>
<!--结束-页面js-->


<?php
include $page_path.'/common/must.php';
include $page_path.'/common/foot.php';
?>

