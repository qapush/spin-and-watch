<?php
$data = [
    "360" => [
        [
            "sphere" => "Accessories",
            "folder" => "car",
        ],
        [
            "sphere" => "Electronics",
            "folder" => "phone",
        ],
        [
            "sphere" => "Bathroom and kitchen",
            "folder" => "korzina",
        ],
        [
            "sphere" => "Dishes",
            "folder" => "cofee",
        ]
    ],
    "video" => [
        [
            "sphere" => "Accessories",
            "id" => "89_UHn0_HZc"
        ],
        [
            "sphere" => "Food",
            "id" => "ruKxRb3qJds"
        ],
        [
            "sphere" => "Bags",
            "id" => "PPHpssOR3V8"
        ],
        [
            "sphere" => "Bags",
            "id" => "zoRuhN2Gp3k"
        ],
        [
            "sphere" => "Food",
            "id" => "gI22nsX6sFE"
        ],
        [
            "sphere" => "Clothes",
            "id" => "lCU3gupAYeg"
        ],
        [
            "sphere" => "Bags",
            "id" => "g0ZszSHnywU"
        ],
    ],
    "photo" => [
        [
            "sphere" => "Electronics",
            "id" => "budilnik.jpg"
        ],
        [
            "sphere" => "Accessories",
            "id" => "car.jpg"
        ],
        [
            "sphere" => "Clothes",
            "id" => "NewOne_1.jpg"
        ],
        [
            "sphere" => "Food",
            "id" => "контент сайт_5.jpg"
        ],
        [
            "sphere" => "Dishes",
            "id" => "контент сайт_10.jpg"
        ],
        [
            "sphere" => "Accessories",
            "id" => "корабль 72 кадра_2.jpg"
        ],
        [
            "sphere" => "Dishes",
            "id" => "кружка с ложкой_1.jpg"
        ],
        [
            "sphere" => "Bags",
            "id" => "чемодан_3.jpg"
        ],
        [
            "sphere" => "Bags",
            "id" => "сумка спортивная_6.jpg"
        ],
        [
            "sphere" => "Bags",
            "id" => "сумка.jpg"
        ],
    ],
];

$lang = [
    "lang" => "PL",
    "url" => "/zdjecia-360/",
];

foreach ($data as $value) {
    foreach ($value as $item) {
        $unique[] = $item["sphere"];
    }
}
$sphere = array_unique($unique); //массив со Сферами для портфолио

//$dir = '../assets/img/portfolio/2d/'; // Папка с изображениями
//$files = scandir($dir); // Берём всё содержимое директории
//
//foreach ($files as $img){
//    if ($img != "." && $img != ".."){
//        $data["photo"][] = $img;
//    }
//}

?>
<!doctype html>
<html lang="pl">
<head>
<meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Spin & Watch | 360° photos and virtual tours</title>
    <meta name="description" content="📷 Packshots 💫 Spins 360° 👀 Virtual tours" />
    <link rel="preload" href="../../assets/fonts/AKZIDENZGROTESKPRO-BOLD/AkzidenzGroteskPro-BoldCn.woff2" as="font"
          type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="../../assets/fonts/AKZIDENZGROTESKPRO-REGULAR/AkzidenzGroteskPro-Regular.woff2" as="font"
          type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="../../assets/fonts/AKZIDENZGROTESKPRO-MEDIUM/AkzidenzGroteskPro-MdCn.woff2" as="font"
          type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="../../assets/fonts/AKZIDENZGROTESKPRO-REGULAR/Condensed/AkzidenzGroteskPro-Cn.woff2" as="font"
          type="font/woff2" crossorigin="anonymous">

    <link rel="apple-touch-icon" sizes="57x57" HREF="../../favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" HREF="../../favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" HREF="../../favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" HREF="../../favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" HREF="../../favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" HREF="../../favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" HREF="../../favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" HREF="../../favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" HREF="../../favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  HREF="../../favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" HREF="../../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" HREF="../../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" HREF="../../favicon/favicon-16x16.png">
    <link rel="manifest" HREF="../../favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../../favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <meta property="og:title" content="Spin & Watch" />
    <meta property="og:type" content="activity" />
    <meta property="og:url" content="https://www.spinandwatch.pl/" />
    <meta property="og:image" content="https://spinandwatch.pl/assets/img/ogimg.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:site_name" content="Spin & Watch" />
    <meta property="og:description" content="📷 Packshots 💫 Spins 360° 👀 Virtual tours" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Spin & Watch" />
    <meta name="twitter:description" content="📷 Packshots 💫 Spins 360° 👀 Virtual tours" />
    <meta name="twitter:image" content="https://spinandwatch.pl/assets/img/ogimg.png" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../../assets/css/main.css">

