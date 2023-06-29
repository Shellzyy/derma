<?php // этот php-код компилирует less/style.less в css/style.css	
require "./assets/less/lessc.inc.php";
function autoCompileLess($inputFile, $outputFile)
{
    // load the cache
    $cacheFile = $inputFile . ".cache";
    if (file_exists($cacheFile)) {
        $cache = unserialize(file_get_contents($cacheFile));
    } else {
        $cache = $inputFile;
    }
    $less = new lessc;
    $newCache = $less->cachedCompile($cache);
    if (!is_array($cache) || $newCache["updated"] > $cache["updated"]) {
        file_put_contents($cacheFile, serialize($newCache));
        file_put_contents($outputFile, $newCache['compiled']);
    }
}
autoCompileLess('./assets/less/style.less', './assets/css/style.css');
// class="col-xs-6 wow fadeIn" data-wow-delay="0.3s" data-wow-duration="0.6s"
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<meta name="viewport" content="width=1200px">-->

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!--<link rel="apple-touch-icon" href="ссылка на фавикон для apple">
	<link rel="apple-touch-icon" sizes="72x72" href="ссылка на фавикон для apple">
	<link rel="apple-touch-icon" sizes="114x114" href="ссылка на фавикон для apple"> -->

    <!-- <meta property="og:image" content="ссылка на картинку для превью"> -->
    <link rel="stylesheet" href="./assets/css/style.css" type="text/css" />
</head>

<body>
    <div class="wrapper">
        <section class="sec19">
            <div class="container">
                <div class="logo">
                    <img src="./assets/img/sign-logo.svg" alt="">
                </div>
                <form action="javascript:void(0)">
                    <div class="step step-first active">
                        <div class="top-content">
                            <div class="logo-form"><img src="./assets/img/signform-logo.svg" alt=""></div>
                            <span>Увійти до кабінету Derma Club</span>
                        </div>
                        <div class="content">
                            <label>
                                Email
                                <input type="text">
                            </label>
                            <label>
                                пароль
                                <input type="text">
                            </label>
                            <div class="bottom-btn">
                                <label class="container-check">Запамʼятати мене
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                                <a href="./reset-password.php">Не памʼятаю пароль</a>
                            </div>
                            <button>Увійти</button>
                            <a href="#" class="signup">Створити аккаунт</a>
                        </div>
                    </div>
                    <div class="step step-second">
                        <div class="logo-form"><img src="./assets/img/signform-logo.svg" alt=""></div>
                        <span>Двофакторна автентифікація</span>
                        <div class="content">
                            <p>На ваш телефон <span>+380 *** ** 02</span> надіслано повідомлення з кодом підтвердження.
                                Введіть код, щоб продовжити.</p>
                            <div class="vcode" id="vcode">
                                <input type="phone" class="vcode-input" maxlength="1" id="vcode1">
                                <input type="phone" class="vcode-input" maxlength="1">
                                <input type="phone" class="vcode-input" maxlength="1">
                                <input type="phone" class="vcode-input" maxlength="1">
                                <input type="phone" class="vcode-input" maxlength="1">
                            </div>
                            <a href="#" class="resend">Надіслати код повторно</a>
                            <button>Далі</button>
                            <a href="#" class="a-sign">В мене вже є аккаунт</a>
                        </div>
                    </div>
                    <div class="step step-third">
                        <div class="logo-form"><img src="./assets/img/signform-logo.svg" alt=""></div>
                        <span>Увійти до кабінету Derma Club</span>
                        <div class="error">
                            <p>Ваш обліковий запис в процесі активації. Наша команда займається вашим запитом
                                і очікується, що ви отримаєте відповідь протягом трьох робочих днів.</p>
                        </div>
                        <div class="content">
                            <label>
                                Email
                                <input type="text">
                            </label>
                            <label>
                                пароль
                                <input type="text">
                            </label>
                            <div class="bottom-btn">
                                <label class="container-check">Запамʼятати мене
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                                <a href="./reset-password.php">Не памʼятаю пароль</a>
                            </div>
                            <button>Увійти</button>
                            <a href="#" class="signup">Створити аккаунт</a>
                        </div>
                    </div>
                </form>
                <div class="partners">
                    <img src="./assets/img/form-logo1.svg" alt="">
                    <img src="./assets/img/form-logo2.svg" alt="">
                    <img src="./assets/img/form-logo3.svg" alt="">
                </div>
            </div>
        </section>
        <?php require "modal.php" ?>
    </div>
    <!-- FOR MODAL -->
    <script src="./assets/js/classie.js"></script>
    <script src="./assets/js/modalEffects.js"></script>
    <script src="./assets/js/cssParser.js"></script>
    <!-- FOR MODAL -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="./assets/js/script.js"></script>
    <link rel="stylesheet" href="./assets/css/swiper/swiper-bundle.min.css">
    <script src="./assets/js/swiper/swiper-bundle.min.js"></script>
    <!-- КОД ЯКИЙ ПЕРЕКЛЮЧАЄ ЕТАПИ ФОРМ (ЧИСТО ДЛЯ ДЕМОНСТРАЦІЇ ТОБІ) -->
    <script>
        $('.sec19 .container form .step-first .content button').click(function () {
            $('.step').removeClass('active');
            $('.step-second').addClass('active');
        });
    </script>
    <script>
        $('.sec19 .container form .step-second .content button').click(function () {
            $('.step').removeClass('active');
            $('.step-third').addClass('active');
        });
    </script>
    <!-- КОД ЯКИЙ ПЕРЕКЛЮЧАЄ ЕТАПИ ФОРМ (ЧИСТО ДЛЯ ДЕМОНСТРАЦІЇ ТОБІ) -->
    <script>
        var vcode = (function () {
            //cache dom
            var $inputs = $("#vcode").find("input");

            //bind events
            $inputs.on('keyup', processInput);

            //define methods
            function processInput(e) {
                var x = e.charCode || e.keyCode;
                if ((x == 8 || x == 46) && this.value.length == 0) {
                    var indexNum = $inputs.index(this);
                    if (indexNum != 0) {
                        $inputs.eq($inputs.index(this) - 1).focus();
                    }
                }

                if (ignoreChar(e))
                    return false;
                else if (this.value.length == this.maxLength) {
                    $(this).next('input').focus();
                }
            }

            function ignoreChar(e) {
                var x = e.charCode || e.keyCode;
                if (x == 37 || x == 38 || x == 39 || x == 40)
                    return true;
                else
                    return false
            }

        })();
    </script>
</body>

</html>