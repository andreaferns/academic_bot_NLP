<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet" href="css/style.css">

   <style>
    *{
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
   transition: all .2s linear;
   text-transform: capitalize;
}

html{
   font-size: 62.5%;
   overflow-x: hidden;
}

body{
   background: #eee;
}

.container{
   max-width: 1200px;
   margin:0 auto;
   padding:3rem 2rem;
}

.container .title{
   font-size: 3.5rem;
   color:#444;
   margin-bottom: 3rem;
   text-transform: uppercase;
   text-align: center;
}

.container .products-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
   gap:2rem;
}

.container .products-container .product{
   text-align: center;
   padding:3rem 2rem;
   background: #fff;
   box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
   outline: .1rem solid #ccc;
   outline-offset: -1.5rem;
   cursor: pointer;
}

.container .products-container .product:hover{
   outline: .2rem solid rgb(11, 214, 225);
   outline-offset: 0;
}

.container .products-container .product img{
   height: 25rem;
}

.container .products-container .product:hover img{
   transform: scale(.9);
}

.container .products-container .product h3{
   padding:.5rem 0;
   font-size: 2rem;
   color:#444;
}

.container .products-container .product:hover h3{
   color:#3DCAB5;
}

.container .products-container .product .price{
   font-size: 2rem;
   color:#3DCAB5;
}

.products-preview{
   position: fixed;
   top:0; left:0;
   min-height: 100vh;
   width: 100%;
   background: rgba(0,0,0,.8);
   display: none;
   align-items: center;
   justify-content: center;
}

.products-preview .preview{
   display: none;
   padding:2rem;
   text-align: center;
   background: #fff;
   position: relative;
   margin:2rem;
   width: 40rem;
}

.products-preview .preview.active{
   display: inline-block;
}

.products-preview .preview img{
   height: 30rem;
}


.products-preview .preview .fa-times:hover{
   transform: rotate(90deg);
}

.products-preview .preview h3{
   color:#3DCAB5;
   padding:.5rem 0;
   font-size: 2.5rem;
}

.products-preview .preview .stars{
   padding:1rem 0;
   font-size: 1.7rem;
}

.products-preview .preview .stars i{
   color:#3DCAB5;
}

.products-preview .preview .stars span{
   color:#999;
}

.products-preview .preview p{
   line-height: 1.5;
   padding:1rem 0;
   font-size: 1.6rem;
   color:#777;
}

.products-preview .preview .price{
   padding:1rem 0;
   font-size: 2.5rem;
   color:#3DCAB5;
}

.products-preview .preview .buttons{
   display: flex;
   gap:1.5rem;
   flex-wrap: wrap;
   margin-top: 1rem;
}



   </style>

</head>
<body>
   
<div class="container">

    <h1 class="heading">
        <span>P</span>
        <span>A</span>
        <span>C</span>
        <span>K</span>
        <span>A</span>
        <span>G</span>
        <span>E</span>
        <span>S</span>
    </h1>

   <div class="products-container">

      <div class="product" data-name="p-1">
         <img src="source/Pr.png" alt="">
         <h3>Paris Tour Package</h3>
         <div class="price">₹35000</div>
      </div>

      <div class="product" data-name="p-2">
         <img src="source/Pr1.png" alt="">
         <h3>Italy Tour Packages</h3>
         <div class="price">₹45000</div>
      </div>

      <div class="product" data-name="p-3">
         <img src="source/Pr2.png" alt="">
         <h3>Taj Mahal Tour Packages</h3>
         <div class="price">₹10000</div>
      </div>

      <div class="product" data-name="p-4">
         <img src="source/Pr3.png" alt="">
         <h3>Rome Tour Packages</h3>
         <div class="price">₹59000</div>
      </div>

      <div class="product" data-name="p-5">
         <img src="source/Pr5.png" alt="">
         <h3>London Tour Packages</h3>
         <div class="price">₹110000</div>
      </div>

      <div class="product" data-name="p-6">
         <img src="source/Pr4.png" alt="">
         <h3>Italy Tour Packages 2</h3>
         <div class="price">₹130000</div>
      </div>

   </div>

