<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

?>

<div id="modal-container">
    <div class="modal-background">
        <div class="modal">
            <div class="container">
                <div class="closeModal"></div>
                <h2 id="modal_title">inner</h2>
                <p id="modal_text">inner</p>
            </div>
        </div>
    </div>
</div>

<div class="sub_header">
    <div class="swiper">
        <div class="swiper-pagination"></div>
        <div class="swiper-wrapper swiper-desktop">
			<?foreach($arResult["ITEMS"] as $key => $arItem):?>
            <div class="swiper-slide" id="<?= $key?>">
                <div class="slide">
                    <img class="slide-pc" src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" alt="<?=$arItem["DETAIL_PICTURE"]["ALT"]?>">
                    <img class="slide-m" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">
                </div>
            </div>
			<?endforeach;?>
        </div>
    </div>
</div>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
    <br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
