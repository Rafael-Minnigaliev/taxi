<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
} ?>

<?php if (!empty($arResult)): ?>
    <div class="header-menu">
        <ul>
			<?php foreach ($arResult as $arItem): ?>
                <li class="menu-item"><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
			<? endforeach ?>
        </ul>
        <a class="roundBtn" href="#"><?= sprint_options_get('PHONE') ?></a>
        <div class="burger">
            <input type="checkbox" id="active">
            <label for="active" class="menu-btn"><span></span></label>
            <label for="active" class="close"></label>
            <div class="wrapper">
                <ul>
					<?php foreach ($arResult as $arItem): ?>
                        <li class="menu-item"><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
					<? endforeach ?>
                </ul>
            </div>
        </div>
    </div>
<?php endif; ?>