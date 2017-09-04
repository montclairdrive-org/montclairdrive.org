<?php
/**
 * @file
 * The generic region template for Nitobe.
 *
 * The following variables are added to those normally available to
 * region.tpl.php:
 * - $nitobe_force_render If TRUE, the region should be rendered, even if
 *   empty.
 */
?>
<?php if ($nitobe_force_render || $content): ?>
  <div class="<?php print $classes; ?>">
    <?php if ($content) echo $content; ?>
  </div>
<?php endif; ?>
