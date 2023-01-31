<?php
    $images = scandir('./img');
?>

<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Spin and Watch | Packshoty</title>

    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="/assets/css/main.css">
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        .logo{
            background: #595959;
            padding: 10px 0;
            width: 100%;
        }
        .logo img{
            width: 100%;
            max-width: 80px;
            margin: 0 auto;
            display: block;
        } 
        .content{
            width: 100%;
            max-width: 1500px;
            margin: 3rem auto;
        }

        #lightgallery {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 1rem;
            padding: 1rem;
        }

        #lightgallery .prev {
            overflow: hidden;
            height: 100%;
            aspect-ratio: 1/1;
            background-size: cover;
            background-position: center;
        }

        .title {
            padding-top: 0;            
        }

        section {
            margin-bottom: 3rem;
        }

        .text {
            max-width: 800px;
        }
        

        @media only screen and (max-width: 650px) {
            #lightgallery {
                gap: 5px;
            }

            .text {
                font-size: 1rem;
            }
        }

    </style>
    <link rel="stylesheet" href="./lightgallery/lightgallery.min.css">
    <script src="./lightgallery/lightgallery.min.js"></script>
</head>
<body>

    <div class="logo">
        <a href="/.">
            <img src="logo.svg" alt="">
        </a>
    </div>

    <div class="content">
    <section>
    <div class="container"> 
        <h2 class="title">Zdjęcia produktowe</h2>
        <p class="text">
        Dostarczamy na życzenie klienta zdjęcia przedmiotów
zarówno na wyciętym, jak i na neutralnym czy
niestandardowym tle.
        </p>
        <br>
        <p class="text">
        Dokonujemy również retuszy czy modyfikacji
wizualnych w razie potrzeby lub dodajemy
elementy graficzne.
        </p>
        <br>
        <p class="text">
        Dzięki zautomatyzowanym procesom oraz pełnej kontroli
nad światłem zapełniamy powtarzalność zdjęć oraz
szybkość realizacji.
        </p>
    </div>
    </section>
        <div id="lightgallery">
            <?php
                foreach($images as $index => $image) { 
                    if(substr($image, -4) === '.jpg') {
                        ?>
                            <a href="./img/<?= $image ?>">
                                <div class="prev" style="background-image: url('./img/<?= $image ?>')">
                                    <!-- <img alt="<?= $image ?>" src="./img/<?= $image ?>" /> -->
                                </div>
                            </a>
                        <?php
                    }
                }
            ?>
        </div>
    </div>
    <?php include '../components/footer.php' ?>

    <script type="text/javascript">
        lightGallery(document.getElementById('lightgallery')); 
    </script>
</body>
</html> 