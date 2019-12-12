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
      <form action="">
        <input class="search_input" id="number" type="text" ng-model="number" maxlength="3" placeholder="Номер кабинета">
        <input class="search_button" type="submit" value="Найти">
      </form>
    </div>
  </header>

  <section class="main">
    <div class="container">

      <!-- вывод -->
      <h3>Кабинет - {{number}}</h3>

      <div class="box">
        <dl>
          <dt>комп </dt>
          <dd>
            <h5>IP-аддрес:</h5> <b>234</b>
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
     
        <dl>
          <dt>комп </dt>
          <dd>
            <h5>IP-аддрес:</h5> <b>5555555</b>
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

 
      </div>



      <!-- ввод  -->

      <form  class=" form" action="">
        <label class="label" for="">Компьютер</label> <br>
          <b>IP - адрес</b><input name="pc-ip" class="input" type="text"> <br>
          <b>Инвентарный</b> <input name="pc-in" class="input"  type="text"> <br>
          <b>Дополнительно</b> <input name="pc-dop" class="input" type="text"><br><br>
      
        <label class="label" for="">Монитор</label> <br>
        <b>IP - адрес</b><input class="input" type="text"> <br>
        <b>Инвентарный</b> <input class="input" type="text"> <br>
        <b>Сирийный номер</b> <input class="input" type="text"> <br>
        <b>Дополнительно</b> <input class="input" type="text"><br> <br>
   
        <label class="label" for="">Принтер</label> <br>
        <b>IP - адрес</b><input class="input" type="text"> <br>
        <b>Инвентарный</b> <input class="input" type="text"> <br>
        <b>Сирийный номер</b> <input class="input" type="text"> <br>
        <b>Дополнительно</b> <input class="input" type="text">

        <input type="submit" value="Отправить"/>
      </form>


      <!-- кнопка добавить  -->
      <input class="add" type="button" value="Добавить">
    </div>
  </section>




 


  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script>
  <script src="./js/main.js"></script>
</body>

</html>