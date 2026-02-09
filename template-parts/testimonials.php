<?php
global $gecko;

$heading = get_sub_field('testimonials_heading');
$cards = get_sub_field('testimonials_cards');
?>
<!-- Testimonials -->
<section class="py-12 md:py-24 overflow-hidden bg-lime-600 text-neutral-200">
  <div class="wrapper">
    <div class="box">
      <!-- Heading -->
      <h2 class="heading mb-12 md:mb-24">
        <?php echo $heading ?>
      </h2>
      <!-- Slider -->
      <div class="swiper-testimonials">
        <div class="swiper-wrapper">
          <?php
          foreach ($cards as $card) {
            ?>
            <!-- Slide -->
            <div class="swiper-slide">
              <!-- Card -->
              <div class="p-4 rounded-md shadow-xl border rotate-3 duration-200 hover:rotate-0 cursor-default relative bg-neutral-800">
                <!-- BackgroundImage -->
                <div class="absolute top-0 left-0 w-full h-full py-8 flex justify-center items-center">
                  <img src="<?php $gecko->print_image_src('logo.png') ?>" alt="<?php $gecko->print_image_alt('Logo') ?>" class="block w-52 h-auto object-contain object-center opacity-30">
                </div>
                <!-- Content -->
                <div class="relative">
                  <!-- Stars -->
                  <div class="mb-5">
                    <?php $gecko->print_stars(5) ?>
                  </div>
                  <!-- Text -->
                  <p class="text-xl mb-4 md:text-2xl">
                    <?php echo $card['testimonials_cards_text'] ?>
                  </p>
                  <p class="text-2xl md:text-3xl">
                    ⎯⎯ <?php echo $card['testimonials_cards_name'] ?>
                  </p>
                </div>
              </div>
            </div>
            <?php
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</section>