<?php require_once '../templates/header.php' ?>
<<<<<<< Updated upstream
<?php 
    $title_collection = 'Мужчинам';
 ?>;   
=======

>>>>>>> Stashed changes
    <title>Каталог</title>
    <link rel="stylesheet" href=../css/catalog.css>
</head>
<body>
<div class="main_wrapper">
    <div class="wrapper">
        <div class="title">
<<<<<<< Updated upstream
            <h1><?php echo $title_collection?></h1>
=======
            <h1><?php echo $collection_title?></h1>
>>>>>>> Stashed changes
            <h2>Все товары</h2>
        </div>
        <div class="options">
            <?php foreach ($categories as $category); {?>
            <select name="category" id="category">
                <option value=""><?php echo $category->title?></option>
            </select>
            <?php } ?>
            <select name="size" id="size">
                <option>Размер</option>
            </select>
            <select name="cost" id="cost">
                <option>Стоимость</option>
                <option>0-1000</option>
                <option>1000-3000</option>
                <option>3000-6000</option>
                <option>6000-20000</option>
            </select>
        </div>
        <div class="all_products">
            <?php foreach ($products as $product) { ?>
                <div class="item">
                    <div class="product"><?php echo '<img src="../images/catalog/'.$product->image.'" align="left" width="217" height="253">'?></div>
                    <p class="description"><?php echo $product->title?> </p>
                    <p class="price"><?php echo $product->price?></p>
                </div>
           <?php } ?> 
        </div>
        <div class="buttons">
            <button>1</button>
            <button>2</button>
            <button>3</button>
            <button>4</button>
        </div>
    </div>
</div>

<?php require_once '../templates/footer.php' ?>