<?php

require_once('../repository/repository.php"');
$repository = new Repository();
$books = $repository->getAllBooks();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jura&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../style/contact.css">
    <link rel="stylesheet" href="../../style/book.css">

    <script src="../../scripts/register.js"></script>

    <title>Books</title>
</head>

<body>
    
    <header>
        <div class="landing-header-item1">
            <img id="item1-child1" src="../../img/landingImages/comic-book.png" alt="iComic Logo">
            <h1 id="item1-child2">iComic</h1>
        </div>
        <section class="landing-header-item2">
            <a class="item2-child" href="../landing/landing.php">
                <button class="item2-child">Home</button>
             </a>
             <a class="item2-child" href="../about/about.php">
                <button class="item2-child">About</button>
             </a>
            <button class="item2-child">Contact</button>
            <input type="text" placeholder="Search..." id="search">
        </section>
    </header>

    <div class="title">
    <h1 class="title2">A large variety of books</h1>
    </div>

    <div class="books">
            <div class="boxes">
                <?php
                
            foreach($books as $book){
                        echo "
                <div class='box' style='width:340px; padding-top:10px; '>
                    <img src='img/$book[images]'>
                    <div class='product-desc'>
                        <div class='emri-cmimi'>
                            <p class='name'>$book[emri]</p>
                            <p class='price'>$$book[cmimi]</p>

                        </div>
                        <a href='#'><input class='buy-button' type='button' value='Buy Now'></a>
                    </div>
                    </div>
                    ";
                }
                ?> 

</body>

</html>

