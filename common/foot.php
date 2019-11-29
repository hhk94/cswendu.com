<style>

</style>




<footer class="foot-box clear">
	<section class="section-map width-1200-center home-cell clear area-body">
	    <h3 class=" home-cell-title-bottom foot-title">
			<img src="<?=$file_url?>/static/img/footer-title.png" data-img_name="footer-title.png" class="" alt="footer-title.png" title="footer-title.png"/>
		</h3>
	    <!-- <div class="home-cell-content maps-content">
	        <p class="maps-p"><a class="maps-a" href="https://www.amap.com/place/B02DB05PEH" target="_blank" title="">湖南总部地址：湖南长沙天心区中南林业科技大学国际楼</a></p>
	        <p class="maps-p"><a class="maps-a" href="https://www.amap.com/place/B02DB05PEH" target="_blank" title="">长沙林科大校区：长沙天心区中南林业科技大学德润楼负一楼</a></p>
	    </div> -->
		<div class="maps-content area-tabs clearfix">
			<!-- <div class="area-tabs-item selected" data-url="1">湖南总部</div> -->
			
		</div>
		<div class="maps-content area-detail-body">
			<!-- <div class="area-line clearfix">
				<div class="area-name">林科大分销：</div>
				<div class="area-detail">中南林业科技大学东门橙子酒店3楼 <br>中南林业科技大学东门橙子酒店3楼</div>
			</div>
			<div class="area-line clearfix">
				<div class="area-name">林科大分销：</div>
				<div class="area-detail">中南林业科技大学东门橙子酒店3楼</div>
			</div> -->
		
		</div>
	</section>
    <div class="width-1200-center border-top-CBC9C7">
        <div class="padding-lr-15 wechat-parent">
			<div class="wechat-body">
				<div class="code-img"><img src="<?=$file_url?>/static/img/footer-wechat-code.png" data-img_name="footer-wechat-code.png" alt="文都考研微信二维码" title="文都考研微信二维码"/></div>
				<div class="code-img"><img src="<?=$file_url?>/static/img/footer-webo-code.png" data-img_name="footer-webo-code.png" alt="文都考研微博二维码" title="文都考研微博二维码"/></div>
			</div>
            <div class="friend-url-div">
                <span class="friend-url-span select-none">友情链接：</span>
                <a class="friend-url-a" href="#" target="_blank" title="湖北文都考研官网">湖北文都</a>
                <a class="friend-url-a" href="#" target="_blank" title="河南文都考研官网">河南文都</a>

            </div>
			
            <div class="site-info-div">
				<div class="footer-tabs">
					<a href="<?=$file_url?>footer-spacial/about-us.php?route=nav&nav=home" target="_blank" title="关于我们">关于我们</a>
					<a href="<?=$file_url?>footer-spacial/contact.php?route=nav&nav=home" target="_blank" title="联系方式">联系方式</a>
					<a href="<?=$file_url?>footer-spacial/recruit.php?route=nav&nav=home" target="_blank" title="招聘人才">招聘人才</a>
					<a href="<?=$file_url?>footer-spacial/pay.php?route=nav&nav=home" target="_blank" title="支付方式">支付方式</a>
				</div>
                <p>地址：<a class="click-a" href="https://www.amap.com/place/B02DB05PEH" title="地址：湖南省长沙市天心区中南林业科技大学国际楼" target="_blank">湖南省长沙市天心区中南林业科技大学国际楼</a>&nbsp;&nbsp;&nbsp;&nbsp;邮编：100048</p>
                <p>湘ICP备xxxxxx号-x&nbsp;&nbsp;&nbsp;&nbsp;湘公安备xxxxxxxxxxx号&nbsp;&nbsp;&nbsp;&nbsp;版权©长沙道信教育科技有限公司&nbsp;&nbsp;&nbsp;&nbsp;2007/01-<?=date('Y/m')?></p>
            </div>

            <div class="clear"></div>
        </div>
    </div>

</footer>

<div class="loading-div flex-center select-none" id="loading-div">
    <div class="loading-hidden-bg"></div>
    <div class="loading-icon"></div>
</div>
<ul id="hk-alert">
	<!-- <li class="alert-error"><i class="fa fa-exclamation-circle alert-icon"></i>对不起，请求失败</li>
	<li class="alert-default"><i class="fa fa-info-circle alert-icon"></i>对不起，请求失败</li>
	<li class="alert-success"><i class="fa fa-sign-language alert-icon"></i>对不起，请求失败</li> -->
</ul>

<ul id="hk-notification">
	<!-- <li class="notification-item">
		<h1><i class="fa fa-info-circle alert-icon"></i>标题</h1>
		<p>xxxxxx标题标题标题标题标题标题标题标题标题xxxxxx</p>
	</li> -->
</ul>


<div id="back-top" class="back-top select-none hide animated">Top</div>



<script src="<?=$file_url?>static/js/page.js?<?=$head_time?>"></script>
<script>
	// console.log(foot_token)
	$('.area-tabs').on("click",".area-tabs-item",function(){
		$(this).addClass('selected').siblings().removeClass('selected')
		// console.log()
		let campus_class_id =  all.getItemDataAttr($(this),'campus_class_id')
		let data={
			app_class:'web',
			user_token:window.token,
			campus_id: "that",
			campus_class_id: campus_class_id,
			areaname:$(this).text()
		}
		getAreaScool(data)
		
	})
	function geAllArea(){
		let params = {
			method:'POST',
			url:"<?=$api_url?>" + 'app/list_campus_class',
			text:{
				textWarn:'校区列表请求成功，但暂无数据',
				textError:'校区列表请求失败',
			},
			data : {
				app_class:'web',
				user_token:window.token,
				campus_class_id:'all'
			},
			changeDomFn:function(content){
				console_log(content)
				$.isArray(content)&&content.reverse().forEach((item,index)=>{
					if(index==0){
						var html = `<div class="area-tabs-item selected" data-campus_class_id="${item.campus_class_id}">${item.campus_class_name}</div>`
						let data={
							app_class:'web',
							user_token:window.token,
							campus_id: "that",
							campus_class_id: item.campus_class_id,
							areaname:item.campus_class_name
						}
						getAreaScool(data)
					}else{
						var html = `<div class="area-tabs-item" data-campus_class_id="${item.campus_class_id}">${item.campus_class_name}</div>`
					}
					 $('.area-tabs').append(html)
				})
			},	
			dealWithEmptyDom:function(){
				$('.area-tabs').html('')
			}
		}
		all.dealWithDomAfterAjax(params)
	}
	function getAreaScool(datas){
		let params = {
			method:'POST',
			url: "<?=$api_url?>"+"app/list_campus" ,
			text:{
				textWarn:'请求成功，该地区暂无分校',
				textError:'校区列表请求失败',
			},
			data : datas,
			changeDomFn:function(content){
				let params={
					type:'success',
					text:'您现在查看的是'+datas.areaname,
					timeout:2000
				}
				all.message(params)
				$('.area-detail-body').html('')
				$.isArray(content)&&content.forEach((item,index)=>{
					let html = `<div class="area-line clearfix">
					<div class="area-name">${item.campus_name}：</div>
					<div class="area-detail">${item.campus_address}</div>
				</div>`
					 $('.area-detail-body').append(html)
				})
			},
			dealWithEmptyDom:function(){
				$('.area-detail-body').html('')
			}
		}
		all.dealWithDomAfterAjax(params)
	}
	

	
	
	
	
	
	
</script>

<div class="js-write-div clear hide" id="js-write-div"></div>

</body>
</html>

