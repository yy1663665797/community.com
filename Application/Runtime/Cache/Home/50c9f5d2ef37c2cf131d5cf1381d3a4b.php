<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en" class="login-content" data-ng-app="materialAdmin">
 <head>
  <meta charset="UTF-8"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>疫情防控指挥系统</title>
  <link href="/Public/css/material-design-iconic-font/css/material-design-iconic-font.min.css" rel="stylesheet" type="text/css">
  <!-- CSS -->
  <link href="/Public/css/app.min.1.css" rel="stylesheet" type="text/css">
 </head>
 <body class="login-content" data-ng-controller="loginCtrl as lctrl">

 <form action="<?php echo U('Login/login');?>" method="post">
    <div class="lc-block" id="l-login" data-ng-class="{'toggled':lctrl.login === 1}">
    	<h1 class="lean">疫情防控指挥系统</h1>

    	<div class="input-group m-b-20">
    		<span class="input-group-addon">
    			<i class="zmdi zmdi-account"></i>
    		</span>
    		<div class="fg-line">
    			<input type="text" name="username" class="form-control" placeholder="Username" regex="^\w{3,16}$"/>
    		</div>
    	</div>

        <div class="input-group m-b-20">
    		<span class="input-group-addon">
    			<i class="zmdi zmdi-male"></i>
    		</span>
    		<div class="fg-line">
    			<input type="password" name="password" class="form-control" placeholder="Password" regex="^\w+"/>
    		</div>
    	</div>
    	
    	<div class="clearfix"></div>

		<input type="submit" value="login" style="width: 400px;height: 50px;background-color: #5ed6f9;border: 0px;">

<!--    	<a href="" class="btn btn-login btn-danger btn-float">-->
<!--    		<i class="zmdi zmdi-arrow-forward"></i>-->
<!--    	</a>-->

    </div>
 </form>
    
    <div class="lc-block" id="l-register" data-ng-class="{ 'toggled': lctrl.register === 1 }" data-ng-if="lctrl.register === 1">
    	<h1 class="lean">Azrael</h1>

    	<div class="input-group m-b-20">
    		<span class="input-group-addon">
    			<i class="zmdi zmdi-account"></i>
    		</span>
    		<div class="fg-line">
    			<input type="text" class="form-control" placeholder="Username" regex="^\w{3,16}$"/>
    		</div>
    	</div>

        <div class="input-group m-b-20">
    		<span class="input-group-addon">
    			<i class="zmdi zmdi-male"></i>
    		</span>
    		<div class="fg-line">
    			<input type="password" class="form-control" placeholder="Password" regex="^\w+"/>
    		</div>
    	</div>
    	
    	<div class="clearfix"></div>
    	
    	<div class="checkbox">
    		<label>
    			<input type="checkbox" value=""/>
    			<i class="input-helper"></i>
    			接受许可协议
    		</label>
    	</div>
    	
    	<a href="" class="btn btn-login btn-danger btn-float"><i class="zmdi zmdi-arrow-forward"></i></a>

    </div>

    <div class="lc-block" id="l-forget-password" data-ng-class="{ 'toggled': lctrl.forgot === 1 }" data-ng-if="lctrl.forgot === 1">
    	<h1 class="lean">Azrael</h1>
    	<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu risus. Curabitur commodo lorem fringilla enim feugiat commodo sed ac lacus.</p>
    	<div class="input-group m-b-20">
	      <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
	      <div class="fg-line">
	        <input type="text" class="form-control" placeholder="Email Address" regex="^\w+@\w+\.[a-zA-Z]+(\.[a-zA-Z]+)?$"/>
	      </div>
	    </div>
	
	    <a href="" class="btn btn-login btn-danger btn-float"><i class="zmdi zmdi-arrow-forward"></i></a>

    </div>
 </body>
 	
 	<script src="http://www.jq22.com/jquery/2.1.1/jquery.min.js"></script>
	<!-- Angular -->
	<script src="/Public/js/bower_components/angular/angular.min.js"></script>
	<script src="/Public/js/bower_components/angular-resource/angular-resource.min.js"></script>
	<script src="/Public/js/bower_components/angular-animate/angular-animate.min.js"></script>
	
	
	<!-- Angular Modules -->
	<script src="/Public/js/bower_components/angular-ui-router/release/angular-ui-router.min.js"></script>
	<script src="/Public/js/bower_components/angular-loading-bar/src/loading-bar.js"></script>
	<script src="/Public/js/bower_components/oclazyload/dist/ocLazyLoad.min.js"></script>
	<script src="/Public/js/bower_components/angular-bootstrap/ui-bootstrap-tpls.min.js"></script>
	
	<!-- Common js -->
	<script src="/Public/js/bower_components/angular-nouislider/src/nouislider.min.js"></script>
	<script src="/Public/js/bower_components/ng-table/dist/ng-table.min.js"></script>
	
	<!-- Placeholder for IE9 -->
	<!--[if IE 9 ]>
	    <script src="/Public/js/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
	<![endif]-->
	<!-- App level -->
	<script src="/Public/js/app.js"></script>
	<script src="/Public/js/controllers/main.js"></script>
	<script src="/Public/js/controllers/ui-bootstrap.js"></script>
	
	
	<!-- Template Modules -->
	<script src="/Public/js/modules/form.js"></script>
</html>