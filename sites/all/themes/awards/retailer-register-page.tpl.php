<?php
/**
 * Страница профиля и регистрации.
 * $form_login Форма авторизации
 * $form_edit Форма редактирования
 * $form_register Форма регистрации
 */
?>
<div class="login-container">
    <div class="authorization">
        <?php
        global $user;
        if (isset($form_login)) {
            echo '<h3>Войти</h3>';
            echo drupal_render($form_login);
        }
        if (isset($form_edit)) {
            if (isset($user->roles[4])) {
                echo "<a class='go-to-vote-link' href='/voting/five_most_popular_shops'>Приступить к голосованию</a>";
                echo "<a class='go-to-vote-link' href='/juri/account/edit'>Редактировать профиль</a>";
            } else if (isset($user->roles[5])) {
                echo '<h3>Редактирование профиля</h3>';
                echo drupal_render($form_edit);
            }
        }
        ?>
    </div>
    <div class="role-form">
        <?php
        if (isset($form_register)) {
            if (isset($_GET['q']) && $_GET['q'] == 'user/retailer') {
                echo '<h3>Зарегистрировать сеть</h3>';
            } else if (isset($_GET['q']) && $_GET['q'] == 'user/juri') {
                echo '<h3>Регистрация жюри</h3>';
            }
            echo drupal_render($form_register);
        } ?>
    </div>
</div>