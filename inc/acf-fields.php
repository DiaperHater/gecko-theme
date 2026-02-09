<?php
add_action('acf/init', function () {
  acf_add_local_field_group(array(
    'key' => 'page_builder',
    'title' => 'Page Builder',
    'fields' => array(
      array(
        'key' => 'content',
        'label' => 'Content',
        'name' => 'content',
        'type' => 'flexible_content',
        'layouts' => array(
          'hero' => array(
            'key' => 'hero',
            'name' => 'hero',
            'label' => 'Hero Block',
            'display' => 'block',
            'sub_fields' => array(
              array(
                'key' => 'hero_background',
                'name' => 'hero_background',
                'label' => 'Background',
                'type' => 'group',
                'sub_fields' => array(
                  array(
                    'key' => 'hero_background_video',
                    'name' => 'hero_background_video',
                    'label' => 'Video',
                    'type' => 'file',
                    'return_format' => 'array',
                  ),
                  array(
                    'key' => 'hero_background_image',
                    'name' => 'hero_background_image',
                    'label' => 'Image',
                    'type' => 'image',
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                    'library' => 'all',
                    'mime_types' => 'jpg, jpeg, png, webp, svg',
                  ),
                )
              ),
              array(
                'key' => 'hero_heading',
                'name' => 'hero_heading',
                'label' => 'Heading',
                'type' => 'textarea',
                'rows' => 2,
                'new_lines' => 'br'
              ),
              array(
                'key' => 'hero_subheading',
                'name' => 'hero_subheading',
                'label' => 'Subheading',
                'type' => 'textarea',
                'rows' => 4,
                'new_lines' => 'br'
              )
            ),
          ),
          'about' => array(
            'key' => 'about',
            'name' => 'about',
            'label' => 'About Block',
            'display' => 'block',
            'sub_fields' => array(
              array(
                'key' => 'about_intro',
                'name' => 'about_intro',
                'label' => 'Intro',
                'type' => 'textarea',
                'rows' => 8,
                'new_lines' => 'br',
              ),
            ),
          ),
          'cta' => array(
            'key' => 'cta',
            'name' => 'cta',
            'label' => 'Cta Block',
            'display' => 'block',
            'sub_fields' => array(
              array(
                'key' => 'cta_image',
                'name' => 'cta_image',
                'label' => 'Image',
                'type' => 'image',
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
                'mime_types' => 'jpg, jpeg, png, webp, svg',
              ),
              array(
                'key' => 'cta_heading',
                'name' => 'cta_heading',
                'label' => 'Heading',
                'type' => 'textarea',
                'rows' => 2,
                'new_lines' => 'br',
              ),
              array(
                'key' => 'cta_link',
                'name' => 'cta_link',
                'label' => 'Link',
                'type' => 'link',
              ),
            ),
          ),
          'levels' => array(
            'key' => 'levels',
            'name' => 'levels',
            'label' => 'Levels Block',
            'display' => 'block',
            'sub_fields' => array(
              array(
                'key' => 'levels_heading',
                'name' => 'levels_heading',
                'label' => 'Heading',
                'type' => 'textarea',
                'rows' => 2,
                'new_lines' => 'br',
              ),
              array(
                'key' => 'levels_cards',
                'name' => 'levels_cards',
                'label' => 'Cards',
                'type' => 'repeater',
                'layout' => 'table',
                'sub_fields' => array(
                  array(
                    'key' => 'levels_cards_description',
                    'name' => 'levels_cards_description',
                    'label' => 'Description',
                    'type' => 'textarea',
                    'rows' => 2,
                    'new_lines' => 'br',
                  ),
                  array(
                    'key' => 'levels_cards_list',
                    'name' => 'levels_cards_list',
                    'label' => 'List',
                    'type' => 'repeater',
                    'layout' => 'block',
                    'sub_fields' => array(
                      array(
                        'key' => 'levels_cards_list_text',
                        'name' => 'levels_cards_list_text',
                        'label' => 'Text',
                        'type' => 'text',
                        'placeholder' => '',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
          'prices' => array(
            'key' => 'prices',
            'name' => 'prices',
            'label' => 'Prices Block',
            'display' => 'block',
            'sub_fields' => array(
              array(
                'key' => 'prices_heading',
                'name' => 'prices_heading',
                'label' => 'Heading',
                'type' => 'textarea',
                'rows' => 2,
                'new_lines' => 'br',
              ),
              array(
                'key' => 'prices_intro',
                'name' => 'prices_intro',
                'label' => 'Intro',
                'type' => 'textarea',
                'rows' => 2,
                'new_lines' => 'br',
              ),
              array(
                'key' => 'prices_list_title',
                'name' => 'prices_list_title',
                'label' => 'List Title',
                'type' => 'text',
              ),
              array(
                'key' => 'prices_list',
                'name' => 'prices_list',
                'label' => 'list',
                'type' => 'repeater',
                'layout' => 'block',
                'sub_fields' => array(
                  array(
                    'key' => 'prices_list_text',
                    'name' => 'prices_list_text',
                    'label' => 'Text',
                    'type' => 'text',
                  ),
                ),
              ),
              array(
                'key' => 'prices_outro',
                'name' => 'prices_outro',
                'label' => 'Outro',
                'type' => 'textarea',
                'rows' => 2,
                'new_lines' => 'br',
              ),
              array(
                'key' => 'prices_cards',
                'name' => 'prices_cards',
                'label' => 'prices_cards',
                'type' => 'repeater',
                'layout' => 'table',
                'sub_fields' => array(
                  array(
                    'key' => 'prices_cards_title',
                    'name' => 'prices_cards_title',
                    'label' => 'Title',
                    'type' => 'text',
                  ),
                  array(
                    'key' => 'prices_cards_text',
                    'name' => 'prices_cards_text',
                    'label' => 'Text',
                    'type' => 'textarea',
                    'rows' => 3,
                    'new_lines' => 'br',
                  ),
                  array(
                    'key' => 'prices_cards_price',
                    'name' => 'prices_cards_price',
                    'label' => 'Price',
                    'type' => 'number',
                    'min' => '0',
                  ),
                ),
              ),
            ),
          ),
          'media_cta' => array(
            'key' => 'media_cta',
            'name' => 'media_cta',
            'label' => 'Media CTA Block',
            'display' => 'block',
            'sub_fields' => array(
              array(
                'key' => 'media_cta_image',
                'name' => 'media_cta_image',
                'label' => 'Image',
                'type' => 'image',
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
                'mime_types' => 'jpg, jpeg, png, webp, svg',
              ),
              array(
                'key' => 'media_cta_heading',
                'name' => 'media_cta_heading',
                'label' => 'Heading',
                'type' => 'textarea',
                'rows' => 2,
                'new_lines' => 'br',
              ),
              array(
                'key' => 'media_cta_text',
                'name' => 'media_cta_text',
                'label' => 'Text',
                'type' => 'textarea',
                'rows' => 5,
                'new_lines' => 'br',
              ),
              array(
                'key' => 'media_cta_link',
                'name' => 'media_cta_link',
                'label' => 'Link',
                'type' => 'link',
              ),
            ),
          ),
          'testimonials' => array(
            'key' => 'testimonials',
            'name' => 'testimonials',
            'label' => 'Testimonials Block',
            'display' => 'block',
            'sub_fields' => array(
              array(
                'key' => 'testimonials_heading',
                'name' => 'testimonials_heading',
                'label' => 'Heading',
                'type' => 'textarea',
                'rows' => 2,
                'new_lines' => 'br',
              ),
              array(
                'key' => 'testimonials_cards',
                'name' => 'testimonials_cards',
                'label' => 'Cards',
                'type' => 'repeater',
                'layout' => 'block',
                'sub_fields' => array(
                  array(
                    'key' => 'testimonials_cards_text',
                    'name' => 'testimonials_cards_text',
                    'label' => 'Text',
                    'type' => 'textarea',
                    'rows' => 2,
                    'new_lines' => 'br',
                  ),
                  array(
                    'key' => 'testimonials_cards_name',
                    'name' => 'testimonials_cards_name',
                    'label' => 'Name',
                    'type' => 'text',
                  ),
                ),
              ),
            ),
          ),
          'reasons' => array(
            'key' => 'reasons',
            'name' => 'reasons',
            'label' => 'Reasons Block',
            'display' => 'block',
            'sub_fields' => array(
              array(
                'key' => 'reasons_heading',
                'name' => 'reasons_heading',
                'label' => 'Heading',
                'type' => 'textarea',
                'rows' => 2,
                'new_lines' => 'br',
              ),
              array(
                'key' => 'reasons_cards',
                'name' => 'reasons_cards',
                'label' => 'Cards',
                'type' => 'repeater',
                'layout' => 'block',
                'sub_fields' => array(
                  array(
                    'key' => 'reasons_cards_title',
                    'name' => 'reasons_cards_title',
                    'label' => 'Title',
                    'type' => 'text',
                  ),
                  array(
                    'key' => 'reasons_cards_text',
                    'name' => 'reasons_cards_text',
                    'label' => 'Text',
                    'type' => 'textarea',
                    'rows' => 3,
                    'new_lines' => 'br',
                  ),
                ),
              ),
            ),
          ),
          'coach' => array(
            'key' => 'coach',
            'name' => 'coach',
            'label' => 'Coach Block',
            'display' => 'block',
            'sub_fields' => array(
              array(
                'key' => 'coach_heading',
                'name' => 'coach_heading',
                'label' => 'Heading',
                'type' => 'textarea',
                'rows' => 2,
                'new_lines' => 'br',
              ),
              array(
                'key' => 'coach_name',
                'name' => 'coach_name',
                'label' => 'Name',
                'type' => 'text',
              ),
              array(
                'key' => 'coach_text',
                'name' => 'coach_text',
                'label' => 'Text',
                'type' => 'textarea',
                'rows' => 8,
                'new_lines' => 'br',
              ),
              array(
                'key' => 'coach_link',
                'name' => 'coach_link',
                'label' => 'Link',
                'type' => 'link',
              ),
            ),
          ),
          'form' => array(
            'key' => 'form',
            'name' => 'form',
            'label' => 'Form Block',
            'display' => 'block',
            'sub_fields' => array(
              array()
            ),
          ),
        )
      )
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'page',
        ),
      ),
    ),
  ));
});
