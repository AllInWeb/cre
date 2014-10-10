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

        $home_url = $GLOBALS['base_url'] ;
        if (isset($form_login)) {
            echo '<h3>Войти</h3>';
            echo drupal_render($form_login);
        }
        if (isset($form_edit) && isset($user->roles[5])) {
            echo '<h3>Редактирование профиля</h3>';
            echo drupal_render($form_edit);
        } else if (isset($user->roles[4])) {
            echo "<p>Для ввода информации о самых успешных магазинах / сетях / брендах Вашего торгового центра нажмите кнопку «приступить к голосованию». После ввода данных нажмите кнопку «сохранить» и «перейти к следующему вопросу». Перечислите самые ожидаемые в России бренды, еще не пришедшие на российский рынок. Сохраните введенную информацию, нажав кнопку «сохранить. Если Вы представляете несколько ТЦ, то нажмите «добавить ТЦ». Вы можете подать информацию по любому количеству торговых центров.</p>";
//            echo "<a class='go-to-vote-link' href='" . $home_url . "/voting/five_most_popular_shops'>Приступить к голосованию</a>";
            echo "<a class='go-to-vote-link' href='" . $home_url . "/second_voting'>Второй этап голосования</a>";
            echo "<a class='go-to-vote-link' href='" . $home_url . "/juri/account/edit'>Редактировать профиль</a>";
//            echo "<a class='go-to-vote-link' href='" . $home_url . "/add_tc'>Добавить ТЦ</a>";
        }
        ?>
    </div>

        <?php
        if (isset($form_register)) {
            echo '<div class="role-form">';
            if (isset($_GET['q']) && $_GET['q'] == 'user/retailer') {
                echo '<h3>Зарегистрировать сеть</h3>';
            } else if (isset($_GET['q']) && $_GET['q'] == 'user/juri') {
                echo '<h3>Регистрация жюри</h3>';
            }
            echo drupal_render($form_register);
            echo '</div>';
        } ?>


</div>
