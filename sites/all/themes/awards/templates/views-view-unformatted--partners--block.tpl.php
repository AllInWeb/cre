<?php
/**
 * Отображение партнеров на страницах
 */
?>

<?php if (!empty($title)): ?>
    <h3><?php print $title; ?></h3>
<?php endif; ?>
<marquee style="HEIGHT:500px" scrollamount="1" scrolldelay="30" direction="up" truespeed="">
    <?php foreach ($rows as $id => $row): ?>
        <div<?php if ($classes_array[$id]) {
            print ' class="' . $classes_array[$id] . '"';
        } ?>>
            <?php print $row; ?>
        </div>
    <?php endforeach; ?>
</marquee>
