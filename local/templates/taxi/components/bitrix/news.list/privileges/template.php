<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
}
?>

<section class="privilege" id="about">
    <div class="container">
        <a href="/taksopark/"><h2 class="text-center">С нами удобно и выгодно</h2></a>
        <div data-aos="fade-down" class="card-container">
            <div class="card-item">
                <div class="item-headline">
                    <span><?= $arResult['ITEMS'][0]['NUMBERING'] ?></span>
                    <h2><?= $arResult['ITEMS'][0]['~NAME'] ?></h2>
                </div>
                <div class="item-desc">
                    <span><?= $arResult['ITEMS'][0]['PREVIEW_TEXT'] ?></span>
                </div>
            </div>
            <div class="card-image">
                <img src="<?= $arResult['ITEMS'][0]["PREVIEW_PICTURE"]["SRC"] ?>"
                     alt="<?= $arResult['ITEMS'][0]["PREVIEW_PICTURE"]["ALT"] ?>">
            </div>
        </div>

        <div class="card-container card-container__noBg_reverse">
            <div class="card-item">
                <div data-aos="fade-right" class="item-headline">
                    <span><?= $arResult['ITEMS'][1]['NUMBERING'] ?></span>
                    <h2><?= $arResult['ITEMS'][1]['~NAME'] ?></h2>
                </div>
                <div data-aos="fade-left" class="item-desc">
                    <span><?= $arResult['ITEMS'][1]['PREVIEW_TEXT'] ?></span>
                </div>
            </div>
            <div data-aos="fade-right" class="card-image">
                <img src="<?= $arResult['ITEMS'][1]["PREVIEW_PICTURE"]["SRC"] ?>"
                     alt="<?= $arResult['ITEMS'][1]["PREVIEW_PICTURE"]["ALT"] ?>">
            </div>
        </div>
        <!---->
        <div data-aos="fade-up" class="card-container">
            <div class="card-item">
                <div class="item-headline">
                    <span><?= $arResult['ITEMS'][2]['NUMBERING'] ?></span>
                    <h2 style="max-width: 24rem"><?= $arResult['ITEMS'][2]['~NAME'] ?></h2>
                </div>
                <div class="item-desc">
                    <span><?= $arResult['ITEMS'][2]['PREVIEW_TEXT'] ?></span>
                </div>
            </div>
            <div class="card-image">
                <img src="<?= $arResult['ITEMS'][2]["PREVIEW_PICTURE"]["SRC"] ?>"
                     alt="<?= $arResult['ITEMS'][2]["PREVIEW_PICTURE"]["ALT"] ?>">
            </div>
        </div>
        <!---->

    </div>
</section>


