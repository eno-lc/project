<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/landing.css">
    <link rel="stylesheet" href="../../style/slider.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jura&display=swap" rel="stylesheet">
    <title>iComic</title>
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
            <a class="item2-child" href="../logIn/logIn.php">
               <button class="item2-child">Login</button>
            </a>
            <a class="item2-child2" href="../login/register.php">
            <button type="submit" class="item2-child2" href="../auth/auth.html">Register</button>
            </a>
        </section>
    </header>
<h1 class="main-headline">Welcome to iComic</h1>
<script>
var i = 0;
var images = [];
var time = 3000;

images[0] = '../../img/landingImages/image8.png';
images[1] = '../../img/landingImages/image11.png';
images[2] = '../../img/landingImages/image1.png';

function changeImg(){ 
    document.slide.src = images [i];
    if(i < images.length - 1){
        i++;
    }else{
        i = 0;
    }

    setTimeout("changeImg()", time);
}
window.onload = changeImg;
    </script>


  <section class="main">
        
<br>
<img name="slide" width="1400" height="500" id="sliderTop" style="margin:auto;" >
        <div class="main-second-container">
            <h1 class="main-headline">iComic</h1>
            <div class="second-container-paragraph">
                <p id="paragraphs">
                    This is a page about Comic Book lovers, through this page you can search your favorite comic books <br>
                    and read them , save them and continue where you left, we offer even the vintage comic books from the 70's, 80's and 90's.<br>
                    This webpage was created by comic book lover who devoted their time to create the most enjoyable reading web for comic book lovers.
                </p>
            </div>
            <button id="toScroll">Scroll to Vintages</button>
        </div>
        <div class="third-entrance">
            <h1 class="main-headline">Start your comic book series with iComic</h1>
        </div>
            <section class="main-item-holder">
                <div class="third-item1">
                    <img src="../../img/landingImages/spiderman-art-lines-dark-wallpaper.jpg" alt="" class="thirdImg" style="align-self: center;">
                    <div class="book-info">
                        <div class="book-center">
                            <h1 class="book-title">Spider-Man</h1>
                        </div>
                            <p class="description">Spider-Man, comic-book character who was the original everyman superhero. In Spider-Man’s first story, in Marvel Comics’ Amazing Fantasy, no. 15 (1962), American teenager Peter Parker, a poor sickly orphan, is bitten by a radioactive spider. As a result of the bite, he gains superhuman strength, speed, and agility along with the ability to cling to walls. Writer Stan Lee and illustrator Steve Ditko created Spider-Man as a filler story for a canceled anthology series. At the time, a teenage lead hero was unheard of in comic books. However, young readers responded powerfully to Peter Parker, prompting an ongoing title and, ultimately, a media empire, including video games, several animated and one live-action television series, a live-action film franchise, and a Broadway musical.</p>
                            <div>
                                <button class="order-button">Get yours now</button>
                                <a href="#" class="redirect">Check all of our Spider-Man's Series </a>
                            </div> 
                    </div>
                </div>
                 <div class="fourth-item1">
                    <img src="../../img/landingImages/batman.jpg" alt="" class="thirdImg">
                    <div class="book-info">
                        <div class="book-center">
                            <h1 class="book-title">Batman</h1>
                        </div>
                            <p class="description">Batman is a superhero who appears in American comic books published by DC Comics. The character was created by artist Bob Kane and writer Bill Finger, and debuted in the 27th issue of the comic book Detective Comics on March 30, 1939. In the DC Universe continuity, Batman is the alias of Bruce Wayne, a wealthy American playboy, philanthropist, and industrialist who resides in Gotham City. Batman's origin story features him swearing vengeance against criminals after witnessing the murder of his parents Thomas and Martha, a vendetta tempered with the ideal of justice. He trains himself physically and intellectually, crafts a bat-inspired persona, and monitors the Gotham streets at night. Kane, Finger, and other creators accompanied Batman with supporting characters, including his sidekick Robin; allies Alfred Pennyworth, James Gordon, and Catwoman; and foes such as the Penguin, the Riddler, Two-Face, and his archenemy, the Joker.</p>
                            <div>
                                <button class="order-button">Get yours now</button>
                                <a href="#" class="redirect">Check all of our Batman Series </a>
                            </div>
                    </div>
                </div>
                <div class="third-item1">
                    <img src="../../img/landingImages/robotica.jpg" alt="" class="thirdImg" style="align-self: center;">
                    <div class="book-info">
                        <div class="book-center">
                            <h1 class="book-title">Cyborg</h1>
                        </div>
                            <p class="description">Victor Stone is the son of Silas Stone and Elinore Stone, scientists who use him as a test subject for various intelligence enhancement projects. While these treatments are ultimately successful and Victor's IQ subsequently grows to genius levels, he grows to resent his treatment.
                                Victor strikes up a friendship with Ron Evers, a young miscreant who leads him into trouble with the law. This is the beginning of a struggle in which Victor strives for independence, engaging in pursuits of which his parents disapprove, such as athletics and abandoning his studies. Victor's association with underage criminals leads him down a dark path in which he is often injured, but he still lives a "normal" life in which he is able to make his own decisions. However, this rebellious path does not bury Victor's conscience considering that he refuses to participate in Evers' grandiose plans of racially motivated terrorism....</p>
                            <div>
                                <button class="order-button">Get yours now</button>
                                <a href="#" class="redirect">Check our Cyborg Comic Books</a>
                            </div> 
                    </div>
                </div>
                <div class="fourth-item1">
                    <img src="../../img/landingImages/ironman.png" alt="" class="thirdImg">
                    <div class="book-info">
                        <div class="book-center">
                            <h1 class="book-title">Batman</h1>
                        </div>
                            <p class="description">A wealthy American business magnate, playboy, philanthropist, inventor and ingenious scientist, Anthony Edward "Tony" Stark suffers a severe chest injury during a kidnapping. When his captors attempt to force him to build a weapon of mass destruction, he instead creates a mechanized suit of armor to save his life and escape captivity. Later, Stark develops his suit, adding weapons and other technological devices he designed through his company, Stark Industries. He uses the suit and successive versions to protect the world as Iron Man. Although at first concealing his true identity, Stark eventually publicly reveals himself to be Iron Man.</p>
                            <div>
                                <button class="order-button">Get yours now</button>
                                <a href="#" class="redirect">Check all of our Batman Series </a>
                            </div>
                    </div>
                </div>
            </section>
    </section>
    <footer>
        <div class="footer-item1">
            <h4 id="footer-title">Ready to get your comic book?</h4>
            <p id="footer-paragraph">Get your first book at iComic and recieve 20% discount for your first purchase</p>
            <div class="footer-div">
                <button id="footer-button1">Get yours now</button>
                <button id="footer-button2">Contact US</button>
            </div>
        </div>
        <div class="footer-item2">
           <div id="item2-child1">
           <div>
            <a href="#" class="footer-anchor">Home</a>
            <a href="#" class="footer-anchor">About</a>
            <a href="#" class="footer-anchor">Guide</a>
            <a href="#" class="footer-anchor">Contact</a>
           </div>
            <div>
                <a href="#" class="footer-anchor">Privacy</a>
                <a href="#" class="footer-anchor">Terms & Conditions</a>
            </div>
           </div>
           <p class="footer-anchor">&copy; Copyright iComic Inc.</p>
        </div>
    </footer>
</body>
</html>