</head>
<body>

<aside class="sidebar">
    <div class="sidebar-content">
        <a href="../" class="logo sidebar-logo">
            <img src="../../assets/img/header/logo.svg" alt="">
        </a>
        <div class="burger df">
            <p class="burger-text">Menu</p>
            <div class="burger-content">
                <span></span>
                <span></span>
            </div>
        </div>
        <nav class="nav">
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="#about" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="#portfolio" class="nav-link">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a href="#price" class="nav-link">Pricing</a>
                </li>
                <li class="nav-item">
                    <a href="#cooperation" class="nav-link">Cooperation</a>
                </li>
                <li class="nav-item">
                    <a href="#kontakt" class="nav-link">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="../" class="nav-link">&#8592 Main page</a>
                </li>
                <!-- <li class="nav-item">
                    <a href="#customers" class="nav-link">Nasi klienci</a>
                </li> -->
                <div class="header-mesh header-mesh__menu df">
                    <!-- <div class="header-item header-address _mob">
                        <p class="header-title">Adres:</p>
                        <p class="header-text"> Wilanów, Warszawa</p>
                    </div> -->
                    <div class="header-mesh__menu_content">
                        <!-- HEADER MENU -->
                    </div>

                </div>
            </ul>
        </nav>
        <div class="sidebar-mesh">
            <a href="https://wa.me/48575794017?text=Dzień dobry" class="sidebar-mesh__link" target="_blank"><span>Whatsapp</span></a>
            <a href="https://www.facebook.com/SpinWatch-Poland-104866772201805/" class="sidebar-mesh__link target="_blank" "><span>Facebook</span></a>
            <a href="https://www.instagram.com/spinandwatch.pl/" class="sidebar-mesh__link" target="_blank"><span>Instagram</span></a>
        </div>
    </div>
</aside>

 
<?php include '../../components/header.php' ?>

