<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
}

use Bitrix\Main\Localization\Loc;

?>

<footer id="footer">
    <!--  desktop-->
    <div class="container container-footer">
        <div class="footer-content">
            <div class="footer-item">
                <h2><?= Loc::getMessage('CONTACTS') ?></h2>
                <span class="gray">© <?= date('Y') ?> <?= Loc::getMessage('COPYRIGHT') ?></span>
            </div>

            <div class="footer-item__addr">
                <div class="">
                    <p style="padding-bottom: 24px"><?= sprint_options_get('ADDRESS') ?></p>
                    <p><?= Loc::getMessage('OFFICE_HOURS') ?>:</p>
                    <p><?= sprint_options_get('OFFICE_HOURS') ?></p>
                    <p><?= Loc::getMessage('DISPATCHERS_WORKING_HOURS') ?>:</p>
                    <p><?= sprint_options_get('DISPATCHERS_WORKING_HOURS') ?></p><br><br>
                </div>
                <div class="">
                    <a class="gray" id="privacy"><?= Loc::getMessage('PRIVACY') ?></a>
                </div>
            </div>

            <div class="footer-item">
                <div class="">
                    <a href="tel:+79991234569" class="gray bt"><?= sprint_options_get('PHONE2') ?></a><br>
                    <a href="<?= sprint_options_get('FACE_BOOK') ?>" target="_blank"><img
                                src="<?= SITE_TEMPLATE_PATH ?>/images/facebook.svg" alt=""></a>
                    <a href="<?= sprint_options_get('YOUTUBE') ?>" target="_blank"><img
                                src="<?= SITE_TEMPLATE_PATH ?>/images/youtube.svg" alt=""></a>
                    <a href="<?= sprint_options_get('INSTAGRAM') ?>" target="_blank"><img
                                src="<?= SITE_TEMPLATE_PATH ?>/images/instagram.svg" alt=""></a>
                    <a href="<?= sprint_options_get('TG') ?>" target="_blank"><img
                                src="<?= SITE_TEMPLATE_PATH ?>/images/telegram.svg" alt=""></a>
                    <a href="<?= sprint_options_get('VK') ?>" target="_blank"><img
                                src="<?= SITE_TEMPLATE_PATH ?>/images/vk.svg" alt=""></a>
                </div>
                <a href="https://wptt.ru" target="_blank" class="gray"><?= Loc::getMessage('DEVELOPER') ?></a>
            </div>
        </div>
    </div>
    <!-- mobile -->
    <div class="container__mobfot">
        <div class="footer-mobile">
            <div class="">
                <h2><?= Loc::getMessage('CONTACTS') ?></h2>
                <br>
                <p style="padding-bottom: 24px"><?= sprint_options_get('ADDRE') ?></p>
                <p><?= Loc::getMessage('OFFICE_HOURS') ?>:</p>
                <p><?= sprint_options_get('OFFICE_HOURS') ?></p>
                <p><?= Loc::getMessage('DISPATCHERS_WORKING_HOURS') ?>:</p>
                <p><?= sprint_options_get('DISPATCHERS_WORKING_HOURS') ?></p><br>
                <div class="content">
                    <a href="tel:+79991234569" class="bt"><?= sprint_options_get('PHONE2') ?></a><br><br>
                    <a href="<?= sprint_options_get('FACE_BOOK') ?>" target="_blank"><img
                                src="<?= SITE_TEMPLATE_PATH ?>/images/facebook.svg" alt=""></a>
                    <a href="<?= sprint_options_get('YOUTUBE') ?>" target="_blank"><img
                                src="<?= SITE_TEMPLATE_PATH ?>/images/youtube.svg" alt=""></a>
                    <a href="<?= sprint_options_get('INSTAGRAM') ?>" target="_blank"><img
                                src="<?= SITE_TEMPLATE_PATH ?>/images/instagram.svg" alt=""></a>
                    <a href="<?= sprint_options_get('TG') ?>" target="_blank"><img
                                src="<?= SITE_TEMPLATE_PATH ?>/images/telegram.svg" alt=""></a>
                    <a href="<?= sprint_options_get('VK') ?>" target="_blank"><img
                                src="<?= SITE_TEMPLATE_PATH ?>/images/vk.svg" alt=""></a>
                </div>
                <br>
                <a class="gray" id="privacy"><?= Loc::getMessage('PRIVACY') ?></a>
                <p></p><br><br>
                <p class="gray">© 2021 <?= Loc::getMessage('COPYRIGHT') ?></p>
                <a href="https://wptt.ru" target="_blank" class="gray"><?= Loc::getMessage('DEVELOPER') ?></a>
            </div>
        </div>
    </div>
</footer>
