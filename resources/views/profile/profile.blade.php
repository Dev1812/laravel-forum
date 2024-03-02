<?php
include SITE_ROOT.'/resources/views/tpl/head.blade.php';
include SITE_ROOT.'/resources/views/tpl/sidebar.blade.php';
?>  
<div class="profile_content">


<style type="text/css">
.profile__gallery{width: 100%;}
.profile_gallery__photo{width: 27%;margin:24px auto}
.profile__gallery__photo_wrap{text-align: center;}
.profile__gallery__wrap{
    width: 74%;
    margin: 11px auto 24px;}

    .gallery__wrap_title{}
    .gallery__wrap_bottom{margin-top: 19px}
    .profile_content{margin-top:54px}
</style>

<div class="gallery profile__gallery">

<div class="gallery__photo_wrap profile__gallery__photo_wrap">

<div class="gallery__photo profile_gallery__photo photo_cover" style="background-image: url('<?php echo $owner_info[0]['big_photo'];?>');">
</div>
<div class="profile__gallery__wrap">
  <div class="gallery__wrap_title"><?php echo $owner_info[0]['first_name'];?></div>
  <div class="gallery__wrap_body" style="margin-top: 14px;">
  	<?php echo !empty($owner_info[0]['bio']) ? $owner_info[0]['bio'] : 'без биографии';?>
  </div>
  <div class="gallery__wrap_bottom">
    <?php



    ?>
<script type="text/javascript">
function deletePhoto(item_id) {

$('#gallery_menu_layer_wrap_block_'+item_id).show();
$('#gallery_menu_block_'+item_id).show();
$.ajax({
  url:'/photo/ajax_delete?item_id='+item_id,
  method:'get',
  success: function(obj) { 

  }
});
}
function restorePhoto(item_id) {



$('#gallery_menu_layer_wrap_block_'+item_id).show();
$('#gallery_menu_block_'+item_id).show();
$.ajax({
  url:'/photo/ajax_restore?item_id='+item_id,
  method:'get',
  success: function(obj) {
    //alert(obj);
$('#gallery_menu_layer_wrap_block_'+item_id).hide();
$('#gallery_menu_block_'+item_id).hide();


  }
});
}
var get_more_photos_offset=8;
var item_id='<?php echo $owner_info[0]['id'];?>';
function getMore() {
  $.ajax({
    url: '/profile/ajax_get_more_profile?offset='+get_more_photos_offset+'&item_id='+item_id,
    method: 'get',
    success: function(obj) {
      //alert(obj);
      //$('#gallery__photo_wrap').html();
      get_more_photos_offset = get_more_photos_offset+8;
    obj = JSON.parse(obj);
      var html = document.createElement('div');
      //alert(obj.html);
      html.innerHTML = obj.html;
     // html.css style="padding:14px 0">
var element = document.getElementById('gallery__photo_wrap');
element.appendChild(html);
////element.insertBefore(html, element.firstChild);


    }
  });
}
</script>





  <script type="text/javascript">
function follow(item_id) {
$.ajax({
url:'/profile/ajax_follow?item_id='+item_id,
method:'get',
success: function(obj) {  
  $('#follow_button_'+item_id).hide();
  $('#un_follow_button_'+item_id).show();
}
});
/*
$('#is_error')*/
}
function unFollow(item_id) {
$.ajax({
url:'/profile/ajax_un_follow?item_id='+item_id,
method:'get',
success: function(obj) {

  $('#follow_button_'+item_id).show();
  $('#un_follow_button_'+item_id).hide();
}
});
/*
$('#is_error')*/
}


  </script>

  <?php




if(isUserAuth()) {
  if($owner_info[0]['id'] != session('user_id')) {
  ?>

<button class="button" id="follow_button_<?php echo $owner_info[0]['id'];?>" onClick="follow(<?php echo $owner_info[0]['id'];?>)" style="width: auto;margin:auto; display: <?php echo $is_i_follow ? 'none' :'block'; ?>">подписаться</button>
<button class="button gray_button button_gray" id="un_follow_button_<?php echo $owner_info[0]['id'];?>" onClick="unFollow(<?php echo $owner_info[0]['id'];?>)"style="width: auto;margin:auto; display: <?php echo $is_i_follow ? 'block' :'none'; ?>">отписаться</button>
<?php
}
}
?>

    



  </div>

</div>

</div>
</div>

<div></div>

<div class="nav">
<div class="nav_wrap">
	<a href="/photo" class="nav_item nav_item__active">фото</a>
</div>
</div>
<style type="text/css">
.gallery_close{
    background-color: #000;
    width: 27px;
    height: 27px;
    position: absolute;
    top: 0;
    right: 0;
    text-align: center;
    padding: 7px 3px 14px 4px;
    border-radius: 9px;margin:9px ;cursor:pointer;}
    .icon__gallery_close{background-image:url('/image/icon/close_small_white.png');width: 17px;height: 17px;text-align: center;}
</style>
<style>

