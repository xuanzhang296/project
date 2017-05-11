@extends('layouts.admin')
@section('content')
	<div class="crumb_warp">
		
		<i class="fa fa-home"></i> <a href="#">home</a> &raquo; <a href="#">product</a> &raquo; add product
	</div>
	
	<div class="result_wrap">
        <div class="result_title">
            <h3>shortcut</h3>
        </div>
        <div class="result_content">
            <div class="short_wrap">
                <a href="#"><i class="fa fa-plus"></i>add new</a>
                <a href="#"><i class="fa fa-recycle"></i>delete</a>
                <a href="#"><i class="fa fa-refresh"></i>update</a>
            </div>
        </div>
    </div>
   
	
    <div class="result_wrap">
        <div class="result_title">
            <h3>system information</h3>
        </div>
        <div class="result_content">
            <ul>
                <li>
                    <label>Operation System</label><span> {{PHP_OS}}</span>
                </li>
                <li>
                    <label>Enviroment</label><span>{{$_SERVER['SERVER_SOFTWARE']}}</span>
                </li> 
                
                <li>
                    <label>Version</label><span>v-0.1</span>
                </li>
                <li>
                    <label>Max upload</label><span> <?PHP echo get_cfg_var ("upload_max_filesize")?get_cfg_var ("upload_max_filesize"):"can't upload"; ?></span>
                </li>
                <li>
                    <label>Time</label><span><?PHP echo date("Y-m-d h:i:sa") . "<br>"; ?></span>
                </li>
                <li>
                    <label>Server/IP</label><span>localhost [ 127.0.0.1 ]</span>
                </li>
                <li>
                    <label>Host</label><span>127.0.0.1</span>
                </li>
            </ul>
        </div>
    </div>


@endsection