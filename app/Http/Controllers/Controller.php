<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    protected $categories = [
        [   'title' => 'Политика',
            'text' => 'Новости о политике'
        ],
        [   'title' => 'Экономика',
            'text' => 'Новости о экономике'
        ],
        [   'title' => 'Культура',
            'text' => 'Новости о культуре'
        ],
        [   'title' => 'Наука',
            'text' => 'Новости о науке'
        ],
        [   'title' => 'Спорт',
            'text' => 'Новости о спорте'
        ]
    ];

    protected $news = [
        [   'category_id' => 0,
            'text' => 'Миронов рассказал подробности объединения трех партий'
        ],
        [   'category_id' => 0,
            'text' => 'Любимов: Рязанская область выполнит задачи, поставленные президентом'
        ],
        [   'category_id' => 0,
            'text' => 'Путин назначил экс-посла в Белоруссии Бабича замглавы ФСВТС'
        ],
        [   'category_id' => 0,
            'text' => 'МВД напомнило об ответственности за призывы к незаконным акциям 23 января'
        ],
        [   'category_id' => 0,
            'text' => 'В Кремле ответили на вопрос о возможной встрече Путина и Байдена'
        ],
        [   'category_id' => 1,
            'text' => 'Долгов на миллиарды. На Украине заметили "путь в никуда"'
        ],
        [   'category_id' => 1,
            'text' => 'В ГД внесли проект о запрете продажи сложных финпродуктов до тестирования'
        ],
        [   'category_id' => 1,
            'text' => '"Не всегда объективные". Глава АКОРТ о причинах роста цен на продукты'
        ],
        [   'category_id' => 1,
            'text' => 'Сбербанк планирует к весне запустить платформу для выпуска сберкоина'
        ],
        [   'category_id' => 1,
            'text' => 'Плодоносный год. В России заявили о рекордном урожае ягод и фруктов'
        ],
        [   'category_id' => 2,
            'text' => 'Умерла французская актриса Натали Делон'
        ],
        [   'category_id' => 2,
            'text' => 'После увеличения заполняемости залов в прокат выйдет больше фильмов'
        ],
        [   'category_id' => 2,
            'text' => 'Трегулова: Третьяковка готова к открытию, выставки смонтированы'
        ],
        [   'category_id' => 2,
            'text' => 'Стали известны детали возвращения в музей копии "Спасителя мира" да Винчи'
        ],
        [   'category_id' => 2,
            'text' => 'Театральный фестиваль "Золотая маска" открылся московской программой'
        ],
        [   'category_id' => 3,
            'text' => '"Шок у половины пациентов". Врач о необычной реакции на зимние морозы'
        ],
        [   'category_id' => 3,
            'text' => 'Найден способ омоложения мозга'
        ],
        [   'category_id' => 3,
            'text' => 'Археологи изучили самые древние деньги из европейских кладов'
        ],
        [   'category_id' => 3,
            'text' => 'Рубцы на ладонях назвали симптомом смертельного заболевания'
        ],
        [   'category_id' => 3,
            'text' => 'Ученые назвали число этапов формирования Солнечной системы'
        ],
        [   'category_id' => 4,
            'text' => 'ЦСКА победил "Амур" и вышел в плей-офф КХЛ'
        ],
        [   'category_id' => 4,
            'text' => '"Зенит" обыграл "Анадолу Эфес" в Евролиге'
        ],
        [   'category_id' => 4,
            'text' => 'Депутат Госдумы высказался об отстранении россиян от матчей НХЛ'
        ],
        [   'category_id' => 4,
            'text' => 'СМИ назвали сумму трансфера Кокорина в "Фиорентину"'
        ],
        [   'category_id' => 4,
            'text' => 'Федора Емельяненко госпитализировали в больницу для пациентов с COVID-19'
        ]
    ];
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
