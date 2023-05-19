<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NIKE AIR FORCE 1 LOW CR7 BY YOU</title>
    <link rel="icon" href="img/logo1.ico" type="images/x-icon">
    <link rel="stylesheet" href="css/styleproduct.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>


  <section id="product">

    <a class="navbar-brand" href="index.php">
        <img src="img/logoblack.png" alt="logo">
      </a>
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item1">
            <a class="nav-link smooth-scroll" aria-current="page" href="index.php#new">Новинки</a>
          </li>
          <li class="nav-item2">
            <a class="nav-link" href="#">Мужчины</a>
          </li>
          <li class="nav-item3">
            <a class="nav-link" href="#">Женщины</a>
          </li>
          <li class="nav-item4">
            <a class="nav-link" href="#">Дети</a>
          </li>
          <li class="nav-item5">
            <a class="nav-link" href="#">Распродажи</a>
          </li>
          <li class="nav-item6">
            <a class="nav-link" href="index.php#collection">Коллекции</a>
          </li>
        </ul>
      </div>
    </div>
</nav>
<a class="korzina" href="korzina.html">
    <img class="korzina" src="img/korzinablue.png" alt="korzina">
  </a>
  <img class="heart" src="img/border_heart.png" alt="heart">

    <p class="unisex">Унисекс обувь   /Nike Air Force 1 Low CR7 By You</p>
    <img class="main" src="img/airforce/air_force.jpg" alt="airforce">
    <p class="model">Модель  DD3746-991</p>
    <h1 class="name">Nike Air Force 1 Low CR7 By You</h1>
    <p class="price">204 €</p>
    <img class="black_red" src="img/airforce/air_force.jpg" alt="br">
    <img class="gold" src="img/airforce/gold.jpg" alt="gold">
    <img class="wb" src="img/airforce/wb.jpg" alt="wb">
    <img class="white" src="img/airforce/white_force.jpg" alt="white">
    <img class="red" src="img/airforce/red.jpg" alt="red">
    <img class="black" src="img/airforce/black.jpg" alt="black">
    <p class="razmer">Выбери размер</p>
    <a class="razmer" href="#">Расчет моего размера</a>

    <div class="rectangle39"></div>
    <p class="razmer39">39</p>
    <div class="rectangle405"></div>
    <p class="razmer405">40.5</p>
    <div class="rectangle41"></div>
    <p class="razmer41">41</p>
    <div class="rectangle415"></div>
    <p class="razmer415">41.5</p>
    <div class="rectangle42"></div>
    <p class="razmer42">42</p>
    <div class="rectangle425"></div>
    <p class="razmer425">42.5</p>
    <div class="rectangle43"></div>
    <p class="razmer43">43</p>
    <div class="rectangle435"></div>
    <p class="razmer435">43.5</p>

    <button class="korzina">Добавить в корзину</button>

    <a href="#" class="soob">Сообщить о наличии моего размера</a>

    
    

  </section>

  <section id="description">

    <img class="br_verh" src="img/br_verh.jpg" alt="br_verh">
    <img class="br_niz" src="img/br_niz.jpg" alt="br_niz">


    <p class="hdescr">Описание товара</p>
    <p class="descr">
      Кроссовки Nike Air Force 1 Low CR7 By You дополнены
      деталями в безупречном вкусе Криштиану Роналду. 
      Это уникальная версия AF1. Выбери материал верха, 
      например гладкую или мятую кожу, серебристые и золотые накладки
      с зеркальным хромированным покрытием, а также тщательно продуманные детали. 
      Если любишь сдержанную роскошь или суперпрокачанный дизайн, 
      то эти кроссовки будут именно такими, какими захочешь ты.
    </p>

    <div class="new">
      <h1 class="new">Тебе может понравиться</h1>


      <?php foreach ($arrayAll[3] as $data) {?>

        <?php if ($data["discount"] == "1") {
            // echo 'yes';
            $discount = '<span class="skidka">СКИДКА</span>';

        } else {
          // echo 'no';
        $discount = "";
        }?>

        <?php if ($data["new"] == "1") {
          $new = '<span>НОВИНКА</span>';
        } else {
          $new = "";
        }?>


        
        <div class="<?=$data["class"]?>">
          <a href="#collection">
            <img src="<?=$data["image_path"]?>" alt="lebron">
          </a>
          
          <p class="new"><?=$new?></p>
          
          <p class="through"><?=$data["price"]?></p>
          <p class="price"><?=$data["discount_price"].$discount?></p>
          <!-- <p class="new"><?=$discount?></p> -->
          <p class="name"><?=$data["name"]?></p>
          <p class="colors"><?=$data["colors"]?></p>
          <!-- <img class="border_heart" src="img/border_heart.png" alt="border_heart"> -->
        </div>
      <?php } ?>
      
      <!-- <div class="rectangle1">
        <a href="#">
          <img src="img/lebron.jpg" alt="lebron">
        </a>
        <p>156 €</p>
        <p class="new">НОВИНКА</p>
        <p class="name">LEBRON 18 LOW “NEON LIGHTS”</p>
        <p class="colors">Доступно +1 цвет</p>
        <img class="pink_heart" src="img/pink_heart.png" alt="pink_heart">
      </div>

      <div class="rectangle2">
        <a href="#">
          <img src="img/zm950.jpg" alt="zm950">
        </a>
        <p><s>165 €</s></p>
          <p class="price">116 €</p>
          <p class="skidka">СКИДКА</p>
        
        <p class="name">NIKE AIR MAX ZM950</p>
        <p class="colors">Доступно +1 цвет</p>
        <img class="border_heart" src="img/border_heart.png" alt="border_heart">
      </div>

      <div class="rectangle3">
        <a href="#">
          <img src="img/air270.jpg" alt="air270">
        </a>
        <p>148 €</p>
        <p class="name">NIKE AIR MAX 270</p>
        <p class="colors">Доступно +5 цветов</p>
        <img class="border_heart" src="img/border_heart.png" alt="border_heart">
      </div>

      <div class="rectangle4">
        <a href="#">
          <img src="img/airmax97.jpg" alt="airmax97">
        </a>
        <p>165 €</p>
        <p class="name">NIKE AIR MAX 97</p>
        <img class="pink_heart" src="img/pink_heart.png" alt="pink_heart">
      </div> -->

    </div>
  </section>

  <!-- <section id="footer">

    <div class="footer">
      <h1 class="one">ПОМОЩЬ И ИНФОРМАЦИЯ</h1>
      <a class="help" href="#footer">Помощь</a>
      <a class="otsleditj" href="#footer">Отследить заказ</a>
      <a class="dostavka" href="#footer">Доставка и возврат</a>
      <a class="oplata" href="#footer">Способы оплаты</a>
      <a class="svjazj" href="#footer">Связаться с нами</a>

      <h1 class="two">О NIKE</h1>
      <a class="news" href="#footer">Новости</a>
      <a class="vakansii" href="#footer">Вакансии</a>
      <a class="investors" href="#footer">Инвесторам</a>
      <a class="policies" href="#footer">Политика</a>

      <h1 class="three">ПОКУПАТЕЛЯМ</h1>
      <a class="shops" href="#footer">Ближайшие магазины</a>
      <a class="sub" href="#footer">Подписаться на рассылку</a>
      <a class="gifts" href="#footer">Подарочные сертификаты</a>

      <img class="copyright" src="img/copyright.png" alt="copyright">
      <p class="copyright">Nike, Inc.,2023 Все права защищены</p>
      <img src="img/gps.png" alt="gps" class="gps">
      <p class="gps">Эстония</p>
      <a href="#footer"><img class="fb" src="img/facebook.png" alt="facebook"></a>
      <a href="#footer"><img class="instagram" src="img/inst.png" alt="inst"></a>
      <a href="#footer"><img class="twitter" src="img/twitter.png" alt="twitter"></a>

    </div>
    

  </section> -->
  <script src="scripts.js"></script>
<!-- </body>
</html> -->