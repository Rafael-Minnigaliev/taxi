<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('ТКМ - Парк такси');
?>
    <!-- modals -->
<? $APPLICATION->IncludeComponent("bitrix:news.list", "slider", array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
	"ADD_SECTIONS_CHAIN" => "Y",    // Включать раздел в цепочку навигации
	"AJAX_MODE" => "N",    // Включить режим AJAX
	"AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
	"AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
	"AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
	"AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
	"CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
	"CACHE_GROUPS" => "Y",    // Учитывать права доступа
	"CACHE_TIME" => "36000000",    // Время кеширования (сек.)
	"CACHE_TYPE" => "A",    // Тип кеширования
	"CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
	"DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
	"DISPLAY_BOTTOM_PAGER" => "Y",    // Выводить под списком
	"DISPLAY_DATE" => "Y",    // Выводить дату элемента
	"DISPLAY_NAME" => "Y",    // Выводить название элемента
	"DISPLAY_PICTURE" => "Y",    // Выводить изображение для анонса
	"DISPLAY_PREVIEW_TEXT" => "Y",    // Выводить текст анонса
	"DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
	"FIELD_CODE" => array(    // Поля
		0 => "NAME",
		1 => "PREVIEW_PICTURE",
		2 => "DETAIL_PICTURE",
		3 => "",
	),
	"FILTER_NAME" => "",    // Фильтр
	"HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
	"IBLOCK_ID" => "2",    // Код информационного блока
	"IBLOCK_TYPE" => "index",    // Тип информационного блока (используется только для проверки)
	"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",    // Включать инфоблок в цепочку навигации
	"INCLUDE_SUBSECTIONS" => "Y",    // Показывать элементы подразделов раздела
	"MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
	"NEWS_COUNT" => "20",    // Количество новостей на странице
	"PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
	"PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
	"PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
	"PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
	"PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
	"PAGER_TITLE" => "Новости",    // Название категорий
	"PARENT_SECTION" => "",    // ID раздела
	"PARENT_SECTION_CODE" => "",    // Код раздела
	"PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
	"PROPERTY_CODE" => array(    // Свойства
		0 => "",
		1 => "",
	),
	"SET_BROWSER_TITLE" => "Y",    // Устанавливать заголовок окна браузера
	"SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
	"SET_META_DESCRIPTION" => "Y",    // Устанавливать описание страницы
	"SET_META_KEYWORDS" => "Y",    // Устанавливать ключевые слова страницы
	"SET_STATUS_404" => "N",    // Устанавливать статус 404
	"SET_TITLE" => "Y",    // Устанавливать заголовок страницы
	"SHOW_404" => "N",    // Показ специальной страницы
	"SORT_BY1" => "ACTIVE_FROM",    // Поле для первой сортировки новостей
	"SORT_BY2" => "SORT",    // Поле для второй сортировки новостей
	"SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
	"SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
	"STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
),
	false
); ?>


