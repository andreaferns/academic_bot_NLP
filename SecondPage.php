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
/* .home{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-flow: column;
    position: relative;
} */

.home .image{
    flex:1 1 45rem;

}

.home .image img{
    position: relative;
    /* border: 3px solid #73AD21; */
    left: 38rem;
    width: 100%;
    transform: rotate(6deg);
}

.home .content{
    position: relative;
    text-align: center;
    /* top:-35rem; */
    bottom:35rem;
    right:20rem;
}

.home .content h3{
    font-size: 4.5rem;
    color:rgb(217, 19, 19);
    text-transform: uppercase;
    text-shadow: 0 .3rem .5rem rgba(0,0,0,.1);
}

.home .content p{
    font-size: 2.5rem;
    color:red;
    top:5rem;
    padding: 5rem 0;
}

.imgBox{
    background-image: url(source/A1.jpg);
    position: relative;
    width: 150px;  
height: 148px;
    cursor: pointer;
}

.whiteBox{
    display: inline-block;
    height: 155px;
    width: 155px;
    margin: 10px;
    background-color: white;
    border: 3px black solid;
}

.hold{
    border: solid red 4px;
}

.dashed{
    background: rgb(214, 206, 206);
    border-style: dashed;
}

.hide{
    display: none;
}

.whiteBox #b1{
    position: relative;
    top:1rem;
}
</style>
</head>

<body>
    <header>
        <div id="menu-bar" class="fas fa-bars"></div>
        <!---Navigation Bar-->
        <a href="#" class="logo">Guide<span>OCity</span></a>
        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="GetStarted.php">Book</a>
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

    <section class="home" id="home">

        <div class="image" data-aos="fade-down">
            <img src="source/Pic1.png" alt="">
        </div>
    
        <div class="content">
            
                <div class="container">
                    <h3>Travel is worth The time
                <div class="clock">
                    <h1>
                        <span id="hours">12</span>
                        <span>:</span>
                        <span id="minutes">60</span>
                        <span>:</span>
                        <span id="seconds">60</span>
                        <span id="am-or-pm">AM</span>
                    </h1>
                </div>
            </div></h3>  
            <div class="container">
                <div class="whiteBox">
                    <div class="imgBox" draggable="true"></div>
                </div>
                <div class="whiteBox" id="b1"></div>
                <div class="whiteBox"></div>
                <div class="whiteBox"></div>
            </div>    
        </div>
    </section>




    <script>
       function updateTime(){
		var dateTime = new Date();
		var hours = dateTime.getHours();
		var minutes = dateTime.getMinutes();
		var seconds = dateTime.getSeconds();
    
		var am_or_pm = document.getElementById("am-or-pm");
		if(hours >= 12){
			am_or_pm.innerHTML = 'PM';
		}else{
			am_or_pm.innerHTML = 'AM';
		}

		if(hours > 12){
			hours = hours - 12;
		}

		document.getElementById("hours").innerHTML=hours;
		document.getElementById("minutes").innerHTML=minutes;
		document.getElementById("seconds").innerHTML=seconds;
	}
	setInterval( updateTime, 1000);


    console.log('This is drag and drop utility');

const imgBox = document.querySelector('.imgBox');
const whiteBoxes = document.getElementsByClassName('whiteBox');

// Event listeners for draggable element imgBox
imgBox.addEventListener('dragstart', (e) => {
    console.log('DragStart has been triggered');
    e.target.className += ' hold';
    setTimeout(() => {
        e.target.className = 'hide';
    }, 0);

});

imgBox.addEventListener('dragend', (e) => {
    console.log('DragEnd has been triggered');
    e.target.className = 'imgBox';
});

for (whiteBox of whiteBoxes) {
    whiteBox.addEventListener('dragover', (e) => {
        e.preventDefault();
        console.log('DragOver has been triggered');
    });

    whiteBox.addEventListener('dragenter', (e) => {
        console.log('DragEnter has been triggered');
        e.target.className += ' dashed'; 
    })

    whiteBox.addEventListener('dragleave', (e) => {
        console.log('DragLeave has been triggered');
        e.target.className = 'whiteBox'
    })

    whiteBox.addEventListener('drop', (e) => {
        console.log('Drop has been triggered');
        e.target.append(imgBox);
    })
}
    </script>
    </body>
    </html>