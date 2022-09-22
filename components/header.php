<?php 

    $phone_text = '';
    $cta_text = '';
    $data_poput_text = '';
    $home_url = '';

    
    switch ($lang['lang']) {
        case "ENG":
            $phone_text .= 'Telefon';
            $cta_text .= 'Skontaktuj się z nami';
            $data_poput_text .= 'cooperation';
            $home_url .= '/';
            break;
        case "PL":
            $phone_text .= 'Phone';
            $cta_text .= 'Contact us';
            $data_poput_text .= 'cooperration-eng';
            $home_url .= '/en';
            break;
    }



?>

<header class="header">
    <div class="container">
        <div class="header-content dg">
            <a href="<?= $home_url ?>" class="logo logo-mobile">
                <img src="https://www.spinandwatch.pl/assets/img/header/logo.svg" alt="">
            </a>
            <div class="header-item header-mail">
                <p class="header-title">Email:</p>
                <a href="mailto:hello@spinandwatch.pl" class="header-text _phone _main">hello@spinandwatch.pl</a>
            </div>
            <div class="header-item header-phone">
                <p class="header-title"><?php echo $phone_text; ?>:</p>
                <a href="tel:+48575794017" class="header-text _phone _main">+48 575 794 017</a>
            </div>

            <div class="cta_lang">
                <div class="btn btn-header open-popup" data-popup="<?php echo $data_poput_text; ?>">
                    <div class="btn-bg"></div>
                    <p class="btn-text"><?php echo $cta_text; ?></p>
                </div>
                

            
                <div class="language">
                    <a href="<?php echo $lang['url'] ?>"><?php echo $lang['lang'] ?></a>
                </div>
            </div>
        </div> 
    </div>
</header>