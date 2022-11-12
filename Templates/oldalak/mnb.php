<pre>
<?php
try {
$client = new SoapClient("http://localhost/szerver/mnb.wsdl");

$napiarfolyam = (array)simplexml_load_string($client->GetCurrentExchangeRates()->GetCurrentExchangeRatesResult);

$devizanemek = (array)simplexml_load_string($client->GetInfo()->GetInfoResult); 

$idointervallum = (array)simplexml_load_string($client->GetDateInterval()->GetDateIntervalResult); 
} catch (SoapFault $e) {
var_dump($e);
}
?>
</pre>
<H1>Napi árfolyam lekérdezése</h>
    <form name="devizanemvalaszto" method="POST">
      <select name="deviza" onchange="javascript:devizavalaszt.submit();">
        <option value="">Kattints</option>
        <?

       foreach($GetCurrentExchangeRatesResult as $napiarfolyam)
            {
              echo '<option value="asd">'$napiarfolyam'</option>';
            }
            ?>

      </select>
