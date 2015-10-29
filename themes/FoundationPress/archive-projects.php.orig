<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

  get_header();

  if ( !empty($_GET['sorting']) ) {
    $sorting = $_GET['sorting'];
  } else { $sorting = null; }

  $params = array ('limit' => -1);
  $pods = pods('projects', $params);

  $num_of_posts = 0;
?>

<div class="row page-title">
  <h1 class="strike"><span>Projects</span></h1>
</div>

<div class="row">
  <h4>Filter projects by</h4>
  <div id="filters" class="filter-button-group">
    <a href="#" class="filter-button is-checked" data-filter="*">ALL</a>
    <a href="#" class="filter-button" data-filter=".metal">LOCAL</a>
    <a href="#" class="filter-button" data-filter=".transition">INTERNATIONAL</a>
    <a href="#" class="filter-button" data-filter=".alkali, .alkaline-earth">INDOOR</a>
    <a href="#" class="filter-button" data-filter=":not(.transition)">OUTDOOR</a>
    <a href="#" class="filter-button" data-filter=".metal:not(.transition)">WALL-MOUNTED</a>
    <a href="#" class="filter-button" data-filter="numberGreaterThan50">FREE-STANDING</a>
  </div>
</div>

<?php if ( !have_posts() ) { _e('Sorry, no results were found.'); } ?>

<div class="row">
<div class="isotope">
<?php
if ( $pods->total() ) {
while ( $pods->fetch() ) {
  if (has_post_thumbnail( $post->ID ) ) {
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ) );
    $image = $image[0];
  }else{
    $image = get_bloginfo('template_directory')."/assets/images/black.png";
  } ?>

  <div class="element-item <?php echo $class; ?>" data-category="transition">
    <div><img src="<?php echo $image; ?>" /></div>
    <?php the_title('<h5>', '</h5>'); ?>
    <h6><?php echo $pods->display('display_from'); ?> - <?php echo $pods->display('display_until'); ?></h6>
    <h3 class="artist-name"><?php echo $pods->display('artist_name'); ?></h3>
  </div>
<?php }}

  if ( $sorting === null ) {
    // show all posts
    $num_of_posts++;
  } else {
    $post_terms = wp_get_post_terms ($post->ID, 'projectcategory');
    $current_post_custom_category = $post_terms[0]->slug;
    if ( $current_post_custom_category === $sorting ) {
      // show current matching post
      $num_of_posts++;
    }
  }

if ( $num_of_posts === 0 ) {
  _e('Sorry, no results were found.');
} ?>

</div>
</div>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
	<nav id="post-nav">
		<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
		<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
	</nav>
<?php } ?>
<?php get_footer(); ?>
