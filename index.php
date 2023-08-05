<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuideoCity</title>
    <!--font-awesome 5 cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <!--External Css file link-->
    <link rel="stylesheet" href="css/style.css">

<style>
        .footer{
  background:#333;
}

.footer .box-container{
  display: flex;
  flex-wrap: wrap;
  gap:1.5rem;
}

.footer .box-container .box{
  padding:1rem 0;
  flex:1 1 25rem;
}

.footer .box-container .box h3{
  font-size: 2.5rem;
  padding:.7rem 0;
  color:#fff;
}

.footer .box-container .box p{
  font-size: 1.5rem;
  padding:.7rem 0;
  color:#eee;
}

.footer .box-container .box a{
  display: block;
  font-size: 1.5rem;
  padding:.7rem 0;
  color:#eee;
}

.footer .box-container .box a:hover{
  color:#3DCAB5;
  text-decoration: underline;
}

.footer .credit{
  text-align: center;
  padding:2rem 1rem;
  margin-top: 1rem;
  font-size: 2rem;
  font-weight: normal;
  color:#fff;
  border-top: .1rem solid rgba(255,255,255,.2);
}

</style>
</head>

<body>
    <header>
        <div id="menu-bar" class="fas fa-bars"></div>
        <!---Navigation Bar-->
        <a href="#" class="logo">Guide<span>OCity</span></a>
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="GetStarted.php">Login</a>
            <a href="#package">Packages</a>
            <a href="#services">Services</a>
            <a href="#gallery">Gallery</a>
            <a href="SecondPage.php">Extra</a>
            <a href="#contact">Contact</a>
        </nav>

        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <a href="GetStarted.php"><i class="fas fa-user" id="login-btn"></i></a>
        </div>

        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="Search">
            <label for="search-bar" class="fas fa-search"></label>
        </form>
    </header>

    <!--Home Section-->
    <section class="home" id="home">
        <div class="content">
            <h3>One Mile At a Time</h3>
            <p>Discover new Cities with us, Adventure Awaits</p>
            <a href="#" class="btn">Discover more</a>
        </div>
        <div class="controls">
            <span class="vid-btn"></span>
        </div>
        <div class="video-container">
            <video src="source/vid-2.mp4" id="video-slider" loop autoplay muted></video>
        </div>
    </section>

    <!--Package.....-->
    <section class="package" id="package">
        <h1 class="heading">
            <span>P</span>
            <span>A</span>
            <span>C</span>
            <span>K</span>
            <span>A</span>
            <span>G</span>
            <span>E</span>
        </h1>

        <div class="box-container">
            <div class="box">
                <img src="source/p-1.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"> Mumbai</i></h3>
                    <p>The disparities on display in Mumbai are undeniable. The seaside city hosts some of India's most
                        impressive residential skyscrapers, and some of its most expansive slums. But between
                        traditional meals in colonial cafes, Mumbai begins to twinkle with charm. </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price">₹3777.00 <span>4000.00</span></div>
                    <a href="#" class="btn">Book Now</a>

                </div>
            </div>

            <div class="box">
                <img src="source/p-2.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"> Paris</i></h3>
                    <p>Apart from being the capital of France, Paris is famous as one of the four fashion capitals of
                        the world along with
                        Milan, New York and London. Located across the banks of sparkling River Seine, the beautiful
                        city has a number of interesting tourist attractions.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price">₹3777.00 <span>4000.00</span></div>
                    <a href="#" class="btn">Book Now</a>

                </div>
            </div>

            <div class="box">
                <img src="source/p-3.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"> London</i></h3>
                    <p>Standing on the Thames River, London is the capital of England as well as the most populous city
                        in Great Britain. The city is a confluence of the old and the new and is one of the most
                        important tourist destinations in the entire world. </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price">₹3777.00 <span>4000.00</span></div>
                    <a href="#" class="btn">Book Now</a>

                </div>
            </div>

            <div class="box">
                <img src="source/p-4.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"> Delhi</i></h3>
                    <p>Delhi is a city where ancient and modern blend seamlessly together. It is a place that not only
                        touches your pulse but even fastens it to a frenetic speed. Home to millions of dreams, the city
                        takes on unprecedented responsibilities o realizing dreams bringing people closer and inspiring
                        their throughts. </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price">₹3777.00 <span>4000.00</span></div>
                    <a href="#" class="btn">Book Now</a>

                </div>
            </div>

            <div class="box">
                <img src="source/p-5.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"> Tokyo</i></h3>
                    <p>With its futuristic skyscrapers, unrivalled food scene, and wild nightlife, Tokyo is a rush of
                        pure adrenaline. This vast and multifaceted city is famously cutting edge, yet its ancient
                        Buddhist temples, vintage teahouses, and peaceful gardens offer a serene escape — and a poignant
                        reminder of the city’s long history.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price">₹3777.00 <span>4000.00</span></div>
                    <a href="#" class="btn">Book Now</a>

                </div>
            </div>

            <div class="box">
                <img src="source/p-6.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"> Rome </i></h3>
                    <p>Rome's two most popular tourist destinations are the Vatican Museums (with over 4.2 million
                        tourists per year, making them the world's 37th most visited destination) and the Colosseum(with
                        around 4 million tourists a year, making it the world's 39th most popular tourist destination).
                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price">₹3777.00 <span>4000.00</span></div>
                    <a href="#" class="btn">Book Now</a>

                </div>
            </div>
        </div>
    </section>

    <!--Services-->
    <section class="services" id="services">
        <h1 class="heading">
            <span>S</span>
            <span>E</span>
            <span>R</span>
            <span>V</span>
            <span>I</span>
            <span>C</span>
            <span>E</span>
            <span>S</span>
        </h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-money-bill"></i>
                <h3>Suitable Price</h3>
                <p>The price of your trip are connected with the decisions you make in the early stages of planning.
                    Choose the right one!</p>
            </div>

            <div class="box">
                <i class="fas fa-hotel"></i>
                <h3>Luxorious Hotels</h3>
                <p>Fine dining, exquisite spa, majestic exteriors, lavish interiors, world class hospitality, swimming
                    pools, cuisines and convenient locations.</p>
            </div>

            <div class="box">
                <i class="fas fa-map-marked-alt"></i>
                <h3>Travel Guide</h3>
                <p>Make the most of your time in destination. Find and pick from our wide selection of top-rated tours
                    guides and activities for your trip.</p>
            </div>

            <div class="box">
                <i class="fas fa-globe-asia"></i>
                <h3>Around the world</h3>
                <p>Ever dreamt of travelling around the world with your backpack? We've a wide collection of choices for
                    you to choose from</p>
            </div>

        </div>

    </section>

    <!--Gallery-->
    <section class="gallery" id="gallery">
        <h1 class="heading">
            <span>G</span>
            <span>A</span>
            <span>L</span>
            <span>L</span>
            <span>E</span>
            <span>R</span>
            <span>Y</span>
        </h1>

        <div class="video">
            <div class="video-wrapper flex">
                <video src="source/vid-1.mp4" loop autoplay muted></video>
            </div>
        </div><br><br>

        <div class="box-container">
            <div class="box">
                <img src="source/g-1.jpg" alt="">
                <div class="content">
                    <h3>Travel Destinations</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ut optio, aspernatur provident
                        magni ipsum repudiandae vitae veritatis vero, officiis autem possimus totam!</p>
                    <a href="#" class="btn">See More</a>
                </div>
            </div>

            <div class="box">
                <img src="source/g-2.jpg" alt="">
                <div class="content">
                    <h3>Travel Destinations</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ut optio, aspernatur provident
                        magni ipsum repudiandae vitae veritatis vero, officiis autem possimus totam!</p>
                    <a href="#" class="btn">See More</a>
                </div>
            </div>

            <div class="box">
                <img src="source/g-3.jpg" alt="">
                <div class="content">
                    <h3>Travel Destinations</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ut optio, aspernatur
                        provident magni ipsum repudiandae vitae veritatis vero, officiis autem possimus totam!</p>
                    <a href="#" class="btn">See More</a>
                </div>
            </div>

            <div class="box">
                <img src="source/g-4.jpg" alt="">
                <div class="content">
                    <h3>Travel Destinations</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ut optio, aspernatur
                        provident magni ipsum repudiandae vitae veritatis vero, officiis autem possimus totam!
                    </p>
                    <a href="#" class="btn">See More</a>
                </div>
            </div>
            <div class="box">
                <img src="source/g-5.jpg" alt="">
                <div class="content">
                    <h3>Travel Destinations</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ut optio,
                        aspernatur provident magni ipsum repudiandae vitae veritatis vero, officiis autem
                        possimus totam!</p>
                    <a href="#" class="btn">See More</a>
                </div>
            </div>
            <div class="box">
                <img src="source/g-6.jpg" alt="">
                <div class="content">
                    <h3>Travel Destinations</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ut optio,
                        aspernatur provident magni ipsum repudiandae vitae veritatis vero, officiis
                        autem possimus totam!</p>
                    <a href="#" class="btn">See More</a>
                </div>
            </div>
            <div class="box">
                <img src="source/g-7.jpg" alt="">
                <div class="content">
                    <h3>Travel Destinations</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ut optio,
                        aspernatur provident magni ipsum repudiandae vitae veritatis vero, officiis
                        autem possimus totam!</p>
                    <a href="#" class="btn">See More</a>
                </div>
            </div>
            <div class="box">
                <img src="source/g-9.jpg" alt="">
                <div class="content">
                    <h3>Travel Destinations</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ut
                        optio, aspernatur provident magni ipsum repudiandae vitae veritatis
                        vero, officiis autem possimus totam!</p>
                    <a href="#" class="btn">See More</a>
                </div>
            </div>
            <div class="box">
                <img src="source/g-8.jpg" alt="">
                <div class="content">
                    <h3>Travel Destinations</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ut
                        optio, aspernatur provident magni ipsum repudiandae vitae veritatis
                        vero, officiis autem possimus totam!</p>
                    <a href="#" class="btn">See More</a>
                </div>
            </div>
        </div>
    </section>


    <!-- Contact -->
    <section class="contact" id="contact">
        <h1 class="heading">
            <span>C</span>
            <span>O</span>
            <span>N</span>
            <span>T</span>
            <span>A</span>
            <span>C</span>
            <span>T</span>
        </h1>

        <div class="row">
            <div class="image">
                <img src="source/contact-img.svg" alt="">
            </div>

            <form action="">
                <div class="inputBox">
                    <input type="text" placeholder="name">
                    <input type="email" placeholder="email">
                </div>

                <div class="inputBox">
                    <input type="number" placeholder="number">
                    <input type="text" placeholder="subject">
                </div>
                <textarea placeholder="message" name="" id="" cols="30" rows="10"></textarea>

                <div class="b1">
                    <center><input id="b1" type="submit" class="btn" value="Send Message"></center>
                </div>


            </form>

        </div>

    </section>

    <!-- Footer -->
    <section class="footer">

        <div class="box-container">
    
            <div class="box">
                <h3>about us</h3>
                <p>This website is created by .......</p>
            </div>

            <div class="box">
                <h3>Links</h3>
                <a href="#">home</a>
                <a href="#">book</a>
                <a href="#">packages</a>
                <a href="#">services</a>
                <a href="#">gallery</a>
                <a href="#">review</a>
                <a href="#">contact</a>
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="#">facebook</a>
                <a href="#">instagram</a>
                <a href="#">twitter</a>
                <a href="#">linkedin</a>
            </div>
    
        </div>
    <script src="js/script.js"></script>
</body>

</html>