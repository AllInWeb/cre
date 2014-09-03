
<?php
/**
 * Форма ответа на вопрос о 5 лучших магазинах
 */
?>
<?php
//global $user;
//$user = user_load($user->uid);
//module_load_include('inc', 'user', 'user.pages');
//$form = drupal_get_form('user_profile_form', $user);
//echo drupal_render($form);
//?>
<?php
//module_load_include('inc', 'node', 'node.pages');
//$form = drupal_get_form('vote_node_form');
//echo drupal_render($form);
module_load_include('inc', 'node', 'node.pages');

$form = node_add('vote');
echo $output = drupal_render($form);
?>
<a class="go-to-vote-link" href="/voting/most_wanted_retailer" id="voting-margin">Перейти к следующему вопросу</a>