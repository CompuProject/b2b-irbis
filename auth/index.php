<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

?>
    <div class="container h-100">
<!--        <div class="row">-->
<!--            <div class="col authHeader">--><?//$APPLICATION->SetTitle("Авторизация");?><!--</div>-->
<!--        </div>-->
        <div class="row justify-content-center align-items-center auth_tabs">
            <div class="col-5">
                <div class="row">
                    <div class="col-12 authHeaderLogo pb-2">
                        <img src="<?=$SITE_SERVER_NAME?>/images/mainLogo.png">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 p-3 auth_tabs_block">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="auth-tab" data-toggle="tab" href="#auth" role="tab" aria-controls="auth" aria-selected="true">Авторизация</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="registration-tab" data-toggle="tab" href="#registration" role="tab" aria-controls="registration" aria-selected="false">Регистрация</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="auth" role="tabpanel" aria-labelledby="auth-tab">
                                <?$APPLICATION->IncludeComponent("bitrix:system.auth.form", "cp", array(
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

                            </div>
                            <div class="tab-pane fade" id="registration" role="tabpanel" aria-labelledby="registration-tab">...</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
	
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>