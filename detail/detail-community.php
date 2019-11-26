<?php
$title = '考研资讯详情'; // 模块页标题，每个页面自定义
$page_path = dirname(dirname(__FILE__)); // 项目index的根目录
include $page_path.'/common/head.php';
include $page_path.'/common/nav.php';
?>
<style>
	
	
	
	
	
	
	
	
	
	
	
</style>
<!--开始-模块页内容-->
<div class="view-section clear detail-community" id="view-main">
<!--面包屑导航-->
    <div class="nav-top-div select-none border-bottom-0">
        <div class="width-1200-center">
            <div class="dir-div roll-txt">
                <i class="fa fa-home"></i>
                <a class="dir-a" href="<?=$file_url?>information.php?route=nav&nav=kaoyanInformation" target="_self" title="文都资讯">文都考研</a>
                <i class="fa fa-angle-right dir-fa"></i>
                <a class="dir-a" href="#" target="_self" title="考研社区">考研社区</a>
				<i class="fa fa-angle-right dir-fa"></i>
				<a class="dir-a" href="#" target="_self" title="考研详情">详情</a>
            </div>
        </div>
    </div>
    <section class="center">
		<div class="width-1200-center">
			<div class="center-body">
				<h1 class="title" id="title">文都考研一堆一标准是咋样的</h1>
				<h2 class="detail-community-ask">
					<span>问题描述：</span>
					<span class="ask_description">休息休休息休休息休休息休休息休休息休休息休休息休休息休休息休休息休休息休休息休休息休休息休休息休休息休休息休休息休休息休休息休息</span>
					
				</h2>
				<h3 class="sectitle">
					<span >提问人: <span class="author">教育部</span> </span>
					<span class="time">1121</span>
					
				</h3>
				<div class="list information-show">
					<div class="detail-community-body">
						<div class="anser-img">
							<img src="<?=$file_url?>/static/img/detail-community-1.png" data-img_name="detail-community-1.png" alt="文都考研" title="文都考研"/>
						</div>
						<div class="detail-community-best-answer detail-community-answer-item">
							<div class="detail-community-answer">
								<h1 class="anser-name">1111</h1>
								<h2 class="anser-time">2222</h1>
							</div>
							<div class="anser-body">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</div>
						</div>
						
						<div class="anser-img">
							<img src="<?=$file_url?>/static/img/detail-community-2.png" data-img_name="detail-community-2.png" alt="文都考研" title="文都考研"/>
						</div>
						<div class="other-answer-append">
							<!-- <div class="detail-community-best-answer detail-community-answer-item">
								<div class="detail-community-answer">
									<h1 class="anser-name">1111</h1>
									<h2 class="anser-time">2222</h1>
								</div>
								<div class="anser-body">xxxxxxxxxxxxxxxxxxxxxxxxxx</div>
							</div> -->
							
						</div>
					
					</div>
					
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
    function page_data_init(){
        console_log("开始渲染数据");
		geAllArea()
		getHot()
		let ask_question_id = all.getQueryString("ask_question_id")
		getDetailCommunity(ask_question_id)
		
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
	
	//获取此问题数据
	function getDetailCommunity(ask_question_id){
		let params = {
			method:'POST',
			url: "<?=$api_url?>"+"app/that_ask_question" ,
			data :{
				app_class:'web',
				user_token:window.token,
				ask_question_id:ask_question_id
			},
			successfn:function(res){
				let jsonRes = $.parseJSON( res );
				console_log(jsonRes)
				let content = jsonRes.content
				addDom(content)
				let ask_question_id = content.ask_question_id
				getDetailAnswer(ask_question_id)
			}
			
		}
		all.sendAjax(params)
	}
	//处理此问题dom
	function addDom(content){
		let ask_title = content.ask_title
		let times = all.getTime(content.create_time)
		let ask_user_name = content.ask_user_name
		let ask_description = content.ask_description
		
		
		$('#title').text(ask_title)
		let html = `${times[0]}年${times[1]}月${times[2]}日`
		$('.time').text(html)
		$('.author').text(ask_user_name)
		$('.ask_description').append(ask_description)
	}	
	//获取此问题回答
	function getDetailAnswer(ask_question_id){
		let params = {
			method:'POST',
			url: "<?=$api_url?>"+"app/list_answer" ,
			data :{
				app_class:'web',
				user_token:window.token,
				ask_question_id:ask_question_id
				
			},
			successfn:function(res){
				let jsonRes = $.parseJSON( res );
				console_log(jsonRes)
				let content = jsonRes.content
				answerAdd(content)
			}
			
		}
		all.sendAjax(params)
	}
	//问题回答添加
	function answerAdd(content){
		$.isArray(content.other_answer)&&content.other_answer.forEach((item,index)=>{
			let times = all.getTime(item.create_time)
			let html = `<div class=" detail-community-answer-item">
								<div class="detail-community-answer">
									<h1 class="anser-name">${item.answer_user_name}</h1>
									<h2 class="anser-time">${times[0]}年${times[1]}月${times[2]}日</h1>
								</div>
								<div class="anser-body">${item.answer_content}</div>
							</div>`
			$('.other-answer-append').append(html)
		})
		if($.isArray(content.best_answer)&&content.best_answer.length!=0){
			$('.detail-community-best-answer .anser-name').text(content.best_answer[0].answer_user_name)
			let times = all.getTime(content.best_answer[0].create_time)
			$('.detail-community-best-answer .anser-time').text(times[0]+'年'+times[1]+'月'+times[2]+'日')
			$('.detail-community-best-answer .anser-body').html(content.best_answer[0].answer_content)
			
		}
		
	}

</script>
<!--结束-页面js-->


<?php
include $page_path.'/common/must.php';
include $page_path.'/common/foot.php';
?>

