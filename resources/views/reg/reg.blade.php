<?php
include SITE_ROOT.'/resources/views/tpl/head.blade.php';
include SITE_ROOT.'/resources/views/tpl/sidebar.blade.php';
?>




















<style type="text/css">
.form_content{padding:114px 0 0}
</style>







<div class="form_content">
<div class="form_head">Регистрация</div>
<div class="form_body">


<?php
if(!empty($result)) {
	echo '
<div class="form_message form_message__error">
<div class="form_message_title">'.$result['error']['error_message']['title'].'	</div>
<div class="form_message_text">'.$result['error']['error_message']['description'].'</div>
</div>

';					
}
?>

<FORM action="" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
	
<div class="form_big_section">
<div class="form_big_section_title">
<span class="form_big_section_title2">Имя</span>
</div>
<div class="form_big_section_body">
<input type="text" class="text_field text_field_big" placeholder="Ваше имя" name="reg_first_name">
</div>
</div>
	
<div class="form_big_section">
<div class="form_big_section_title">
<span class="form_big_section_title2">Фамилия</span>
</div>
<div class="form_big_section_body">
<input type="text" class="text_field text_field_big" placeholder="Ваша фамилия" name="reg_last_name">
</div>
</div>
	
<div class="form_big_section">
<div class="form_big_section_title">
<span class="form_big_section_title2">Логин</span>
</div>
<div class="form_big_section_body">
<input type="text" class="text_field text_field_big" placeholder="Ваш логин" name="reg_login">
</div>
</div>
	
<div class="form_big_section">
<div class="form_big_section_title">
<span class="form_big_section_title2">Email</span>
</div>
<div class="form_big_section_body">
<input type="text" class="text_field text_field_big" placeholder="Ваш email" name="reg_email">
</div>
</div>
	
<div class="form_big_section">
<div class="form_big_section_title">
<span class="form_big_section_title2">Пароль</span>
</div>
<div class="form_big_section_body">
<input type="text" class="text_field text_field_big" placeholder="Ваш пароль" name="reg_password">
</div>
</div>

	


	
<div class="form_big_section form_big_section_wrapper">
<div class="form_big_section_body">
<input type="submit" class="button" name="reg_submit">
</div>
</div>
</FORM>

</div>
</div>













<?php
include SITE_ROOT.'/resources/views/tpl/other.blade.php';
include SITE_ROOT.'/resources/views/tpl/footer.blade.php';
?>