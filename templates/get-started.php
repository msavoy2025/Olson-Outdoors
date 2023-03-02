<?php
/**
 * Template Name: Get Started
 */
 ?>
<?php get_header('getStarted'); ?>

<div class="form_shell">
  <?php echo do_shortcode('[gravityform id="3" title="false" description="false" ajax="true" tabindex="49" field_values="check=First Choice,Second Choice"]'); ?>
</div>

<?php get_footer('getStarted'); ?>
