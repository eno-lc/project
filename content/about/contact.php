<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jura&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../style/contact.css">
    <script src="../../scripts/register.js"></script>

    <title>Contact us</title>
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
    <main>
        <center>
            <div class="container">
                <h1>Contact Us</h1>
                <div class="form">
                <form action="https://formsubmit.co/7cde251adfab7c5057d90cf1dc2251ec " method="POST">
                    <input type="text" placeholder="Name" id="name" name="name">
                    <input type="email" placeholder="Email" id="email" name="email">
                    <input type="text" placeholder="Your message" id="message" name="message">
                    <button type="submit" name="submit" class="sendBtn">Send message</button> 
                </form>
                </div>
        </center>
    </main>
</body>

</html>
