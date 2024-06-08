<?php require_once ('./header.php'); ?>

<section>
    <div id="shop-hero">
        <div class="shop-text">
            <h2>Quality Gear From Trusted Brands</h2>
            <h3>For Pros And Beginners</h3>
        </div>
    </div>
</section>

<section>
    <div class="marquee">
        <ul class="marquee-content">
            <li><img class="cort" src="assets/brandImages/Cort-logo-white.png" alt=""></li>
            <li><img src="assets/brandImages/ernie_bg.png" alt=""></li>
            <li><img src="assets/brandImages/fender_bg.png" alt=""></li>
            <li><img src="assets/brandImages/fishman_bg.png" alt=""></li>
            <li><img src="assets/brandImages/Ibanez_bg.png" alt=""></li>
            <li><img src="assets/brandImages/martin-bg.png" alt=""></li>
            <li><img src="assets/brandImages/kala_bg.png" alt=""></li>
            <li><img src="assets/brandImages/shure-bg.png" alt=""></li>
            <li><img src="assets/brandImages/strymon_bg.png" alt=""></li>

            <li><img class="cort" src="assets/brandImages/Cort-logo-white.png" alt=""></li>
            <li><img src="assets/brandImages/ernie_bg.png" alt=""></li>
            <li><img src="assets/brandImages/fender_bg.png" alt=""></li>
            <li><img src="assets/brandImages/fishman_bg.png" alt=""></li>
            <li><img src="assets/brandImages/Ibanez_bg.png" alt=""></li>
        </ul>
    </div>
</section>

<section>
    <div id="shop">
        <div id="loader"></div>
            <div id="my-categories-82711721"></div>
            <div>
                <script data-cfasync="false" type="text/javascript" src="https://app.business.shop/script.js?82711721&data_platform=code&data_date=2022-12-06" charset="utf-8">

                </script>
                <script type="text/javascript"> xCategoriesV2
                    ("id=my-categories-82711721"); </script>
            </div>
            <div id="my-store-82711721"></div>
            <div>
                <script data-cfasync="false" type="text/javascript" src="https://app.business.shop/script.js?82711721&data_platform=code&data_date=2022-12-06" charset="utf-8"></script><script type="text/javascript"> xProductBrowser("categoriesPerRow=3","views=grid(7,1) list(60) table(60)","categoryView=grid","searchView=list","id=my-store-82711721");</script>
            </div>
    </div>

    <style>
        #loader {
            display: block;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
            border: 8px solid rgba(249, 183, 0, 0.2); /* Lighter color for border */
            border-top: 8px solid #F9B700; /* Color of the loader */
            border-radius: 50%;
            width: 100px;
            height: 100px;
            animation: spin 1s linear infinite, color-change 5s ease-in-out infinite alternate;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        @keyframes color-change {
            0% { border-top-color: #F9B700; }
            50% { border-top-color: #FF5733; }
            100% { border-top-color: #F9B700; }
        }
    </style>

    <script>
        window.addEventListener('load', function() {
            document.getElementById('loader').style.display = 'none';
        });
    </script>
</section>



<?php require_once ('./footer.php'); ?>