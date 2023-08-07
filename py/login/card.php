<?php
include 'dbconnect.php';

// Проверяем, был ли запрос на выход
if(isset($_GET['logout'])) {
    // Удаляем переменную сессии с именем пользователя
    setcookie('login', '', time() - 3600, '/');
    header("Location: ./../login.php");
  exit();
}
if(isset($_GET['main'])) {
  header("Location: indexgo.php");
  exit();
}

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css\cart.css?<?echo time();?>">
    <link rel="stylesheet" type="text/css" href="adoptaition\cardAdopt.css?<?echo time();?>">
  <link rel="stylesheet" type="text/css" href="css\css.css?<?echo time();?>">
    <link rel="stylesheet" type="text/css" href="css\inCard.css?<?echo time();?>">
    <link rel="stylesheet" type="text/css" href="css\footer.css?<?echo time();?>">
  <link href='https://unpkg.com/css.gg@2.0.0/icons/css/search.css' rel='stylesheet'>
  <script src="https://kit.fontawesome.com/628c8d2499.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="adoptaition\frstAdopt.css?<?echo time();?>">
<link rel="shortcut icon" href="img/icon.png" type="image/x-icon" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
<header>
  <div class="main"style="display:inline-block;">
    <a href="indexgo.php" class="label">reused.</a>

      <input type="text" name="" value="" placeholder="Поиск"class="search" ></input>
    <a href="#" class="sell">Продать</a>
    <a href="#" class="bar">Купить</a>
    <a href="profile.php" class="sell">Профиль</a>
      <a href="?logout=1" class="bar">Выйти</a>

  </div>
    <nav id="menu" style="position:inherit">
             <div class="menu-item">
                 <div class="menu-text">
                     <a href="#">Бренды</a>
                 </div>
                 <div class="sub-menu triple" style="margin-top:-70px;">

                     <div class="box">
                         <h3>Частые</h3>
                         <a href="#">Adidas</a>
                         <a href="#">Nike</a>
                         <a href="#">Levi's</a>
                         <a href="#">Evisu</a>
                     </div>
                     <div class="box">
                         <h3>Популярные сейчас</h3>
                         <a href="#">Chrome hearts</a>
                         <a href="#">Bape</a>
                         <a href="#">Stone Island</a>
                         <a href="#">Nike</a>
                     </div>


                 </div>
             </div>
             <div class="menu-item highlight">
                 <div class="menu-text">
                     <a href="#">Мужское</a>
                 </div>
                <div class="sub-menu triple" style="margin-top:-70px;">

                     <div class="box">
                         <h3>Your Journey</h3>
                         <a href="#">Get Started</a>
                         <a href="#">Learn the Basics</a>
                         <a href="#">Get Advanced</a>
                         <a href="#">Start Teaching</a>
                     </div>
                     <div class="box">
                         <h3>Your Tools</h3>
                         <a href="#">Turbo Editor</a>
                         <a href="#">Time Stopper</a>
                         <a href="#">Brain Enhancer</a>
                         <a href="#">Network Maker</a>
                     </div>

                 </div>
             </div>
             <div class="menu-item highlight">
                 <div class="menu-text">
                     <a href="#">Женское</a>
                 </div>
                <div class="sub-menu triple" style="margin-top:-70px;">

                     <div class="box">
                         <h3>Your Journey</h3>
                         <a href="#">Get Started</a>
                         <a href="#">Learn the Basics</a>
                         <a href="#">Get Advanced</a>
                         <a href="#">Start Teaching</a>
                     </div>
                     <div class="box">
                         <h3>Your Tools</h3>
                         <a href="#">Turbo Editor</a>
                         <a href="#">Time Stopper</a>
                         <a href="#">Brain Enhancer</a>
                         <a href="#">Network Maker</a>
                     </div>

                 </div>
             </div>
             <div class="menu-item">
                 <div class="menu-text">
                     <a href="#">Коллекции</a>
                 </div>
                 <div class="sub-menu triple" style="margin-top:-70px;">

                     <div class="box">
                         <h3>Your Journey</h3>
                         <a href="#">Get Started</a>
                         <a href="#">Learn the Basics</a>
                         <a href="#">Get Advanced</a>
                         <a href="#">Start Teaching</a>
                     </div>
                     <div class="box">
                         <h3>Your Tools</h3>
                         <a href="#">Turbo Editor</a>
                         <a href="#">Time Stopper</a>
                         <a href="#">Brain Enhancer</a>
                         <a href="#">Network Maker</a>
                     </div>

                 </div>
             </div>
             <div id="sub-menu-container">
                 <div id="sub-menu-holder">
                     <div id="sub-menu-bottom">

                     </div>
                 </div>
             </div>
         </nav>

  </div>
