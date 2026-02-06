<?php 
$heading = get_sub_field('coach_heading');
$name = get_sub_field('coach_name');
$text = get_sub_field('coach_text');
$link = get_sub_field('coach_link');
?>
<!-- Coach -->
<section id="coach" class="py-24">
  <div class="wrapper overflow-hidden">
    <div class="box-sm">
      <!-- Heading -->
      <h2 class="heading text-4xl mb-24">
        <?php echo $heading ?>
      </h2>
      <!-- Body -->
      <div class="pb-12">
        <!-- Image -->
        <img src="/wp-content/uploads/2024/02/original.jpeg" alt="Denis Novozilov dxbskating Roller School" class="rounded-lg rotate-6 duration-200 hover:rotate-0 hover:scale-110 md:min-w-[66%] md:w-[66%] md:translate-x-0">
        <!-- Card -->
        <div class="relative border p-4 pb-8 rounded-lg shadow-xl -mt-12 bg-white max-w-[520px] ml-auto sm:-mt-32 lg:-mt-[200px]">
          <h3 class="text-3xl font-semibold mb-6">
            <?php echo $name ?>
          </h3>
          <p class="text-xl mb-12">
            <?php echo $text ?>
          </p>
          <a href="<?php echo $link['url'] ?>" class="button">
            <?php echo $link['title'] ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>