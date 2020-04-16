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
                <img src="/Public/images/1.gif" class="layui-nav-img"><?php echo ($username); ?>
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
		<link rel="stylesheet" href="/Public/css/amazeui.min.css" />
		 <link rel="stylesheet" href="/Public/css/admin.css" />
	</head>
	<body>
		<div class="admin-content-body">
      <div class="am-cf am-padding am-padding-bottom-0">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">人员列表</strong><small></small></div>
      </div>

      <hr>

      <div class="am-g">
        <div class="am-u-sm-12 am-u-md-6">
          <div class="am-btn-toolbar">
              <div class="am-btn-group am-btn-group-xs">
                  <a href="<?php echo U('department/homeupdate',['ho_id'=>I('id')]);?>" type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span> 新增</a>
              </div>
          </div>
        </div>
        <div class="am-u-sm-12 am-u-md-3">
    
        </div>
        <div class="am-u-sm-12 am-u-md-3">
          <div class="am-input-group am-input-group-sm">
            <input type="text" class="am-form-field" placeholder="请输入留言信息">
          <span class="am-input-group-btn">
            <button class="am-btn am-btn-default" type="button">搜索</button>
          </span>
          </div>
        </div>
      </div>
      <div class="am-g">
        <div class="am-u-sm-12">
          <form class="am-form">
            <table class="am-table am-table-striped am-table-hover table-main">
              <thead>
              <tr>
                <th class="table-check"><input type="checkbox"></th>
                  <th class="table-id">ID</th>
                  <th class="table-title">房间号</th>
                  <th class="table-title">备注</th>
                  <th class="table-set">操作</th>
              </tr>
              </thead>
              <tbody>
              <?php if(is_array($home_list)): foreach($home_list as $key=>$vo): ?><tr>
                <td><input type="checkbox"></td>
                <td><?php echo ($vo["id"]); ?></td>
                <td><a href="<?php echo U('peopleList',['room_id'=>$vo['id'],'ho_id'=>I('ho_id'),'com_id'=>I('com_id')]);?>"><?php echo ($vo["home_no"]); ?></a></td>
                <td><?php echo ($vo["remark"]); ?></td>
                <td>
                  <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                        <a href="<?php echo U('homeupdate', ['id'=>$vo['id'],'ho_id'=>I('id')]);?>" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</a>                    </div>
                  </div>
                </td>
              </tr><?php endforeach; endif; ?>
           
              </tbody>
            </table>
            <div class="am-cf">
              共 15 条记录
              <div class="am-fr">
                <ul class="am-pagination">
                  <li class="am-disabled"><a href="#">«</a></li>
                  <li class="am-active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">»</a></li>
                </ul>
              </div>
            </div>
            <hr>
          </form>
        </div>

      </div>
    </div>
	</body>
        </div>
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