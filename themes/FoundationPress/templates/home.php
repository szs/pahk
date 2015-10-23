<?php
/*
Template Name: Home
*/
get_header(); ?>

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

<?php get_footer(); ?>