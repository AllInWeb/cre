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
?>
<?php print l(t('Home'), '<front>' , array('attributes' => array('class' => array('voting-link'))));?>