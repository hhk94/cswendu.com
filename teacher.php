<?php
$title = '考研资讯'; // 模块页标题，每个页面自定义
$page_path = dirname(__FILE__); // 项目index的根目录
include $page_path.'/common/head.php';
include $page_path.'/common/nav.php';
?>
<style>
	
	
	
	
	
	
	
	
	
	
	
</style>
<!--开始-模块页内容-->
<div class="view-section clear all-teacher" id="view-main">
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
			<div class="center-body">
				<h1 class="title" id="title">
					文都师资
					<div class="teacher-type">
						<div class="teacher-type-item selected">英语名师</div>
						<div class="teacher-type-item">政治名师</div>
						<div class="teacher-type-item">数学名师</div>
						<div class="teacher-type-item">专业课名师</div>
					</div>
				</h1>
				
			</div>
			<div class="teacher-list">
				<a href="" class="teacher-list-item" target="_blank" title="文都名师">
					<div class="teacher-img">
						<img src="" alt="">
					</div>
					<h1>何凯文</h1>
					<h3>全国最高人气的考研英语辅导教师微博粉丝量突破610万</h3>
				</a>
				<a href="" class="teacher-list-item"></a>
				<a href="" class="teacher-list-item"></a>
				<a href="" class="teacher-list-item"></a>
				<a href="" class="teacher-list-item"></a>
				<a href="" class="teacher-list-item"></a>
				<a href="" class="teacher-list-item"></a>
				<a href="" class="teacher-list-item"></a>
				<a href="" class="teacher-list-item"></a>
				<a href="" class="teacher-list-item"></a>
				<a href="" class="teacher-list-item"></a>
				<a href="" class="teacher-list-item"></a>
			</div>
			
			<div class="information-page-body">
				<div class="information-page" id="information-page"></div>
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
		getClass()
		let [limit,pages] = [12,1];
		// getBanner()
		let teacher_class_id = ''
		getNewsList(limit,pages,teacher_class_id)
    }
	function getClass(){
		let params = {
			method:'POST',
			url: "<?=$api_url?>"+"app/list_teacher_class" ,
			data :{
				app_class:'web',
				user_token:'token',
				teacher_class_id:'all',
				
			},
			successfn:function(res){
				let jsonRes = $.parseJSON( res );
				console_log(jsonRes)
				let content = jsonRes.content
				// itemAdd(content)
				
			}
			
		}
		all.sendAjax(params)
	}
	//获取分页数据
	function getNewsList(limit,pages,teacher_class_id){
		let params = {
			method:'POST',
			url: "<?=$api_url?>"+"app/teacher_list" ,
			data :{
				app_class:'web',
				user_token:'token',
				teacher_class_id:teacher_class_id,
				teacher_id:'all',
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
						
				        getNewsList(limit,page);
				    }
				});
			}
			
		}
		all.sendAjax(params)
	}
	function itemAdd(content){
		//列表清空
		$('.teacher-list').html('')
		$.isArray(content)&&content.forEach((item,index)=>{
			// console.log(times)
			let html = `<a href="<?=$file_url?>detail/detail-teacher.php?route=nav&nav=kaoyanInformation&teacher_id=${item.teacher_id}" class="teacher-list-item" target="_blank" title="文都名师">
					<div class="teacher-img">
						<img src="${item.teacher_cover}" alt="">
					</div>
					<h1>${item.teacher_name}</h1>
					<h3>${item.teacher_grading}</h3>
				</a>`
			$('.teacher-list').append(html)
		})
		
		
	}

</script>
<!--结束-页面js-->


<?php
include $page_path.'/common/must.php';
include $page_path.'/common/foot.php';
?>

