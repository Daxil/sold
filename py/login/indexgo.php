
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
  <link rel="stylesheet" type="text/css" href="css\css.css?<?echo time();?>">
  <link href='https://unpkg.com/css.gg@2.0.0/icons/css/search.css' rel='stylesheet'>
  <link rel="stylesheet" type="text/css" href="css\footer.css?<?echo time();?>">
  <script src="https://kit.fontawesome.com/628c8d2499.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="adoptaition\frstAdopt.css?<?echo time();?>">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
<header>
  <div class="main"style="display:inline-block;">
    <a href="indexgo.php" class="label">reused</a>

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

<main>

  <!-- Explanation in JS tab -->

  <!-- The two texts -->
  <div id="container">
    <span id="text1"></span>
    <span id="text2"></span>
  </div>

  <!-- The SVG filter used to create the merging effect -->
  <svg id="filters">
    <defs>
      <filter id="threshold">
        <!-- Basically just a threshold effect - pixels with a high enough opacity are set to full opacity, and all other pixels are set to completely transparent. -->
        <feColorMatrix in="SourceGraphic"
            type="matrix"
            values="1 0 0 0 0
                    0 1 0 0 0
                    0 0 1 0 0
                    0 0 0 255 -140" />
      </filter>
    </defs>
  </svg>

</main>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><div class="slider">
	<div class="slide-track">
		<div class="slide">
			<img src="https://avatars.mds.yandex.net/i?id=9314afba1855d9fe41ea552cc7aea99f137bfee7-9205558-images-thumbs&n=13" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://avatars.mds.yandex.net/i?id=9314afba1855d9fe41ea552cc7aea99f137bfee7-9205558-images-thumbs&n=13" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://avatars.mds.yandex.net/i?id=9314afba1855d9fe41ea552cc7aea99f137bfee7-9205558-images-thumbs&n=13" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://avatars.mds.yandex.net/i?id=9314afba1855d9fe41ea552cc7aea99f137bfee7-9205558-images-thumbs&n=13" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://avatars.mds.yandex.net/i?id=9314afba1855d9fe41ea552cc7aea99f137bfee7-9205558-images-thumbs&n=13" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://avatars.mds.yandex.net/i?id=9314afba1855d9fe41ea552cc7aea99f137bfee7-9205558-images-thumbs&n=13" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://avatars.mds.yandex.net/i?id=9314afba1855d9fe41ea552cc7aea99f137bfee7-9205558-images-thumbs&n=13" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://avatars.mds.yandex.net/i?id=9314afba1855d9fe41ea552cc7aea99f137bfee7-9205558-images-thumbs&n=13" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://avatars.mds.yandex.net/i?id=9314afba1855d9fe41ea552cc7aea99f137bfee7-9205558-images-thumbs&n=13" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://avatars.mds.yandex.net/i?id=9314afba1855d9fe41ea552cc7aea99f137bfee7-9205558-images-thumbs&n=13" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://avatars.mds.yandex.net/i?id=9314afba1855d9fe41ea552cc7aea99f137bfee7-9205558-images-thumbs&n=13" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://avatars.mds.yandex.net/i?id=9314afba1855d9fe41ea552cc7aea99f137bfee7-9205558-images-thumbs&n=13" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://avatars.mds.yandex.net/i?id=9314afba1855d9fe41ea552cc7aea99f137bfee7-9205558-images-thumbs&n=13" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://avatars.mds.yandex.net/i?id=9314afba1855d9fe41ea552cc7aea99f137bfee7-9205558-images-thumbs&n=13" height="100" width="250" alt="" />
		</div>
	</div>
</div><br><div class="slider2">
	<div class="slide-track2">
		<div class="slide">
			<img src="https://avatars.mds.yandex.net/i?id=9314afba1855d9fe41ea552cc7aea99f137bfee7-9205558-images-thumbs&n=13" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://avatars.mds.yandex.net/i?id=9314afba1855d9fe41ea552cc7aea99f137bfee7-9205558-images-thumbs&n=13" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://avatars.mds.yandex.net/i?id=9314afba1855d9fe41ea552cc7aea99f137bfee7-9205558-images-thumbs&n=13" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://avatars.mds.yandex.net/i?id=9314afba1855d9fe41ea552cc7aea99f137bfee7-9205558-images-thumbs&n=13" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://avatars.mds.yandex.net/i?id=9314afba1855d9fe41ea552cc7aea99f137bfee7-9205558-images-thumbs&n=13" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://avatars.mds.yandex.net/i?id=9314afba1855d9fe41ea552cc7aea99f137bfee7-9205558-images-thumbs&n=13" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://avatars.mds.yandex.net/i?id=9314afba1855d9fe41ea552cc7aea99f137bfee7-9205558-images-thumbs&n=13" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://avatars.mds.yandex.net/i?id=9314afba1855d9fe41ea552cc7aea99f137bfee7-9205558-images-thumbs&n=13" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://avatars.mds.yandex.net/i?id=9314afba1855d9fe41ea552cc7aea99f137bfee7-9205558-images-thumbs&n=13" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://avatars.mds.yandex.net/i?id=9314afba1855d9fe41ea552cc7aea99f137bfee7-9205558-images-thumbs&n=13" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://avatars.mds.yandex.net/i?id=9314afba1855d9fe41ea552cc7aea99f137bfee7-9205558-images-thumbs&n=13" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://avatars.mds.yandex.net/i?id=9314afba1855d9fe41ea552cc7aea99f137bfee7-9205558-images-thumbs&n=13" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://avatars.mds.yandex.net/i?id=9314afba1855d9fe41ea552cc7aea99f137bfee7-9205558-images-thumbs&n=13" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://avatars.mds.yandex.net/i?id=9314afba1855d9fe41ea552cc7aea99f137bfee7-9205558-images-thumbs&n=13" height="100" width="250" alt="" />
		</div>
	</div>
</div><br><br><br><br><br><br><br><br>

<div class="container page-wrapper">
  <div class="page-inner" >
    <h4 class="lastAdd">Последнее добавленное:</h4>
    <div class="row" style="  display:inline-block;">
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
            <span class="price">$120</span>
          </a>
        </div>
      </div>
      </a>

    </div>
    </div>
      </div>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
              <footer class="page-footer">
          <div class="container bootom">
        <div class="row">
          <div class="col-sm-8" style="font-size: 21pt; margin-left: -80px; ">Для Клиентов</div>
          <div class="col-sm-4"  style="font-size: 21pt; margin-left: 60px;" >О нас</div>
        </div>
        <div class="spis" style="margin-left: -120px;">


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
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>
