<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
    <div><input type="search" name="search" placeholder="Поиск"></div>
    <br>
    <p>Введите имя:</p>
    <div><input type="text" name="username" placeholder="Введите имя"></div>
    <br>
    <p>Введите пароль:</p>
    <div><input type="password" name="userpass" value=""></div>
    <div>
      <p>  <input type="radio" name="beer" value="lager"/> Светлое пиво  </p>
    </div>
    <div>
        <p>  <input type="radio" name="beer2" value="dark"/> Тёмное пиво  </p>
      </div>
      <div>
        <p>  <input type="checkbox" name="car" value="yes"/> Наличие авто  </p>
        <p>  <input type="checkbox" name="car2" value="yes"/> Наличие авто2  </p>
        <p>  <input type="checkbox" name="car3" value="yes"/> Наличие авто3  </p>
        <p>  <input type="checkbox" name="car4" value="yes"/> Наличие авто4  </p>
      </div>
      <div><p><input type="file" name="foto"></p></div>
      <div> 
          <p>Введите текст:</p>
          <textarea type="text" name="foto" placeholder="Введите текст"></textarea>
        </div>
      <br>
      <div>
        <p>Выпадающий список:</p>
          <select name="color" id="#">
          <option selected value="red">Красный</option>
          <option value="yellow">Желтый</option>
          <option value="blue">Голубой</option>
        </select>
   </div>
   <br>
      <div>
    <button type="submit">Отправить</button>
    <button type="reset">Очистить</button>
</div>
    </form>

<br>
<p>Свойство background:</p>
    <div class="fon1"></div>
    <br>
    <div class="fon2"></div>

    
</body>
</html>