<?php
$heading = get_sub_field('prices_heading');
$intro = get_sub_field('prices_intro');
$list_title = get_sub_field('prices_list_title');
$list = get_sub_field('prices_list');
$outro = get_sub_field('prices_outro');
$cards = get_sub_field('prices_cards');
?>
<!-- Prices -->
<section id="prices" class="py-24">
	<div class="wrapper">
		<div class="box">
			<!-- Inner -->
			<div class="grid grid-cols-4 gap-x-6 gap-y-12 md:grid-cols-6 md:gap-y-24">
				<!-- Heading -->
				<h2 class="heading col-span-2 md:col-span-3">
					<?php echo $heading ?>
				</h2>
				<!-- Subheading -->
				<div class="col-span-3 col-start-2 md:col-start-4">
					<p class="subheading mb-8">
						<?php echo $intro ?>
					</p>
					<p class="text-xl md:text-2xl mb-2">
						<?php echo $list_title ?>
					</p>
					<ul class="italic text-xl md:text-2xl mb-8">
						<?php 
						foreach($list as $item) {
							?>
							<li><?php echo $item['prices_list_text'] ?></li>
							<?php
						}
						?>
					</ul>
					<p class="text-xl md:text-2xl bold"><strong>
						<?php echo $outro ?>
					</strong></p>
				</div>
				<!-- Cards -->
				<div class="col-span-full grid grid-cols-subgrid gap-x-6 gap-y-12">

					<?php
					foreach ($cards as $card) {
						?>
						<p class="col-span-4 border odd:rotate-2 even:-rotate-6 duration-200 hover:rotate-0 pb-4 shadow-md rounded-lg p-4 cursor-default min-[400px]:col-span-2">
							<span class="block text-3xl font-semibold mb-4 md:text-4xl">
								<?php echo $card['prices_cards_title'] ?>
							</span>
							<span class="block text-xl mb-4 italic">
								<?php echo $card['prices_cards_text'] ?>
							</span>
							<strong class="block text-xl md:text-2xl">
								<?php echo $card['prices_cards_price'] . " " . __('AED / Hour', 'gecko') ?>
							</strong>
						</p>
						<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
</section>