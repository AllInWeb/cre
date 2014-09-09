<?php
global $user;
$auth_user = user_load($user->uid);
if ($logged_in == true) {
    if (isset($auth_user->field_fio['und'][0]['value'])) {
        echo 'Здравствуйте, ' . $auth_user->field_fio['und'][0]['value'];
    } else {
        echo 'Здравствуйте, ' . $user->name;
    }
    echo '<a href="' . $GLOBALS['base_url'] . '/user/logout" class="exit-link">Выйти</a>';
}
