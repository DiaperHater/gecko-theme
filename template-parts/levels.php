<?php
global $gecko;

$heading = get_sub_field('levels_heading');
$cards = get_sub_field('levels_cards');
?>
<!-- Levels -->
<section id="levels" class="py-24 text-neutral-900 bg-lime-600">
	<div class="wrapper">
		<div class="box">
			<!-- Heading with Dubai-focused keyword -->
			<h2 class="mb-20 text-center text-neutral-200 heading">
				<?php echo $heading ?>
			</h2>

			<!-- Cards -->
			<div class="grid gap-12 gap-y-24 justify-items-center md:gap-16 md:grid-cols-2">
				<?php
				foreach ($cards as $index => $card) {
					?>
					<div class="w-full p-6 border rounded-lg shadow-xl cursor-default text-neutral-200 bg-neutral-800">
						<!-- Ring -->
						<div class="relative flex justify-center mb-6 z-10">
							<img src="<?php $gecko->print_image_src('gecko-ring.webp') ?>" alt="<?php $gecko->print_image_alt(__('Level ' . $index + 1)) ?>" class="w-[120px] aspect-square object-contain object-center">
							<span class="absolute top-1/2 left-1/2 -translate-x-[calc(50%-4px)] -translate-y-1/2 text-8xl text-neutral-200 font-medium"><?php echo $index + 1 ?></span>
						</div>
						<!-- TextAndBg -->
						<div class="relative text-xl font-light text-center duration-500">
							<!-- BackgroundImage -->
							<div class="absolute top-0 left-0 w-full h-full py-8 flex justify-center items-center">
								<img src="<?php $gecko->print_image_src('logo.png') ?>" alt="<?php $gecko->print_image_alt('Logo') ?>" class="block w-60 h-auto object-contain object-center opacity-20">
							</div>
							<!-- TextContent -->
							<div class="relative">
								<?php echo $card['levels_cards_description'] ?>
								<?php
								if ($card['levels_cards_list'] && !empty($card['levels_cards_list'])) {
									?>
									<br><br>
									<strong><?php _e('Suitable for:', 'gecko') ?></strong><br>
									<?php
									foreach ($card['levels_cards_list'] as $item) {
										echo "• {$item['levels_cards_list_text']}<br>";
									}
									?>
									<?php
								}
								?>
							</div>
						</div>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</div>
</section>