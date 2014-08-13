<div class="login-container">

    <div class="authorization">
        <h3>Войти</h3>
        <?php
        if (isset($form_login)) {
            echo drupal_render($form_login);
        }

        if (isset($form_edit)) {
            echo drupal_render($form_edit);
        }
        ?>
    </div>

    <div class="role-form">
        <h3>Зарегистрировать сеть</h3>
        <?php echo drupal_render($form_register); ?>
    </div>

</div>