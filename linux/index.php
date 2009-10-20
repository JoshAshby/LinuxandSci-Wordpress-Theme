<?php
// Include Wordpress 
define('WP_USE_THEMES', false);
require('wp-blog-header.php');
query_posts('showposts=10');
?>
<? include("header.php"); ?>
<table cellpadding="0" cellspacing="0" border="0" width="800" align="center">
<tr>
<td>
<div id="content">
<? include("quote.php"); ?>
<?php wp_loginout(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div id="post-<?php the_ID(); ?>" <?php if(function_exists('post_class')) : post_class(); else : echo 'class="post"'; endif; ?>>
<h2>
<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
</h2>
<?php the_content(__('&rsaquo; Continue reading')); ?>
<?php the_tags('<p class="tags">Tags: ', ', ', '</p>'); ?>
<?php edit_post_link('[edit post]', '<p>', '</p>'); ?>
<?php the_time('l, F jS, Y'); ?>
<?php the_category(', '); ?>
<?php comments_popup_link(__('No Comments'), __('1 Comment'), __('% Comments')); ?>
<?php endwhile; ?>
<?php next_posts_link('&laquo; Previous Entries') ?> <?php previous_posts_link('Next Entries &raquo;') ?>
<?php else : ?>
<h3>Not found!</h3>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php include (TEMPLATEPATH . "/searchform.php"); ?>
<?php endif; ?>
<br>
<?php wp_generate_tag_cloud(); ?>
<?php wp_tag_cloud(); ?>
<br>
</div>
</td></tr></table>
<? include("footer.php"); ?>