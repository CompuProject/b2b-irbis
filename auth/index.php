<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>

<?if($APPLICATION->GetCurPage() == '/auth/change-password/'):?>
    <div class="container-fluid auth_bg text-center">
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
    </div>
<?else:?>

    <div class="container-fluid auth_bg text-center">
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
            <div class="authCopy">
                <div class="authCopy_text text-center">© Все права защищены ООО "Ирбис ТД" 2005-<?=date("Y")?></div>
                <div class="authCopy_text text-center pl-4"><a target="_blank" href="https://irbis-td.ru/policy.html">Политика конфиденциальности и файлы cookie</a></div>
            </div>
<!--            <div class="row authCopy">-->
<!--                <div class="col-6 authCopy_text text-center">© Все права защищены ООО "Ирбис ТД" 2005---><?//=date("Y")?><!--</div>-->
<!--                <div class="col-6 authCopy_text text-center">Политика конфиденциальности и файлы cookie</div>-->
<!--            </div>-->

<!--        <div class="container">-->
<!--            <div class="row justify-content-center align-items-center auth_form">-->
<!--                <div class="col-4">-->
<!--                    <div class="row">-->
<!--                        <div class="col-12 authHeaderLogo pb-2 text-center">-->
<!--                            <img src="--><?//= $SITE_SERVER_NAME ?><!--/images/mainLogo.png">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div></div>-->
<!--                    <div class="row">-->
<!--                        <div class="col-12">-->
<!---->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->


        <!--        <div class="container h-100">-->
        <!--            <div class="row justify-content-center align-items-center auth_tabs">-->
        <!--                <div class="col-5">-->
        <!--                    <div class="row">-->
        <!--                        <div class="col-12 authHeaderLogo pb-2">-->
        <!--                            <img src="--><? //=$SITE_SERVER_NAME?><!--/images/mainLogo.png">-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="row">-->
        <!--                        <div class="col-12 p-3 auth_tabs_block">-->
        <!--                            <ul class="nav nav-tabs" id="myTab" role="tablist">-->
        <!--                                <li class="nav-item">-->
        <!--                                    <a class="nav-link active" id="auth-tab" data-toggle="tab" href="#auth" role="tab" aria-controls="auth" aria-selected="true">Авторизация</a>-->
        <!--                                </li>-->
        <!--                                <li class="nav-item">-->
        <!--                                    <a class="nav-link" id="registration-tab" data-toggle="tab" href="#registration" role="tab" aria-controls="registration" aria-selected="false">Регистрация</a>-->
        <!--                                </li>-->
        <!--                            </ul>-->
        <!--                            <div class="tab-content" id="myTabContent">-->
        <!--                                <div class="tab-pane fade show active" id="auth" role="tabpanel" aria-labelledby="auth-tab">-->

        <!--                                </div>-->
        <!--                                <div class="tab-pane fade" id="registration" role="tabpanel" aria-labelledby="registration-tab">-->
        <!--                                    --><? // if( !$USER->IsAuthorized() ){?>
        <!--                                        --><? //$APPLICATION->IncludeComponent(
        //                                            "bitrix:main.register",
        //                                            "cp",
        //                                            Array(
        //                                                "USER_PROPERTY_NAME" => "",
        //                                                "SHOW_FIELDS" => array( "LOGIN", "LAST_NAME", "NAME", "SECOND_NAME", "EMAIL" ),
        //                                                "REQUIRED_FIELDS" => array( "LOGIN", "EMAIL" ),
        //                                                "AUTH" => "Y",
        //                                                "USE_BACKURL" => "N",
        //                                                "SUCCESS_PAGE" => "",
        //                                                "SET_TITLE" => "N",
        //                                                "USER_PROPERTY" => array()
        //                                            )
        //                                        );?>
        <!--                                    --><? //}else{
        ////                                    LocalRedirect( $arParams["SEF_FOLDER"] );
        //                                    }?>
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!---->
        <!--        </div>-->
    </div>
<?endif;?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>