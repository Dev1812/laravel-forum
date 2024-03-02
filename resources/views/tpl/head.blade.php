

<html>
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}" />
<link rel="stylesheet" type="text/css" href="/css/main.css?<?php echo rand();?>">



<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</style>
</head>
<body>
<style type="text/css">
.head_left2{width: 450px;z-index: 9;position: relative;}
.icon__menu{background-image:url('/image/icon/menu.png');width:25px;height: 25px;position: relative;display: inline-block;background-position: center;background-repeat: no-repeat}
.head_right__item_wrap{position: absolute;top:0;margin-left: 37%;z-index: 14;}
.head_right__item_1{margin-right: 14px;z-index: 9;position: relative;display: inline-block}
.icon{position: relative;display: inline-block;}
.head_right__item{z-index: 9;position: relative;display: inline-block;margin-right:9px}
</style>
<div id="wrap1">
<div class="head" id="head__desktop">
<div class="head_wrap">

<?php

if(isUserAuth()) {
?>

<div class="head_right">
<i class=" icon head__user_photo photo_cover" style="
background-image: url('<?php echo session('user_small_photo');?>');margin-right:9px;"></i>
<span class=""><?php echo session('user_first_name');?></span>
</div>
<?php
} else {
?>

<div class="head_right">
<a href="/login" class="head_item">Вход</a>
<a href="/reg" class="head_item">Регистрация</a>
</div>
	<?php
}
?>

<style type="text/css">

.mark_block{display: inline-block;background-color: #DDD;padding: 3px 5px 0px 5px ;border-radius: 3px;cursor: pointer ;}
.mark_block:hover{background-color: #CCC}
.icon{display: inline-block;position: relative;}
.icon_add_like{background-image: url('/image/icon/thumb-up-outline.png');width: 17px;height: 17px}
.icon_remove_like{background-image: url('/image/icon/like_active_green_small.png');width: 17px;height: 17px}
.mark_block__add_like_counter{position: relative;display: inline-block;top:-2px;font-size:12px;font-weight: bold;}
.mark_block__remove_like_counter{position: relative;display: inline-block;top:-2px;font-size:12px;font-weight: bold;}
.head_right__item:hover{border-bottom: 2px solid blue;}
</style>

		
	<div class="head_right__item_wrap" style="position:absolute;margin-left: 9%;">
		<a class="head_right__item" href="/photo">фото</a>
		<a class="head_right__item" href="/search">люди</a></div>

<div class="head_left2">
	<i class="icon icon__menu icon__head_menu" style="top:7px;margin-right: 9px;display: none;" onClick="$('#sidebar__mobile').show();$('#sidebar__desktop').show();$('#global_gray_layer_sidebar').show();"></i>
<a href="/" class="hesad_item"><i class="icon" style="background-image:url('/image/logo/Новый проект (8).png');width: 60px;height: 30px;top:14px"></i>	</a>
</div>
<style type="text/css">
.submit_button_loop{position: absolute;margin-left:-39px;margin-top:12px;height:35px;width:37px;background-image: url('/image/icon/magnify.png');background-size: inherit;;background-position: center;background-repeat: no-repeat;border:0;}
.submit_button_loop:hover{cursor: pointer;background-color:#DDD}
</style>
<div class="head_center">
<div class="head_center_search_wrap">
	<FORM action="/search">
<input type="text" class="text_field head_search_text_field" placeholder="Поиск" name="q"
 value="<?php if(!empty($_GET['q'])) echo htmlspecialchars($_GET['q']);?>">
<input type="submit" name="" class="submit_button_loop" value=" ">
	</FORM>
</div>
</div>
</div>
</div>

















<div class="head" id="head__mobile">
<div class="head_wrap">

<?php

if(isUserAuth()) {
?>

<div class="head_right" style="position: absolute;right: 0;">
	<a href="/search">
<i class=" icon head__user_photo photo_cover" style="
background-image: url('<?php echo session('user_small_photo');?>');top:7px;background-image:url('/image/icon/magnify.png');background-size: inherit;background-repeat:no-repeat	;"></i></a>
<a href="/id<?php echo session('user_id');?>">
<i class=" icon head__user_photo photo_cover" style="
background-image: url('<?php echo session('user_small_photo');?>');top:7px"></i></a>
</div>
<?php
} else {
?>

<div class="head_right">
<a href="/login" class="head_item">Вход</a>
<a href="/reg" class="head_item">Регистрация</a>
</div>
	<?php
}
?>
<div class="head_left2">
	<i class="icon icon__menu gray_item" style="top:9px" onClick="$('#sidebar__mobile').show();$('#sidebar__desktop').show();$('#global_gray_layer_sidebar').show();"></i>
<a href="/" class="hesad_item" style="position: relative;top:-4px;margin-left: 5px;">ekzme</a>
</div><!--

<div class="head_center">
<div class="head_center_search_wrap">
<input type="text" class="text_field head_search_text_field" placeholder="Поиск">
</div>
</div>-->
</div>
</div>































<div class="content">

