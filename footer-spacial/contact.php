<?php
$title = '实例页面'; // 模块页标题，每个页面自定义
$page_path = dirname(dirname(__FILE__)); // 项目index的根目录
include $page_path.'/common/head.php';
include $page_path.'/common/nav.php';
?>
<style>
	
</style>

<!--开始-二级/三级页面内容-->
<div class="view-page foot-contact" id="view-page">
	<div>
<img src="<?=$file_url?>/static/img/spacial/contact/2.jpg" data-img_name="/spacial/contact/2.jpg" class="nav-logo-img" alt="文都考研" title="文都考研"/>	</div>
	<!--面包屑导航-->
	<div class="nav-top-div select-none border-bottom-0">
	    <div class="width-1200-center">
	        <div class="dir-div roll-txt">
	            <i class="fa fa-home"></i>
	            <a class="dir-a" href="<?=$file_url?>/home.php?route=nav&nav=home" target="_self" title="文都首页">文都首页</a>
	            <i class="fa fa-angle-right dir-fa"></i>
	            <a class="dir-a" href="#" target="_self" title="联系我们">联系我们</a>
	        </div>
	    </div>
	</div>
	<div class="foot-contact-center">
		<div class="width-1200-center">
			<div>
				<img src="<?=$file_url?>/static/img/spacial/contact/center1.jpg" data-img_name="/spacial/contact/center1.jpg" class="nav-logo-img" alt="文都考研" title="文都考研"/>	
				
			</div>
			<div>
				<img src="<?=$file_url?>/static/img/spacial/contact/center2.jpg" data-img_name="/spacial/contact/center2.jpg" class="nav-logo-img" alt="文都考研" title="文都考研"/>	
				
			</div>
		</div>
		
	</div>
	<div id="maps"></div>
</div>
<!--结束-二级/三级页面内容-->

<!--开始-页面js-->
<script type="text/javascript" src="http://api.map.baidu.com/api?v=3.0&ak=0DLYDIjeyUdprzjIGOwnAm2xmKjZdu7z"></script>
<!-- <script src="http://api.map.baidu.com/api?v=2.0&ak=5wTkZ074far31FnMwl1R4R2oHR54VeHY"> -->
<script>
    // 页面数据入口，如有动态数据渲染，请以此函数为调用作为开始
    function page_data_init(){
        console_log("开始渲染数据");
		geAllArea()
		
    }
	getMaps()
	function getMaps(){
		//获取百度地图，并显示在allmap中
		// var map =new BMap.Map('maps');
		//设置显示中心点城市以及缩放比例
		// map.centerAndZoom("长沙市",12);
		//启用鼠标滚轮改变显示比例
		// map.enableScrollWheelZoom(true);
		//添加缩放平移控件
		// map.addControl(new BMap.NavigationControl());
		//添加比例尺
		// map.addControl(new BMap.ScaleControl());
		//获取需要标注点的地理位置;在网上查具体的坐标点，
		var x = 113.0088742325;
		var y = 28.1392066851;
		var ggPoint = new BMap.Point(x,y);

		
		 //地图初始化
		var bm = new BMap.Map("maps");
		bm.centerAndZoom(ggPoint, 15);
		bm.addControl(new BMap.NavigationControl());
	
	
		//添加gps marker和label
		var marker = new BMap.Marker(ggPoint);  // 创建标注
			bm.addOverlay(marker);               // 将标注添加到地图中
			marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
	
		var label = new BMap.Label("中南林业科技大学东门橙子酒店3楼",{offset:new BMap.Size(20,-10)});
			marker.setLabel(label);
	
		
		// bm.enableScrollWheelZoom();   //启用滚轮放大缩小，默认禁用
		bm.enableContinuousZoom();    //启用地图惯性拖拽，默认禁用
		var opts = {
			  width : 200,     // 信息窗口宽度
			  height: 100,     // 信息窗口高度
			  title : "林科大分校" , // 信息窗口标题
			  enableMessage:true,//设置允许信息窗发送短息
			  message:"亲耐滴，晚上一起吃个饭吧？戳下面的链接看下地址喔~"
			}
			var infoWindow = new BMap.InfoWindow("地址：中南林业科技大学东门橙子酒店3楼", opts);  // 创建信息窗口对象 
			bm.openInfoWindow(infoWindow,ggPoint); //开启信息窗口
	}
	
</script>
<!--结束-页面js-->


<?php
include $page_path.'/common/must.php';
include $page_path.'/common/foot.php';
?>

