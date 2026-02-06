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

	<!-- START Script that provides structured data about a local business in Dubai -->
	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"url": "https://dxbskating.com",
			"openingHoursSpecification": {
				"@type": "OpeningHoursSpecification",
				"dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
				"opens": "08:00",
				"closes": "22:00"
			}
			"@type": "LocalBusiness",
			"name": "<?php _e('Roller skating classes in Dubai', 'gecko') ?>",
			"image": "https://dxbskating.com/wp-content/uploads/2024/02/332792747_1242813499964178_1093700584803525692_n-1024x768.jpeg",
			"description": "<?php _e('Professional Roller Skating Classes in Dubai for Adults and Children. Group and Private Lessons Available.', 'gecko') ?>",
			"address": {
				"@type": "PostalAddress",
				"addressLocality": "Dubai",
				"addressRegion": "UAE"
			},
			"telephone": "+971558730851 ",
			"priceRange": "AED 75-300 per session"
		}
	</script>
	<!-- END Script that provides structured data about a local business in Dubai -->

	<title><?= get_the_title() ?></title>

	<link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri() ?>/assets/images/favicon.png">

</head>

<body>

	<!-- Header -->
	<header class="bg-neutral-900 bg-opacity-20 backdrop-blur-sm text-white fixed top-0 left-0 w-full z-50 group/header [&.narrow]:top-6 [&.narrow]:bg-transparent [&.narrow]:backdrop-blur-none">
		<div class="wrapper">
			<div class="box">
				<!-- Inner -->
				<nav class="header__inner py-3 flex items-center duration-200 group-[.narrow]/header:px-6 group-[.narrow]/header:bg-neutral-900 group-[.narrow]/header:bg-opacity-20 group-[.narrow]/header:backdrop-blur-sm group-[.narrow]/header:rounded-lg">
					<!-- Logo -->
					<a href="/" class="mr-12 text-2xl font-bold leading-none divide-purple-200 hover:text-blue-500">
						Gecko
					</a>
					<!-- Links -->
					<ul class="hidden lg:flex lg:items-center lg:gap-x-4 lg:ml-auto">
						<a href="#about" class="text-base uppercase duration-200 underline-offset-4 hover:text-blue-500">
							<?php _e('Perfect for', 'gecko') ?>
						</a>
						<a href="#levels" class="text-base uppercase duration-200 underline-offset-4 hover:text-blue-500">
							<?php _e('Skill levels', 'gecko') ?>
						</a>
						<a href="#prices" class="text-base uppercase duration-200 underline-offset-4 hover:text-blue-500">
							<?php _e('Prices', 'gecko') ?>
						</a>
						<a href="#coach" class="text-base uppercase duration-200 underline-offset-4 hover:text-blue-500">
							<?php _e('Our coach', 'gecko') ?>
						</a>
					</ul>
					<!-- Buttons -->
					<div class="flex items-center ml-auto gap-x-4 lg:ml-12">
						<!-- Burger  -->
						<button class="burger w-[36px] flex flex-col gap-y-2 group group-[.narrow]/header:gap-y-1.5 group-[.narrow]/header:w-[30px] lg:hidden" onclick="burgerOnClick()">
							<div class="w-full h-1 bg-white rounded-lg duration-200 origin-top-right group-[.active]:-rotate-45 group-hover:bg-blue-500"></div>
							<div class="w-full h-1 bg-white rounded-lg duration-200 group-[.active]:-translate-x-full group-[.active]:opacity-0 group-[.active]:invisible group-hover:bg-blue-500"></div>
							<div class="w-full h-1 bg-white rounded-lg duration-200 origin-bottom-right group-[.active]:rotate-45 group-hover:bg-blue-500"></div>
						</button>
						<a href="#form" class="hidden border border-white !bg-blue-500 hover:!text-white hover:!bg-neutral-900 lg:block lg:button">
							<?php _e('Contacts', 'gecko') ?>
						</a>
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
							<a href="#about" class="text-2xl text-center uppercase duration-200 hover:text-blue-500">
								<?php _e('Perfect for', 'gecko') ?>
							</a>
							<a href="#levels" class="text-2xl text-center uppercase duration-200 hover:text-blue-500">
								<?php _e('Skill levels', 'gecko') ?>
							</a>
							<a href="#prices" class="text-2xl text-center uppercase duration-200 hover:text-blue-500">
								<?php _e('Prices', 'gecko') ?>
							</a>
							<a href="#coach" class="text-2xl text-center uppercase duration-200 hover:text-blue-500">
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
					</div>
				</div>
			</div>
		</nav>
	</header>

	<main id="top">