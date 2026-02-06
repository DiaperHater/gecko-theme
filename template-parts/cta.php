<?php
$image = get_sub_field('cta_image');
$heading = get_sub_field('cta_heading');
$link = get_sub_field('cta_link');
?>

<!-- CTA -->
<section class="py-48 relative">
  <!-- BG -->
  <picture class="">
    <img src="<?= $image['url'] ?>" class="absolute top-0 left-0 w-full h-full object-cover object-center" alt="Denis Novozilov Dubai dxbskating Roller Classes">
  </picture>
  <div class="wrapper">
    <div class="box relative flex flex-col items-center">
      <h2 class="heading mb-16 text-white text-center">
        <?= $heading ?>
      </h2>
      <a href="<?php echo $link['url'] ?>" class="button">
        <?php echo $link['title'] ?>
      </a>
    </div>
  </div>
</section>