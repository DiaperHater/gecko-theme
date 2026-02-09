<?php global $gecko; ?>
</main>

<!-- Footer -->
<footer class="pt-12 pb-4 bg-lime-600 text-neutral-200">
  <div class="wrapper">
    <div class="box">
      <!-- Navigation -->
      <div class="w-[920px] max-w-full mx-auto border-b pb-8 border-b-white md:mb-12 md:grid md:grid-cols-8 md:gap-x-6 lg:items-center">
        <!-- Logo -->
        <a href="/" class="flex justify-center mb-12 text-5xl font-bold leading-none text-center md:col-span-full md:text-center md:mb-0">
          <img src="<?php $gecko->print_image_src('logo-and-text.webp') ?>" alt="<?php $gecko->print_image_alt('Logo') ?>" class="h-40 w-auto">
        </a>
      </div>
    </div>
    <!-- Socials -->
    <div class="flex justify-center mb-12">
      <a href="tel:+971558730851" class="block text-3xl font-semibold underline text-neutral-900">
        +971-55-8730851
      </a>
    </div>
    <!-- Socials -->
    <div class="flex justify-center mb-12 gap-x-6">
      <?php get_template_part('template-parts/social-icons', null) ?>
    </div>
    <!-- Sign -->
    <div class="flex justify-between items-end border-t border-t-neutral-900">
      <p class="pt-4 font-light text-center">
        © <?php echo wp_date('Y') ?> Xtreme Gecko
      </p>
      <div>
        <?php $gecko->print_lang_switch() ?>
      </div>
      <p class="pt-4 font-light text-center">
        Website by <a href="https://valerypronin.com" class="font-bold hover:text-blue-500">Valery Pronin</a>
      </p>
    </div>
  </div>
  </div>
</footer>

<?php wp_footer() ?>

</body>

</html>