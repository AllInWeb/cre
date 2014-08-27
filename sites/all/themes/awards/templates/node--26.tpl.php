<?php
/**
 * Форма ответа на вопрос о 3 лучших ретейлерах
 */
?>
<?php
global $user;
$user = user_load($user->uid);
module_load_include('inc', 'user', 'user.pages');
$form = drupal_get_form('user_profile_form', $user);
echo drupal_render($form);
//var_dump($form);
$form['field_photo']['#access'] = false;
$form['field_job']['#access'] = false;
$form['field_company']['#access'] = false;
$form['field_rireit']['#access'] = false;
$form['field_fio_en']['#access'] = false;
$form['field_field_job_en_']['#access'] = false;
$form['field__company_en_']['#access'] = false;
$form['field_riteil_en_']['#access'] = false;
?>
<?php print l(t('Home'), '<front>' , array('attributes' => array('class' => array('voting-link'))));?>