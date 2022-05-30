<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О таксопарке");
?>
    <section class="privilege" id="about">
        <div class="container">
            <h2 class="text-center">С нами удобно и выгодно</h2>
            <div data-aos="fade-down" class="card-container">
                <div class="card-item">
                    <div class="item-headline">
                        <span>01.</span>
                        <h2>Надежный<br>таксопарк</h2>
                    </div>
                    <div class="item-desc">
                        <span>У нас дружный коллектив, прозрачные условия работы, новые машины для аренды оснащенные световыми коробами, видео-регистраторами, детскими креслами и газовым оборудованием</span>
                    </div>
                </div>
                <div class="card-image">
                    <img src="<?= SITE_TEMPLATE_PATH?>/images/card-1.png" alt="">
                </div>
            </div>
            <!---->
            <div class="card-container card-container__noBg_reverse">
                <div class="card-item">
                    <div data-aos="fade-right" class="item-headline">
                        <span>02.</span>
                        <h2>Прозрачные <br>условия работы</h2>
                    </div>
                    <div data-aos="fade-left" class="item-desc">
                        <span>Прямая связь с директором таксопарка, новые машины для аренды, акции, розыгрыши ценных призов и бесплатных дней<br>аренды</span>
                    </div>
                </div>
                <div data-aos="fade-right" class="card-image">
                    <img src="<?= SITE_TEMPLATE_PATH?>/images/card-2.png" alt="">
                </div>
            </div>
            <!---->
            <div data-aos="fade-up" class="card-container">
                <div class="card-item">
                    <div class="item-headline">
                        <span>03.</span>
                        <h2 style="max-width: 24rem">Выгода от долгосрочного сотрудничества</h2>
                    </div>
                    <div class="item-desc">
                        <span>Специальные условия для водителей<br>и поощрительные бонусы при долгосрочном сотрудничестве</span>
                    </div>
                </div>
                <div class="card-image">
                    <img src="<?= SITE_TEMPLATE_PATH?>/images/card-3.png" alt="">
                </div>
            </div>
            <!---->
        </div>
    </section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>