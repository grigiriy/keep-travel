<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta', 'Настройки страниц блога' )
->show_on_post_type( 'post' )
->add_tab( 'Фон', [
    Field::make( 'image', 'index_image', '' )
        ->set_width( 100 ),
])
->add_tab( 'Главная', [
      Field::make( 'complex', 'backgrounds_post', '' )
          ->add_fields( [
              Field::make( 'image', 'image1', 'фон' )
                 ->set_width( 30 ),
              Field::make( 'image', 'image2', 'иконка' )
                 ->set_width( 30 ),
              Field::make( 'text', 'tickets_left', 'осталось' )
                 ->set_width( 10 ),
              Field::make( 'text', 'tickets_total', 'было' )
                 ->set_width( 10 ),
              Field::make( 'checkbox', 'sale', 'Акция' )
                 ->set_width( 10 ),
           ])
  ])
  ->add_tab( 'Мини описание (для главной и форм)', [
        Field::make( 'complex', 'mini_texts', '' )
            ->add_fields( [
                Field::make( 'text', 'from_to', 'откуда куда' )
                   ->set_width( 25 ),
                  Field::make( 'text', 'pricerange', 'стоимость от' )
                     ->set_width( 25 ),
                 Field::make( 'text', 'minitext', 'мини подпись' )
                    ->set_width( 40 ),
                Field::make( 'text', 'days', 'дней' )
                   ->set_width( 10 ),
             ])
    ])
    ->add_tab('изображения',  [
         Field::make( 'complex', 'reports', '' )
         ->add_fields( [
             Field::make( 'image', 'report_photo', 'Фото' )
                ->set_width( 30 ),
            Field::make( 'text', 'report_title', 'Заголовок' )
               ->set_width( 70 ),
       ])
    ])
    ->add_tab('как будет проходить поездка',  [
            Field::make( 'rich_text', 'content_b', '' )
                ->set_width( 100 ),
    ])
    ->add_tab('карта',  [
            Field::make( 'image', 'map', '' )
                ->set_width( 50 ),
    ])
    ->add_tab('путешествие по ...',  [
            Field::make( 'text', 'sub_name', '' )
                ->set_width( 50 ),
    ])
    ->add_tab('что включено в пакет',  [
        Field::make( 'rich_text', 'content_c', '' )
            ->set_width( 100 ),
    ])
    ->add_tab('дополнительные опции',  [
        Field::make( 'rich_text', 'content_c_2', '' )
            ->set_width( 100 ),
    ])
    ->add_tab('табличка с ценами',  [
     Field::make( 'complex', 'table', '' )
     ->add_fields( [
         Field::make( 'text', 'dates', 'Когда' )
           ->set_width( 30 ),
         Field::make( 'text', 'price', 'Цена (если отличается)' )
           ->set_width( 30 ),
        ])
    ])
    ->add_tab('эксперт',  [
     Field::make( 'complex', 'guru', '' )
     ->add_fields( [
         Field::make( 'text', 'name', 'Имя' )
           ->set_width( 30 ),
         Field::make( 'image', 'img', 'Фото' )
           ->set_width( 30 ),
         Field::make( 'rich_text', 'about', 'Описание' )
           ->set_width( 30 ),
        ])
    ])
        ->add_tab('Дополнительная информация',  [
            Field::make( 'rich_text', 'content_d', '' )
                ->set_width( 100 ),
    ])
        ->add_tab( 'Галерея', [
            Field::make( 'text', 'place', 'Место' )
               ->set_width( 100 ),
            Field::make( 'complex', 'gallery', '' )
              ->add_fields( [
                 Field::make( 'image', 'image', 'Картинка' )
                      ->set_width( 20 ),
                ]),
            Field::make( 'checkbox', 'index', 'На главную' ),
   ])
       ->add_tab( 'Как это было (видео)', [
        Field::make( 'complex', 'videos', '' )
          ->add_fields( [
            Field::make( 'text', 'video_code', 'код видео' )
               ->set_width( 50 ),
            Field::make( 'text', 'video_title', 'подпись' )
               ->set_width( 50 ),
           ])
      ]);