</header>
<br><br><br>
<main>
  <div class="CardPhoto">
    <div class="container">
    <div class="row row-cols-2" >

      <div class="col">
        <div class="mainPhoto">
          <img src="https://media.endclothing.com/media/f_auto,q_auto:eco,w_768/prodmedia/media/catalog/product/1/9/19-02-2021_SI_RU21S-6894-LPO-111111_1_1.jpg" class="topPhoto"alt="">

        </div>
        <div class="semePhoto">
          <a href="#" class="block" onclick="event.preventDefault();">
          <div class=" dopPhoto">
             <img src="https://media.endclothing.com/media/f_auto,q_auto:eco,w_768/prodmedia/media/catalog/product/1/9/19-02-2021_SI_RU21S-6894-LPO-111111_1_1.jpg" width="96px" height="100px" alt="">
           </div></a>
          <a href="#" class="block" onclick="event.preventDefault();">
          <div class=" dopPhoto">
             <img src="https://media.endclothing.com/media/f_auto,q_auto:eco,w_768/prodmedia/media/catalog/product/1/9/19-02-2021_SI_RU21S-6894-LPO-111111_2_1.jpg" width="96px" height="100px" alt="">
           </div></a>
           <a href="#" class="block" onclick="event.preventDefault();">
           <div class=" dopPhoto">
              <img src="https://media.endclothing.com/media/f_auto,q_auto:eco,w_768/prodmedia/media/catalog/product/1/9/19-02-2021_SI_RU21S-6894-LPO-111111_3_1.jpg" width="96px" height="100px" alt="">
            </div></a>
            <a href="#" class="block" onclick="event.preventDefault();">
            <div class=" dopPhoto">
               <img src="https://media.endclothing.com/media/f_auto,q_auto:eco,w_768/prodmedia/media/catalog/product/1/9/19-02-2021_SI_RU21S-6894-LPO-111111_4_1.jpg" width="96px" height="100px" alt="">
             </div></a>
             <a href="#" class="block" onclick="event.preventDefault();">
             <div class=" dopPhoto">
                <img src="https://media.endclothing.com/media/f_auto,q_auto:eco,w_768/prodmedia/media/catalog/product/1/9/19-02-2021_SI_RU21S-6894-LPO-111111_5_1.jpg" width="96px" height="100px" alt="">
              </div></a>
              <a href="#" class="block" onclick="event.preventDefault();">
              <div class=" dopPhoto">
                 <img src="https://media.endclothing.com/media/f_auto,q_auto:eco,w_768/prodmedia/media/catalog/product/1/9/19-02-2021_SI_RU21S-6894-LPO-111111_m7_1.jpg" width="96px" height="100px" alt="">
               </div></a>

        </div>
        </div>
      <div class="col cardtext" >
        <div class="mainText">
          <h2 class="NameItem">Geobasket</h2>
          <h4 class="brend">Rick Owens</h4>
          <div class="legitButton">
          <a href="#" class="infoLegit">
          <div class="row row-cols-2 legitBlok" style="margin-left: auto;
          margin-right: auto;">
            <div class="col stiker">
              <img src="https://cdn2.iconfinder.com/data/icons/emoji-pixel/64/2-smile-1024.png" alt="" class="smail">
            </div>

            <div class="col LegitText">
              <h5 class="verdict">LEGIT</h5>
            </div>
            <div class="leftInfo" style="width: 100%;">
              <h6>Станадртный легит проходит каждая вещь, но она не дает 100% гарантию оригинал , а лишь помогает отсеить очевидные подделки</h6>
            </div>
          </div>
          </a>
            </div>
          <br>
          <div class="otherData">
            <div class="adres">
              <h5>Адрес:</h5>
              <h6 class="adres">Санкт-Петербург, Серебристый б-р, 34к1</h2>
            </div>
            <br><br>
            <div class="haract">
              <h5>Харакатеристики</h5>
              <h6>Состояние: Отличное</h6>
              <h6>Раземер: М</h6>
              <h6>Цвет: Белый</h6>
              <h6>Item Id: 555016-300</h6>
            </div>
            <br><br>
          </div>
          <div class="Oforml">


