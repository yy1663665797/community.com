<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="/Public/css/amazeui.min.css" />
		 <link rel="stylesheet" href="/Public/css/admin.css" />
	</head>
	<body>
		<div class="admin-content-body">
      <div class="am-cf am-padding am-padding-bottom-0">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">社区管理（点击社区添加相应人员）</strong><small></small></div>
      </div>

      <hr>

      <div class="am-g">
        <div class="am-u-sm-12 am-u-md-6">
          <div class="am-btn-toolbar">
            <div class="am-btn-group am-btn-group-xs">
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
                  <th class="table-title">社区名称</th>
                  <th class="table-set">操作</th>
              </tr>
              </thead>
              <tbody>
               <tr>
                <td><input type="checkbox"></td>
                <td>1</td>
                <td><a href="#">这个模板很不错</a></td>
                <td>
                  <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                        <a href="<?php echo U('updateUser', ['id'=>$vo['id']]);?>" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</a>                    </div>
                  </div>
                </td>
              </tr>
           
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
</html>