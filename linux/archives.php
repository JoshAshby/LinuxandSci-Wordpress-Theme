<?php
/**
 * @package WordPress
 * @subpackage linux
 */
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>
<table cellpadding="0" cellspacing="0" border="0" width="800" align="center">
<tr>
<td>
<div id="content" class="widecolumn">

<?php get_search_form(); ?>

<h2>Archives by Month:</h2>
	<ul>
		<?php wp_get_archives('type=monthly'); ?>
	</ul>

<h2>Archives by Subject:</h2>
	<ul>
		 <?php wp_list_categories(); ?>
	</ul>

</div>
</td></tr></table>
<?php get_footer(); ?>
