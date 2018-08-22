<?php

/**
* 
*/
class CArticles{
	
	function __construct(){
		add_action('init', array(&$this, 'create_article'));
	}
	
	public function create_article(){

		register_post_type('articles', 
			array(
				'labels' => array(
					'name'				=> __('Статьи', 'html5blank'), // Rename these to suit
					'singular_name'		=> __('Статьи', 'html5blank'),
					'add_new'			=> __('Добавить', 'html5blank'),
					'add_new_item'		=> __('Добавить статью', 'html5blank'),
					'edit'				=> __('Редактировать', 'html5blank'),
					'edit_item'			=> __('Редактировать статью', 'html5blank'),
					'new_item'			=> __('Новая статья', 'html5blank'),
					'view'				=> __('Просмотр', 'html5blank'),
					'view_item'			=> __('Просмотр статьи', 'html5blank'),
					'search_items'		=> __('Поиск статьи', 'html5blank'),
					'not_found'			=> __('Статей не найдено', 'html5blank'),
					'not_found_in_trash'=> __('Статей в корзине не найдено', 'html5blank')
				),
				'public'		=> true,
				'has_archive'	=> true,
				'supports'		=> array('title','editor','excerpt','thumbnail','custom-fields'), 
				'can_export'	=> true, // Allows export in Tools > Export
				'rewrite'		=> true,
			)
		);
		
		
		if(IS_DEVELOPMENT) flush_rewrite_rules();
	}

}

new CArticles();