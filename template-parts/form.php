<?php global $gecko ?>
<!-- Form -->
<section id="form" class="py-24 bg-neutral-800 text-neutral-200">
  <div class="wrapper">
    <div class="box relative">
      <!-- BackgroundImage -->
      <div class="absolute top-0 left-0 w-full h-full py-8">
        <img src="<?php $gecko->print_image_src('logo.png') ?>" alt="<?php $gecko->print_image_alt('Logo') ?>" class="block w-full h-full object-contain object-center opacity-30">
      </div>
      <!-- Content -->
      <div class="relative">
        <div class="mb-24 grid gap-y-4">
          <!-- Heading -->
          <h2 class="heading text-neutral-100 row-start-2">
            <?php _e('Schedule a Session', 'gecko') ?>
          </h2>
          <!-- Contacts -->
          <div class="flex flex-col items-end">
            <a href="tel:+971558730851" class="text-3xl font-semibold underline text-neutral-100 block mb-4">
              +971-55-8730851
            </a>
            <!-- Socials -->
            <div class="flex gap-x-6 ml-auto text-neutral-100">
              <?php get_template_part('template-parts/social-icons', null, array('hover_off' => true)) ?>
            </div>
          </div>
        </div>
        <!-- FormForm -->
        <div class="max-w-xl mx-auto">
          <?php
          if ($gecko->current_lang === 'ru') {
            echo do_shortcode('[contact-form-7 id="840238b" title="Contact form (Ru)"]');
          } else {
            echo do_shortcode('[contact-form-7 id="9b147c5"]');
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</section>