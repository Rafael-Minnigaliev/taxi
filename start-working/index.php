<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Начать работать");
?>
    <section class="step" id="get_started">
        <div class="container">
            <h2 class="text-center step_h2">Начать работать через 30 минут!</h2>

            <div class="content">

                <div data-aos="zoom-out" class="step-item">
                    <div class="round_num">01</div>
                    <span>Оставьте заявку<br>на сайте</span>
                </div>

                <div class="line1">
                    <img src="<?= SITE_TEMPLATE_PATH?>/images/line1.svg" alt="">
                </div>

                <div data-aos="zoom-out" class="step-item">
                    <div class="round_num round_num__left">02</div>
                    <span>Мы перезвоним<br>и уточним все детали</span>
                </div>

                <div class="line2">
                    <img src="<?= SITE_TEMPLATE_PATH?>/images/line2.svg" alt="">
                </div>

                <div data-aos="zoom-out" class="step-item">
                    <div class="round_num">03</div>
                    <span>Оформим<br>все документы</span>
                </div>

                <div class="line3">
                    <img src="<?= SITE_TEMPLATE_PATH?>/images/line3.svg" alt="">
                </div>

                <div data-aos="zoom-out" class="step-item">
                    <div class="round_num round_num__none">04</div>
                    <span>Можете приступать<br>к работе</span>
                </div>

            </div>

        </div>
    </section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>