<?php
/**
 * Форма ответа на вопрос о 5 лучших магазинах
 */
?>
<?php
module_load_include('inc', 'node', 'node.pages');
$form = node_add('vote');
echo $output = drupal_render($form);
?>
<a class="go-to-vote-link" href="/voting/most_wanted_retailer" id="voting-margin">Перейти к следующему вопросу</a>