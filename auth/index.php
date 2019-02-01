<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>

<?if($APPLICATION->GetCurPage() == '/auth/change-password/'):?>
    <?$APPLICATION->IncludeComponent("aspro:auth.next", "main", array(
        "SEF_MODE" => "Y",
        "SEF_FOLDER" => "/auth/",
        "SEF_URL_TEMPLATES" => array(
            "auth" => "",
            "registration" => "registration/",
            "forgot" => "forgot-password/",
            "change" => "change-password/",
            "confirm" => "confirm-password/",
            "confirm_registration" => "confirm-registration/",
        ),
        "PERSONAL" => "/personal/"
    ),
        false
    );?>
<?else:?>
        <? $APPLICATION->IncludeComponent("bitrix:system.auth.form", "cp", array(
            "SEF_MODE" => "Y",
            "SEF_FOLDER" => "/auth/",
            "SEF_URL_TEMPLATES" => array(
                "auth" => "personal/",
                "registration" => "registration/",
                "forgot" => "forgot-password/",
                "change" => "change-password/",
                "confirm" => "confirm-password/",
                "confirm_registration" => "confirm-registration/",
            ),
            "PERSONAL" => "/personal/"
        ),
            false
        );?>
<?endif;?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>