<main id="objects">
    <div class="main margin-left" id="main">
        <div class="orbitvu-main">
            <script type="text/javascript" src="../../assets/img/portfolio/360/orbitvu12/orbitvu.js"></script>
            <script type="text/javascript">
                $(function() {
                    inject_orbitvu(
                        'orbitvu-main__container_360',
                        '../../assets/img/portfolio/360/orbitvu12/',
                        '',
                        {
                            ovus_folder: "../../assets/img/portfolio/360/presentations/ananas",
                            content2: "yes",
                            width: "100%",
                            height: "100%"
                        });
                });
            </script>
            <div class="orbitvu-main__container">
                <img src="../../assets/img/header/phone.png" alt="">
                <div id="orbitvu-main__container_360"></div>
            </div>
        </div>
        <div class="container">
            <div class="main-content df">

                <h1 class="slogan">360° photography</h1>
                <span class="slogan__subtitle">A modern production studio</span>
                <!-- <div class="main-presentation df">
                    <p>Obejrzyj prezentację</p>
                    <div class="main-play"></div>
                </div> -->
            </div>
        </div>
    </div>

    <section id="about" class="margin-left">
        <div class="container"> 
            <h2 class="title">About</h2>
            <p class="text">
                <span class="color-pink bold">360° photography</span> is a modern way to shocase products on webpages or social media.
                <br><br>
                This kind of presentation allows the item to be viewed from either side using interactive control.

            </p>
            <p class="sub-title">Areas of use:</p>
            <div class="area dg">
                <div class="area-item">
                    <div class="area-img"><img class="lazy" data-src="../../assets/img/about/area1.png" alt=""></div>
                    <h3 class="area-name">Clothes</h3>
                </div>
                <div class="area-item">
                    <div class="area-img"><img class="lazy" data-src="../../assets/img/about/area2.png" alt=""></div>
                    <h3 class="area-name">Electronics</h3>
                </div>
                <div class="area-item">
                    <div class="area-img"><img class="lazy" data-src="../../assets/img/about/area3.png" alt=""></div>
                    <h3 class="area-name">Tools</h3>
                </div>
                <div class="area-item">
                    <div class="area-img"><img class="lazy" data-src="../../assets/img/about/area4.png" alt=""></div>
                    <h3 class="area-name">Handbags</h3>
                </div>
                <div class="area-item">
                    <div class="area-img"><img class="lazy" data-src="../../assets/img/about/area5.png" alt=""></div>
                    <h3 class="area-name">Footwear</h3>
                </div>
                <div class="area-item">
                    <div class="area-img"><img class="lazy" data-src="../../assets/img/about/area6.png" alt=""></div>
                    <h3 class="area-name">Accessories</h3>
                </div>
            </div>
            <p class="area-more blue">
                <span></span>
                <span></span>
                <span></span>
                and many other
            </p>
        </div>
    </section>

    <section id="equipment" class="margin-left">
        <div class="container">
            <div class="equipment-item df">
                <div class="equipment-info">
                    <h2 class="title title-usage">Usage</h2>
                    <p class="text">
                        Ready content can be placed on a wide range of advertising media.
                        <br><br>
                        Great for using on social networks - from running a profile to creating stories and advertising developing bigger creations.
                    <br><br>
                        360° photos will shocase you product on the website and 360° video will will enhance your YouTube channel or Instagram account.
                    </p>
                </div>
                <div class="equipment-img df">
                    <h2 class="title title-usage _mob">Gotowa treść</h2>
                    <img class="lazy" data-src="../../assets/img/equipment/equipment2.png" alt="">
                </div>
            </div>
        </div>
    </section>

    

    <section id="portfolio" class="margin-left">
        <div class="container">
            <h2 class="title">Portfolio</h2>
            <form action="" class="filter df">
                <select class="filter-area" name="" id="">
                    <option value="">Category</option>
                    <option value="all">All</option>
                    <?php foreach ($sphere as $value) { ?>
                        <option value="<?= $value ?>"><?= $value ?></option>
                    <?php } ?>
                </select>
                <div class="filter-sort df">
                    <input class="filter-fields_type" type="radio" id="all" name="sorting" value="all" checked>
                    <label for="all">All</label>

                    <input class="filter-fields_type" type="radio" id="photo" name="sorting" value="photo">
                    <label for="photo">Images</label>

                    <input class="filter-fields_type" type="radio" id="video" name="sorting" value="video">
                    <label for="video">Video</label>

                    <input class="filter-fields_type" type="radio" id="360" name="sorting" value="360">
                    <label for="360">360°</label>
                </div>
            </form>
            <div class="goods dg">
                <?php
                foreach ($data as $data_key => $data_item) {
                    foreach ($data_item as $value) {
                        ?>
                        <?php if ($data_key == "360") { ?>
                            <div class="goods-item" data-folder="<?= $value["folder"]?>" data-sphere="<?= $value["sphere"] ?>" data-type="<?= $data_key ?>">
                                <img class="lazy" data-src="../../assets/img/portfolio/360/presentations/<?= $value["folder"]?>/preview.jpg" alt="">
                                <div class="goods-type "><span class="_<?= $data_key ?>"></span></div>
                            </div>
                        <?php } else if ($data_key == "photo") { ?>
                            <div class="goods-item" data-sphere="<?= $value["sphere"] ?>" data-type="<?= $data_key ?>">
                                <img class="lazy" data-src="../../assets/img/portfolio/2d/<?= $value["id"] ?>" alt="">
                                <div class="goods-type"><span class="_<?= $data_key ?>"></span></div>
                            </div>
                        <?php } else { ?>
                            <div class="goods-item" data-sphere="<?= $value["sphere"] ?>" data-type="<?= $data_key ?>"
                                data-video="<?= $value["id"] ?>">
                                <img class="lazy" data-src="https://img.youtube.com/vi/<?= $value["id"] ?>/maxresdefault.jpg" alt="">
                                <div class="goods-type"><span class="_<?= $data_key ?>"></span></div>
                            </div>
                        <?php } ?>
                    <?php }
                } ?>
                
            </div>
            <div class="portfolio-nav">
                <button class="slick-prevmy"><</button>
                <button class="slick-nextmy">></button>
            </div>

        </div>
    </section>

    <section id="price" class="margin-left">
        <div class="container">
            <h2 class="title">Pricing </h2>
            <div class="price-content dg">
                <div class="price-item">
                    <h3 class="price-name">Packshots</h3>
                    <!-- <p class="price-text">Zdjęcia pod różnymi kątami. <br> Od 1 do 6 klatek</p> -->
                    <p class="price-title">from 3 EUR / image</p>
                </div>
                <div class="price-item">
                    <h3 class="price-name">360° spins</h3>
                    <!-- <p class="price-text">Zdjęcie w 360 stopniach. <br> Od 24 do 72 klatek</p> -->
                    <p class="price-title">from 6 EUR / spin</p>
                </div>
                <div class="price-item">
                    <h3 class="price-name">360° video</h3>
                    <!-- <p class="price-text">Wideo w&nbsp;pełnym obrocie. <br> 360 stopni</p> -->
                    <p class="price-title">from 4 EUR / video</p>
                </div>
            </div>
        </div>
    </section>

    <section id="cooperation" class="margin-left">
        <div class="container">
            <h2 class="title">Cooperation</h2>
            <p class="sub-title sub-title__cooperation">Partnership with us is beneficial for:</p>
            <div class="cooperation-content dg">
                <div class="cooperation-item df">
                    <img class="cooperation-number lazy" data-src="../../assets/img/cooperation/01.png" alt="">
                    <p class="cooperation-text">Online <br> stores</p>
                </div>
                <div class="cooperation-item df">
                    <img class="cooperation-number lazy" data-src="../../assets/img/cooperation/02.png" alt="">
                    <p class="cooperation-text">Goods<br>producers</p>
                </div>
                <div class="cooperation-item df">
                    <img class="cooperation-number lazy" data-src="../../assets/img/cooperation/03.png" alt="">
                    <p class="cooperation-text">Web <br>developers</p>
                </div>
                <div class="cooperation-item df">
                    <img class="cooperation-number lazy" data-src="../../assets/img/cooperation/04.png" alt="">
                    <p class="cooperation-text">Photographers, <br>photo studios</p>
                </div>
                <div class="cooperation-item df">
                    <img class="cooperation-number lazy" data-src="../../assets/img/cooperation/05.png" alt="">
                    <p class="cooperation-text">Marceting<br>agencies</p>
                </div>
                <div class="cooperation-item df">
                    <img class="cooperation-number lazy" data-src="../../assets/img/cooperation/06.png" alt="">
                    <p class="cooperation-text">Goods<br>distributors</p>
                </div>
            </div>
            <div class="cooperation-bottom df">
                <p class="cooperation-info">
                <br class="_mob">We offer<br> 
                    <span><span class="blue">5 free images </span>for new clients 🎁</span>
                </p>
                <div class="btn btn-cta open-popup" data-popup="cooperation">
                    <div class="btn-bg"></div>
                    <p class="btn-text">Let's talk!</p>
                </div>
            </div>
        </div>
    </section>

    <section id="kontakt" class="margin-left">
    <div class="container">
            <h2 class="title">Contact</h2>

               <div class="photos-description__text">
                    <p class="text">
                        Need a content for the webpage? <br> Write us:
                    </p>
                    <?php include '../../components/form.php' ?>
               </div>

                

        </div>
    </section>

    <?php include '../../components/footer.php' ?>
    <div class="popup">
        <div class="popup-content">
            <div class="popup-close"></div>
            <p class="popup-text">
                Fill in the form and we'll get back to you shortly  
            </p>
            <?php include '../../components/form.php' ?>
        </div>
    </div>

    <div class="popup popup-portfolio">
        <div class="popup-content">
            <div class="popup-close"></div>
            <div class="popup-portfolio__content">
                <div id="popup-orbitbu"></div>
            </div>
        </div>
    </div>

    <div class="popup popup-presentation">
        <div class="popup-content">
            <div class="popup-close"></div>

            <div id="popup-presentation_container">
    <!--            <iframe width="640" height="390" frameborder="0" title="YouTube video player" type="text/html" src="https://www.youtube.com/embed/Up74XD5Kunk"></iframe>-->
            </div>
        </div>
    </div>
    
</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
<script src="../../assets/js/maskinput.min.js"></script>
<script src="../../assets/js/lazyload.min.js"></script>
<script src="../../assets/js/main.js"></script>

<style type="text/css">
    #bingc-phone-button svg.bingc-phone-button-circle circle.bingc-phone-button-circle-inside {
        fill: #11adbc !important;
    }
    #bingc-phone-button:hover svg.bingc-phone-button-circle circle.bingc-phone-button-circle-inside {
        fill: #11adbc !important;
    }
    #bingc-phone-button div.bingc-phone-button-tooltip {
        background: #11adbc !important;
    }
    #bingc-phone-button div.bingc-phone-button-tooltip svg.bingc-phone-button-arrow polyline {
        fill: #11adbc !important;
    }
    #bingc-passive > div.bingc-passive-overlay {
        background: #11adbc !important;
    }
    #bingc-active {
        background: #11adbc !important;
    }

</style>

</body>
</html>