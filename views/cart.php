
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
    <div id="zagolovok">      
        <h2>Ваша корзина</h2>
        <h4>Товары резервируются наограниченное время</h4>
    </div>
    <div id="cart">
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
    </div>
    <div id="summ">
        <span><h3>Итого: 12500 руб.</h3></span>
    </div>
    <div id="zigzag">
        <svg viewBox="0 0 311.1 14.4">
        <polyline points="0.7,13.7 13.4,0.8 25.3,12.8 37.2,0.8 49,12.8 60.9,0.8 72.8,12.8 84.7"></polyline>
        </svg>
    </div>
<hr>
    <form action="dostavka" method="post">
        <h2>Адрес доставки</h2>
        <h5>Все поля обязательны для заполнения</h5>
        <h4>Выбирете вариант доставки</h4>
        <select name="delivery" id="">
            <option value="">Курьерская служба - 500 руб</option>
            <option value="">Сомовывоз</option>
            <option value="">Почта России</option>
        </select>
        <br>
        Имя
        <input type="text" name="" id="">
        Фамилия
        <input type="text" name="" id="">
        <br>
        Адресс
        <input type="text" name="" id="">
        <br>
        Город
        <input type="text" name="" id="">
        Индекс
        <input type="number" name="" id="">
        <br>
        Телефон
        <input type="tel" name="" id="">
        Е-MAIL
        <input type="email" name="" id="">
            <div id="zigzag">
                <svg viewBox="0 0 311.1 14.4">
                <polyline points="0.7,13.7 13.4,0.8 25.3,12.8 37.2,0.8 49,12.8 60.9,0.8 72.8,12.8 84.7"></polyline>
                </svg>
            </div>
        <h2>Варианты оплаты</h2>
        <h5>Все поля обязательны для заполнения</h5>
        <div>
            <h3>Итого:</h3>
            <h3>125000</h3>
            <h3>руб.</h3>
        </div>
        <select name="pay" id="">
            <option value="">Банковская карта</option>
            <option value="">Счет</option>
            <option value="">Наличные при получении</option>
        </select>
        <br>
        <input type="submit" value="Заказать">

    </form>



</div>



<script src="../lib/jquery-3.3.1.js"></script>
<script src="../lib/popper.min.js"> </script>        
<script src="../lib/bootstrap.min.js"> </script>

<script src="main.js"></script>   
</body>
</html>