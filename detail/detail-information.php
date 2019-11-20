<?php
$title = '考研资讯详情'; // 模块页标题，每个页面自定义
$page_path = dirname(dirname(__FILE__)); // 项目index的根目录
include $page_path.'/common/head.php';
include $page_path.'/common/nav.php';
?>
<style>
	
	
	
	
	
	
	
	
	
	
	
</style>
<!--开始-模块页内容-->
<div class="view-section clear detail-information" id="view-main">
<!--面包屑导航-->
    <div class="nav-top-div select-none border-bottom-0">
        <div class="width-1200-center">
            <div class="dir-div roll-txt">
                <i class="fa fa-home"></i>
                <a class="dir-a" href="<?=$file_url?>kaoyanInformation.php?route=nav&nav=kaoyanInformation" target="_self" title="文都资讯">文都资讯</a>
                <i class="fa fa-angle-right dir-fa"></i>
                <a class="dir-a" href="#" target="_self" title="考研详情">详情</a>
            </div>
        </div>
    </div>
    <section class="center">
		<div class="width-1200-center">
			<div class="center-body">
				<h1 class="title" id="title">考研资讯</h1>
				<h3 class="sectitle">
					<span class="time">1121</span>
					<span >来源: <span class="author">教育部</span> </span>
				</h3>
				<div class="list information-show">
					
					
				</div>
				
				<div class="information-page-body">
					<div class="information-page" id="information-page"></div>
				</div>
			</div>
			<div class="right">
				<div class="right-top">
					
				</div>
				<div class="hot-recommend">
					<h1>热点推荐</h1>
					<div class="list">
						<a href="./kaoyankecheng.php?route=nav&nav=kaoyankecheng" target="_blank" title="考研资讯" class="WordJustOneLine">研招统考预报名5个问题请关注</a>
						<a href="./kaoyankecheng.php?route=nav&nav=kaoyankecheng" target="_blank" title="考研资讯" class="WordJustOneLine">研招统考预报名5个问题请关注</a>
						<a href="./kaoyankecheng.php?route=nav&nav=kaoyankecheng" target="_blank" title="考研资讯" class="WordJustOneLine">研招统考预报名5个问题请关注</a>
						<a href="./kaoyankecheng.php?route=nav&nav=kaoyankecheng" target="_blank" title="考研资讯" class="WordJustOneLine">研招统考预报名5个问题请关注</a>
					</div>
				</div>
				<div class="hot-communication">
					<h1>研友交流</h1>
					<div class="list">
						<a title="考研资讯" class="WordJustOneLine information-num">2021考研交流分享群:<span>962488888</span></a>
						<a title="考研资讯" class="WordJustOneLine information-num">湖南大学2021考研群:<span>962488888</span></a>
						<a title="考研资讯" class="WordJustOneLine information-num">中南2021考研交流群:<span>950788888</span></a>
						<a title="考研资讯" class="WordJustOneLine information-num">在职考研交流群	:<span>950788888</span></a>
						<div><img src="<?=$file_url?>/static/img/information-code.png" data-img_name="information-code.png" alt="文都考研二维码" title="文都考研二维码"/></div>
					</div>
				</div>
			</div>
			
		</div>
		
	</section>


</div>
<!--结束-模块页内容-->


<!--开始-页面js-->
<script>

</script>
<script>
    // 页面数据入口，如有动态数据渲染，请以此函数为调用作为开始
    function page_data_init(){
        console_log("开始渲染数据");
		let news_info_id = all.getQueryString("news_info_id")
		getDetailNews(news_info_id)
    }
	
	//获取分页数据
	function getDetailNews(news_info_id ){
		let params = {
			method:'POST',
			url: "<?=$api_url?>"+"app/that_news" ,
			data :{
				app_class:'web',
				user_token:'token',
				news_info_id:news_info_id  
			},
			successfn:function(res){
				let jsonRes = $.parseJSON( res );
				console_log(jsonRes)
				let content = jsonRes.content
				addDom(content)
				
			}
			
		}
		all.sendAjax(params)
	}
	function addDom(content){
		let title = content.title
		let times = all.getTime(content.create_time)
		let author = content.author
		$('.information-show').append(content.content)
		$('#title').text(title)
		let html = `${times[0]}年${times[1]}月${times[2]}日`
		$('.time').text(html)
		$('.author').text(author)
	}
	
	

</script>
<!--结束-页面js-->


<?php
include $page_path.'/common/must.php';
include $page_path.'/common/foot.php';
?>

