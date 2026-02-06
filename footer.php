  </main>

  <!-- Footer -->
  <footer class="pt-12 pb-4">
    <div class="wrapper">
      <div class="box">
        <!-- Navigation -->
        <div class="w-[920px] max-w-full mx-auto border-b border-b-white md:mb-12 md:grid md:grid-cols-8 md:gap-x-6 lg:items-center">
          <!-- Logo -->
          <a href="/" class="block mb-12 text-5xl font-bold leading-none text-center duration-200 hover:text-blue-500 md:col-span-full md:text-center md:mb-0">
            Xtreme Gecko
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
      <div class="flex justify-between border-t border-t-neutral-900">
        <p class="pt-4 font-light text-center">
          © <?php echo wp_date('Y') ?> Xtreme Gecko
        </p>
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