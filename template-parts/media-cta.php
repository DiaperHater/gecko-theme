<?php 
$image = get_sub_field('media_cta_image');
$heading = get_sub_field('media_cta_heading');
$text = get_sub_field('media_cta_text');
$link = get_sub_field('media_cta_link');
?>
<!-- MediaCTA -->
<section class="py-12 md:py-24">
  <div class="wrapper">
    <div class="box">
      <!-- Inner -->
      <div class="md:grid md:grid-cols-2 md:gap-x-6 md:items-center">
        <!-- Media -->
        <picture>
          <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="w-[440px] max-w-full mx-auto aspect-[5/3] object-cover object-center mb-12 rotate-6 rounded-lg shadow-xl duration-100 hover:rotate-0 hover:scale-110 md:w-full">
        </picture>
        <!-- Content -->
        <div class="">
          <h2 class="heading mb-6 text-center">
            <?php echo $heading ?>
          </h2>
          <p class="text-2xl mb-8 text-center">
            <?php echo $text ?>
          </p>
          <a href="<?php echo $link['url'] ?>" class="button mx-auto">
            <?php echo $link['title'] ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>