<div class="login-container">

    <div class="authorization">

        <?php
        if (isset($form_login)) {
            echo '<h3>Войти</h3>';
            echo drupal_render($form_login);
        }

        if (isset($form_edit)) {
            echo '<h3>Редактирование профиля</h3>';
            echo drupal_render($form_edit);
        }
        ?>
    </div>

    <div class="role-form">
        <?php
        if (isset($form_register)) {
            echo '<h3>Зарегистрировать сеть</h3>';
            echo drupal_render($form_register);
        } ?>
    </div>

</div>