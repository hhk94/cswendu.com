<?php
$title = '考研社区'; // 模块页标题，每个页面自定义
$page_path = dirname(__FILE__); // 项目index的根目录
include $page_path.'/common/head.php';
include $page_path.'/common/nav.php';
?>
<style>
	
	
	
	
	
	
	
	
	
	
	
</style>
<!--开始-模块页内容-->
<div class="view-section clear  ask" id="view-main">
<!--面包屑导航-->
    <div class="nav-top-div select-none border-bottom-0">
        <div class="width-1200-center">
            <div class="dir-div roll-txt">
                <i class="fa fa-home"></i>
                <a class="dir-a" href="<?=$file_url?>home.php?route=nav&nav=home" target="_self" title="文都首页">文都首页</a>
                <i class="fa fa-angle-right dir-fa"></i>
                <a class="dir-a" href="<?=$file_url?>information.php?route=nav&nav=information" target="_self" title="考研资讯">考研资讯</a>
            </div>
        </div>
    </div>
    <section class="center">
		<div class="width-1200-center">
			<div class="center-body">
				<h1 class="title">考研社区
					
				</h1>
				
				<div class="list list-ask">
					<a class="list-ask-item" href="#" target="_blank">
						<h1 class="item-title">文都考研班面授怎么样?如何选择合适自己的面授课程?</h1>
						<div class="item-desc">2020考研已经拉开帷幕，为了让考研学子们实现既定目标，除了文都网校的课程外，文都线下根据考生们的不同情况，也开设了灵活多样的面授...</div>
						<p class="item-time"> <i class="fa fa-clock-o" aria-hidden="true"></i>2019-10-*31</p>
					</a>
				</div>
				
				<div class="information-page-body">
					<div class="information-page" id="information-page"></div>
				</div>
			</div>
			<div class="right">
				<div class="right-top">
					<img src="<?=$file_url?>/static/img/information-right-top-banner1.jpg" data-img_name="information-right-top-banner1.jpg" alt="文都考研banner" title="文都考研banner"/>
				</div>
				<div class="hot-recommend">
					<h1>热点推荐</h1>
					<div class="list hot-news-list">
						<a href="./kaoyankecheng.php?route=nav&nav=kaoyankecheng" target="_blank" title="考研资讯" class="WordJustOneLine">研招统考预报名5个问题请关注</a>
						<a href="./kaoyankecheng.php?route=nav&nav=kaoyankecheng" target="_blank" title="考研资讯" class="WordJustOneLine">研招统考预报名5个问题请关注</a>
						<a href="./kaoyankecheng.php?route=nav&nav=kaoyankecheng" target="_blank" title="考研资讯" class="WordJustOneLine">研招统考预报名5个问题请关注</a>
						<a href="./kaoyankecheng.php?route=nav&nav=kaoyankecheng" target="_blank" title="考研资讯" class="WordJustOneLine">研招统考预报名5个问题请关注</a>
					</div>
				</div>
				<div class="hot-communication">
					<h1>研友交流</h1>
					<div class="list">
						<a title="考研资讯" class="WordJustOneLine information-num">湖南考研学习群 :<span>603615074</span></a>
						<a title="考研资讯" class="WordJustOneLine information-num">农大21考研学员群:<span>897178755</span></a>
						<a title="考研资讯" class="WordJustOneLine information-num">2021林科大官方群:<span> 1023382939</span></a>
						<a title="考研资讯" class="WordJustOneLine information-num">湖师大2021考研群:<span>1005752702</span></a>
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
	var [limit,pages] = [7,1];
	
    function page_data_init(){
        console_log("开始渲染数据");
	
		
		// getBanner()
		getAskList(limit,pages)
		geAllArea()
		getHot()
		
    }

	
	//获取分页数据
	function getAskList(limit,pages){
		let params = {
			method:'POST',
			url: "<?=$api_url?>"+"app/list_ask_question" ,
			data :{
				app_class:'web',
				user_token:window.token,
				ask_question_id:'all',
				page:pages,
				limit:limit
			},
			successfn:function(res){
				let jsonRes = $.parseJSON( res );
				console_log(jsonRes)
				let content = jsonRes.content
				itemAdd(content)
				$("#information-page").sPage({
				    page:jsonRes.paging.page,//当前页码
				    pageSize:jsonRes.paging.limit,//每页显示多少条数据，默认10条
				    total:jsonRes.paging.total,//数据总条数,后台返回
				    backFun:function(page){
				        //点击分页按钮回调函数，返回当前页码
						
				        getAskList(limit,page);
				    }
				});
			}
			
		}
		all.sendAjax(params)
	}
	function itemAdd(content){
		//列表清空
		$('.list-ask').html('')
		$.isArray(content)&&content.forEach((item,index)=>{
			
			let times = all.getTime(item.create_time)
			// console_log(times)
			
			
			let html = `
			<a class="list-ask-item" href="<?=$file_url?>detail/detail-community.php?route=nav&nav=ask&ask_question_id=${item.ask_question_id}" target="_blank">
				<h1 class="item-title">${item.ask_title}</h1>
				<div class="item-desc">${item.ask_description}</div>
				<p class="item-time"> <i class="fa fa-clock-o" aria-hidden="true"></i>${times}</p>
			</a>`
			$('.list-ask').append(html)
		})
		
		
	}

//获取热门新闻
	function getHot(){
		let params = {
			method:'POST',
			url: "<?=$api_url?>"+"app/hot_news" ,
			data :{
				app_class:'web',
				user_token:window.token,
				page:1,
				limit:6
			},
			successfn:function(res){
				let jsonRes = $.parseJSON( res );
				console_log(jsonRes)
				let content = jsonRes.content
				getHotAddHot(content)
				
			}
			
		}
		all.sendAjax(params)
	}
	//热门新闻插入
	function getHotAddHot(content){
		$('.hot-news-list').html('')
		$.isArray(content)&&content.forEach((item,index)=>{
			let html = `<a href="<?=$file_url?>detail/detail-information.php?route=nav&nav=kaoyanInformation&
			news_info_id=${item.news_info_id}" target="_blank" title="考研资讯" class="WordJustOneLine">${item.title}</a>`
			
			 $('.hot-news-list').append(html)
			
		})
	}
</script>
<!--结束-页面js-->


<?php
include $page_path.'/common/must.php';
include $page_path.'/common/foot.php';
?>

