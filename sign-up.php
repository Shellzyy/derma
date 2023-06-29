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
    <div class="wrapper signup-wrap">
        <div id="mobile-menu">
            <div class="block df">
                <div class="logo">
                    <img src="./assets/img/logo-footer.svg" alt="">
                </div>
                <form action="#">
                    <input type="text" placeholder="Пошук">
                    <button><img src="./assets/img/search-icon.svg" alt=""></button>
                </form>
                <div class="accordeon">
                    <div class="accordeon__line">
                        Vichy
                    </div>
                    <div class="accordeon__content">
                        <a href="#">Про бренд</a>
                        <a href="#">Каталог продуктів</a>
                    </div>
                    <div class="accordeon__line">
                        Cerave
                    </div>
                    <div class="accordeon__content">
                        <a href="#">Про бренд</a>
                        <a href="#">Каталог продуктів</a>
                    </div>
                    <div class="accordeon__line">
                        La Roche-Posay
                    </div>
                    <div class="accordeon__content">
                        <a href="#">Про бренд</a>
                        <a href="#">Каталог продуктів</a>
                    </div>
                </div>
                <ul>
                    <li><a href=""><span>Онлайн-навчання</span></a></li>
                    <li><a href=""><span>Заходи</span></a></li>
                    <li><a href=""><span>Рейтинг</span></a></li>
                    <li><a href=""><span>Новини</span></a></li>
                </ul>
                <div class="profile">
                    <a href="#">Профіль</a>
                </div>
                <div class="help-mobile">
                    <a href="#">Технічна підтримка</a>
                </div>
            </div>
        </div>
        <div class="menu">
            <!-- Кнопка Мобильного Меню -->
            <button id="burger-menu">
                <div class="box box_item1"></div>
                <div class="box box_item2"></div>
                <div class="box box_item3"></div>
            </button>
        </div>
        <section class="sec20">
            <div class="container">
                <div class="logo">
                    <img src="./assets/img/sign-logo.svg" alt="">
                </div>
                <form action="javascript:void(0)">
                    <div class="step step-first active">
                        <div class="top-content">
                            <div class="logo-form"><img src="./assets/img/signform-logo.svg" alt=""></div>
                            <span>Створення аккаунт Derma Club</span>
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
                            <label>
                                повторний пароль
                                <input type="text">
                            </label>
                            <button>Далі</button>
                            <a href="#">В мене вже є аккаунт</a>
                        </div>
                    </div>
                    <div class="step step-second">
                        <div class="top-content">
                            <div class="logo-form"><img src="./assets/img/signform-logo.svg" alt=""></div>
                            <span>Створення аккаунт Derma Club</span>
                        </div>
                        <div class="content">
                            <label>
                                ПІБ (Українською)
                                <input type="text">
                            </label>
                            <label>
                                номер телефона
                                <input type="text">
                            </label>
                            <label>
                                Дата народження
                                <input type="text">
                            </label>
                            <button>Далі</button>
                            <a href="#">В мене вже є аккаунт</a>
                        </div>
                    </div>
                    <div class="step step-third">
                        <div class="top-content">
                            <div class="logo-form"><img src="./assets/img/signform-logo.svg" alt=""></div>
                            <span>Створення аккаунт Derma Club</span>
                        </div>
                        <div class="content">
                            <div class="choose-item">
                                <div class="choose-photo">
                                    <span>Додати фото</span>
                                </div>
                                <div class="delete-photo">Видалити фото</div>
                            </div>
                        </div>
                        <div class="content">
                            <p>Будь ласка, виберіть зображення у форматі jpeg, jpg, png або gif, розміром не більше
                                <span>5 МБ.</span></p>
                            <p><span>Ви можете пропустити цей крок.</span></p>
                            <button>Далі</button>
                            <a href="#">В мене вже є аккаунт</a>
                        </div>
                    </div>
                    <div class="step step-fourth">
                        <div class="top-content">
                            <div class="logo-form"><img src="./assets/img/signform-logo.svg" alt=""></div>
                            <span>Створення аккаунт Derma Club</span>
                        </div>
                        <div class="content">
                            <div class="selected-item">
                                <span>Ваша посада</span>
                                <div class="custom-select">
                                    <select>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="selected-item">
                                <span>Місто</span>
                                <div class="custom-select">
                                    <select>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="selected-item">
                                <span>Мережа, в якій працюєте</span>
                                <div class="custom-select">
                                    <select>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="selected-item">
                                <span>Адреса аптеки</span>
                                <div class="custom-select">
                                    <select>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                            <p>Якщо Ви не знайшли адреси Вашої аптеки в списку, зверніться по допомогу до Технічної
                                підтримки.</p>
                            <div class="bottom-btn">
                                <label class="container-check">Я ознайомився (-лася) з Політикою конфіденційності та даю
                                    згоду на обробку моїх персональних даних
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <button>Далі</button>
                            <a href="#">В мене вже є аккаунт</a>
                        </div>
                    </div>
                    <div class="step step-fifth">
                        <div class="logo-form"><img src="./assets/img/signup-il.svg" alt=""></div>
                        <span>Ласкаво просимо на навчальну платформу Derma Club!</span>
                        <p>Ваш акаунт буде активований протягом трьох робочих днів нашим торговим представником.</p>
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
        $('.sec20 .container form .step-first .content button').click(function () {
            $('.step').removeClass('active');
            $('.step-second').addClass('active');
        });
    </script>
    <script>
        $('.sec20 .container form .step-second .content button').click(function () {
            $('.step').removeClass('active');
            $('.step-third').addClass('active');
        });
    </script>
    <script>
        $('.sec20 .container form .step-third .content button').click(function () {
            $('.step').removeClass('active');
            $('.step-fourth').addClass('active');
        });
    </script>
    <script>
        $('.sec20 .container form .step-fourth .content button').click(function () {
            $('.step').removeClass('active');
            $('.step-fifth').addClass('active');
        });
    </script>
    <!-- КОД ЯКИЙ ПЕРЕКЛЮЧАЄ ЕТАПИ ФОРМ (ЧИСТО ДЛЯ ДЕМОНСТРАЦІЇ ТОБІ) -->
    <script>
        function choosePhoto(target) {
            // create new file input
            let input = document.createElement("input");
            input.setAttribute("type", "file");
            // listen to change event
            input.addEventListener("change", e => {
                showPreview(e.target.files[0], target);
            });
            // click it programmatically
            input.click();
        }

        function showPreview(file, target) {
            // check file type
            if (!file || !file.type || file.type.indexOf("image") !== 0) {
                return;
            }
            // load photo preview
            var reader = new FileReader();
            reader.onload = e => {
                // show loaded preview
                target.style.backgroundImage = `url("${e.target.result}")`;
                // add class .preview
                target.classList.add("preview");
                $('.delete-photo').addClass('active');
            };
            reader.readAsDataURL(file);
        }

        let div = document.querySelector(".choose-photo");
        div.addEventListener("click", () => choosePhoto(div));
    </script>
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