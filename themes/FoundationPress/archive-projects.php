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

get_header(); ?>

<div class="row">
<!-- Row for main content area -->
	<div class="small-12 large-8 columns" role="main">

	<?php if ( !have_posts() ) { _e('Sorry, no results were found.'); } ?>

HELLO TEST


<div class="row page-title">
  <h1 class="strike"><span>Projects</span></h1>
</div>

<div class="row">
  <h4>Filter projects by</h4>
  <div id="filters" class="filter-button-group">  <button class="filter-button is-checked" data-filter="*">ALL</button>
    <button class="filter-button" data-filter=".metal">LOCAL</button>
    <button class="filter-button" data-filter=".transition">INTERNATIONAL</button>
    <button class="filter-button" data-filter=".alkali, .alkaline-earth">INDOOR</button>
    <button class="filter-button" data-filter=":not(.transition)">OUTDOOR</button>
    <button class="filter-button" data-filter=".metal:not(.transition)">WALL-MOUNTED</button>
    <button class="filter-button" data-filter="numberGreaterThan50">FREE-STANDING</button>
  </div>
</div>

<div class="row">
  <div class="isotope">
    <div class="element-item transition metal " data-category="transition">
      <div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumb-art-1.png"></div>
      <h5>Wan Chai</h5>
      <h6>June 2015 - July 2015</h6>
      <h3 class="artist-name">MTR CORPORATION:</h3>
      <h3>Tiara Sculpture Competition</h3>
    </div>
    <div class="element-item metalloid " data-category="metalloid">
      <div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumb-art-1.png"></div>
      <h5>Wan Chai</h5>
      <h6>June 2015 - July 2015</h6>
      <h3 class="artist-name">MTR CORPORATION:</h3>
      <h3>Tiara Sculpture Competition</h3>
    </div>
    <div class="element-item post-transition metal " data-category="post-transition">
      <div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumb-art-1.png"></div>
      <h5>Wan Chai</h5>
      <h6>June 2015 - July 2015</h6>
      <h3 class="artist-name">MTR CORPORATION:</h3>
      <h3>Tiara Sculpture Competition</h3>
    </div>
    <div class="element-item post-transition metal " data-category="post-transition">
      <div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumb-art-1.png"></div>
      <h5>Wan Chai</h5>
      <h6>June 2015 - July 2015</h6>
      <h3 class="artist-name">MTR CORPORATION:</h3>
      <h3>Tiara Sculpture Competition</h3>
    </div>
    <div class="element-item transition metal " data-category="transition">
      <div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumb-art-1.png"></div>
      <h5>Wan Chai</h5>
      <h6>June 2015 - July 2015</h6>
      <h3 class="artist-name">MTR CORPORATION:</h3>
      <h3>Tiara Sculpture Competition</h3>
    </div>
    <div class="element-item alkali metal " data-category="alkali">
      <div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumb-art-1.png"></div>
      <h5>Wan Chai</h5>
      <h6>June 2015 - July 2015</h6>
      <h3 class="artist-name">MTR CORPORATION:</h3>
      <h3>Tiara Sculpture Competition</h3>
    </div>
    <div class="element-item alkali metal " data-category="alkali">
      <div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumb-art-1.png"></div>
      <h5>Wan Chai</h5>
      <h6>June 2015 - July 2015</h6>
      <h3 class="artist-name">MTR CORPORATION:</h3>
      <h3>Tiara Sculpture Competition</h3>
    </div>
    <div class="element-item transition metal " data-category="transition">
      <div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumb-art-1.png"></div>
      <h5>Wan Chai</h5>
      <h6>June 2015 - July 2015</h6>
      <h3 class="artist-name">MTR CORPORATION:</h3>
      <h3>Tiara Sculpture Competition</h3>
    </div>
    <div class="element-item alkaline-earth metal " data-category="alkaline-earth">
      <div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumb-art-1.png"></div>
      <h5>Wan Chai</h5>
      <h6>June 2015 - July 2015</h6>
      <h3 class="artist-name">MTR CORPORATION:</h3>
      <h3>Tiara Sculpture Competition</h3>
    </div>
    <div class="element-item transition metal " data-category="transition">
      <div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumb-art-1.png"></div>
      <h5>Wan Chai</h5>
      <h6>June 2015 - July 2015</h6>
      <h3 class="artist-name">MTR CORPORATION:</h3>
      <h3>Tiara Sculpture Competition</h3>
    </div>
  </div>
</div>

	<?php /* Display navigation to next/previous pages when applicable */ ?>
	<?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
		</nav>
	<?php } ?>

	</div>
</div>
<?php get_footer(); ?>
