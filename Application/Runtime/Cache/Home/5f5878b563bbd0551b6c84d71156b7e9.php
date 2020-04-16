<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>八一社区疫情防控指挥应急系统</title>
		<link rel="stylesheet" href="/Public/css/layui.css">
	</head>

	<body class="layui-layout-body">
		<div class="layui-layout layui-layout-admin">
			<div class="layui-header">
				<div class="layui-logo">八一社区疫情防控指挥系统</div>
				<!-- 头部区域（可配合layui已有的水平导航） -->

				<ul class="layui-nav layui-layout-right">
					<li class="layui-nav-item">
						<a href="javascript:;">
							<img src="/Public/images/1.gif" class="layui-nav-img"> 管理员
						</a>
						<dl class="layui-nav-child">
							<dd>
								<a href="">基本资料</a>
							</dd>
							<dd>
								<a href="">安全设置</a>
							</dd>
						</dl>
					</li>
					<li class="layui-nav-item">
						<a href="<?php echo U('Index/login');?>">退了</a>
					</li>
				</ul>
			</div>

			<div class="layui-side layui-bg-black">
				<div class="layui-side-scroll">
					<!-- 左侧导航区域（可配合layui已有的垂直导航） -->
					<ul class="layui-nav layui-nav-tree" lay-filter="test">
						<li class="layui-nav-item layui-nav-itemed">
							<a class="" href="javascript:;">菜单栏</a>
							<dl class="layui-nav-child">
								<dd>
									<a href="<?php echo U('index/user');?>" target="right">用户管理</a>
								</dd>
								<dd>
									<a href="<?php echo U('index/admins');?>" target="right">部门人员管理</a>
								</dd>
								<dd>
									<a href="<?php echo U('index/admins');?>" target="right">出行记录管理</a>
								</dd>
								<dd>
									<a href="<?php echo U('index/admins');?>" target="right">人员出勤查询</a>
								</dd>
								<dd>
									<a href="javascript:void(0)"  onclick="updatePwd('修改密码',1)">修改密码</a>
								</dd>
							</dl>
						</li>
					</ul>
				</div>
			</div>

			<div class="layui-body" style="z-index: 0;">
				<!-- 内容主体区域 -->
				<div style="padding: 15px;">
					<iframe src="<?php echo U('index/user');?>" name="right" frameborder="0" width="100%" height="1200"></iframe>
				</div>
			</div>

			<div class="layui-footer">
				<!-- 底部固定区域 -->
				八一社区疫情防控指挥系统
			</div>
		</div>
		
		<script type="text/javascript" src="/Public/js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="/Public/myplugs/js/plugs.js">
		</script>
		<script type="text/javascript">
			//添加编辑弹出层
			function updatePwd(title, id) {
				$.jq_Panel({
					title: title,
					iframeWidth: 500,
					iframeHeight: 300,
					url: "<?php echo U('updatePwd');?>"
				});
			}
		</script>
		<script src="Public/js/layui.js"></script>
		<script>
			//JavaScript代码区域
			layui.use('element', function() {
				var element = layui.element;

			});
		</script>
	</body>

</html>