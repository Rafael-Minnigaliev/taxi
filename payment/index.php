<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Расчет зарплаты");
?>
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
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>