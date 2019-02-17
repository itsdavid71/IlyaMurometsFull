<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IlyaMuromets</title>
    <!-- <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/media.css"> -->
    <?php wp_head(); ?>

</head>

<body>   
    <div class="nav-menu-mobile">
        <a href="<?=(is_front_page() ? "#body" : home_url());?>" class="nav-menu-mobile-item">Главная</a>
        <a href="<?=(is_front_page() ? "#company" : home_url().'/#company');?>" class="nav-menu-mobile-item about-mobile">О нас</a>
        <a href="#" class="nav-menu-mobile-item services-mobile">Услуги
        
        </a>
        
        <a href="<?=(is_front_page() ? "#partners" : home_url().'/#partners');?>" class="nav-menu-mobile-item partners-mobile">Партнерам</a>
        <a href="<?=(is_front_page() ? "#contacts" : home_url().'/#contacts');?>" class="nav-menu-mobile-item contacts-mobile">Контакты</a>
        <div class="nav-menu-mobile-list">
            <div class="nav-menu-mobile-list-field">
                <a href="lefard" class="list-item">Lefard</a>
                <a href="aurumcrystal" class="list-item">Aurum – Crystal</a>
                <a href="bohemia" class="list-item">Italiana Crystal BOHEMIA</a>
            </div>
        </div>
    </div>
    <div class="container">
        <header>
            <div class="nav-menu center">
                <a href="<?=(is_front_page() ? "#body" : home_url());?>">Главная</a>
                <a href="<?=(is_front_page() ? "#company" : home_url().'/#company');?>">О нас</a>
                <span class="services_btn">Услуги
                    <div class="hide--block">
                        <div class="nav-menu-list">
                            <div class="nav-menu-list-field">
                                <a href="lefard" class="list-item">Lefard</a>
                                <a href="aurumcrystal" class="list-item">Aurum – Crystal</a>
                                <a href="bohemia" class="list-item">Crystal BOHEMIA</a>
                            </div>
                        </div>
                    </div>
                </span>
                <a href="<?=(is_front_page() ? "#partners" : home_url().'/#partners');?>">Партнерам</a>
                <a href="<?=(is_front_page() ? "#contacts" : home_url().'/#contacts');?>">Контакты</a>
                
            </div>
        </header>

    </div>