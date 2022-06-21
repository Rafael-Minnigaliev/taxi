<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
}

?>

<div class="sub_header">
    <div class="swiper">
        <div class="swiper-pagination"></div>
        <div class="swiper-wrapper swiper-desktop">
			<? foreach ($arResult['ITEMS'] as $key => $arItem): ?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
					CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
					CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'),
					array('CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
                <div class="swiper-slide" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                    <div class="slide">
                        <img class="slide-pc" src="<?= $arItem['DETAIL_PICTURE']['SRC'] ?>"
                             alt="<?= $arItem['DETAIL_PICTURE']['ALT'] ?>">
                        <img class="slide-m" src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>"
                             alt="<?= $arItem['PREVIEW_PICTURE']['ALT'] ?>">
                    </div>
                </div>
			<? endforeach; ?>
        </div>
    </div>
</div>

