<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;


Container::make( 'post_meta', 'Настройки главной' )
 ->show_on_post_type( 'page' )
 ->add_tab( 'Фон', [
     Field::make( 'complex', 'image', '' )
     ->add_fields( [
         Field::make( 'image', 'back_image', 'Фоновая' )
             ->set_width( 100 ),
     ])
 ])
 ->add_tab( 'Счетчики', [
    Field::make( 'complex', 'counters', '' )
        ->add_fields( [
            Field::make( 'text', 'people', 'Людей' )
              ->set_width( 20 ),
            Field::make( 'text', 'male', 'М' )
              ->set_width( 20 ),
            Field::make( 'text', 'female', 'Ж' )
              ->set_width( 20 ),
            Field::make( 'text', 'years', 'Лет' )
              ->set_width( 20 ),
            Field::make( 'text', 'km', 'Километров' )
              ->set_width( 20 ),
        ])
])
 ->add_tab( 'Наши ценности', [
       Field::make( 'complex', 'about', '' )
           ->add_fields( [
               Field::make( 'text', 'about_title', 'Заголовок' )
                  ->set_width( 100 ),
                 Field::make( 'textarea', 'about_text', 'Текст' )
                    ->set_width( 70 ),
                 Field::make( 'image', 'about_photo', 'Фото' )
    				->set_width( 30 ),
            ])
   ])
  ->add_tab( 'Вопрос-ответ', [
       Field::make( 'complex', 'faq', '' )
           ->add_fields( [
               Field::make( 'textarea', 'faq_title', 'Вопрос' )
                    ->set_width( 50 ),
               Field::make( 'textarea', 'faq_text', 'Ответ' )
                    ->set_width( 50 ),
            ])
   ])
    ->add_tab( 'Как это было', [
    		Field::make( 'complex', 'videos', '' )
    			->add_fields( [
    				Field::make( 'text', 'video_code', 'код видео' )
    					 ->set_width( 50 ),
    				Field::make( 'text', 'video_title', 'подпись' )
    					 ->set_width( 50 ),
    			 ])
    	])
    ->add_tab( 'C нами уже путешествовали', [
    		Field::make( 'complex', 'insta', '' )
    			->add_fields( [
    				Field::make( 'text', 'header', 'Заголовок' )
    					 ->set_width( 100 ),
    				Field::make( 'textarea', 'instik', 'ссылка на инстаграм' )
    					 ->set_width( 100 ),
    			 ])
    	])
        ->add_tab( 'Отзывы', [
               Field::make( 'complex', 'reviews', '' )
                   ->add_fields( [
                       Field::make( 'text', 'review_name', 'Имя/вораст/откуда' )
                            ->set_width( 25 ),
                       Field::make( 'text', 'review_title', 'Место' )
                            ->set_width( 25 ),
                       Field::make( 'image', 'review_photo', 'Аватар' )
                            ->set_width( 25 ),
                        Field::make( 'text', 'review_video', 'код ютуба' )
                             ->set_width( 25 ),
                        Field::make( 'textarea', 'review_text', 'Отзыв' )
                            ->set_width( 100 ),
                    ])
           ])
            ->add_tab( 'Галерея', [
               Field::make( 'complex', 'gallery', '' )
                   ->add_fields( [
                       Field::make( 'text', 'place', 'Место' )
                           ->set_width( 100 ),
                       Field::make( 'complex', 'gallery', '' )
                          ->add_fields( [
                             Field::make( 'image', 'image', 'Картинка' )
                                  ->set_width( 20 ),
                            ])
                    ])
           ]);