<span class="bton">Оформить заказ</span>
</div>
        </div>
      </div>
    </div>
    <br>
    <div class="cardtextAdopt" >
      <div class="mainText">
        <h2 class="NameItem">Geobasket</h2>
        <h4 class="brend">Rick Owens</h4>
        <div class="legitButton">
        <a href="#" class="infoLegit">
        <div class="row row-cols-2 legitBlok" style="margin-left: auto;
        margin-right: auto;">
          <div class="col stiker">
            <img src="https://cdn2.iconfinder.com/data/icons/emoji-pixel/64/2-smile-1024.png" alt="" class="smail">
          </div>

          <div class="col LegitText">
            <h5 class="verdict">LEGIT</h5>
          </div>
          <div class="leftInfo" style="width: 100%;">
            <h6>Станадртный легит проходит каждая вещь, но она не дает 100% гарантию оригинал , а лишь помогает отсеить очевидные подделки</h6>
          </div>
        </div>
        </a>
          </div>
        <br>
        <div class="otherData">
          <div class="adres">
            <h5>Адрес:</h5>
            <h6 class="adres">Санкт-Петербург, Серебристый б-р, 34к1</h2>
          </div>
          <br><br>
          <div class="haract">
            <h5>Харакатеристики</h5>
            <h6>Состояние: Отличное</h6>
            <h6>Раземер: М</h6>
            <h6>Цвет: Белый</h6>
            <h6>Item Id: 555016-300</h6>
          </div>
          <br><br>
        </div>
        <div class="Oforml">


<span class="bton">Оформить заказ</span>
</div>
      </div>
    </div><br><br><br><br>
    <div class="opisanie">
      <h5>Описание:</h5>
      <h6 class="textOpisanie"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h6>
    </div>
  </div>
  </div>


    </div>

  </div>
  </div>

