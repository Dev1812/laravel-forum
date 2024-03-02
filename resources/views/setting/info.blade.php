<?php
include SITE_ROOT.'/resources/views/tpl/head.blade.php';
include SITE_ROOT.'/resources/views/tpl/sidebar.blade.php';
?>


<style type="text/css">
.setting_info_content{padding:24px 0}
</style>
<div class="setting_info_content">
<?php

//var_dump($owner_info);
?>
<link rel="stylesheet" type="text/css" href="/css/setting.css?<?php echo rand();?>">

<div class="big_form__block">
  
<FORM action="" method="POST">

    <input type="hidden" name="_token" value="{{ csrf_token() }}" />



<style type="text/css">
  .setting_content{margin:64px 0 65px}
.textarea{height: 74px;padding:9px 17px}
</style>

<?php
//var_dump(session('user_id'));
$first_name=!empty($owner_info[0]['first_name']) ? $owner_info[0]['first_name'] : '';
$last_name=!empty($owner_info[0]['last_name']) ? $owner_info[0]['last_name'] : '';
$login=!empty($owner_info[0]['login']) ? $owner_info[0]['login'] : '';
$email=!empty($owner_info[0]['email']) ? $owner_info[0]['email'] : '';
$bio=!empty($owner_info[0]['bio']) ? $owner_info[0]['bio'] : '';
//  var_dump($owner_info);
?>
















<style type="text/css">
.nav__info{margin:24px 0 7px}
</style>

<div class="form_content">
<div class="form_head">Информация</div>
<div class="form_body">

<div class="nav nav__info">
  
<div class="nav_wrap">
  <a href="/setting/info" class="nav_item nav_item__active">Инфо</a>
  <a href="/setting/change_photo" class="nav_item ">Фото</a>
</div>
</div>



<?php
//var_dump($result);
if(!empty($result)) {
  if($result['is_error']==true) {

  echo '
<div class="form_message form_message__error">
  <div class="form_message_title">'.$result['error']['error_message']['title'].'</div>
  <div class="form_message_body">'.$result['error']['error_message']['description'].'</div>
</div>';
  } else {

  echo '
<div class="form_message form_message__success">
  <div class="form_message_title">'.$result['success']['success_message']['title'].'</div>
  <div class="form_message_body">'.$result['success']['success_message']['description'].'</div>
</div>';
  }
}

?>


<FORM action="" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
  





<div class="form_big_section">
<div class="form_big_section_title">
<span class="form_big_section_title2">Имя</span>
</div>
<div class="form_big_section_body">
<input type="text" class="text_field text_field_big" placeholder="Ваш логин" name="setting_first_name" value="<?php echo $first_name;?>">
</div>
</div>

<div class="form_big_section">
<div class="form_big_section_title">
<span class="form_big_section_title2">Фамилия</span>
</div>
<div class="form_big_section_body">
<input type="text" class="text_field text_field_big" placeholder="Ваш логин" name="setting_last_name" value="<?php echo $last_name;?>">
</div>
</div>

<div class="form_big_section">
<div class="form_big_section_title">
<span class="form_big_section_title2">Логин</span>
</div>
<div class="form_big_section_body">
<input type="text" class="text_field text_field_big" placeholder="Ваш логин" name="setting_login" value="<?php echo $login;?>">
</div>
</div>

<div class="form_big_section">
<div class="form_big_section_title">
<span class="form_big_section_title2">Email</span>
</div>
<div class="form_big_section_body">
<input type="text" class="text_field text_field_big" placeholder="Ваш логин" name="setting_email" value="<?php echo $email;?>">
</div>
</div>


<div class="form_big_section">
<div class="form_big_section_title">
<span class="form_big_section_title2">Биография</span>
</div>
<div class="form_big_section_body">
<TEXTAREA type="text" class="text_field text_field_big" placeholder="Ваш логин" name="setting_bio" style="height:74px;padding:9px   14px;"><?php echo $bio;?></TEXTAREA>
</div>
</div>
  




<div class="form_big_section">
  <div class="form_big_section_title" style="margin-top: 14px;">


</div>
<div class="form_big_section_body">
<input type="submit" class="submit  button" placeholder="Ваш логин" name="setting_submit" >
</div>
</div>














</FORM>

</div></div>

















</div>





















<?php
include SITE_ROOT.'/resources/views/tpl/other.blade.php';
include SITE_ROOT.'/resources/views/tpl/footer.blade.php';
?>



