<?php
$title = '考研资讯'; // 模块页标题，每个页面自定义
$page_path = dirname(dirname(__FILE__)); // 项目index的根目录
include $page_path.'/common/head.php';
include $page_path.'/common/nav.php';
?>
<style>
	
	
	
	
	
	
	
	
	
	
	
</style>
<!--开始-模块页内容-->
<div class="view-section clear detail-teacher" id="view-main">
<!--面包屑导航-->
    <div class="nav-top-div select-none border-bottom-0">
        <div class="width-1200-center">
            <div class="dir-div roll-txt">
                <i class="fa fa-home"></i>
                <a class="dir-a" href="<?=$file_url?>home.php?route=nav&nav=home" target="_self" title="文都首页">文都首页</a>
                <i class="fa fa-angle-right dir-fa"></i>
                <a class="dir-a" href="<?=$file_url?>teacher.php?route=nav&nav=teacher" target="_self" title="文都师资">文都师资</a>
            </div>
        </div>
    </div>
    <section class="center">
		<div class="width-1200-center">
			<div class="teacher-info shadow-lg">
				<div class="img-cover"><img src="" alt=""></div>
				<div class="info-word">
					<h1 class="name"><p class="name2">姓名</p> <span>科目</span></h1>
					<div class="teacher_lecture">【讲授科目】 <span>xxxxxx休息休息休息休息休息休息休息休息休息休息休息休息休息休息休息休息休息休息休息休息休息休息</span></div>
					<div class="teacher_grading">【业界地位】 <span>xxxxxx休息休息</span></div>
					<div class="teacher_books">【畅销书籍】 <span>xxxxxx休息休息</span></div>
				</div>
			</div>
			<div class="center-body">
				<h1 class="title" >推荐课程</h1>
				<div class="lecture-body">
					<a href="" class="lecture-item">
						<div class="lecture-img">
							<img src="<?=$file_url?>static/img/special-cover1.png" class="hot-course-cover" data-img_name="special-cover1.png" title="课程海报" alt="课程海报" />
						</div>
						<h1 class="lecture-name">2021考研秋季集训营</h1>
						<h3 class="lecture-info">特色：百天集训，全程免费住宿</h3>
					</a>
					<a href="" class="lecture-item">
						<div class="lecture-img">
							<img src="<?=$file_url?>static/img/special-cover2.png" class="hot-course-cover" data-img_name="special-cover2.png" title="课程海报" alt="课程海报" />
						</div>
						<h1 class="lecture-name">2021考研专业课</h1>
						<h3 class="lecture-info">特色：一对一辅导 面授直播可选</h3>
					</a>
					<a href="" class="lecture-item">
						<div class="lecture-img">
							<img src="<?=$file_url?>static/img/special-cover3.png" class="hot-course-cover" data-img_name="special-cover3.png" title="课程海报" alt="课程海报" />
						</div>
						<h1 class="lecture-name">高端定制 彩虹卡系列</h1>
						<h3 class="lecture-info">特色：一对一辅导 面授直播可选</h3>
					</a>
					<a href="" class="lecture-item">
						<div class="lecture-img">
							<img src="<?=$file_url?>static/img/special-cover4.png" class="hot-course-cover" data-img_name="special-cover4.png" title="课程海报" alt="课程海报" />
						</div>
						<h1 class="lecture-name">2021考研集训营</h1>
						<h3 class="lecture-info">特色：一对一辅导 面授直播可选</h3>
					</a>
					
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
	
		let [limit,pages] = [7,1];
		let teacher_id = all.getQueryString("teacher_id")
		console_log(teacher_id)
		getDetailTeacher(teacher_id)
    }
	//获取分页数据
	function getDetailTeacher(teacher_id){
		let params = {
			method:'POST',
			url: "<?=$api_url?>"+"app/teacher_that" ,
			data :{
				app_class:'web',
				user_token:'token',
				teacher_id:teacher_id
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
						
				        getNewsList(limit,page);
				    }
				});
			}
			
		}
		all.sendAjax(params)
	}
	function itemAdd(content){
		$('.name>.name2').html(content.teacher_name)
		$('.name>span').html(content.class_name)
		$('.teacher_lecture>span').html(content.teacher_lecture)
		$('.teacher_grading>span').html(content.teacher_grading)
		$('.teacher_books>span').html(content.teacher_books)
		$('.img-cover>img').attr("src",content.teacher_cover)
		
	}

</script>
<!--结束-页面js-->


<?php
include $page_path.'/common/must.php';
include $page_path.'/common/foot.php';
?>

