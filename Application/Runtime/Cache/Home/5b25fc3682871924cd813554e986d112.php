<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
            <a href="<?php echo U('Login/login');?>">退了</a>
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
                        <a href="<?php echo U('index/user');?>" >用户管理</a>
                    </dd>
                    <dd>
                        <a href="<?php echo U('department/index');?>" >小区人员管理</a>
                    </dd>
                    <dd>
                        <a href="<?php echo U('index/admins');?>" >出行记录管理</a>
                    </dd>
                    <dd>
                        <a href="<?php echo U('index/admins');?>" >人员出勤查询</a>
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
	<head>
		<meta charset="UTF-8">
		<title></title>
	    <link rel="stylesheet" href="/Public/css/amazeui.min.css">
		<link rel="stylesheet" href="/Public/css/admin.css">
		<link rel="stylesheet" href="/Public/css/app.css">
		<style>
			.admin-main{
				padding-top: 0px;
			}
		</style>
	</head>
	<body>
		<div class="am-cf admin-main">
		<!-- content start -->
		<div class="admin-content">
			<div class="admin-content-body">
				<div class="am-g">
					<form class="am-form am-form-horizontal" action="<?php echo U('Department/homeUpdateSave');?>"
						 method="post"
						style="padding-top:30px;" data-am-validator>


						<div class="am-form-group">
							<label for="user-name" class="am-u-sm-3 am-form-label">
								房间编号</label>
							<div class="am-u-sm-9">
								<input type="text" id="doc-vld-pwd-2" required placeholder=""
									name="home_no"  data-equal-to="#doc-vld-pwd-1" value="<?php echo ($home["home_no"]); ?>" >
							</div>
						</div>
						<div class="am-form-group">
							<label for="user-name" class="am-u-sm-3 am-form-label">
								特殊备注</label>
							<div class="am-u-sm-9">
								<input type="text" id="doc-vld-pwd-2" required placeholder=""
									   name="remark"  data-equal-to="#doc-vld-pwd-1" value="<?php echo ($home["remark"]); ?>" >
							</div>
						</div>

						<input type="hidden" name="id" value="<?php echo ($home["id"]); ?>">
						<input type="hidden" name="ho_id" value="<?php echo I('ho_id'); ?>">
						<div class="am-form-group">
							<div class="am-u-sm-9 am-u-sm-push-3">
								<input type="submit" class="am-btn am-btn-success" value="新增/修改" />
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript"
		src="/Public/assets/js/libs/jquery-1.10.2.min.js">
	</script>
	<script type="text/javascript" src="/Public/myplugs/js/plugs.js">
	</script>
	</body>
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