<style>
  .jumbotron {
    background-color: #222121;
    color: white;
    padding: 10px 10px;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .container-kozel {
    padding: 1px 1px;
  }
  .bg-grey {
    background-color: "#f6f6f6";
  }
  .bg-black{
    background-color:"#222121";
  }

  .carousel-control.right, .carousel-control.left {
   background-image: none;
   color: #f4511e;
  }
  .carousel-indicators li {
    border-color: #f4511e;
  }
  .carousel-indicators li.active {
    background-color: #f4511e;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
  }
  </style>
  
<div class="jumbotron text-center">
  <h1>Pizza Papa</h1> 
  <p>A pizza nekünk örök! De inkább kóstolják meg Önök!</p>
  <p><img src="./Galéria/pidza.PNG" alt="pidza" ></p>

 <div class="container-kozel text-center">
  <h2>AMIT A LEGFONTOSABBNAK TARTUNK</h2>
  <h4>és ebből nem engedünk.....</h4>
  <br>

  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart"></span>
      <h4>Szívvel és lélekkel</h4>
      <p>Minden pizzánkat a legnagyobb odaadással készítjük.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf"></span>
      <h4>Fenntarthatóság</h4>
      <p>Az étterem ügyel a fenntarthatóságra.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate"></span>
      <h4>Minőségi alapanyagok</h4>
      <p>Csak a legjobb, válogatott olasz alapanyagok a tányéron.</p>
    </div>
    </div>
    </div>

<!-- Container (Portfolio Section) -->

<div class="container-fluid text-center bg-grey">
  <h2>Rólunk mondták:</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"Egyszerűen elképesztően finom! Nincs jobb olasz pizza Magyarországon!"<br><span>Cserepes Virág 2022.10.11</span></h4>
      </div>
      <div class="item">
        <h4>"Egy szó: olasz-olasz-olasz! Hoppá..ez három szó, de egy szóval mégse írható le!"<br><span>Ebéd Elek 2022.09.10</span></h4>
      </div>
      <div class="item">
        <h4>"Aki teheti ne hagyja ki...a pizza szerelmeseinek kötelező!"<br><span>Riz Ottó 2022.09.01</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Előző</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Következő</span>
    </a>
  </div>


<!-- Container (Portfolio Section) -->
<div class="container-fluid text-center bg-grey">
  <h2>Képek a pizzéra életéből</h2><br>
  <h4>Amikre és akikre büszkék vagyunk</h4>
  <div class="row text-center">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="./Galéria/pidza1.jpg" alt="Giuseppe gyúr" width="400" height="300">
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="./Galéria/pidza2.jpg" alt="Marco dobja" width="400" height="300">
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="./Galéria/pidza3.jpg" alt="Kis Don Corleone pizzát süt" width="400" height="300">
      </div>
    </div>
  </div>