</main>
<br><br><br><br><br><br><br><br>
<div id="slider-container">
  <div id="slider-track">
    <a href="card.php" style="text-decoration: none;" class="cardAll">
    <div class="el-wrapper"style="margin:40px">
      <div class="box-up">
        <img class="img" src="http://code.slicecrowd.com/labs/4/images/t-shirt.png" alt="">
        <div class="img-info">
          <div class="info-inner">
            <span class="p-name">I feel like Pablo</span>
            <span class="p-company">Yeezy</span>
          </div>

        </div>
      </div>
      <div class="box-down">
        <div class="h-bg">
          <div class="h-bg-inner"></div>
        </div>

        <a class="cart" href="card.php">
          <span class="price"style="margin-left: 20px;">$120</span>
        </a>
      </div>
    </div>
    </a>
    <a href="card.php" style="text-decoration: none;" class="cardAll">
    <div class="el-wrapper"style="margin:40px">
      <div class="box-up">
        <img class="img" src="http://code.slicecrowd.com/labs/4/images/t-shirt.png" alt="">
        <div class="img-info">
          <div class="info-inner">
            <span class="p-name">I feel like Pablo</span>
            <span class="p-company">Yeezy</span>
          </div>

        </div>
      </div>
      <div class="box-down">
        <div class="h-bg">
          <div class="h-bg-inner"></div>
        </div>

        <a class="cart" href="card.php">
          <span class="price"style="margin-left: 20px;">$120</span>
        </a>
      </div>
    </div>
    </a>
    <a href="card.php" style="text-decoration: none;" class="cardAll">
    <div class="el-wrapper"style="margin:40px">
      <div class="box-up">
        <img class="img" src="http://code.slicecrowd.com/labs/4/images/t-shirt.png" alt="">
        <div class="img-info">
          <div class="info-inner">
            <span class="p-name">I feel like Pablo</span>
            <span class="p-company">Yeezy</span>
          </div>

        </div>
      </div>
      <div class="box-down">
        <div class="h-bg">
          <div class="h-bg-inner"></div>
        </div>

        <a class="cart" href="card.php">
          <span class="price"style="margin-left: 20px;">$120</span>
        </a>
      </div>
    </div>
    </a>
    <a href="card.php" style="text-decoration: none;" class="cardAll">
    <div class="el-wrapper"style="margin:40px">
      <div class="box-up">
        <img class="img" src="http://code.slicecrowd.com/labs/4/images/t-shirt.png" alt="">
        <div class="img-info">
          <div class="info-inner">
            <span class="p-name">I feel like Pablo</span>
            <span class="p-company">Yeezy</span>
          </div>

        </div>
      </div>
      <div class="box-down">
        <div class="h-bg">
          <div class="h-bg-inner"></div>
        </div>

        <a class="cart" href="card.php">
          <span class="price"style="margin-left: 20px;">$120</span>
        </a>
      </div>
    </div>
    </a>
    <a href="card.php" style="text-decoration: none;" class="cardAll">
    <div class="el-wrapper"style="margin:40px">
      <div class="box-up">
        <img class="img" src="http://code.slicecrowd.com/labs/4/images/t-shirt.png" alt="">
        <div class="img-info">
          <div class="info-inner">
            <span class="p-name">I feel like Pablo</span>
            <span class="p-company">Yeezy</span>
          </div>

        </div>
      </div>
      <div class="box-down">
        <div class="h-bg">
          <div class="h-bg-inner"></div>
        </div>

        <a class="cart" href="card.php">
          <span class="price"style="margin-left: 20px;">$120</span>
        </a>
      </div>
    </div>
    </a>
    <a href="card.php" style="text-decoration: none;" class="cardAll">
    <div class="el-wrapper"style="margin:40px">
      <div class="box-up">
        <img class="img" src="http://code.slicecrowd.com/labs/4/images/t-shirt.png" alt="">
        <div class="img-info">
          <div class="info-inner">
            <span class="p-name">I feel like Pablo</span>
            <span class="p-company">Yeezy</span>
          </div>

        </div>
      </div>
      <div class="box-down">
        <div class="h-bg">
          <div class="h-bg-inner"></div>
        </div>

        <a class="cart" href="card.php">
          <span class="price"style="margin-left: 20px;">$120</span>
        </a>
      </div>
    </div>
    </a>
    <a href="card.php" style="text-decoration: none;" class="cardAll">
    <div class="el-wrapper"style="margin:40px">
      <div class="box-up">
        <img class="img" src="http://code.slicecrowd.com/labs/4/images/t-shirt.png" alt="">
        <div class="img-info">
          <div class="info-inner">
            <span class="p-name">I feel like Pablo</span>
            <span class="p-company">Yeezy</span>
          </div>

        </div>
      </div>
      <div class="box-down">
        <div class="h-bg">
          <div class="h-bg-inner"></div>
        </div>

        <a class="cart" href="card.php">
          <span class="price"style="margin-left: 20px;">$120</span>
        </a>
      </div>
    </div>
    </a>
    <a href="card.php" style="text-decoration: none;" class="cardAll">
    <div class="el-wrapper"style="margin:40px">
      <div class="box-up">
        <img class="img" src="http://code.slicecrowd.com/labs/4/images/t-shirt.png" alt="">
        <div class="img-info">
          <div class="info-inner">
            <span class="p-name">I feel like Pablo</span>
            <span class="p-company">Yeezy</span>
          </div>

        </div>
      </div>
      <div class="box-down">
        <div class="h-bg">
          <div class="h-bg-inner"></div>
        </div>

        <a class="cart" href="card.php">
          <span class="price"style="margin-left: 20px;">$120</span>
        </a>
      </div>
    </div>
    </a>
    <a href="card.php" style="text-decoration: none;" class="cardAll">
    <div class="el-wrapper"style="margin:40px">
      <div class="box-up">
        <img class="img" src="http://code.slicecrowd.com/labs/4/images/t-shirt.png" alt="">
        <div class="img-info">
          <div class="info-inner">
            <span class="p-name">I feel like Pablo</span>
            <span class="p-company">Yeezy</span>
          </div>

        </div>
      </div>
      <div class="box-down">
        <div class="h-bg">
          <div class="h-bg-inner"></div>
        </div>

        <a class="cart" href="card.php">
          <span class="price"style="margin-left: 20px;">$120</span>
        </a>
      </div>
    </div>
    </a>
    <a href="card.php" style="text-decoration: none;" class="cardAll">
    <div class="el-wrapper"style="margin:40px">
      <div class="box-up">
        <img class="img" src="http://code.slicecrowd.com/labs/4/images/t-shirt.png" alt="">
        <div class="img-info">
          <div class="info-inner">
            <span class="p-name">I feel like Pablo</span>
            <span class="p-company">Yeezy</span>
          </div>

        </div>
      </div>
      <div class="box-down">
        <div class="h-bg">
          <div class="h-bg-inner"></div>
        </div>

        <a class="cart" href="card.php">
          <span class="price"style="margin-left: 20px;">$120</span>
        </a>
      </div>
    </div>
    </a>
    <a href="card.php" style="text-decoration: none;" class="cardAll">
    <div class="el-wrapper"style="margin:40px">
      <div class="box-up">
        <img class="img" src="http://code.slicecrowd.com/labs/4/images/t-shirt.png" alt="">
        <div class="img-info">
          <div class="info-inner">
            <span class="p-name">I feel like Pablo</span>
            <span class="p-company">Yeezy</span>
          </div>

        </div>
      </div>
      <div class="box-down">
        <div class="h-bg">
          <div class="h-bg-inner"></div>
        </div>

        <a class="cart" href="card.php">
          <span class="price"style="margin-left: 20px;">$120</span>
        </a>
      </div>
    </div>
    </a>
    <a href="card.php" style="text-decoration: none;" class="cardAll">
    <div class="el-wrapper"style="margin:40px">
      <div class="box-up">
        <img class="img" src="http://code.slicecrowd.com/labs/4/images/t-shirt.png" alt="">
        <div class="img-info">
          <div class="info-inner">
            <span class="p-name">I feel like Pablo</span>
            <span class="p-company">Yeezy</span>
          </div>

        </div>
      </div>
      <div class="box-down">
        <div class="h-bg">
          <div class="h-bg-inner"></div>
        </div>

        <a class="cart" href="card.php">
          <span class="price"style="margin-left: 20px;">$120</span>
        </a>
      </div>
    </div>
    </a>



  </div>
  <button id="prev-button">
    <img src="img/left.png" alt="">
  </button>
  <button id="next-button">
    <img src="img/right.png" alt="">
  </button>
