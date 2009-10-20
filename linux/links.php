<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

/*
Template Name: Links
*/
?>

<?php get_header(); ?>
<table cellpadding="0" cellspacing="0" border="0" width="800" align="center">
<tr>
<td>
<div id="content" class="widecolumn">

<h2>Links:</h2>
<ul>
<?php wp_list_bookmarks(); ?>
</ul>

</div>
</td></tr></table>
<?php get_footer(); ?>
