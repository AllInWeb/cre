<?php
global $user;
$auth_user = user_load($user->uid);
if ($logged_in) {
    if (isset($auth_user->field_fio['und'][0]['value'])) {
        echo 'Здравствуйте, ' . $auth_user->field_fio['und'][0]['value'];
        echo '<a href="/user/logout" class="exit-link">Выйти</a>';
    } else {
        echo 'Здравствуйте, ' . $user->name;
        echo '<a href="/user/logout" class="exit-link">Выйти</a>';
    }
}