</div>
<br><br><br>
        <footer class="page-footer">
    <div class="container bootom">
  <div class="row">
    <div class="col-sm-8" style="font-size: 21pt; margin-left: -80px; "></div>
    <div class="col-sm-4"  style="font-size: 21pt; margin-left: 60px;" ></div>
  </div>
  <div class="spis" style="margin-left:0px;">


  <div class="row">
    <div class="col-sm-8"> <a href="#" style="text-decoration: none; color: black;">Помощь и контакты</a> </div>

    <div class="col-sm-4"> <a href="#" style="text-decoration: none; color: black;">Наша История</a> </div>
  </div>
  <div class="row">
    <div class="col-sm-8"> <a href="#" style="text-decoration: none; color: black;">Вопросы и ответы</a> </div>

    <div class="col-sm-4"> <a href="#" style="text-decoration: none; color: black;">Вакансии</a> </div>
  </div>
  <div class="row">
    <div class="col-sm-8"> <a href="#" style="text-decoration: none; color: black;">Заказы и доставка</a> </div>

    <div class="col-sm-4"> <a href="#" style="text-decoration: none; color: black;">Для продавцов</a> </div>
  </div>
  <div class="row">
    <div class="col-sm-8"> <a href="#" style="text-decoration: none; color: black;">Цены и оплата</a> </div>

    <div class="col-sm-4"> <a href="#" style="text-decoration: none; color: black;">Политика конфедициальности</a> </div>
  </div>
  <div class="row">
    <div class="col-sm-8"> <a href="#" style="text-decoration: none; color: black;">Гарантии</a> </div>

    <div class="col-sm-4"> <a href="#" style="text-decoration: none; color: black;">Условия пользования</a> </div>
  </div>
    </div>
