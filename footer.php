<footer>
    <div class="container">
        <div class="logo">
            <a href="#"><img src="./assets/img/logo-footer.svg" alt=""></a>
        </div>
        <div class="footer-topnav">
            <ul>
                <li class="li-title"><a href="#">Vichy</a></li>
                <li><a href="#"><img src="./assets/img/li-instagram.svg" alt="">Instagram</a></li>
                <li><a href="#"><img src="./assets/img/li-facebook.svg" alt="">Facebook</a></li>
            </ul>
            <ul>
                <li class="li-title"><a href="#">La Roche-Posay</a></li>
                <li><a href="#"><img src="./assets/img/li-instagram.svg" alt="">Instagram</a></li>
                <li><a href="#"><img src="./assets/img/li-facebook.svg" alt="">Facebook</a></li>
            </ul>
            <ul>
                <li class="li-title"><a href="#">CeraVe</a></li>
                <li><a href="#"><img src="./assets/img/li-instagram.svg" alt="">Instagram</a></li>
                <li><a href="#"><img src="./assets/img/li-facebook.svg" alt="">Facebook</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <span>© 2023 Усі права захищені</span>
        
        <div class="footer-bottomnav">
            <ul>
                <li><a href="#">Політика конфіденційності</a></li>
                <li><a href="#">Політика Cookie</a></li>
                <li><a href="#">Налаштування cookie</a></li>
            </ul>
        </div>
    </div>
</footer>
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
<script>
    useDynamicAdapt()
</script>
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        centeredSlides: true,
        loop: true,
        spaceBetween: 19,
        autoplay: {
            delay: 5000,
        },
        pagination: {
            el: ".swiper-pagination",
        },
        breakpoints: {
            767: {
                slidesPerView: 1.45,
                spaceBetween: 19
            }
        }
    });
</script>

</body>

</html>