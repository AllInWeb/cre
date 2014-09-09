<?php
/**
 * Форма редактирования профиля Жюри
 */
    global $user;
    $user = user_load($user->uid);
    module_load_include('inc', 'user', 'user.pages');
    $form = drupal_get_form('user_profile_form', $user);
    echo drupal_render($form);