</div>

<div class="products-preview">

   <div class="preview" data-target="p-1">
      <img src="source/Pr.png" alt="">
      <h3>Paris Tour Package</h3>
      <p>Find your love for the city, all those words that the poet said were no fiction, they will all come true once you step in Paris you’ll feel the true universal connection!</p>
      <div class="price">₹35000</div>
      <a href="pay.php" class="buy btn">buy now</a>
      <a href="T1.php" class="cart btn">Back</a>
      <center>
        <a href="index.php" class=" btn">Logout</a>
      </center>

   </div>

   <div class="preview" data-target="p-2">
      <img src="source/Pr1.png" alt="">
      <h3>Italy Tour Packages</h3>
      <p>Italy is a country in Europe that is surrounded by the Mediterranean sea on one side and by France, Austria, Switzerland, San Marino and Vatican City on the other.</p>
      <div class="price">₹45000</div>

         <a href="pay.php" class="buy btn">buy now</a>
         <a href="T1.php" class="cart btn">Back</a>
         <center>
            <a href="index.php" class=" btn">Logout</a>
          </center>

   </div>

   <div class="preview" data-target="p-3">
      <img src="source/Pr2.png" alt="">
      <h3>Taj Mahal Tour Packages</h3>
      <p>Taj Mahal is among the 7 Wonders of the World, situated in the Mughal city of Agra in India that still holds its magnificence also after years of its building.</p>
      <div class="price">₹10000</div>
      <a href="pay.php" class="buy btn">buy now</a>
      <a href="T1.php" class="cart btn">Back</a>
      <center>
         <a href="index.php" class=" btn">Logout</a>
       </center>
   </div>

   <div class="preview" data-target="p-4">
      <img src="source/Pr3.png" alt="">
      <h3>Rome Tour Packages</h3>
      <p>Rome, capital of Italy, is the most popular tourist destination of Italy. It attracts millions of tourists every
        year for it’s world famous Vatican Museum and the Colosseum. </p>
      <div class="price">₹59000</div>
      <a href="pay.php" class="buy btn">buy now</a>
      <a href="T1.php" class="cart btn">Back</a>
      <center>
         <a href="index.php" class=" btn">Logout</a>
       </center>
   </div>

   <div class="preview" data-target="p-5">
      <img src="source/Pr5.png" alt="">
      <h3>London Tour Packages</h3>
      <p>tour packages. From art to history to fine food to culture, London has it all. There is no better way to experience London than visiting the place.</p>
      <div class="price">₹110000</div>
      <a href="pay.php" class="buy btn">buy now</a>
      <a href="T1.php" class="cart btn">Back</a>
      <center>
         <a href="index.php" class=" btn">Logout</a>
       </center>
   </div>

   <div class="preview" data-target="p-6">
      <img src="source/Pr4.png" alt="">
      <h3>Italy Tour Packages 2</h3>

      <p>Italy is a popular destination amongst tourists, especially from India. Tourism in Italy offers variety of sightseeing and entertainment options.</p>
      <div class="price">₹130000</div>
      <a href="pay.php" class="buy btn">buy now</a>
      <a href="T1.php" class="cart btn">Back</a>
      <center>
         <a href="index.php" class=" btn">Logout</a>
       </center>
   </div>

</div>

<script>
    let preveiwContainer = document.querySelector('.products-preview');
let previewBox = preveiwContainer.querySelectorAll('.preview');

document.querySelectorAll('.products-container .product').forEach(product =>{
  product.onclick = () =>{
    preveiwContainer.style.display = 'flex';
    let name = product.getAttribute('data-name');
    previewBox.forEach(preview =>{
      let target = preview.getAttribute('data-target');
      if(name == target){
        preview.classList.add('active');
      }
    });
  };
});

previewBox.forEach(close =>{
  close.querySelector('.fa-times').onclick = () =>{
    close.classList.remove('active');
    preveiwContainer.style.display = 'none';
  };
});
</script>
</body>
</html>