<?php
/**
 * Отображение голосования на главной странице
 */
?>
<div class="title-votes">
    <?php print render($title); ?>
</div>
<div class="line"></div>
<?php print render($content['field_votes']); ?>