</div>
  </footer>
</body>

    <script src="js.js?<?echo time();?>"></script>
    <script type="text/javascript">
    function slider() {
        const sliderContainer = document.getElementById('slider-container');
        const sliderTrack = document.getElementById('slider-track');

        const images = sliderTrack.getElementsByTagName('img');
        const imageWidth = images[0].clientWidth;

        let currentIndex = 0;
        let slideInterval;

        function startSlide() {
            slideInterval = setInterval(nextSlide, 3000);
        }

        function nextSlide() {
            currentIndex++;
            if (currentIndex >= images.length) {
                currentIndex = 0;
            }
            sliderTrack.style.transform = `translateX(${-imageWidth * currentIndex}px)`;
        }

        function prevSlide() {
            currentIndex--;
            if (currentIndex < 0) {
                currentIndex = images.length - 1;
            }
            sliderTrack.style.transform = `translateX(${-imageWidth * currentIndex}px)`;
        }

        function swipeSlide(direction) {
            if (direction === 'left') {
                nextSlide();
            } else if (direction === 'right') {
                prevSlide();
            }
        }

        sliderContainer.addEventListener('mouseenter', () => {
            clearInterval(slideInterval);
        });

        sliderContainer.addEventListener('mouseleave', () => {
            startSlide();
        });

        const prevButton = document.getElementById('prev-button');
        const nextButton = document.getElementById('next-button');

        prevButton.addEventListener('click', () => {
            prevSlide();
        });

        nextButton.addEventListener('click', () => {
            nextSlide();
        });

        let touchStartX = 0;
        let touchEndX = 0;

        sliderContainer.addEventListener('touchstart', (event) => {
            touchStartX = event.touches[0].clientX;
        });

        sliderContainer.addEventListener('touchend', (event) => {
            touchEndX = event.changedTouches[0].clientX;
            const swipeDistance = touchEndX - touchStartX;
            if (swipeDistance > 0) {
                swipeSlide('right');
            } else if (swipeDistance < 0) {
                swipeSlide('left');
            }
        });

        startSlide();
    }
    slider();
    </script>
    <script>
    // Получаем все элементы с классом dopPhoto
    var dopPhotos = document.querySelectorAll('.dopPhoto');

    // Перебираем все элементы dopPhoto
    for (var i = 0; i < dopPhotos.length; i++) {
      // Добавляем обработчик события "клик"
      dopPhotos[i].addEventListener('click', function() {
        // Получаем ссылку на изображение внутри текущего элемента dopPhoto
        var imgSrc = this.querySelector('img').src;

        // Находим элемент с классом mainPhoto
        var mainPhoto = document.querySelector('.mainPhoto');

        // Находим и сохраняем ссылку на изображение внутри mainPhoto
        var mainImg = mainPhoto.querySelector('img');

        // Меняем ссылку на изображение внутри mainPhoto на выбранное изображение
        mainImg.src = imgSrc;
      });
    }
  </script>
  <script>
  // Получаем все элементы с классом dopPhoto
var dopPhotos = document.querySelectorAll('.dopPhoto');

// Перебираем все элементы dopPhoto
for (var i = 0; i < dopPhotos.length; i++) {
// Добавляем обработчик события "клик"
dopPhotos[i].addEventListener('click', function() {
  // Получаем ссылку на изображение внутри текущего элемента dopPhoto
  var imgSrc = this.querySelector('img').src;

  // Находим элемент с классом mainPhoto
  var mainPhoto = document.querySelector('.mainPhoto');

  // Находим и сохраняем ссылку на изображение внутри mainPhoto
  var mainImg = mainPhoto.querySelector('img');

  // Меняем ссылку на изображение внутри mainPhoto на выбранное изображение
  mainImg.src = imgSrc;
});
}
  </script>
    <script  src="card.js?<?echo time();?>"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>
