<?php
$title = '湖南文都首页'; // 模块页标题，每个页面自定义
$page_path = dirname(__FILE__); // 项目index的根目录
include $page_path.'/common/head.php';
include $page_path.'/common/nav.php';
?>
<style>
	.swiper-container {
	  width: 100%;
	  height: 100%;
	}
	.swiper-slide {
		
		font-size: 18px;
		/* background: paleturquoise; */
		
	  /* Center slide text vertically */
	 
	}
	.swiper-slide>img{
		width: 100%;
	}
</style>

<!--开始-模块页内容-->
<section class="view-section clear wendu-home" id="view-main">

    <div class="banner-div select-none">
        <div class="banner-slider-div home-banner">
			<div class="swiper-container homeBanner-swiper-container">
			  <div class="swiper-wrapper homeBanner-swiper-wrapper">
			    <div class="swiper-slide">Slide 1</div>
			    <div class="swiper-slide"><a href="" target="_blank" title="文都banner"></a></div>
			  </div>
			  <!-- Add Pagination -->
			  <div class="swiper-pagination homeBanner-swiper-pagination"></div>
			</div>
			<script>
			  
			</script>
        </div>
        <!--<div class="banner-info-div width-1200-center hide"></div>-->

        <!---->
        <div class="show-imp-info select-text">
            <div class="show-imp-info-cell">
                <h4 class="show-imp-info-title">鹰飞集训营<span class="show-imp-info-span">全日制</span></h4>
                <ul class="ul-style">
                    <li class="show-imp-info-li click"><a href="<?=$file_url?>detail/detail-full-year.php?route=nav&nav=training" title="集训营班" target="_blank">全年集训</a></li>
                    <li class="show-imp-info-li click"><a href="<?=$file_url?>detail/detail-full-year.php?route=nav&nav=training" title="集训营班" target="_blank">半年集训</a></li>
                    <li class="show-imp-info-li click"><a href="<?=$file_url?>detail/detail-full-year.php?route=nav&nav=training" title="集训营班" target="_blank">秋季集训</a></li>
                    <li class="show-imp-info-li click"><a href="<?=$file_url?>detail/detail-full-year.php?route=nav&nav=training" title="集训营班" target="_blank">冲刺集训</a></li>
                    <li class="show-imp-info-li click"><a href="<?=$file_url?>detail/detail-full-year.php?route=nav&nav=training" title="集训营班" target="_blank">暑假集训</a></li>
                    <li class="show-imp-info-li click"><a href="<?=$file_url?>detail/detail-winter-vacation.php?route=nav&nav=training" title="集训营班" target="_blank">寒假硕士</a></li>
                    <li class="show-imp-info-li click"><a href="<?=$file_url?>detail/detail-reexamination.php?route=nav&nav=training" title="集训营班" target="_blank">2020复试营</a></li>
                    <li class="show-imp-info-li click"><a href="<?=$file_url?>detail/detail-study-again.php?route=nav&nav=training" title="集训营班" target="_blank">二战集训营</a></li>

                    <li class="clear"></li>
                </ul>
            </div>
            <div class="show-imp-info-cell">
                <h4 class="show-imp-info-title">彩虹卡系列<span class="show-imp-info-span">全日制</span></h4>
                <ul class="ul-style">
                    <li class="show-imp-info-li click"><a href="<?=$file_url?>detail/detail-rainbow-card.php?route=nav&nav=2021" title="2021考研" target="_blank">飞跃彩虹卡</a></li>
                    <li class="show-imp-info-li click"><a href="<?=$file_url?>detail/detail-rainbow-card.php?route=nav&nav=2021" title="2021考研" target="_blank">绽放彩虹卡</a></li>
                    <li class="show-imp-info-li click"><a href="<?=$file_url?>detail/detail-rainbow-card.php?route=nav&nav=2021" title="2021考研" target="_blank">魔力彩虹卡</a></li>
                    <li class="show-imp-info-li click"><a href="<?=$file_url?>detail/detail-rainbow-card.php?route=nav&nav=2021" title="2021考研" target="_blank">菁英彩虹卡</a></li>

                    <li class="clear"></li>
                </ul>
            </div>
            <div class="show-imp-info-cell">
                <h4 class="show-imp-info-title">精品定制课<span class="show-imp-info-span">全日制</span></h4>
                <ul class="ul-style">
                    <li class="show-imp-info-li click"><a href="<?=$file_url?>detail/detail-onwork.php?route=nav&nav=workindex" title="在职考研" target="_blank">考研1V1</a></li>
                    <li class="show-imp-info-li click"><a href="<?=$file_url?>detail/detail-onwork.php?route=nav&nav=workindex" title="在职考研" target="_blank">在职考研</a></li>
                    <li class="show-imp-info-li click"><a href="<?=$file_url?>detail/detail-onwork.php?route=nav&nav=workindex" title="在职考研" target="_blank">教育学定向</a></li>
                    <li class="show-imp-info-li click"><a href="<?=$file_url?>detail/detail-onwork.php?route=nav&nav=workindex" title="在职考研" target="_blank">法律(非法学)定向</a></li>

                    <li class="clear"></li>
                </ul>
            </div>

        </div>

        <!---->
        <div class="show-imp-sub select-text">
			<div class="show-imp-sub-body">
				<div class="show-imp-sub-1">距离<span class="countdown-year">2020</span>考研还有</div>
				<div class="show-imp-sub-2"><span class="countdown-num">555</span>天</div>
				<div class="show-imp-sub-3">时间紧张而珍贵，把握现在才最重要，马上报名吧！</div>
			</div>
            <div class="show-imp-sub-4">
                <div class="input-border"></div>
                <i class="fa fa-user fa-1x input-fa-icon"></i>
                <input class="baoming-name baoming-input" type="text" maxlength="5" placeholder="您的称呼：" />
            </div>
            <div class="show-imp-sub-4">
                <div class="input-border"></div>
                <i class="fa fa-phone fa-1x input-fa-icon"></i>
                <input class="baoming-tel baoming-input" type="text" maxlength="11" placeholder="您的手机号：" />
            </div>
            <div class="show-imp-sub-5">
                <span class="zixun-btn click">立即咨询</span>
                <span class="baoming-btn click">我要报名</span>
            </div>
        </div>

    </div>

    <!---->
    <div class="width-1200-center bg-white">
        <div class="padding-lr-15">
            <div class="description-item-div">
                <div class="description-item">
                    <img src="<?=$file_url?>static/img/home-1.png" class="description-icon" data-img_name="home-1.png" title="课程" alt="课程"/>
                    <div class="description-title">
                        <div>配合学生需求</div>
                        <div>匹配合适课程</div>
                    </div>
                </div>
                <div class="description-item">
                    <img src="<?=$file_url?>static/img/home-2.png" class="description-icon" data-img_name="" title="" alt="师资"/>
                    <div class="description-title">
                        <div>千人师资团队</div>
                        <div>全程专业服务</div>
                    </div>
                </div>
                <div class="description-item">
                    <img src="<?=$file_url?>static/img/home-3.png" class="description-icon" data-img_name="" title="" alt="口碑"/>
                    <div class="description-title">
                        <div>20年品牌公信</div>
                        <div>为考研而生</div>
                    </div>
                </div>
                <div class="description-item">
                    <img src="<?=$file_url?>static/img/home-4.png" class="description-icon" data-img_name="" title="" alt="校区"/>
                    <div class="description-title">
                        <div>六大集训营</div>
                        <div>十八大校区</div>
                    </div>
                </div>

                <div class="clear"></div>
            </div>

        </div>
    </div>

    <!---->
    <div class="width-1200-center bg-white home-cell">
        <div class="hot-course-title flex-center">
            <h3 class="hot-course-title-txt">热报课程</h3>
        </div>

        <div class="course-div">
            <!---->
            <div class="course-item">
				<a href="<?=$file_url?>detail/detail-winter-vacation.php?route=nav&nav=training" target="_blank">
					<img src="<?=$file_url?>static/img/special-cover4.png" class="hot-course-cover" data-img_name="special-cover4.png" title="课程海报" alt="课程海报" />
				</a>
                <div class="clear"></div>
                <div class="hot-course-content">
                    <div class="hot-course-name">2021寒假集训营</div>
                    <div class="hot-course-description">特色：8天7晚，全程免费住宿</div>
                    <div class="hot-course-info">开营时间：2021/15-2021/1/12</div>
                    <span class="hot-course-ask click">免费咨询</span>
                </div>
            </div>
            <!---->
            <div class="course-item">
				<a href="<?=$file_url?>detail/detail-reexamination.php?route=nav&nav=training" target="_blank">
					<img src="<?=$file_url?>static/img/detail-teacher-img2.jpg" class="hot-course-cover" data-img_name="detail-teacher-img2.jpg" title="课程海报" alt="课程海报" />
				</a>
                
                <div class="clear"></div>
                <div class="hot-course-content">
                    <div class="hot-course-name">2021复试营</div>
                    <div class="hot-course-description">特色：备战复试，抢占调剂先机</div>
                    <div class="hot-course-info">开营时间：2021年2月-2021年4月</div>
                    <span class="hot-course-ask click">免费咨询</span>
                </div>
            </div>
            <!---->
            <div class="course-item">
				<a href="<?=$file_url?>detail/detail-rainbow-card.php?route=nav&nav=training" target="_blank">
					<img src="<?=$file_url?>static/img/special-cover3.png" class="hot-course-cover" data-img_name="special-cover3.png" title="课程海报" alt="课程海报" />
				</a>
                
                <div class="clear"></div>
                <div class="hot-course-content">
                    <div class="hot-course-name">2021高端彩虹卡</div>
                    <div class="hot-course-description">特色：一对一专业课辅导，名校定向</div>
                    <div class="hot-course-info">开课时间：滚动开班，18大校区同步</div>
                    <span class="hot-course-ask click">免费咨询</span>
                </div>
            </div>
            <!---->
            <div class="course-item">
				<a href="<?=$file_url?>detail/detail-rainbow-card.php?route=nav&nav=training" target="_blank">
					<img src="<?=$file_url?>static/img/detail-teacher-img1.jpg" class="hot-course-cover" data-img_name="detail-teacher-img1.jpg" title="课程海报" alt="课程海报" />
				</a>
                
                <div class="clear"></div>
                <div class="hot-course-content">
                    <div class="hot-course-name">2021全年集训营</div>
                    <div class="hot-course-description">特色：全日制教学，全程督学辅导</div>
                    <div class="hot-course-info">上课时间：2021年3月-2021年12月</div>
                    <span class="hot-course-ask click">免费咨询</span>
                </div>
            </div>

            <!---->
           <!-- <div class="course-item">
                <img src="" class="hot-course-cover" data-img_name="" title="" alt="课程海报" />
                <div class="clear"></div>
                <div class="hot-course-content">
                    <div class="hot-course-name">2021考研集训营</div>
                    <div class="hot-course-description">特色：白天训练，全程免费住宿</div>
                    <div class="hot-course-info">不达目标即刻退费</div>
                    <span class="hot-course-ask click">免费咨询</span>
                </div>
            </div>
            <!---->
           <!-- <div class="course-item">
                <img src="" class="hot-course-cover" data-img_name="" title="" alt="课程海报" />
                <div class="clear"></div>
                <div class="hot-course-content">
                    <div class="hot-course-name">2021考研集训营</div>
                    <div class="hot-course-description">特色：白天训练，全程免费住宿</div>
                    <div class="hot-course-info">不达目标即刻退费</div>
                    <span class="hot-course-ask click">免费咨询</span>
                </div>
            </div> -->

            <div class="clear"></div>
        </div>
    </div>
