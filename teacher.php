<?php
$title = '文都师资'; // 模块页标题，每个页面自定义
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
						<div class="teacher-type-item selected " data-teacher_class_id=''>全部</div>
						
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
	var [limit,pages] = [12,1];
	var teacher_class_id = ''
	
	// console_log(window.token)
    // 页面数据入口，如有动态数据渲染，请以此函数为调用作为开始
    function page_data_init(){
        console_log("开始渲染数据");
		// console_log(window.token)
		
		getClass()
		getTeacherList(limit,pages,teacher_class_id)
		geAllArea()
    }
	function getClass(){
		let params = {
			method:'POST',
			url: "<?=$api_url?>"+"app/list_teacher_class" ,
			data :{
				app_class:'web',
				user_token:window.token,
				teacher_class_id:'all',
				
			},
			successfn:function(res){
				let jsonRes = $.parseJSON( res );
				console_log(jsonRes)
				let content = jsonRes.content
				teacherType(content)
			}
		}
		all.sendAjax(params)
	}
	//新增分类
	function teacherType(content){
		
		$.isArray(content)&&content.forEach((item,index)=>{
			// console_log(times)
			let html = `<div class="teacher-type-item" data-teacher_class_id='${item.teacher_class_id}'>${item.class_name}</div>`
			$('.teacher-type').append(html)
		})
	}


	$(document).on('click', '.teacher-type-item', function() {
		
		teacher_class_id = all.getItemDataAttr($(this),'teacher_class_id')
		$(this).addClass('selected').siblings().removeClass('selected')
		// console_log(teacher_class_id )
		getTeacherList(limit,pages,teacher_class_id)
	});
	
	//获取分页数据
	function getTeacherList(limit,pages,teacher_class_id){
		let params = {
			method:'POST',
			url: "<?=$api_url?>"+"app/teacher_list" ,
			data :{
				app_class:'web',
				user_token:window.token,
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
						
				        getTeacherList(limit,page,teacher_class_id);
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
			// console_log(times)
			let html = `<a href="<?=$file_url?>detail/detail-teacher.php?route=nav&nav=teacher&teacher_id=${item.teacher_id}" class="teacher-list-item" target="_blank" title="文都名师">
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
include $page_path.'/common/foot.php';
include $page_path.'/common/must.php';

?>

