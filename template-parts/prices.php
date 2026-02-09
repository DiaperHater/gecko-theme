<?php
global $gecko;

$heading = get_sub_field('prices_heading');
$image = get_sub_field('prices_image');
$intro = get_sub_field('prices_intro');
$list_title = get_sub_field('prices_list_title');
$list = get_sub_field('prices_list');
$outro = get_sub_field('prices_outro');
$cards = get_sub_field('prices_cards');
?>
<!-- Prices -->
<section id="prices" class="py-24 bg-neutral-800 text-neutral-200">
	<div class="wrapper">
		<div class="box">
			<!-- Grid -->
			<div class="grid grid-cols-4 gap-x-6 gap-y-16 md:grid-cols-6">
				<!-- LeftCol -->
				<div class="col-span-4 flex justify-center items-center md:col-span-3">
					<!-- Image -->
					<img src="<?php $gecko->print_image_src('jumping-roller-girl.jpg') ?>" alt="" class="block w-2/3 h-auto border border-neutral-200 rounded">
				</div>
				<!-- RightCol -->
				<div class="relative col-span-4 md:col-span-3 md:col-start-4">
					<!-- BackgroundImage -->
					<div class="absolute top-0 left-0 w-full h-full py-8">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo-gradient.png" alt="<?php $gecko->print_image_alt('Logo') ?>" class="block w-full h-full object-contain object-center opacity-30">
					</div>
					<div class="relative">
						<!-- Heading -->
						<h2 class="heading mb-8 md:col-span-3">
							<?php echo $heading ?>
						</h2>
						<!-- Subheading -->
						<p class="subheading mb-8">
							<?php echo $intro ?>
						</p>
						<!-- ListTitle -->
						<p class="text-xl md:text-2xl mb-2">
							<?php echo $list_title ?>
						</p>
						<!-- List -->
						<ul class="italic text-xl font-light md:text-2xl mb-8">
							<?php
							foreach ($list as $item) {
								?>
								<li><?php echo $item['prices_list_text'] ?></li>
								<?php
							}
							?>
						</ul>
						<!-- Outro -->
						<p class="text-xl md:text-2xl bold">
							<strong><?php echo $outro ?></strong>
						</p>
					</div>
				</div>
				<!-- Cards -->
				<div class="col-span-full grid grid-cols-subgrid gap-x-6 gap-y-12">

					<?php
					foreach ($cards as $card) {
						?>
						<div class="col-span-4 border odd:rotate-2 even:-rotate-6 duration-200 hover:rotate-0 pb-4 shadow-md rounded-lg p-4 cursor-default min-[400px]:col-span-2 bg-neutral-200 text-neutral-800 relative">
							<!-- BackgroundImage -->
							<div class="absolute top-0 left-0 w-full h-full py-8 flex justify-center items-center">
								<img src="<?php $gecko->print_image_src('logo.png') ?>" alt="<?php $gecko->print_image_alt('Logo') ?>" class="block w-44 h-auto object-contain object-center opacity-30">
							</div>
							<!-- TextContent -->
							<div class="relative">
								<span class="block text-3xl font-semibold mb-4 md:text-4xl">
									<?php echo $card['prices_cards_title'] ?>
								</span>
								<span class="block text-xl mb-4 italic">
									<?php echo $card['prices_cards_text'] ?>
								</span>
								<strong class="block text-xl md:text-2xl">
									<?php echo $card['prices_cards_price'] . " " . __('AED / Hour', 'gecko') ?>
								</strong>
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