<div class="width-1200-center bg-white home-cell">
        <h3 class="home-cell-title"><span class="home-cell-title-span">走进文都</span></h3>
        <div class="home-cell-content">
            <div class="wendu-left">
                <div class="wendu-1-content">
					<a href="">
						 <img src="./static/img/home-news-left.jpg"  data-img_name="home-news-left.jpg" title="考研流程" alt="考研流程"/>
					</a>
					
                </div>
            </div>
            <div class="wendu-news">
                <div class="top-news-box">
						<div class="top-news-one">
							<!-- <a href=""  target="_blank">
								<div class="news-title-ok select-none">今日头条<i class="fa fa-volume-up fa-left-padding"></i></div>
								<div class="news-title-show">2020年中国青年政治学院考研现场确认</div>
								<div class="clear"></div>
							</a> -->
						</div>
                    <ul class="wendu-news-ul ul-style">
                        <li class="wendu-news-li"><a href="" target="_blank" title="文都资讯"><span class="wendu-news-span">[考研资讯]</span>新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题</a></li>
                    </ul>
                </div>
                <div class="other-news-box">
                    <div class="other-news-title select-none">考研相关知识点梳理</div>
                    <ul class="wendu-news-ul-other ul-style">
                       <!-- <li class="wendu-news-li"><a href="" target="_blank" title="文都资讯"><span class="wendu-news-span">考研英语|</span>新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题</a></li>
                        <li class="wendu-news-li"><span class="wendu-news-span">考研硕士|</span>新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题</li> -->
                    </ul>
                </div>
            </div>
            <div class="wendu-right">
                <div class="wendu-3-content">
                    <div class="wendu-3-title select-none"><img class="earphone-icon" src="./static/img/earphone.png" data-img_name="earphone" alt="icon"/>考研资料下载</div>
					<div class="download-body">
						<a href="" target="_blank" title="热门下载"><i class="fa fa-file-pdf-o"></i> <span class="WordJustOneLine">2013392931文都考研词汇表</span><i class="fa fa-upload"></i></a>
					</div>
                </div>
				<div class="home-download-banner">
					<a href="#">
						<img src="<?=$file_url?>/static/img/home-download-bottom-banner.jpg" data-img_name="home-download-bottom-banner.jpg" alt="文都考研banner" title="文都考研banner"/>
					</a>
					
				</div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    
	<!---->
	<div class="width-1200-center bg-white home-cell">
	    <h3 class="home-cell-title"><span class="home-cell-title-span">考研社区</span></h3>
	    <div class="home-cell-content">
	        <ul class="wendu-com-left ul-style">
	            <li class="wendu-com-li">
	                <img src="" class="com-cover" data-img_name="" title="" alt="封面图"/>
	                <div class="com-txt">
	                    <h3 class="com-title">这是标题这是标题这是标题这是标题，这是标题这是标题这是这是标题这是这是标题这是</h3>
	                    <p class="com-summary">摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要</p>
	                    <a class="com-a click" href="#" title="详细内容-">更多内容</a>
	                </div>
	
	                <div class="clear"></div>
	            </li>
	            <li class="wendu-com-li">
	                <img src="" class="com-cover" data-img_name="" title="" alt="封面图"/>
	                <div class="com-txt">
	                    <h3 class="com-title">这是标题这是标题这是标题这是标题，这是标题这是标题这是这是标题这是这是标题这是</h3>
	                    <p class="com-summary">摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要</p>
	                    <a class="com-a click" href="#" title="详细内容-">更多内容</a>
	                </div>
	
	                <div class="clear"></div>
	            </li>
	            <li class="wendu-com-li">
	                <img src="" class="com-cover" data-img_name="" title="" alt="封面图"/>
	                <div class="com-txt">
	                    <h3 class="com-title">这是标题这是标题这是标题这是标题，这是标题这是标题这是这是标题这是这是标题这是</h3>
	                    <p class="com-summary">摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要摘要</p>
	                    <a class="com-a click" href="#" title="详细内容-">更多内容</a>
	                </div>
	
	                <div class="clear"></div>
	            </li>
	
	
	        </ul>
	        <div class="wendu-com-right">
				<a href="#">
					<img src="<?=$file_url?>/static/img/home-ask-right-banner1.jpg"  data-img_name="home-ask-right-banner1.jpg" title="封面图" alt="封面图"/>
				</a>
				
	        </div>
	
	        <div class="clear"></div>
	    </div>
	
	</div>
    <!--流程-->
    <div class="width-1200-center bg-white home-cell">
        <h3 class="home-cell-title"><span class="home-cell-title-span">考研流程</span></h3>
        <div class="home-cell-content select-none">
            <img src="./static/img/kaoyanliucheng.png" class="flow-img" data-img_name="kaoyanliucheng.png" title="考研流程" alt="考研流程"/>
        </div>
    </div>
