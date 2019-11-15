
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="../static/css/common.css" rel="stylesheet"/>
		<link href="../static/css/all.css" rel="stylesheet"/>
		<link href="../static/pl/bootstrap4.1.3-dist/css/bootstrap.min.css" rel="stylesheet"/>
		<title>详情页</title>
		
		<script src="../static/js/jquery-1.11.3.min.js" type="text/javascript"></script>
		<script src="../static/js/all.js" type="text/javascript"></script>
	</head>
	<style>
		.detail-header{
			background: yellowgreen;
			height: 198px;
			overflow: hidden;
		}
		.detail-logo{
			margin-top: 69px;
			float: left;
		}
		.detail-jump{
			float: right;
			margin-top: 69px;
			margin-right: 200px;
		}
		.detail-jump-item{
			height: 59px;
			line-height: 59px;
			padding: 0 15px;
			color: #3a3d4b;
			font-size: 14px;
		}
		.detail-jump-item.selected{
			font-size: 16px;
			color: #222328;
			font-weight: bold;
		}
		.detail-banner{
			width: 100%;
			height: 800px;
			background: #e0e0e0;
		}
		.detail-bannerBody{
			position: relative;
			/* height: 100%; */
		}
		.detail-banner-title{
			position: absolute;
			top:24px;
			left:50%;
			transform: translateX(-50%);
			width: 400px;
			height: 230px;
			background: #34CE57;
		}
		.detail-form-body{
			width: 1164px;
			height: 360px;
			background: white;
			position: absolute;
			top: 575px;
			left:50%;
			transform: translateX(-50%);
			border-radius: 20px;;
			
		}
		.detail-form-title{
			width: 472px;
			height: 137px;
			background: palevioletred;
		}
		.detail-form-body>div{
			margin:20px auto;
		}
		.detail-body1>img{
			width: 100%;
		}
		.detail-body2-title{
			width: 1016px;
			height: 185px;
			background: #B3D7FF;
			margin:210px auto 88px auto;
		}
		.detail-body2-item{
			width: 22%;
			margin: 0 1.5%;
			border: 2px solid #f2f2f2;
			height: 330px;
			float: left;
			transition: all 0.5s;
			box-sizing: border-box;
		}
		
		.detail-body2-item-img{
			background: lightseagreen;
			width: 70px;
			height: 70px;
			margin: 52px auto 40px auto;
		}
		.detail-body2-item>h1{
			color:#5c5c5c;
			font-size: 24px;
			font-weight: bold;
			text-align: center;
			margin-bottom: 15px;
		}
		.detail-body2-item>p{
			margin-bottom: 15px;
			color: #979797;
			font-size: 16px;
			text-align: center;
		}
		.detail-body2-item.selected{
			background: #3b91d1;
			border: none;
			
		}
		.detail-body2-item.selected>p,.detail-body2-item.selected>h1{
			color: white;
		}
		.detail-body2-item:hover{
			
			background: #3b91d1;
			border-color: white;
		}
		.detail-body2-item:hover>p,.detail-body2-item:hover>h1{
			color: white;
		}
		.detail-body2-center{
			margin-bottom: 286px;
		}
		
		.detail-hot{
			overflow: hidden;
			background: #eef4f5;
		}
		.detail-hot-title{
			width: 656px;
			height: 166px;
			background-color: rosybrown;
			margin: 150px auto;
		}
		.detail-hot-item{
			
			height: 356px;
			width: 100%;
			box-shadow: 0 0 20px #bdbdbd;
			margin-bottom: 60px;
		}
		.detail-hot-item:hover>.detail-hot-item-word{
			
			background: #3a90d9;
			color: white;
		}
		.detail-hot-item:hover div,.detail-hot-item:hover p,.detail-hot-item:hover h1{
			color: white;
		}
		.detail-hot-item:hover .hot-item-ask{
			background: white;
			color: #777777;
		}
		.detail-hot-item>div{
			float: left;
		}
		.detail-hot-item-img{
			width: 376px;
			height: 100%;
			background-color: #45DBAC;
		}
		.detail-hot-item-word{
			transition: all 0.3s;
			width:calc(100% - 376px);
			/* background-color: paleturquoise; */
			height: 100%;
		}
		.detail-hot-item-word>div{
			margin: 40px 0;
			float: left;
		}
		.hot-item-word-left{
			width: 548px;
			/* background: greenyellow; */
			height: calc(100% - 80px);
			/* border-left:1px solid #e0e0e0; */
			border-right:1px solid #e0e0e0;
			padding-left:108px;
		}
		.hot-item-word-left-border-left{
			border-left:1px solid #e0e0e0;
			border-right:none;
		}
		.hot-item-word-left>h1{
			font-size: 40px;
			color: #368fc7;
			font-weight: bold;
			margin: 60px 0 35px 0;
		}
		.hot-item-word-left>p{
			font-size: 26px;
			color: #777777;
			margin-bottom: -4px;;
		}
		.hot-item-word-right-price-item{
			float: left;
			margin: 20px 15px 0 15px;;
			
		}
		.hot-item-word-right-price-item>div{
			
			font-size: 20px;
			color: #575757;
			text-align: center;
		}
		.hot-item-word-right-price-item>div+div{
			color: #ff5252;
		}
		.hot-item-word-right-price-item>div>span{
			font-size: 36px;
		}
		.hot-item-ask{
			cursor: pointer;
			width: 160px;
			height: 48px;
			text-align: center;
			border-radius: 48px;
			line-height: 48px;
			border: 1ps solid #b3d3ef;
			box-shadow: 0 0 20px #1076cd;
			margin: 50px auto 0 auto;
		}
		.detail-hot-center{
			margin-bottom: 200px;
		}
	</style>
	<body>
		<header class="detail-header">
			<div class="width-1200-center clearfix ">
				<div class="search-logo-div detail-logo">
				    <img src="../static/img/logo.png" 
					data-img_name="logo.png" class="nav-logo-img" alt="文都考研logo" title="文都考研logo"/>
				</div>
				<div class="detail-jump">
					<a href="../home.php?route=nav&nav=home" class="detail-jump-item">首页</a>
					<a href="#" class="detail-jump-item">全年集训营</a>
					
					<a href="#" class="detail-jump-item ">半年集训营</a>
					<a href="#" class="detail-jump-item selected">寒假集训营</a>
					
					<a href="#" class="detail-jump-item">暑假封闭营</a>
					<a href="#" class="detail-jump-item">百日冲刺营</a>
					<a href="#" class="detail-jump-item">复试营</a>
				</div>
			</div>
		</header>
		<section class="detail-banner">
			<div class="width-1200-center detail-bannerBody">
				<div class="detail-banner-title"></div>
				<div class="detail-form-body shadow-lg ">
					<div class="detail-form-title"></div>
					<div class="detail-form"></div>
				</div>
			</div>
		</section>
		<section class="detail-body1">
			<img src="../static/img/detail-body1.png" 
			data-img_name="detail-body1.png" title="" alt="detail-body1">
		</section>
		<section>
			<div class="width-1200-center">
				<div class="detail-body2-title"></div>
				<div class="detail-body2-center clearfix">
					<div class="detail-body2-item">
						<div class="detail-body2-item-img"><img src="" alt=""></div>
						<h1>基础早梳理</h1>
						<p>一个寒假搞定5500词汇</p>
						<p>分专业搭建体系</p>
						<p>分专业梳理重难点</p>
					</div>
					<div class="detail-body2-item">
						<div class="detail-body2-item-img"><img src="" alt=""></div>
						<h1>复习早规划</h1>
						<p>择校择专业指导</p>
						<p>建立学习档案</p>
						<p>学习习惯重塑</p>
					</div>
					<div class="detail-body2-item">
						<div class="detail-body2-item-img"><img src="" alt=""></div>
						<h1>知识体系早了解</h1>
						<p>提前做好备考规划</p>
						<p>提前了解学科体系</p>
						<p>提前熟悉应试考点</p>
					</div>
					<div class="detail-body2-item">
						<div class="detail-body2-item-img"><img src="" alt=""></div>
						<h1>学习效率早提升</h1>
						<p>全日制集训</p>
						<p>24H封闭教学</p>
						<p>班主任督学</p>
					</div>
				</div>
			</div>
		</section>
		<section class="detail-hot">
			<div class="width-1200-center ">
				<div class="detail-hot-title">
					
				</div>
				<div class="detail-hot-center">
					<!-- 1 -->
					<div class="detail-hot-item clearfix">
						<div class="detail-hot-item-img"></div>
						<div class="detail-hot-item-word">
							<div class="hot-item-word-left">
								<h1>英语+数学</h1>
								<p>营期：2月10日-2月23日</p>
								<p>报道时间：2月9日</p>
							</div>
							<div class="hot-item-word-right">
								<div class="hot-item-word-right-price clearfix">
										<div class="hot-item-word-right-price-item">
											<div>走读班</div>
											<div>￥ <span>3400</span></div>
										</div>
										<div class="hot-item-word-right-price-item">
											<div>走读班</div>
											<div>￥ <span>3400</span></div>
										</div>
								</div>
								<div class="hot-item-ask">课程咨询</div>
							</div>
						</div>
					</div>
					<!-- 2 -->
					<div class="detail-hot-item clearfix">
						
						<div class="detail-hot-item-word">
							<div class="hot-item-word-right">
								<div class="hot-item-word-right-price clearfix">
										<div class="hot-item-word-right-price-item">
											<div>走读班</div>
											<div>￥ <span>3400</span></div>
							 			</div>
										<div class="hot-item-word-right-price-item">
											<div>走读班</div>
											<div>￥ <span>3400</span></div>
										</div>
								</div>
								<div class="hot-item-ask">课程咨询</div>
							</div>
							<div class="hot-item-word-left hot-item-word-left-border-left">
								<h1>英语+199</h1>
								<p>营期：2月10日-2月23日</p>
								<p>报道时间：2月9日</p>
							</div>
							
						</div>
						<div class="detail-hot-item-img"></div>
					</div>
					<!-- 3 -->
					<div class="detail-hot-item clearfix">
						<div class="detail-hot-item-img"></div>
						<div class="detail-hot-item-word">
							<div class="hot-item-word-left">
								<h1>英语+396</h1>
								<p>营期：2月10日-2月23日</p>
								<p>报道时间：2月9日</p>
							</div>
							<div class="hot-item-word-right">
								<div class="hot-item-word-right-price clearfix">
										<div class="hot-item-word-right-price-item">
											<div>走读班</div>
											<div>￥ <span>3400</span></div>
										</div>
										<div class="hot-item-word-right-price-item">
											<div>走读班</div>
											<div>￥ <span>3400</span></div>
										</div>
								</div>
								<div class="hot-item-ask">课程咨询</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</section>

	</body>
	<script>
		console.log(11+([][[]] + [])[+!![]] + ([] + {})[!+[] + !![]])
	</script>
</html>
