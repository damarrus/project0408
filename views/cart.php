
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="../lib/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
    <h2>Ваша корзина</h2>
    <h3>Товары резервируются наограниченное время</h3>

    <table>
  <tr>
    <th>Фото</th>
    <th>Наименование</th> 
    <th>Размер</th>
    <th>Количество</th>
    <th>Стомость</th>
    <th>Удалить</th>  
  </tr>
  <hr>
  <tr>
    <td>
        <div class="product_foto">
            <img src="../images/product/" alt="">
        </div>
    </td>
    <td>
        <h4>Куртка синяя</h4>
        <p>арт: 123412</p>
    </td>
    <td>39</td>
    <td><input type="number" name="" id="" placeholder="1" value="1"></td>
    <td>3900 рубю</td>
    <td><i class="fas fa-times"></i></td>
  </tr>
  <tr>
    <td>
            <div class="product_foto">
                <img src="../images/product/" alt="">
            </div>
    </td>
    <td>
        <h4>Кеды серые</h4>
        <p>арт: 123412</p>
    </td>
    <td>39</td>
    <td><input type="number" name="" id="" placeholder="1" value="1"></td>
    <td>3900 рубю</td>
    <td><i class="fas fa-times"></i></td>
  </tr>
  <tr>
    <td>
        <div class="product_foto">
            <img src="../images/product/" alt="">
        </div>
    </td>
    <td>
        <h4>Джинсы голубые</h4>
        <p>арт: 123412</p>
    </td>
    <td>39</td>
    <td><input type="number" name="" id="" placeholder="1" value="1"></td>
    <td>3900 рубю</td>
    <td><i class="fas fa-times"></i></td>
    
  </tr>
</table>
<div>
    <h3>Итого:</h3>
    <h3>125000</h3>
    <h3>руб.</h3>
</div>
<hr>
<form action="dostavka">
</form>
<hr>
<form action="pay">

</form>


    </div>



<script src="../lib/jquery-3.3.1.js"></script>
<script src="../lib/popper.min.js"> </script>        
<script src="../lib/bootstrap.min.js"> </script>

<script src="main.js"></script>   
</body>
</html>