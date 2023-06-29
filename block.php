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
        <section class="sec22">
            <div class="container">
                <div class="logo">
                    <img src="./assets/img/sign-logo.svg" alt="">
                </div>
                <form action="javascript:void(0)">
                    <div class="step step-first active">
                        <div class="top-content">
                            <a href="./sign-in.php">Повернутись до авторизації</a>
                        </div>
                        <div class="content">
                            <span>Доступ до акаунту тимчасово обмежено. Будь ласка, надайте необхідні відповіді для
                                подальшого продовження:</span>
                            <p>Чи продаються у вашій аптеці товари від брендів Ля Рош-Позе, Віши або Сераве?</p>
                            <div class="radio-btns">
                                <label class="container-radio">Так, продаються
                                    <input type="radio" checked="checked" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container-radio">Ні, не продаються
                                    <input type="radio" checked="checked" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <button>Далі</button>
                        </div>
                    </div>
                    <div class="step step-second">
                        <div class="top-content">
                            <a href="./sign-in.php">Повернутись до авторизації</a>
                        </div>
                        <div class="content">
                            <p>Будь ласка, надайте свою актуальну електронну пошту, щоб ми могли з вами зв'язатися.</p>
                            <label>
                                Email
                                <input type="text">
                            </label>
                        </div>
                        <div class="content">
                            <p>Будь ласка, вкажіть мережу, місто та повну адресу аптеки, де ви зараз працюєте.</p>
                            <label>
                                Місто
                                <input type="text">
                            </label>
                            <label>
                                Мережа, в якій працюєте
                                <input type="text">
                            </label>
                            <label>
                                Адреса аптеки
                                <input type="text">
                            </label>
                            <button>Далі</button>
                        </div>
                    </div>
                    <div class="step step-third">
                        <div class="top-content">
                            <a href="./sign-in.php">Повернутись до авторизації</a>
                        </div>
                        <div class="content">
                            <span class="title">Вибачте!</span>
                            <p>На жаль, Ви не зможете зареєструватися на платформі, оскільки продукція брендів Ля
                                Рош-Позе, СераВе, Віши ще не представлена у Вашій аптеці.</p>
                        </div>
                    </div>
                    <div class="step step-fourth">
                        <div class="top-content">
                            <a href="./sign-in.php">Повернутись до авторизації</a>
                        </div>
                        <div class="content">
                            <img src="./assets/img/block-il.svg" alt="">
                            <span class="title">Дякуємо за ваше звернення</span>
                            <p>Ми проведемо перевірку наданої Вами інформації та повідомимо Вам про результат протягом 7
                                робочих днів.</p>
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
        $('.sec22 .container form .step-first .content button').click(function () {
            $('.step').removeClass('active');
            $('.step-second').addClass('active');
        });
    </script>
    <script>
        $('.sec22 .container form .step-second .content button').click(function () {
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