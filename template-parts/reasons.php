<?php 
global $gecko;

$heading = get_sub_field('reasons_heading');
$cards = get_sub_field('reasons_cards');
?>
<!-- Reasons -->
<section class="bg-neutral-800 text-neutral-200 py-12 md:py-24 relative">
  <div class="wrapper overflow-hidden pb-11">
    <div class="box">
      <h2 class="heading text-center text-neutral-100 mb-16">
        <?php echo $heading ?>
      </h2>
      <!-- Cards -->
      <div class="grid grid-cols-4 gap-y-12 md:grid-cols-6 md:gap-x-12 md:gap-y-24">
        <?php
        foreach ($cards as $index => $card) {
          $rotate_class = ($index % 2 === 0) ? '-rotate-3' : 'rotate-3';
          ?>
          <!-- Card -->
          <div class="col-span-3 col-start-2 p-4 rounded-xl border shadow-lg text-center <?php echo $rotate_class ?> duration-200 hover:rotate-0 cursor-default bg-neutral-200 text-neutral-800  relative md:col-start-auto md:pb-12 xl:col-span-2">
            <h3 class="text-2xl mb-6">
              <?php echo $card['reasons_cards_title'] ?>
            </h3>
            <p class="text-xl">
              <?php echo $card['reasons_cards_text'] ?>
            </p>
            <!-- Icon -->
            <img src="<?php $gecko->print_image_src('logo.png') ?>" alt="<?php echo $gecko->print_image_alt('Logo') ?>" class="w-24 h-24 absolute top-1/2 right-full -translate-y-1/2  -translate-x-2 md:top-full md:left-1/2 md:-translate-y-1/2 md:right-auto md:-translate-x-1/2">
          </div>
          <?php
        }
        ?>
      </div>
    </div>
  </div>
</section>