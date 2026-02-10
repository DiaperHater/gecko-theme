<?php
global $gecko;
?>
<!DOCTYPE html>
<html lang="<?php echo $gecko->current_lang ?>" class="scroll-smooth">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- START Fonts -->
	<link rel="preload" href="<?= get_template_directory_uri() ?>/assets/fonts/Roboto_Condenced/RobotoCondensed-VariableFont_wght.ttf" as="font" type="font/ttf" crossorigin>
	<link rel="preload" href="<?= get_template_directory_uri() ?>/assets/fonts/Roboto_Condenced/RobotoCondensed-Italic-VariableFont_wght.ttf" as="font" type="font/ttf" crossorigin>
	<!-- END Fonts -->

	<?php wp_head() ?>

	<title><?= get_the_title() ?></title>

	<link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri() ?>/assets/images/favicon.ico">

</head>

<body>

	<!-- Header -->
	<header class="bg-neutral-900 bg-opacity-70 backdrop-blur-sm text-white fixed top-0 left-0 w-full z-50 group/header [&.narrow]:top-6 [&.narrow]:bg-transparent [&.narrow]:backdrop-blur-none">
		<div class="wrapper">
			<div class="box">
				<!-- Inner -->
				<nav class="header__inner py-3 flex items-center duration-200 group-[.narrow]/header:px-6 group-[.narrow]/header:bg-neutral-900 group-[.narrow]/header:bg-opacity-70 group-[.narrow]/header:backdrop-blur-sm group-[.narrow]/header:rounded-lg">
					<!-- Logo -->
					<a href="/" class="mr-12 text-2xl font-bold leading-none divide-purple-200 hover:text-blue-500">
						<img src="<?php $gecko->print_image_src('logo.png') ?>" alt="<?php $gecko->print_image_alt('Logo') ?>" class="h-12 lg:h-20 w-auto">
					</a>
					<!-- Links -->
					<ul class="hidden lg:flex lg:items-center lg:gap-x-4 lg:ml-auto">
						<a href="#about" class="text-lime-600 text-base uppercase duration-200 underline-offset-4 hover:underline">
							<?php _e('Perfect for', 'gecko') ?>
						</a>
						<a href="#levels" class="text-lime-600 text-base uppercase duration-200 underline-offset-4 hover:underline">
							<?php _e('Skill levels', 'gecko') ?>
						</a>
						<a href="#prices" class="text-lime-600 text-base uppercase duration-200 underline-offset-4 hover:underline">
							<?php _e('Prices', 'gecko') ?>
						</a>
						<a href="#coach" class="text-lime-600 text-base uppercase duration-200 underline-offset-4 hover:underline">
							<?php _e('Our coach', 'gecko') ?>
						</a>
					</ul>
					<!-- Buttons -->
					<div class="flex items-center ml-auto gap-x-4 lg:ml-12">
						<!-- Burger  -->
						<button class="burger w-[30px] flex flex-col gap-y-1.5 group group-[.narrow]/header:gap-y-1.5 group-[.narrow]/header:w-[30px] lg:hidden" onclick="burgerOnClick()">
							<div class="w-full h-1 bg-lime-600 rounded-lg duration-200 origin-top-right group-[.active]:-rotate-45"></div>
							<div class="w-full h-1 bg-lime-600 rounded-lg duration-200 group-[.active]:-translate-x-full group-[.active]:opacity-0 group-[.active]:invisible"></div>
							<div class="w-full h-1 bg-lime-600 rounded-lg duration-200 origin-bottom-right group-[.active]:rotate-45"></div>
						</button>
						<a href="#form" class="hidden lg:button">
							<?php _e('Contacts', 'gecko') ?>
						</a>
					</div>
					<!-- LangSwitch -->
					<div class="hidden lg:inline ml-8 text-lime-600">
						<?php $gecko->print_lang_switch() ?>
					</div>
				</nav>
			</div>
		</div>
		<!-- MobileMenu -->
		<nav class="mobile-menu absolute top-full left-full w-full h-[100vh] overflow-auto bg-neutral-900 bg-opacity-90 duration-200 lg:hidden" onclick="burgerOnClick()">
			<div class="wrapper">
				<div class="box">
					<!-- Inner -->
					<div class="flex flex-col pb-40 gap-y-16 pt-14">
						<!-- Links -->
						<ul class="flex flex-col gap-y-4">
							<a href="#about" class="text-neutral-100 font-medium text-2xl text-center uppercase">
								<?php _e('Perfect for', 'gecko') ?>
							</a>
							<a href="#levels" class="text-neutral-100 font-medium text-2xl text-center uppercase">
								<?php _e('Skill levels', 'gecko') ?>
							</a>
							<a href="#prices" class="text-neutral-100 font-medium text-2xl text-center uppercase">
								<?php _e('Prices', 'gecko') ?>
							</a>
							<a href="#coach" class="text-neutral-100 font-medium text-2xl text-center uppercase">
								<?php _e('Our coach', 'gecko') ?>
							</a>
						</ul>
						<!-- Socials -->
						<div class="flex items-center self-center gap-x-8">
							<?php get_template_part('template-parts/social-icons', null) ?>
						</div>
						<!-- Contact -->
						<a href="#form" class="self-center button">
							<?php _e('Contacts', 'gecko') ?>
						</a>
						<!-- LangSwitch -->
						<div class="flex justify-center">
							<?php $gecko->print_lang_switch() ?>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>

	<main id="top">