<? $APPLICATION->IncludeComponent("bitrix:news.list", "privileges", array(
	"ACTIVE_DATE_FORMAT" => "",    // Формат показа даты
	"ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
	"AJAX_MODE" => "N",    // Включить режим AJAX
	"AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
	"AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
	"AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
	"AJAX_OPTION_STYLE" => "N",    // Включить подгрузку стилей
	"CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
	"CACHE_GROUPS" => "N",    // Учитывать права доступа
	"CACHE_TIME" => "36000000",    // Время кеширования (сек.)
	"CACHE_TYPE" => "Y",    // Тип кеширования
	"CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
	"DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
	"DISPLAY_BOTTOM_PAGER" => "N",    // Выводить под списком
	"DISPLAY_DATE" => "N",    // Выводить дату элемента
	"DISPLAY_NAME" => "N",    // Выводить название элемента
	"DISPLAY_PICTURE" => "N",    // Выводить изображение для анонса
	"DISPLAY_PREVIEW_TEXT" => "N",    // Выводить текст анонса
	"DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
	"FIELD_CODE" => array(    // Поля
		0 => "NAME",
		1 => "PREVIEW_TEXT",
		2 => "PREVIEW_PICTURE",
		3 => "",
	),
	"FILTER_NAME" => "",    // Фильтр
	"HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
	"IBLOCK_ID" => "3",    // Код информационного блока
	"IBLOCK_TYPE" => "index",    // Тип информационного блока (используется только для проверки)
	"INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
	"INCLUDE_SUBSECTIONS" => "N",    // Показывать элементы подразделов раздела
	"MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
	"NEWS_COUNT" => "20",    // Количество новостей на странице
	"PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
	"PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
	"PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
	"PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
	"PAGER_TEMPLATE" => "",    // Шаблон постраничной навигации
	"PAGER_TITLE" => "Новости",    // Название категорий
	"PARENT_SECTION" => "",    // ID раздела
	"PARENT_SECTION_CODE" => "",    // Код раздела
	"PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
	"PROPERTY_CODE" => array(    // Свойства
		0 => "",
		1 => "",
	),
	"SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
	"SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
	"SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
	"SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
	"SET_STATUS_404" => "N",    // Устанавливать статус 404
	"SET_TITLE" => "N",    // Устанавливать заголовок страницы
	"SHOW_404" => "N",    // Показ специальной страницы
	"SORT_BY1" => "ACTIVE_FROM",    // Поле для первой сортировки новостей
	"SORT_BY2" => "SORT",    // Поле для второй сортировки новостей
	"SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
	"SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
	"STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
	"COMPONENT_TEMPLATE" => ".default"
),
	false
); ?>

    <section class="step" id="get_started">
        <div class="container">
            <h2 class="text-center step_h2">Начать работать через 30 минут!</h2>

            <div class="content">

                <div data-aos="zoom-out" class="step-item">
                    <div class="round_num">01</div>
                    <span>Оставьте заявку<br>на сайте</span>
                </div>

                <div class="line1">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/line1.svg" alt="">
                </div>

                <div data-aos="zoom-out" class="step-item">
                    <div class="round_num round_num__left">02</div>
                    <span>Мы перезвоним<br>и уточним все детали</span>
                </div>

                <div class="line2">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/line2.svg" alt="">
                </div>

                <div data-aos="zoom-out" class="step-item">
                    <div class="round_num">03</div>
                    <span>Оформим<br>все документы</span>
                </div>

                <div class="line3">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/line3.svg" alt="">
                </div>

                <div data-aos="zoom-out" class="step-item">
                    <div class="round_num round_num__none">04</div>
                    <span>Можете приступать<br>к работе</span>
                </div>

            </div>

        </div>
    </section>


    <section class="conditions">
        <div class="container container__wide__lightpink m-1">
            <div class="content_cond">
                <h4 class="h2-m-none">Условия работы</h4>
                <div data-aos="fade-right" class="cond-item">
                    <h4>Условия работы</h4>
                    <div class="img_container">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/card-6.png" alt="">
                    </div>
                    <div class="yandex_bottom">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/ya.png" alt="">
                        <span>Подключаем ко всем тарифам Яндекс.Про</span>
                    </div>
                </div>
                <div class="conditions-cards">
                    <div data-aos="fade-down-left" class="condition-item">
                        <div class="conditions-bloc">
                            <p>2,5% за заявку</p>
                            <p>75 ₽ в сутки</p>
                        </div>
                        <p style="max-width: 28.4rem">При выполнении 700 заявок в текущем месяце, в следующем месяце:
                        <ul>
                            <li>2% за заявку</li>
                            <li>50 ₽ в сутки</li>
                        </ul>
                        </p>
                    </div>
                    <div data-aos="fade-left" class="condition-item">
                        <p>Выплаты денежных средств производятся на карту любого банка моментально через приложение Jump
                            Taxi.
                            Комиссия за выплату всего 2%
                        </p>
                    </div>
                    <div data-aos="fade-up-left" class="condition-item">
                        <span>Никаких дополнительных комиссий</span>
                        <p>Комиссия таксопарка:</p>
                        <ul>
                            <li>За покупку смены 0 ₽;</li>
                            <li>С бонусов водителя 0 ₽;</li>
                            <li>С чаевых водителя 0 ₽.</li>
                        </ul>
                        </p>
                    </div>
                    <div class="condition-item_mobile">
                        <div class="yandex_bottom">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/ya.png" alt="">
                            <span>Подключаем ко всем тарифам Яндекс.Про</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="lottery">
        <div class="container">
            <div data-aos="fade-up" class="card-container">
                <div class="card-item">
                    <div class="">
                        <h2 id="lottery_h2">Участвуйте в розыгрыше ценных призов</h2>
                    </div>
                    <div class="item-desc item-desc__other">
                        <a href="#feedback" class="btn btn__orange">Участвовать</a>
                        <span class="btn" id="conditions">Условия розыгрыша</span>
                    </div>
                </div>
                <div class="card-image">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/card-4.png" alt="">
                </div>
            </div>
            <!---->

        </div>
    </section>

    <section class="winner_prize" id="winner_prize">
        <div class="container container__winner">
            <div data-aos="fade-right" class="prizes">
                <h2>Призы</h2>
                <div class="prizes-item">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/iphone.png" alt="">
                    <div class="prizes-item__container">
                        <h3>Iphone 12 Pro</h3>
                        <span>128 ГБ</span>
                    </div>
                </div>
                <div class="prizes-item">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/videorec.png" alt="">
                    <div class="prizes-item__container">
                        <h3>Видеорегистратор</h3>
                        <span>С умным ассистентом</span>
                    </div>
                </div>
                <div class="prizes-item">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/lights.png" alt="">
                    <div class="prizes-item__container">
                        <h3>Фары</h3>
                        <span>Универсальные</span>
                    </div>
                </div>
                <div class="prizes-item">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/fuilstation.png" alt="">
                    <div class="prizes-item__container">
                        <h3>Бесплатные заправки</h3>
                        <span>Целую неделю</span>
                    </div>
                </div>
            </div>
            <div data-aos="fade-left" class="winner">
                <h2 class="text-center__ml-0">Победитель розыгрыша в сентябре</h2>
                <div class="winner-img"><img src="<?= SITE_TEMPLATE_PATH ?>/images/winner.png" alt=""></div>
                <div class="winner_name">
                    <span>Иван И.</span>
                </div>
                <div class="winner_desc">
                    <div>Поздравляем Ивана!</div>
                    <div>Приз: Iphone 12 Pro</div>
                </div>
            </div>

            <div class="back-ground"></div>
        </div>
    </section>

    <section class="calc" id="payment">
        <div class="container container__wide">
            <div class="calc-wrapper">
                <div class="calc-wrap">
                    <h2>Калькулятор</h2>
                    <p>Часов в день: <span id="day__calc">6</span></p>
                    <div class="range">
                        <input id="hours" type="range" min="1" max="18" value="6" step="1">
                        <div class="ticks">
                            <!-- You could generate the ticks based on your min, max & step values. -->
                            <span class="tick">1</span>
                            <span class="tick">2</span>
                            <span class="tick">3</span>
                            <span class="tick">4</span>
                            <span class="tick">5</span>
                            <span class="tick">6</span>
                            <span class="tick">7</span>
                            <span class="tick">8</span>
                            <span class="tick">9</span>
                            <span class="tick">10</span>
                            <span class="tick">11</span>
                            <span class="tick">12</span>
                            <span class="tick">13</span>
                            <span class="tick">14</span>
                            <span class="tick">15</span>
                            <span class="tick">16</span>
                            <span class="tick">17</span>
                            <span class="tick">18</span>
                        </div>
                    </div>
                    <!--  -->
                    <p>Дней в неделю: <span id="week_day">7</span></p>
                    <div class="range">
                        <input id="weeks" type="range" min="1" max="7" value="7" step="1">
                        <div class="ticks">
                            <!-- You could generate the ticks based on your min, max & step values. -->
                            <span class="tick">1</span>
                            <span class="tick">2</span>
                            <span class="tick">3</span>
                            <span class="tick">4</span>
                            <span class="tick">5</span>
                            <span class="tick">6</span>
                            <span class="tick">7</span>
                        </div>
                    </div>

                    <!--  -->
                    <p>Расход бензина вашего авто на 100 км: <span id="fuel__100">20</span></p>
                    <div class="range">
                        <input id="fuel" type="range" min="1" max="25" value="20" step="1">
                        <div class="ticks">
                            <!-- You could generate the ticks based on your min, max & step values. -->
                            <span class="tick">1</span>
                            <span class="tick">2</span>
                            <span class="tick">3</span>
                            <span class="tick">4</span>
                            <span class="tick">5</span>
                            <span class="tick">6</span>
                            <span class="tick">7</span>
                            <span class="tick">8</span>
                            <span class="tick">9</span>
                            <span class="tick">10</span>
                            <span class="tick">11</span>
                            <span class="tick">12</span>
                            <span class="tick">13</span>
                            <span class="tick">14</span>
                            <span class="tick">15</span>
                            <span class="tick">16</span>
                            <span class="tick">17</span>
                            <span class="tick">18</span>
                            <span class="tick">19</span>
                            <span class="tick">20</span>
                            <span class="tick">21</span>
                            <span class="tick">22</span>
                            <span class="tick">23</span>
                            <span class="tick">24</span>
                            <span class="tick">25</span>
                        </div>
                    </div>

                    <p>Примерный заработок в месяц</p>
                    <span id="summ">8400</span><span id="summ"> ₽</span>
                    <a href="" class="btn btn__orange">Стать партнером</a>
                    <p id="bottom_text">Гарантированный заработок от 8400 руб в день* </p>

                </div>
                <div class="calc-content">
                    <h2>Рассчитайте свой примерный заработок</h2>
                    <span>Ваш заработок в месяц будет зависеть от следующих условий:</span>
                    <div class="calc_desc">
                        <ul>
                            <li>как много дней в неделю и часов в день вы на линии</li>
                            <li>тариф, на котором вы работаете — выше тариф, больше доход;</li>
                            <li>бонусы от компании и чаевые от клиентов</li>
                        </ul>
                    </div>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="lottery">
        <div class="container">
            <div data-aos="fade-up" class="card-container card-container__noleft card-container__lottery">
                <div class="card-image">
                    <img class="tender" src="<?= SITE_TEMPLATE_PATH ?>/images/card-5.png" alt="">
                </div>
                <div class="card-item card-item__vcenter">
                    <div class="">
                        <h2>Участвуйте в конкурсе и станьте лучшим водителем месяца</h2>
                    </div>
                    <div class="item-desc item-desc__other">
                        <a href="#feedback" class="btn btn__orange">Участвовать</a>
                        <span class="btn" id="conditions">Условия розыгрыша</span>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="partner">
        <div class="container w-100">
            <div class="card-container card-container__noBg card-container__taxi">
                <div data-aos="zoom-in-right" class="card-item__partner">
                    <h2>Мы являемся<br>официальным партнером<br> Яндекс.Такси</h2>
                </div>
                <div data-aos="zoom-in-left" class="card-taxi">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/taxi_bg.png" alt="">
                </div>
            </div>

        </div>
    </section>

    <section class="question_answer" id="question_answer">
        <div class="container">
            <h2 class="text-center_qa">Ответы на вопросы</h2>
            <div class="accordion">
                <div class="accordion_1">
                    <ul class="accordion__items">
                        <li class="accordion__item">
                            <div class="accordion__title">
                                <h3>Какой автомобиль подходит для работы?</h3>
                                <span class="accordion__icon"></span>
                            </div>
                            <div class="accordion__content">
                                <p>У нас дружный коллектив, прозрачные условия работы, новые машины для аренды
                                    оснащенные световыми коробами, видео-регистраторами, детскими креслами и газовым
                                    оборудованием</p>
                            </div>
                        </li>
                        <li class="accordion__item">
                            <div class="accordion__title">
                                <h3>Какие требования к водителю?</h3>
                                <span class="accordion__icon"></span>
                            </div>
                            <div class="accordion__content">
                                <p>У нас дружный коллектив, прозрачные условия работы, новые машины для аренды
                                    оснащенные световыми коробами, видео-регистраторами, детскими креслами и газовым
                                    оборудованием</p>
                            </div>
                        </li>
                        <li class="accordion__item">
                            <div class="accordion__title">
                                <h3>Легальна ли ваша работа?</h3>
                                <span class="accordion__icon"></span>
                            </div>
                            <div class="accordion__content">
                                <p>У нас дружный коллектив, прозрачные условия работы, новые машины для аренды
                                    оснащенные световыми коробами, видео-регистраторами, детскими креслами и газовым
                                    оборудованием</p>
                            </div>
                        </li>
                        <li class="accordion__item">
                            <div class="accordion__title">
                                <h3>Какие условия для работы на авто таксопарка?</h3>
                                <span class="accordion__icon"></span>
                            </div>
                            <div class="accordion__content">
                                <p>У нас дружный коллектив, прозрачные условия работы, новые машины для аренды
                                    оснащенные световыми коробами, видео-регистраторами, детскими креслами и газовым
                                    оборудованием</p>
                            </div>
                        </li>
                        <li class="accordion__item">
                            <div class="accordion__title">
                                <h3>Какие требования к моему телефону? Как я буду подключен к таксопарку?</h3>
                                <span class="accordion__icon"></span>
                            </div>
                            <div class="accordion__content">
                                <p>У нас дружный коллектив, прозрачные условия работы, новые машины для аренды
                                    оснащенные световыми коробами, видео-регистраторами, детскими креслами и газовым
                                    оборудованием</p>
                            </div>
                        </li>
                        <li class="accordion__item">
                            <div class="accordion__title">
                                <h3>Могу ли я сам выбирать себе пассажира? Отказываться от пассажира? Есть ли штрафы за
                                    это?</h3>
                                <span class="accordion__icon"></span>
                            </div>
                            <div class="accordion__content">
                                <p>У нас дружный коллектив, прозрачные условия работы, новые машины для аренды
                                    оснащенные световыми коробами, видео-регистраторами, детскими креслами и газовым
                                    оборудованием</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="accordion_2">
                    <ul class="accordion__items">
                        <li class="accordion__item">
                            <div class="accordion__title">
                                <h3>Как я получу оплату за работу?</h3>
                                <span class="accordion__icon"></span>
                            </div>
                            <div class="accordion__content">
                                <p>У нас дружный коллектив, прозрачные условия работы, новые машины для аренды
                                    оснащенные световыми коробами, видео-регистраторами, детскими креслами и газовым
                                    оборудованием</p>
                            </div>
                        </li>
                        <li class="accordion__item">
                            <div class="accordion__title">
                                <h3>Какое количество заказов я буду получать в день?</h3>
                                <span class="accordion__icon"></span>
                            </div>
                            <div class="accordion__content">
                                <p>У нас дружный коллектив, прозрачные условия работы, новые машины для аренды
                                    оснащенные световыми коробами, видео-регистраторами, детскими креслами и газовым
                                    оборудованием</p>
                            </div>
                        </li>
                        <li class="accordion__item">
                            <div class="accordion__title">
                                <h3>Какое количество заказов я буду получать в день?</h3>
                                <span class="accordion__icon"></span>
                            </div>
                            <div class="accordion__content">
                                <p>У нас дружный коллектив, прозрачные условия работы, новые машины для аренды
                                    оснащенные световыми коробами, видео-регистраторами, детскими креслами и газовым
                                    оборудованием</p>
                            </div>
                        </li>
                        <li class="accordion__item">
                            <div class="accordion__title">
                                <h3>Смогу ли подрабатывать у вас, имея основную работу?</h3>
                                <span class="accordion__icon"></span>
                            </div>
                            <div class="accordion__content">
                                <p>У нас дружный коллектив, прозрачные условия работы, новые машины для аренды
                                    оснащенные световыми коробами, видео-регистраторами, детскими креслами и газовым
                                    оборудованием</p>
                            </div>
                        </li>
                        <li class="accordion__item">
                            <div class="accordion__title">
                                <h3>Какие выгоды от долгосрочного сотрудничества я получу?</h3>
                                <span class="accordion__icon"></span>
                            </div>
                            <div class="accordion__content">
                                <p>У нас дружный коллектив, прозрачные условия работы, новые машины для аренды
                                    оснащенные световыми коробами, видео-регистраторами, детскими креслами и газовым
                                    оборудованием</p>
                            </div>
                        </li>
                        <li class="accordion__item">
                            <div class="accordion__title">
                                <h3>Кто будет нести ответственность за поломку предоставленного для работы авто?</h3>
                                <span class="accordion__icon"></span>
                            </div>
                            <div class="accordion__content">
                                <p>У нас дружный коллектив, прозрачные условия работы, новые машины для аренды
                                    оснащенные световыми коробами, видео-регистраторами, детскими креслами и газовым
                                    оборудованием</p>
                            </div>
                        </li>
                    </ul>
                    <div class="">
                        <button id="button" class="more_btn">Показать еще</button>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="footer-form" id="feedback">
        <div class="container__form">
            <div data-aos="zoom-in-left" class="form">
                <h2>Оставляйте заявку <p>на подключение к Яндекс.Такси</p></h2>
                <br>
                <br>
                <form class="feedback_form" name="feedback" method="POST" action="/feedback.php">
                    <div>Имя</div>
                    <input type="text" name="name" placeholder="Введите имя" required="required">
                    <br>
                    <div>Номер телефона</div>
                    <input value="" class="tel" name="phone" id="phone" placeholder="Введите номер телефона"
                           required="required">
                    <div class="checkbox_form">
                        <input type="checkbox" name="chk">
                        <div class="conf_text">
                            <p>Даю согласие на обработку</p>
                            <a>персональных данных</a>
                        </div>
                    </div>
                    <br>
                    <div>
                        <input class="form_btn" type="submit" name="submit_btn" value="Отправить заявку">
                    </div>
                </form>
            </div>

        </div>
        <div class="container-img">
            <img class="mobile-footer-img" src="<?= SITE_TEMPLATE_PATH ?>/images/footer-m.png" alt="">
            <div class="footer-img" alt=""></div>
        </div>
    </section>
<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>