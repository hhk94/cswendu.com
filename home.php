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
		background: paleturquoise;
		
	  /* Center slide text vertically */
	 
	}
	.swiper-slide>img{
		width: 100%;
	}
</style>

<!--开始-模块页内容-->
<section class="view-section clear" id="view-main">

    <div class="banner-div select-none">
        <div class="banner-slider-div home-banner">
			<div class="swiper-container">
			  <div class="swiper-wrapper homeBanner-swiper-wrapper">
			    <div class="swiper-slide">Slide 1</div>
			    <div class="swiper-slide"><a href="" target="_blank" title="文都banner"></a></div>
			  </div>
			  <!-- Add Pagination -->
			  <div class="swiper-pagination"></div>
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
                    <li class="show-imp-info-li click">全年集训</li>
                    <li class="show-imp-info-li click">半年集训</li>
                    <li class="show-imp-info-li click">秋季集训</li>
                    <li class="show-imp-info-li click">冲刺集训</li>
                    <li class="show-imp-info-li click">暑假集训</li>
                    <li class="show-imp-info-li click">寒假硕士</li>
                    <li class="show-imp-info-li click">2020复试营</li>
                    <li class="show-imp-info-li click">二战集训营</li>

                    <li class="clear"></li>
                </ul>
            </div>
            <div class="show-imp-info-cell">
                <h4 class="show-imp-info-title">彩虹卡系列<span class="show-imp-info-span">全日制</span></h4>
                <ul class="ul-style">
                    <li class="show-imp-info-li click">飞跃彩虹卡</li>
                    <li class="show-imp-info-li click">绽放彩虹卡</li>
                    <li class="show-imp-info-li click">魔力彩虹卡</li>
                    <li class="show-imp-info-li click">菁英彩虹卡</li>

                    <li class="clear"></li>
                </ul>
            </div>
            <div class="show-imp-info-cell">
                <h4 class="show-imp-info-title">精品定制课<span class="show-imp-info-span">全日制</span></h4>
                <ul class="ul-style">
                    <li class="show-imp-info-li click">考研1V1</li>
                    <li class="show-imp-info-li click">在职考研</li>
                    <li class="show-imp-info-li click">教育学定向</li>
                    <li class="show-imp-info-li click">法律(非法学)定向</li>

                    <li class="clear"></li>
                </ul>
            </div>

        </div>

        <!---->
        <div class="show-imp-sub select-text">
            <div class="show-imp-sub-1">距离<span class="countdown-year">2020</span>考研还有</div>
            <div class="show-imp-sub-2"><span class="countdown-num">555</span>天</div>
            <div class="show-imp-sub-3">时间紧张而珍贵，把握现在才最重要，马上报名吧！</div>
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
                <img src="" class="hot-course-cover" data-img_name="" title="" alt="课程海报" />
                <div class="clear"></div>
                <div class="hot-course-content">
                    <div class="hot-course-name">2021考研秋季集训营</div>
                    <div class="hot-course-description">特色：白天训练，全程免费住宿</div>
                    <div class="hot-course-info">开营时间：9/10-2/20</div>
                    <span class="hot-course-ask click">免费咨询</span>
                </div>
            </div>
            <!---->
            <div class="course-item">
                <img src="" class="hot-course-cover" data-img_name="" title="" alt="课程海报" />
                <div class="clear"></div>
                <div class="hot-course-content">
                    <div class="hot-course-name">2021考研专业课</div>
                    <div class="hot-course-description">特色：一对一辅导，面授直播可选</div>
                    <div class="hot-course-info">开营时间：9/10-2/20</div>
                    <span class="hot-course-ask click">免费咨询</span>
                </div>
            </div>
            <!---->
            <div class="course-item">
                <img src="" class="hot-course-cover" data-img_name="" title="" alt="课程海报" />
                <div class="clear"></div>
                <div class="hot-course-content">
                    <div class="hot-course-name">高端定制，彩虹卡系列</div>
                    <div class="hot-course-description">特色：白天训练，全程免费住宿</div>
                    <div class="hot-course-info">不达目标即刻退费</div>
                    <span class="hot-course-ask click">免费咨询</span>
                </div>
            </div>
            <!---->
            <div class="course-item">
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
            <div class="course-item">
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
            <div class="course-item">
                <img src="" class="hot-course-cover" data-img_name="" title="" alt="课程海报" />
                <div class="clear"></div>
                <div class="hot-course-content">
                    <div class="hot-course-name">2021考研集训营</div>
                    <div class="hot-course-description">特色：白天训练，全程免费住宿</div>
                    <div class="hot-course-info">不达目标即刻退费</div>
                    <span class="hot-course-ask click">免费咨询</span>
                </div>
            </div>

            <div class="clear"></div>
        </div>
    </div>

    <!---->
    <div class="width-1200-center bg-white home-cell">
        <h3 class="home-cell-title"><span class="home-cell-title-span">文都名师</span></h3>
        <div class="home-cell-content teacher-content clearfix">

            <!---->
            <div class="teacher-item-div">
                <img src="" class="teacher-item-cover" data-img_name="" title="（xxx）" alt="名师封面照"/>
                <div class="clear"></div>
                <div class="teacher-item-name">张三</div>
                <div class="teacher-item-txt">很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大，很伟大很伟大。</div>
            </div>

            <!---->
            <div class="teacher-item-div">
                <img src="" class="teacher-item-cover" data-img_name="" title="（xxx）" alt="名师封面照"/>
                <div class="clear"></div>
                <div class="teacher-item-name">张三</div>
                <div class="teacher-item-txt">很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大，很伟大很伟大。</div>
            </div>

            <!---->
            <div class="teacher-item-div">
                <img src="" class="teacher-item-cover" data-img_name="" title="（xxx）" alt="名师封面照"/>
                <div class="clear"></div>
                <div class="teacher-item-name">张三</div>
                <div class="teacher-item-txt">很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大，很伟大很伟大。</div>
            </div>

            <!---->
            <div class="teacher-item-div">
                <img src="" class="teacher-item-cover" data-img_name="" title="（xxx）" alt="名师封面照"/>
                <div class="clear"></div>
                <div class="teacher-item-name">张三</div>
                <div class="teacher-item-txt">很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大很伟大，很伟大很伟大。</div>
            </div>



            <div class="clear"></div>
        </div>

    </div>

    <!---->
    <div class="width-1200-center bg-white home-cell">
        <h3 class="home-cell-title"><span class="home-cell-title-span">考研流程</span></h3>
        <div class="home-cell-content select-none">
            <img src="./static/img/kaoyanliucheng.png" class="flow-img" data-img_name="kaoyanliucheng.png" title="考研流程" alt="考研流程"/>

        </div>

    </div>

    <!---->
    <div class="width-1200-center bg-white home-cell">
        <h3 class="home-cell-title"><span class="home-cell-title-span">走进文都</span></h3>
        <div class="home-cell-content">
            <div class="wendu-left">
                <div class="wendu-1-content">

                </div>
            </div>
            <div class="wendu-news">
                <div class="top-news-box">
                    <div>
                        <div class="news-title-ok select-none">今日头条<i class="fa fa-volume-up fa-left-padding"></i></div>
                        <div class="news-title-show">2020年中国青年政治学院考研现场确认</div>
                        <div class="clear"></div>
                    </div>
                    <ul class="wendu-news-ul ul-style">
                        <li class="wendu-news-li"><a href="" target="_blank" title="文都资讯"><span class="wendu-news-span">[考研资讯]</span>新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题</a></li>
                        <li class="wendu-news-li"><span class="wendu-news-span">[考研资讯]</span>新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题</li>
                        <li class="wendu-news-li"><span class="wendu-news-span">[考研资讯]</span>新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题</li>
                        <li class="wendu-news-li"><span class="wendu-news-span">[考研资讯]</span>新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题</li>
                        <li class="wendu-news-li"><span class="wendu-news-span">[考研资讯]</span>新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题</li>
                        <li class="wendu-news-li"><span class="wendu-news-span">[考研资讯]</span>新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题</li>
                    </ul>
                </div>
                <div class="other-news-box">
                    <div class="other-news-title select-none">考研相关知识点梳理</div>
                    <ul class="wendu-news-ul-other ul-style">
                       <!-- <li class="wendu-news-li"><a href="" target="_blank" title="文都资讯"><span class="wendu-news-span">考研英语|</span>新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题</a></li>
                        <li class="wendu-news-li"><span class="wendu-news-span">考研政治|</span>新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题</li>
                        <li class="wendu-news-li"><span class="wendu-news-span">考研数学|</span>新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题</li>
                        <li class="wendu-news-li"><span class="wendu-news-span">考研硕士|</span>新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题新闻标题标题</li> -->
                    </ul>
                </div>
            </div>
            <div class="wendu-right">
                <div class="wendu-3-content">
                    <div class="wendu-3-title select-none"><img class="earphone-icon" src="./static/img/earphone.png" data-img_name="earphone" alt="icon"/>试听课程</div>
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
		getTeacherHot()
		getBanner()
    }
	function bannerSwiperInit(){
		var swiper = new Swiper('.swiper-container', {
		  pagination: {
		    el: '.swiper-pagination',
		  },
		  loop: true,
		  autoplay: {
		    delay: 2500,
		    disableOnInteraction: false,
		  },
		});
	}
	//获取home-banner
	function getBanner(){
		let datas = {
			url:"<?=$api_url?>" + 'app/get_array_cover_img',
			key:'home_slider',
			changeDomFn:function(content){
				$('.homeBanner-swiper-wrapper').html('');
				$.isArray(content)&&content.forEach((item,index)=>{
					let html = `<div class="swiper-slide"><a href="${item.jump}" target="_blank" title="文都banner"><img src="${item.img}" alt=""></a></div>`
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
				user_token:'token',
				teacher_id:'hot'
			},
			changeDomFn:function(content){
				$('.teacher-content').html('')
				$.isArray(content)&&content.forEach((item,index)=>{
					let html = `<div class="teacher-item-div">
						<img src="${item.teacher_cover}" class="teacher-item-cover" data-img_name="" title="${item.teacher_name}" alt="名师封面照"/>
						<div class="clear"></div>
						<div class="teacher-item-name">${item.teacher_name}</div>
						<div class="teacher-item-txt">${item.teacher_grading}</div>
					</div>`
					 $('.teacher-content').append(html)
				})
			},	
			dealWithEmptyDom:function(){
				$('.teacher-content').html('')
			}
		}
		all.dealWithDomAfterAjax(params)
	}
	// getNewsList()
	getNewsType()
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
				user_token:'token'
				
			},
			changeDomFn:function(content){
				console.log(content)
				$.isArray(content)&&content.forEach((item,index)=>{
					if(item.class_name=='其他分类'){
						getNewsList(item.news_class_id,item.class_name)
					}else if(item.class_name=='手机数码'){
						getNewsOther(item.news_class_id,item.class_name)
					}else if(item.class_name=='厨房美食'){
						getNewsOther(item.news_class_id,item.class_name)
					}else if(item.class_name=='电脑办公'){
						getNewsOther(item.news_class_id,item.class_name)
					}else if(item.class_name=='星座算命'){
						getNewsOther(item.news_class_id,item.class_name)
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
				user_token:'token',
				news_class_id:id
			},
			changeDomFn:function(content){
				console.log(content)
				$('.wendu-news-ul').html('')
				$.isArray(content)&&content.forEach((item,index)=>{
					if(index<6){
						let html = `<li class="wendu-news-li"><a href="<?=$file_url?>detail/detail-information.php?route=nav&nav=kaoyanInformation&news_info_id=${item.news_info_id}" target="_blank" title="文都资讯">
						<span class="wendu-news-span">[${class_name}]</span>${item.title}</a></li>`
						 $('.wendu-news-ul').append(html)
					}
					
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
				user_token:'token',
				news_class_id:id
			},
			changeDomFn:function(content){
				console.log(content)
				// $('.wendu-news-ul-other').html('')
				if($.isArray(content)&&content.length!=0){
					let html = `<li class="wendu-news-li">
					<a href="<?=$file_url?>detail/detail-information.php?route=nav&nav=kaoyanInformation&news_info_id=${content[0].news_info_id}" target="_blank" title="文都资讯">
					<span class="wendu-news-span">${class_name}|</span>${content[0].title}</a></li>`
					$('.wendu-news-ul-other').append(html)
				}
			},
			dealWithEmptyDom:function(){
				
			}
		}
		all.dealWithDomAfterAjax(params)
	}
	
	//获取热门老师
	// function createTeacherHot(content){
	// 	$('.teacher-content').html('')
	// 	$.isArray(content)&&content.forEach((item,index)=>{
	// 		let html = `<div class="teacher-item-div">
 //                <img src="${item.teacher_cover}" class="teacher-item-cover" data-img_name="" title="${item.teacher_name}" alt="名师封面照"/>
 //                <div class="clear"></div>
 //                <div class="teacher-item-name">${item.teacher_name}</div>
 //                <div class="teacher-item-txt">${item.teacher_grading}</div>
 //            </div>`
	// 		 $('.teacher-content').append(html)
	// 	})
	// }
	// function getTeacherHot(){
	// 	let data = {
	// 		app_class:'web',
	// 		user_token:'token',
	// 		teacher_id:'hot'
	// 	}
	// 	let params = {
	// 		method:'POST',
	// 		data:data,
	// 		url:"<?=$api_url?>" + 'app/teacher_hot',
	// 		successfn:function(res){
	// 			let jsonRes = $.parseJSON( res );
	// 			all.log(jsonRes)
	// 			if(jsonRes.state==0){
	// 				let params={
	// 					type:'success',
	// 					text:'名师列表请求成功，暂无数据',
	// 					timeout:2000
	// 				}
	// 				all.message(params)
	// 			}else if(jsonRes.state==1){
	// 				createTeacherHot(jsonRes.content)
	// 			}
	// 		}
	// 	}
	// 	all.sendAjax(params)
	// }
	

</script>
<!--结束-页面js-->


<?php
include $page_path.'/common/must.php';
include $page_path.'/common/foot.php';
?>

