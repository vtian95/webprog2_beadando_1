<?php
class Rendeles {
  
  /**
    *  @return Kategoria
    */
  public function getkategoriak(){
  
	$eredmeny = array("hibakod" => 0,
					  "uzenet" => "",
					  "kategoriak" => Array());
	
	try {
	  $dbh = new PDO('mysql:host=localhost;dbname=pizzapapa','root', '',
					array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
	  $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
  
	  $sql = "select kategorianev from pizza";
	  $sth = $dbh->prepare($sql);
	  $sth->execute(array());
	  $eredmeny['kategoriak'] = $sth->fetchAll(PDO::FETCH_ASSOC);
	}
	catch (PDOException $e) {
	  $eredmeny["hibakod"] = 1;
	  $eredmeny["uzenet"] = $e->getMessage();
	}
	
	return $eredmeny;
  }

  /**
    *  @param string $kategoria
    *  @return Pizzak
    */
  function getpizzak($kategoriak){
  
	$eredmeny = array("hibakod" => 0,
					  "uzenet" => "",
					  "kategoriak" => "",
					  "pizzak" => Array());
	
	try {
	  $dbh = new PDO('mysql:host=localhost;dbname=pizzapapa','root', '',
					array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
	  $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
  
	  $sql = "select kategorianev from pizza";
	  $sth = $dbh->prepare($sql);
	  $sth->execute(array());
	  $eredmeny['kategoriak'] = $sth->fetchAll(PDO::FETCH_ASSOC);
  
	  $sql = "select nev from pizza where kategorianev = :katagorianev";
	  $sth = $dbh->prepare($sql);
	  $sth->execute(array(":kategorianev" => $kategoriak));
	  $eredmeny['pizzak'] = $sth->fetchAll(PDO::FETCH_ASSOC);
	}
	catch (PDOException $e) {
	  $eredmeny["hibakod"] = 1;
	  $eredmeny["uzenet"] = $e->getMessage();
	}
	
	return $eredmeny;
  }
}


class Pizza {
  /**
   * @var string
   */
  public $kategoria;

  /**
   * @var string
   */
  public $pizzak;  
}

class Pizzak {
  /**
   * @var integer
   */
  public $hibakod;

  /**
   * @var string
   */
  public $uzenet;  

  /**
   * @var Marka[]
   */
  public $kategoria;  
}

class Kategoria {
  /**
   * @var integer
   */
  public $hibakod;

  /**
   * @var string
   */
  public $uzenet;  

  /**
   * @var string
   */
  public $kategoria;

  /**
   * @var string
   */
  public $markanev;  

  /**
   * @var Modell[]
   */
  public $kategoriak;  
}
?>