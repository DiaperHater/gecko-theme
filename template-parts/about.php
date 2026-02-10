<?php
global $gecko;

$video = get_sub_field('about_video');
$video_poster = get_sub_field('about_video_poster');
$intro = get_sub_field('about_intro');
?>
<!-- About -->
<section id="about" class="bg-neutral-800 py-24 relative">
  <!-- BackgroundImage -->
  <div class="absolute top-0 left-0 w-full h-full py-8">
    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo-gradient.png" alt="<?php $gecko->print_image_alt('Logo') ?>" class="block w-full h-full object-contain object-center opacity-30">
  </div>
  <div class="wrapper relative">
    <div class="box">
      <!-- Columns -->
      <div class="flex items-center flex-col md:flex-row gap-12">
        <!-- LeftCol -->
        <div class="grow-0 w-1/2 md:w-1/4">
          <video autoplay loop muted playsinline class="block w-full h-auto rounded-xl border">
            <source src="<?php echo $video['url'] ?>" type="video/mp4" />
            <img src="<?php echo $video_poster['url']?>" alt="<?php $gecko->print_image_alt($video_poster['alt']) ?>">
          </video>
        </div>
        <!-- RightCol -->
        <p class=" w-3/4 relative subheading text-neutral-100 font-light text-center">
          <?php echo $intro ?>
        </p>
      </div>
    </div>
  </div>
</section>