.gallery__param_gray_layer{position: absolute;top:0;left:0;right:0;bottom:0;background-color: #000;z-index: 3;opacity: .5 ;}

.gallery__param_layer_wrap{position: absolute;top:0;left:0;right:0;bottom:0;z-index: 9;font-size: 19px;color:#FFF;text-align: center}

.gallery__param_layer_title{font-size:21px;margin:74px 0 14px}
</style>





<div id="gallery__photo_wrap">
<?php
foreach($photos as $v) {/*
  $v['data']=array();
  $v['data']['id']='1';*/
    ?>  
<div class="gallery" style="display: inline-block;"> 





<div class="gallery__photo_wrap" style="position:relative;">
<?php
if($v['owner_id'] == session('user_id')) {


?>

<div class="gallery_close" onClick="deletePhoto(<?php echo $v['id'];?>)"><i class="icon icon__gallery_close"></i></div>
  


<div class="gallery__param_gray_layer" id="gallery_menu_layer_wrap_block_<?php echo $v['id'];?>"
 style="display:none;"></div>







<div class="gallery__param_layer_wrap" id="gallery_menu_block_<?php echo $v['id'];?>" style="display:none">
<div class="gallery__param_layer">
<div class="gallery__param_layer_title">Фото удалено</div>
<div class="gallery__param_layer_body"><button class="button" style="width:auto;background-color: #FFF;color: #000;" onClick="restorePhoto(<?php echo $v['id'];?>) ">Восстановить</button></div>
</div>
</div>

<?php
}
?>




<div class="gallery__photo_wrap">

<a href="/photoview/<?php echo $v['id'];?>" style="color:#000;">
<div class="gallery__photo photo_cover" style="background-image: url('<?php echo $v['big_photo'];?>');">
</div></a>
<div class="gallery__wrap">
  <div class="gallery__wrap_title"><?php echo !empty($v['title']) ? $v['title'] : '...';?></div>
  <div class="gallery__wrap_body">

    <span><?php echo $v['date_created'];?></span>
  </div>
  <div class="gallery__wrap_bottom">














  <script type="text/javascript">
function addLike(item_id) {
  $.ajax({
    url:'/photo/ajax_add_like?item_id='+item_id,
    method: 'get',
    success: function(obj) {
      obj = JSON.parse(obj);
//alert(obj);
      //obj.likes_counter
      $('#add_like_block_'+item_id).hide();
      $('#remove_like_block_'+item_id).show();
      $('#mark_block__add_like_counter_'+item_id).text(obj.likes_counter);
      $('#mark_block__remove_like_counter_'+item_id).text(obj.likes_counter);
    }
  });
}
function removeLike(item_id) {
  $.ajax({
    url:'/photo/ajax_remove_like?item_id='+item_id,
    method: 'get',
    success: function(obj) {
      obj = JSON.parse(obj);

//alert(obj);
      $('#add_like_block_'+item_id).show();
      $('#remove_like_block_'+item_id).hide();
      //obj.likes_counter
      $('#mark_block__add_like_counter_'+item_id).text(obj.likes_counter);
      $('#mark_block__remove_like_counter_'+item_id).text(obj.likes_counter);
    }
  });
}

  </script>



























<style>

  .gg{background-image: url('/image/icon/comment-outline.png');}

</style>


    <div class="mark_block add_like_block"<?php if($v['is_my_like']) echo 'style="display:none"';?> id="add_like_block_<?php echo $v['id'];?>" onclick="addLike(<?php echo $v['id'];?>)">
      <i class="icon icon_add_like"></i>
      <span class="mark_block__add_like_counter" id="mark_block__add_like_counter_<?php echo $v['id'];?>"><?php echo $v['likes_counter'];?>  </span>
    </div>


    <div class="mark_block remove_like_block"<?php if(!$v['is_my_like']) echo 'style="display:none"';?> id="remove_like_block_<?php echo $v['id'];?>"  onclick="removeLike(<?php echo $v['id'];?>)">
      <i class="icon icon_remove_like"></i>
      <span class="mark_block__remove_like_counter" id="mark_block__remove_like_counter_<?php echo $v['id'];?>"><?php echo $v['likes_counter'];?> </span>
    </div>


<a href="/photoview/<?php echo $v['id'];?>" style="color:#000;">

    <div class="mark_block remove_like_block" style="float:right;">
      <i class="icon icon_remove_like gg"></i>
      <span class="mark_block__remove_like_counter" id="mark_block__remove_like_counter_<?php echo $v['id'];?>"><?php echo $v['comments_counter'];?> </span>
    </div></a>



























    











  </div>

</div>

</div>
</div>
</div>
  <?php
} 
?>
</div>


<?php


if(!empty(!$photos)) {
  echo '
<div onClick="getMore()" style="width:100%;text-align: center;margin:54px 0 54px">Не найдено ни отного фото
<div style="margin-top:9px"><a style="border-bottom:1px dashed blue" href="/photo/upload">загрузить</a></div></div>';  
}
if(!empty($photos)) {
  echo '
<div onClick="getMore()" style="width:100%;text-align: center;background-color: #DDD;padding:9px 0;">load more</div>';
} 
?>


</div>
<?php
include SITE_ROOT.'/resources/views/tpl/other.blade.php';
include SITE_ROOT.'/resources/views/tpl/footer.blade.php';
?>