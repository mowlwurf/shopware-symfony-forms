<?php
$attr['class'] = trim($attr['class'] . ' ' . $view['form']->block($form, 'form_widget_class') . ' ' . $view['form']->block($form, 'form_error'));
?>
    <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes', ['attr' => $attr]) ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />

<?php if (isset($help)) : ?>
    <span class="help-block"><?php echo $view->escape($help) ?></span>
<?php endif ?>