<!--文都名师-->
    <div class="width-1200-center bg-white home-cell">
        <h3 class="home-cell-title"><span class="home-cell-title-span">文都名师</span></h3>
       <!-- <div class="home-cell-content teacher-content clearfix">
            <div class="teacher-item-div">
                <img src="" class="teacher-item-cover" data-img_name="" title="（xxx）" alt="名师封面照"/>
                <div class="clear"></div>
                <div class="teacher-item-name">张三</div>
                <div class="teacher-item-txt">很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大，很伟大很伟大。</div>
            </div>
            <div class="clear"></div>
        </div> -->
		<div class="home-cell-content teacher-content clearfix">
			<div class="swiper-container teacher-swiper-container" style="padding: 0 20px;">
			  <div class="swiper-wrapper teacher-swiper-wrapper">
				<a href="#" class="swiper-slide">Slide 1</a>
				<a href="#" class="swiper-slide">Slide 1</a>
				<a href="#" class="swiper-slide">Slide 1</a>
				<a href="#" class="swiper-slide">Slide 1</a>
			  </div>
			  <!-- Add Pagination -->
			  <div class="swiper-pagination teacher-swiper-pagination"></div>
			  <div class="swiper-button-next teacher-swiper-button-next"></div>
			  <div class="swiper-button-prev teacher-swiper-button-prev"></div>
			</div>
		   
		</div>
		<script>
		  
		</script>
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
		getCountDown()
		getTeacherHot()
		getBanner()
		getHotFile()
		geAllArea()
		getNewsType()
		getHotAsk()
		getCourseTypeForSpacial()
    }
	//获取专题页内容 - 并插入
	function getCourseTypeForSpacial(){
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
					if(item.course_class_name =='热门课程（用于首页和推荐）'){
						let course_class_id = item.course_class_id
						getList_Spacial(course_class_id)
					}			
				})
			}
		}
		all.sendAjax(params)
	}
	//插入专题页
	function getList_Spacial(course_class_id){
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
				$('.course-div').html('')
				$.isArray(content)&&content.forEach((item,index)=>{
					let html = ` 
						<div class="course-item">
							<a href="${item.course_url}" target="_blank">
								<img src="${item.course_cover}" class="hot-course-cover"  title="课程海报" alt="课程海报" />
							</a>
							<div class="clear"></div>
							<div class="hot-course-content">
								<div class="hot-course-name">${item.course_name}</div>
								<div class="hot-course-description">${item.course_slogan}</div>
								<div class="hot-course-info">${item.course_description}</div>
								<span class="hot-course-ask click">免费咨询</span>
							</div>
						</div>`
					$('.course-div').append(html)
				})
			},
			dealWithEmptyDom:function(){
			}
		}
		all.dealWithDomAfterAjax(params)
	}
	//banner轮播图
	function bannerSwiperInit(){
		var swiper = new Swiper('.homeBanner-swiper-container', {
		  pagination: {
		    el: '.homeBanner-swiper-pagination',
		  },
		  loop: true,
		  autoplay: {
		    delay: 2500,
		    disableOnInteraction: false,
		  },
		});
	}
	//热门老师轮播图
	function hotTeacherSwiperInit(){
		var swiper = new Swiper('.teacher-swiper-container', {
		  slidesPerView: 4,
		  spaceBetween: 30,
		  pagination: {
		    el: '.teacher-swiper-pagination',
		    clickable: true,
		  },
		  navigation: {
		    nextEl: '.teacher-swiper-button-next',
		    prevEl: '.teacher-swiper-button-prev',
		  },
		});
	}
	//获取home-banner
	function getBanner(){
		let datas = {
			url:"<?=$api_url?>" + 'app/get_array_cover_img',
			key:'home_slider',
			token:window.token,
			changeDomFn:function(content){
				$('.homeBanner-swiper-wrapper').html('');
				$.isArray(content)&&content.forEach((item,index)=>{
					
					let img_url = all.changeImgUrlForclear(item.img,"x4")
					
					let html = `<div class="swiper-slide"><a href="${item.jump}" target="_blank" title="文都banner"><img src="${img_url}" alt=""></a></div>`
					$('.homeBanner-swiper-wrapper').append(html)
				})
				bannerSwiperInit()
			},
			dealWithEmptyDom:function(){
				$('.homeBanner-swiper-wrapper').html('');
			}
		}
		all.getBanner(datas)
	}
	//获取热门老师
	function getTeacherHot(){
		let params = {
			method:'POST',
			url:"<?=$api_url?>" + 'app/teacher_hot',
			text:{
				textWarn:'名师列表请求成功，但暂无数据',
				textError:'名师列表请求失败',
			},
			data : {
				app_class:'web',
				user_token:window.token,
				teacher_id:'hot'
			},
			changeDomFn:function(content){
				$('.teacher-swiper-wrapper').html('')
				$.isArray(content)&&content.forEach((item,index)=>{
					let html = `<a href="<?=$file_url?>detail/detail-teacher.php?route=nav&nav=kaoyanInformation&teacher_id=${item.teacher_id}" target="_blank" title="热门名师" class="teacher-item-div swiper-slide">
						<img src="${item.teacher_cover}" class="teacher-item-cover" data-img_name="" title="${item.teacher_name}" alt="名师封面照"/>
						<div class="clear"></div>
						<div class="teacher-item-name">${item.teacher_name}</div>
						<div class="teacher-item-txt">${item.teacher_grading}</div>
					</a>`
					// console_log(html)
					 $('.teacher-swiper-wrapper').append(html)
				})
				hotTeacherSwiperInit()
				
			},	
			dealWithEmptyDom:function(){
				$('.teacher-content').html('')
			}
		}
		all.dealWithDomAfterAjax(params)
	}
	
	//获取倒计时
	function getCountDown(){
		let params = {
			method:'POST',
			url:"<?=$api_url?>" + 'app/get_countdown_dom',
			text:{
				textWarn:'请求成功，但暂无数据',
				textError:'请求失败',
			},
			data : {
				app_class:'web',
				user_token:window.token,
			},
			changeDomFn:function(content){
					
					 $('.show-imp-sub-body').html(content)	
			},	
			dealWithEmptyDom:function(){
				$('.teacher-content').html('')
			}
		}
		all.dealWithDomAfterAjax(params)
	}
	//获取新闻分类
	function getNewsType(){
		let params = {
			method:'POST',
			url: "<?=$api_url?>"+"app/list_news_class" ,
			text:{
				textWarn:'请求成功，新闻分类暂无数据',
				textError:'新闻分类请求失败',
			},
			data :{
				app_class:'web',
				user_token:window.token
			},
			changeDomFn:function(content){
				console_log(content)
				$.isArray(content)&&content.forEach((item,index)=>{
					if(item.class_name=='考研资讯'){
						getNewsList(item.news_class_id,item.class_name)
					}else if(item.class_name=='考研英语'){
						getNewsOther(item.news_class_id,item.class_name)
					}else if(item.class_name=='考研数学'){
						getNewsOther(item.news_class_id,item.class_name)
					}else if(item.class_name=='考研政治'){
						getNewsOther(item.news_class_id,item.class_name)
					}else if(item.class_name=='头条'){
						getTopNews(item.news_class_id,item.class_name)
					}
				})
			},
			dealWithEmptyDom:function(){
				
			}
		}
		all.dealWithDomAfterAjax(params)
	}
	//获取新闻列表
	function getNewsList(id,class_name){
		let params = {
			method:'POST',
			url: "<?=$api_url?>"+"app/list_news" ,
			text:{
				textWarn:'请求成功，'+class_name+'暂无数据',
				textError:class_name+'请求失败',
			},
			data :{
				app_class:'web',
				user_token:window.token,
				news_class_id:id,
				page:1,
				limit:6
			},
			changeDomFn:function(content){
				console_log(content)
				$('.wendu-news-ul').html('')
				$.isArray(content)&&content.forEach((item,index)=>{
					let html = `<li class="wendu-news-li"><a href="<?=$file_url?>detail/detail-information.php?route=nav&nav=kaoyanInformation&news_info_id=${item.news_info_id}" target="_blank" title="文都资讯">
					<span class="wendu-news-span">[${class_name}]</span>${item.title}</a></li>`
					 $('.wendu-news-ul').append(html)
					
				})
			},
			dealWithEmptyDom:function(){
				
			}
		}
		all.dealWithDomAfterAjax(params)
	}
	//获取单条新闻
	function getNewsOther(id,class_name){
		let params = {
			method:'POST',
			url: "<?=$api_url?>"+"app/list_news" ,
			text:{
				textWarn:'请求成功，'+class_name+'暂无数据',
				textError:class_name+'请求失败',
			},
			data :{
				app_class:'web',
				user_token:window.token,
				news_class_id:id,
				page:1,
				limit:1
			},
			changeDomFn:function(content){
				console_log(content)
				// $('.wendu-news-ul-other').html('')
				if($.isArray(content)&&content.length!=0){
					
				}
				$.isArray(content)&&content.forEach((item,index)=>{
					let html = `<li class="wendu-news-li">
					<a href="?=$file_url?>detail/detail-information.php?route=nav&nav=kaoyanInformation&news_info_id=${item.news_info_id}" target="_blank" title="文都资讯">
					<span class="wendu-news-span">${class_name}|</span>${item.title}</a></li>`
					$('.wendu-news-ul-other').append(html)
					
				})
			},
			dealWithEmptyDom:function(){
				
			}
		}
		all.dealWithDomAfterAjax(params)
	}
	//获取头条新闻
	function getTopNews(id,class_name){
		let params = {
			method:'POST',
			url: "<?=$api_url?>"+"app/list_news" ,
			text:{
				textWarn:'请求成功，'+class_name+'暂无数据',
				textError:class_name+'请求失败',
			},
			data :{
				app_class:'web',
				user_token:window.token,
				news_class_id:id
			},
			changeDomFn:function(content){
				console_log(content)
				// $('.wendu-news-ul-other').html('')
				if($.isArray(content)&&content.length!=0){
					
					let html = `
					<a href="<?=$file_url?>detail/detail-information.php?route=nav&nav=kaoyanInformation&news_info_id=${content[0].news_info_id}"  target="_blank">
						<div class="news-title-ok select-none">今日头条<i class="fa fa-volume-up fa-left-padding"></i></div>
						<div class="news-title-show">${content[0].title}</div>
						<div class="clear"></div>
					</a>`
					$('.top-news-one').append(html)
				}
			},
			dealWithEmptyDom:function(){
				
			}
		}
		all.dealWithDomAfterAjax(params)
	}
	//获取热门下载
	function getHotFile(){
		let params = {
			method:'POST',
			url: "<?=$api_url?>"+"app/hot_file" ,
			text:{
				textWarn:'请求成功，暂无数据',
				textError:'请求失败',
			},
			data :{
				app_class:'web',
				user_token:window.token,
				page:1,
				limit:7
			},
			changeDomFn:function(content){
				console_log(content)
				$('.download-body').html('')
				$.isArray(content)&&content.forEach((item,index)=>{
					let html = `<a href="<?=$file_url?>detail/detail-download.php?route=nav&nav=home&file_upload_id=${item.file_upload_id}" target="_blank" title="热门下载">
					<i class="fa fa-file-pdf-o"></i> 
					<span class="WordJustOneLine">${item.file_zh_name}</span>
					<i class="fa fa-upload"></i></a>`
					$('.download-body').append(html)
					
				})
			},
			dealWithEmptyDom:function(){
				
			}
		}
		all.dealWithDomAfterAjax(params)
	}
	//获取热门问答
	function getHotAsk(){
		let params = {
			method:'POST',
			url: "<?=$api_url?>"+"app/hot_ask_question" ,
			text:{
				textWarn:'请求成功，暂无数据',
				textError:'请求失败',
			},
			data :{
				app_class:'web',
				user_token:window.token,
				limit:3,
				page:1
			},
			changeDomFn:function(content){
				console_log(content)
				$('.wendu-com-left').html('')
				$.isArray(content)&&content.forEach((item,index)=>{
						let html = `<li class="wendu-com-li">
						    <img src="<?=$file_url?>static/img/home-ask-${index}.jpg" class="com-cover" title="" alt="封面图"/>
						    <div class="com-txt">
						        <h3 class="com-title">${item.ask_title}</h3>
						        <div class="com-summary">${item.ask_description}</div>
								<a target="_blank" class="com-a click" href="<?=$file_url?>detail/detail-community.php?route=nav&nav=home&ask_question_id=${item.ask_question_id}" title="详细内容-">查看详情</a>
						    </div>
						    <div class="clear"></div>
						</li>`
						$('.wendu-com-left').append(html)	
				})
			},
			dealWithEmptyDom:function(){
				
			}
		}
		all.dealWithDomAfterAjax(params)
	}
	//首页报名
	$('.baoming-btn').click(function(){
		let name = $('.baoming-name').val()
		let phone = $('.baoming-tel').val()
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
						user_info:name+"#@首页报名",
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

