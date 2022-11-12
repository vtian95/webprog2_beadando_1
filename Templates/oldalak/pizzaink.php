<title>Pizzáink</title>
  </head>

  <?php 
  $client = new SoapClient('http://localhost/szerver/pizzak.wsdl');
  $eredmeny = $client->getkategoriak();

  if(isset($_POST['kategoriak']) && trim($_POST['kategoriak']) != "")
    $pizzak = $client->getpizzak($_POST['kategorianev']);
  ?>
    
  <body>
    <h1>Válasszon kategóriát</h1>
    <form name="pizzavalaszt" method="POST">
      <select name="pizza" onchange="javascript:pizzavalaszt.submit();">
        <option value="">Kattintson</option>
        <?php
          foreach($kategoriak->kategoriak as $kategoria)
          {
            echo '<option value="'.$kategoria['nev'].'">'.$kategoria['nev'].'</option>';
          }
        ?>
      </select>
    </form>
  </body>                  