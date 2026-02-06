<?php
get_header();

$row_layout = get_row_layout();

if (have_rows('content')) {
  while (have_rows('content')) {
    the_row();

    if (get_row_layout() == 'hero') {
      get_template_part('template-parts/hero');
    } elseif (get_row_layout() == 'about') {
      get_template_part('template-parts/about');
    } elseif (get_row_layout() == 'cta') {
      get_template_part('template-parts/cta');
    } elseif (get_row_layout() == 'levels') {
      get_template_part('template-parts/levels');
    } elseif (get_row_layout() == 'prices') {
      get_template_part('template-parts/prices');
    } elseif (get_row_layout() == 'media_cta') {
      get_template_part('template-parts/media-cta');
    } elseif (get_row_layout() == 'testimonials') {
      get_template_part('template-parts/testimonials');
    } elseif (get_row_layout() == 'reasons') {
      get_template_part('template-parts/reasons');
    } elseif (get_row_layout() == 'coach') {
      get_template_part('template-parts/coach');
    } elseif (get_row_layout() == 'form') {
      get_template_part('template-parts/form');
    }
  }
}
get_footer();