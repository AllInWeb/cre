<?php
/**
 * @file
 * Default simple view template to display a list of rows.
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
    <h3><?php print $title; ?></h3>
<?php endif; ?>
<div class="merge">
<?php foreach ($rows as $id => $row): ?>
    <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
        <?php print $row; ?>
    </div>
<?php endforeach; ?>
</div>
<?php
    module_load_include('inc', 'node', 'node.pages');
    $form = node_add('vote');
    echo $output = drupal_render($form);
?>