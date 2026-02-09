<?php
global $gecko;
$intro = get_sub_field('about_intro');
?>
<!-- About -->
<section id="about" class="bg-neutral-800 py-24 relative">
  <!-- BackgroundImage -->
  <div class="absolute top-0 left-0 w-full h-full py-8">
    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo-gradient.png" alt="<?php $gecko->print_image_alt('Logo') ?>" class="block w-full h-full object-contain object-center opacity-30">
  </div>
  <div class="wrapper">
    <div class="box">
      <p class="relative subheading text-neutral-100 font-light text-center">
        <?php echo $intro ?>
      </p>
    </div>
  </div>
</section>