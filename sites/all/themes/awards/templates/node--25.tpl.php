<?php
/**
 * Форма ответа на вопрос о 5 лучших магазинах
 */
?>
<?php
global $user;
$user = user_load($user->uid);
module_load_include('inc', 'user', 'user.pages');
$form = drupal_get_form('user_profile_form', $user);
echo drupal_render($form);
$form['field_photo']['#access'] = false;
$form['field_job']['#access'] = false;
$form['field_company']['#access'] = false;
$form['field_rireit']['#access'] = false;
$form['field_fio_en']['#access'] = false;
$form['field_field_job_en_']['#access'] = false;
$form['field__company_en_']['#access'] = false;
$form['field_riteil_en_']['#access'] = false;
 ?>
<a class="voting-link" href="/voting/most_wanted_retailer">Перейти к следующему вопросу</a>