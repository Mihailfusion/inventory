<!DOCTYPE html>
<html lang="en" ng-app="inventoryApp">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./css/style.css">
  <title>Document</title>
</head>

<body ng-controller="inventoryCtrl">
  <header>
    <h1>
      Инвентаризация

    </h1>
    <div class="search">
      <form action="index.php" method="POST">
        <input class="search_input" id="number" type="text" ng-model="number" name="roomN" maxlength="4" placeholder="Номер кабинета">
        <input class="search_button" name="buttonN" type="submit" value="Найти">
      </form>
    </div>
  </header>

  <section class="main">
    <div class="container">

      <!-- вывод -->
       <h3>Кабинет № <?php echo $numRoom; ?></h3>
<div class='box'>

 <?php
 $a = $_POST['roomN'];
 
  
 if(isset( $_POST['buttonN']))
    {
        $a = $_POST['roomN'];

        
        // тут ваш код
    
$mysqli = new mysqli("localhost", "root", "", "inventory1");

/* проверка соединения */
if ($mysqli->connect_errno) {
    printf("Соединение не удалось: %s\n", $mysqli->connect_error);
    exit();
}



$mysqli->set_charset("utf8");
$sql = "SELECT * FROM room, device, deevicetypee where \n"
    . "  device.roomID = room.ID and\n"
    . "  device.deviceTypeID = deevicetypee.ID and\n"
    . "  room.number = $a";
    // . "  partNumberID = 1";

if ($result = $mysqli->query($sql)) {

    /* извлечение ассоциативного массива */
    while ($row = $result->fetch_assoc()) {

  printf(
          "<dl><dt>компютер</dt>
          <dd><h5>IP-аддрес:</h5> <b> "                   .$row['number'] . 
          "</b></dd><dd><h5>Инвентарный номер:</h5> <b> " .$row['compIp'] .
          "</b></dd><dd><h5>Дополнительно:</h5> <b>"      .$row['description'] .
          "</b></dd><dt>монитор</dt>
          <dd><h5>Инвентарный номер:</h5> <b> "           .$row['monIn'] .
          "</b></dd><dd><h5>Cирийный номер:</h5> <b>"     .$row['monSn'] .
          "</b></dd><dd><h5>Модель:</h5> <b>"             .$row['monMod'] .
          "</b></dd><dd><h5>Дополнительно:</h5> <b>"      .$row['compD'] .
          "</b></dd><dt>принтер</dt>
          <dd><h5>Инвентарный номер:</h5> <b>"            .$row['printIn'] .
          "</b></dd><dd><h5>Cирийный номер::</h5> <b>"    .$row['printSn'] .
          "</b></dd><dd><h5>Модель:</h5> <b>"             .$row['printSn'] .
          "</b></dd><dd><h5>Дополнительно:</h5> <b>"      .$row['printSn'] .
          "</b></dd></dl>"
        );
       global $numRoom;
       $numRoom = $row['number'];
      };
    

    /* удаление выборки */
    $result->free();
};

/* закрытие соединения */
$mysqli->close();
};
?>

 </div>



      <!-- <div class="box">
        <dl>
          <dt>комп </dt>
          <dd>
            <h5>IP-аддрес:</h5> <b></b>
          </dd>
          <dd>
            <h5>Инвентарный номер:</h5> <b>234</b>
          </dd>
          <dd>
            <h5>Дополнительно:</h5> <b>234</b>
          </dd>
          <dt>монитор</dt>
          <dd>
            <h5>Инвентарный номер:</h5> <b>234</b>
          </dd>
          <dd>
            <h5>Cирийный номер:</h5> <b>234</b>
          </dd>
          <dd>
            <h5>Модель:</h5> <b>234</b>
          </dd>
          <dd>
            <h5>Дополнительно:</h5> <b>234</b>
          </dd>
          <dt>принтер</dt>
          <dd>
            <h5>Инвентарный номер:</h5> <b>234</b>
          </dd>
          <dd>
            <h5>Сирийный номер:</h5> <b>234</b>
          </dd>
          <dd>
            <h5>Модель:</h5> <b>234</b>
          </dd>
          <dd>
            <h5>Дополнительно:</h5> <b>234</b>
          </dd>
        </dl>
     
 
      </div> -->



      <!-- ввод  -->

      <form   action="index.php" method="POST">
        <label class="label" for="">Компьютер</label> <br>
          <b>IP - адрес</b><input name="pc-ip" class="input" type="text"> <br>
          <b>Инвентарный</b> <input name="pc-in" class="input"  type="text"> <br>
          <b>Дополнительно</b> <input name="pc-dop" class="input" type="text"><br><br>
        
          <label class="label" for="">Монитор</label> <br>
          <b>Инвентарный</b><input name="monIn" class="input" type="text"> <br>
          <b>Cирийный номер</b> <input name="monSn" class="input" type="text"> <br>
          <b>Модель</b> <input name="monMod" class="input" type="text"> <br>
          <b>Дополнительно</b> <input name="monDop" class="input" type="text"><br> <br>
    
          <label class="label" for="">Принтер</label> <br>
          <b>IP - адрес</b><input name="printIp" class="input" type="text"> <br>
          <b>Инвентарный</b> <input name="printIn" class="input" type="text"> <br>
          <b>Сирийный номер</b> <input name="printSn" class="input" type="text"> <br>
          <b>Дополнительно</b> <input name="printDop" class="input" type="text">

        <input type="submit" value="Отправить"/>
      </form>


      <!-- кнопка добавить  -->
      <input class="add" type="button" value="Добавить">
    </div>
  </section>




  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script>
  <script src="./js/main.js"></script>









<li>Подпункт 1</li>
<li>Подпункт 2</li>
<li>Подпункт 3</li>



</body> 

</html>