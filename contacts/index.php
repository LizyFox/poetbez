<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контактная информация");
$APPLICATION->SetPageProperty("h1", "Контактная информация");

?>
<div class="container-lg">
  <h1 class="h1"><?$APPLICATION->ShowProperty('h1')?></h1>

  <p>Обратитесь к нашим специалистам и получите профессиональную консультацию по услугам нашего банка.</p>

  <p>Вы можете обратиться к нам по телефону, по электронной почте или договориться о встрече в нашем офисе. Будем рады помочь вам и ответить на все ваши вопросы. </p>

  <h2>Телефоны</h2>

  <ul>
    <li>Телефон/факс: 
      <ul>
        <li><b>(495) 212-85-06</b> </li>
      </ul>
    </li>

    <li>Телефоны: 
      <ul>
        <li><b>(495) 212-85-07</b> </li>
      
        <li><b>(495) 212-85-08</b> </li>
      </ul>
    </li>
  </ul>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>