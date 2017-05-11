@extends('layouts.admin')
@section('content')
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Blog Admin</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Manage</a></li>
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{url('admin/logout')}}">Logout</a></li>
            <li><a href="{{url('admin/resetpass')}}" target="main">password reset</a></li>
          </ul>
        </li>
      </ul>
      </div>
    </div><!-- /.navbar-collapse -->
    <!-- /.container-fluid -->
</nav>

<div class="menu_box">
	<ul>
		<li>
			<h3><i class="fa fa-fw fa-clipboard"></i>Manage</h3>
			<ul class="sub_menu">
				<li><a href="add.html" target="main"><i class="fa fa-fw fa-plus-square"></i>add page</a></li>
				<li><a href="list.html" target="main"><i class="fa fa-fw fa-list-ul"></i>list page</a></li>
				<li><a href="tab.html" target="main"><i class="fa fa-fw fa-list-alt"></i>tab page</a></li>
				<li><a href="img.html" target="main"><i class="fa fa-fw fa-image"></i>picture</a></li>
			</ul>
		</li>
		<li>
			<h3><i class="fa fa-fw fa-cog"></i>settings</h3>
			<ul class="sub_menu">
				<li><a href="#" target="main"><i class="fa fa-fw fa-cubes"></i>web config</a></li>
				<li><a href="#" target="main"><i class="fa fa-fw fa-database"></i>storage</a></li>
			</ul>
		</li>
		<li>
			<h3><i class="fa fa-fw fa-thumb-tack"></i>tools</h3>
			<ul class="sub_menu"> 
				<li><a href="http://www.yeahzan.com/fa/facss.html" target="main"><i class="fa fa-fw fa-font"></i>icons</a></li>
				<li><a href="http://hemin.cn/jq/cheatsheet.html" target="main"><i class="fa fa-fw fa-chain"></i>Jquery</a></li>
				<li><a href="http://tool.c7sky.com/webcolor/" target="main"><i class="fa fa-fw fa-tachometer"></i>color</a></li>
				<li><a href="element.html" target="main"><i class="fa fa-fw fa-tags"></i>others</a></li>
			</ul>
		</li>
	</ul>
</div>

<div class="main_box">
	<iframe src="{{url('admin/info')}}" frameborder="0" width="100%" height="100%" name="main"></iframe>
</div>

<div class="bottom_box">
	CopyRight © 2015. Powered By Z.Ann
</div>
@endsection
