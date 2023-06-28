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
        <header>
            <div class="container">
                <div class="block df jb">
                    <a class="logo" href="">
                        <img src="./assets/img/logo.svg" alt="">
                    </a>
                    <nav>
                        <ul>
                            <li class="point"><a href="#">Vichy</a></li>
                            <li class="point"><a href="#">La Roche-Posay</a></li>
                            <li class="point"><a href="#">Cerave</a></li>
                            <li class="point"><a href="#">Онлайн-навчання</a></li>
                            <li><a href="#">Заходи</a></li>
                            <li><a href="#">Рейтинг</a></li>
                            <li><a href="#">Новини</a></li>
                        </ul>
                    </nav>
                    <div class="header-btns">
                        <a href="#"><img src="./assets/img/personal.svg" alt=""></a>
                        <a href="#"><img src="./assets/img/search.svg" alt=""></a>
                    </div>
                    <div class="menu">
                        <!-- Кнопка Мобильного Меню -->
                        <button id="burger-menu">
                            <div class="box box_item1"></div>
                            <div class="box box_item2"></div>
                            <div class="box box_item3"></div>
                        </button>
                    </div>
                </div>
            </div>
        </header>
        <div class="help">
            <span class="md-trigger" data-modal="modal-1">Тех. підтримка</span>
        </div>