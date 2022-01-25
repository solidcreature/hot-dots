<?php 

//Создание группы полей для горячих точек
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_61eebd109468f',
	'title' => 'Настройка горячих точек',
	'fields' => array(
		array(
			'key' => 'field_61eebd230dc70',
			'label' => 'Горячее изображение',
			'name' => 'hot_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '60',
				'class' => 'hot-image',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'medium_large',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_61eed2fa5598e',
			'label' => 'Количество точек',
			'name' => 'hot_count',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '40',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				2 => '2',
				3 => '3',
				4 => '4',
			),
			'default_value' => false,
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_61eed3175598f',
			'label' => '_X',
			'name' => 'hot_x_1',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '%',
			'min' => '',
			'max' => '',
			'step' => '',
		),
		array(
			'key' => 'field_61eed337a17d7',
			'label' => '_Y',
			'name' => 'hot_y_1',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '%',
			'min' => '',
			'max' => '',
			'step' => '',
		),
		array(
			'key' => 'field_61eed346a17d8',
			'label' => 'Положение',
			'name' => 'hot_position_1',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'top' => 'top',
				'right' => 'right',
				'bottom' => 'bottom',
				'left' => 'left',
			),
			'default_value' => 'bottom',
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_61eed381a17d9',
			'label' => 'Подпись',
			'name' => 'hot_text_1',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '40',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_61eed40cd0b70',
			'label' => '',
			'name' => 'hot_x_2',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '%',
			'min' => '',
			'max' => '',
			'step' => '',
		),
		array(
			'key' => 'field_61eed411d0b71',
			'label' => '',
			'name' => 'hot_y_2',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '%',
			'min' => '',
			'max' => '',
			'step' => '',
		),
		array(
			'key' => 'field_61eed415d0b72',
			'label' => '',
			'name' => 'hot_position_2',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'top' => 'top',
				'right' => 'right',
				'bottom' => 'bottom',
				'left' => 'left',
			),
			'default_value' => 'bottom',
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_61eed41bd0b73',
			'label' => '',
			'name' => 'hot_text_2',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '40',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_61eed425d0b74',
			'label' => '',
			'name' => 'hot_x_3',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_61eed2fa5598e',
						'operator' => '>',
						'value' => '2',
					),
				),
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '%',
			'min' => '',
			'max' => '',
			'step' => '',
		),
		array(
			'key' => 'field_61eed429d0b75',
			'label' => '',
			'name' => 'hot_y_3',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_61eed2fa5598e',
						'operator' => '>',
						'value' => '2',
					),
				),
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '%',
			'min' => '',
			'max' => '',
			'step' => '',
		),
		array(
			'key' => 'field_61eed42dd0b76',
			'label' => '',
			'name' => 'hot_position_3',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_61eed2fa5598e',
						'operator' => '>',
						'value' => '2',
					),
				),
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'top' => 'top',
				'right' => 'right',
				'bottom' => 'bottom',
				'left' => 'left',
			),
			'default_value' => 'bottom',
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_61eed432d0b77',
			'label' => '',
			'name' => 'hot_text_3',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_61eed2fa5598e',
						'operator' => '>',
						'value' => '2',
					),
				),
			),
			'wrapper' => array(
				'width' => '40',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_61eed47bd0b78',
			'label' => '',
			'name' => 'hot_x_4',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_61eed2fa5598e',
						'operator' => '>',
						'value' => '3',
					),
				),
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '%',
			'min' => '',
			'max' => '',
			'step' => '',
		),
		array(
			'key' => 'field_61eed47ed0b79',
			'label' => '',
			'name' => 'hot_y_4',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_61eed2fa5598e',
						'operator' => '>',
						'value' => '3',
					),
				),
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '%',
			'min' => '',
			'max' => '',
			'step' => '',
		),
		array(
			'key' => 'field_61eed483d0b7a',
			'label' => '',
			'name' => 'hot_position_4',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_61eed2fa5598e',
						'operator' => '>',
						'value' => '3',
					),
				),
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'top' => 'top',
				'right' => 'right',
				'bottom' => 'bottom',
				'left' => 'left',
			),
			'default_value' => 'bottom',
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_61eed487d0b7b',
			'label' => '',
			'name' => 'hot_text_4',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_61eed2fa5598e',
						'operator' => '>',
						'value' => '3',
					),
				),
			),
			'wrapper' => array(
				'width' => '40',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => '5',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'the_content',
	),
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
));

endif;	