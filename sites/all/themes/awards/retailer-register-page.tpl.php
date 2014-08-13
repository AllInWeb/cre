<?php echo drupal_render($form_register);?>
<br/>
<br/>
<br/>
<br/>
<?php
if (isset($form_login)) {
    echo drupal_render($form_login);
}

if (isset($form_edit)) {
    echo drupal_render($form_edit);
}
?>
