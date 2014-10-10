<style>
    label {
        display: none;
    }
</style>
<?php
/**
 * Форма ответа на вопрос о 3 лучших ритейлерах
 */
    global $user;
    $user = user_load($user->uid);
    module_load_include('inc', 'user', 'user.pages');
    $form = drupal_get_form('user_profile_form', $user);
    echo drupal_render($form);
?>
<a class="go-to-vote-link" href="<?php print $GLOBALS['base_url'] ?>/add_tc" id="voting-margin">Добавить ТЦ</a>
