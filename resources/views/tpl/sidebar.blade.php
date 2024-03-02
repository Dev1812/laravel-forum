<style type="text/css">
	.sidebar{position: fixed;top:0;padding-top:9px;left:0;bottom:0;background-color: #FFF;width: 10%!important;z-index: 97}

.sidebar__item_block{display: block;padding: 5px 14px;border-radius: 9px}
.sidebar__item_block:hover{background-color: #DBDBDB	}
.sidebar__photo{width: 64px;height: 64px}
.sidebar__photo_wrap{padding:0 14px 7px 14px}
.sidebar__item_block_first_name{font-weight: bold;}
#sidebar__desktop{display:  block;margin-top:71px!important;padding-top: 0!important;width: 9.8%}
#sidebar__mobile{display: none;margin-top:4px;	z-index: 54;}
#global_gray_layer_sidebar{display: none;}
#head__desktop{display: block;}
#head__mobile{display: none;}
@media (max-width: 925px) {	

#sidebar__mobile{margin-top:0;display: block;z-index: 94;background-color: #FFF;width: 14%!important	}
#sidebar__desktop{display:  none;		z-index: 13;width: 32%}

#head__desktop{display: none;margin-top: 64px!important}
#head__mobile{display: block;}

.gallery{width: 100%}

.content{width: 97%!important}

.profile_gallery__photo {width:80%!important;}


}
.global_gray_layer{position: fixed;top:0;left: 0;right:0;bottom:0;background-color: #000;z-index: 94;opacity: .4}
</style>


<?php
if(isUserAuth()) {
	?>

<div class="global_gray_layer" id="global_gray_layer_sidebar" onClick="$('#sidebar__mobile').hide();$('#sidebar__desktop').hide();$('#global_gray_layer_sidebar').hide();"></div>


<div class="sidebar sidebar__mobile" id="sidebar__mobile" style="display:none">
<div class="sidebar__wrap">
<div class="sidebar__user_bar">
<div class="sidebar__photo_wrap">
<div class="sidebar__photo photo_cover" style="background-image: url('<?php echo session('user_small_photo');?>')">
	</div>

	</div>
</div>
<div class="sidebar__body">
<a class="sidebar__item_block sidebar__item_block_first_name" href="/id<?php echo session('user_id');?>"><?php echo session('user_first_name');?></a>
<a class="sidebar__item_block" href="/search">Люди</a>
<a class="sidebar__item_block" href="/photo">Фото</a>
<a class="sidebar__item_block" href="/setting">Настройки</a>
<a class="sidebar__item_block" href="/logout">Выход</a>
</div>


</div>
</div>	


	
<div class="sidebar sidebar__desktop" id="sidebar__desktop">
<div class="sidebar__wrap">
<div class="sidebar__user_bar">
<div class="sidebar__photo_wrap">
<div class="sidebar__photo photo_cover" style="background-image: url('<?php echo session('user_small_photo');?>')">
	</div>

	</div>
</div>
<div class="sidebar__body">
<a class="sidebar__item_block sidebar__item_block_first_name" href="/id<?php echo session('user_id');?>"><?php echo session('user_first_name');?></a>
<a class="sidebar__item_block" href="/search">Люди</a>
<a class="sidebar__item_block" href="/photo">Фото</a>
<a class="sidebar__item_block" href="/setting">Настройки</a>
<a class="sidebar__item_block" href="/logout">Выход</a>
</div>


</div>
</div>	
	<?php
}
?>