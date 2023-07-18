<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">
      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>
      <div class="content">
         <h3>why choose us?</h3>
         <p><i>There are several reasons to choose our housing website for buying or selling properties. Here are some benefits that our website offers:</i>   <br><br>

<b>1.Wide range of properties:</b>  Our website has a vast range of properties available for sale or rent, allowing you to find the perfect property to meet your needs. <br>

<b>2.User-friendly interface:</b>  Our website has an easy-to-use interface, making it simple to search for properties and filter based on your preferences. <br>

<b>3.Quality listings:</b>  We ensure that all listings on our website are of high quality, accurate, and up-to-date, so you can trust the information provided. <br><br>

<b>4.Secure transactions:</b>  Our website prioritizes the security of our users, and we provide secure transactions for buying and selling properties.<br><br>

<b>5.Professional customer service:</b>  Our customer service team is professional and responsive, and we are always available to assist you with any issues or questions you may have.<br><br>

<b>6.Transparency:</b>  We maintain transparency in all our dealings and provide all relevant information to our users, ensuring that they have a clear understanding of the properties they are interested in.

-By choosing our website, you can enjoy these benefits and have a hassle-free experience while buying or selling properties.</p>
         <a href="contact.html" class="inline-btn">contact us</a>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="heading">3 simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>search property</h3>
         <p>To search for a property, enter criteria, filter results, contact seller/agent.</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>contact agents</h3>
         <p>Click on property, view details, use provided contact information to connect.</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>enjoy property</h3>
         <p>Search, filter, save to favorites, contact agent, and enjoy your property.</p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- review section starts  -->

<section class="reviews">

   <h1 class="heading">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <div class="user">
            <img src="images/pic-1.png" alt="">
            <div>
               <h3>Clerk johnson</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p><i>"I was impressed with the variety of properties available on the housing website and the quick response from the agents."</i></p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-2.png" alt="">
            <div>
               <h3>Madison Taylor</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p><i>"The housing website made it easy to find my dream home with helpful search filters and a simple online application process."</i> </p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-3.png" alt="">
            <div>
               <h3>Matthew Wright</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p><i> "The housing website's user-friendly interface and responsive customer support made my move stress-free and enjoyable."</i></p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-4.png" alt="">
            <div>
               <h3>Sarah Williams</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p><i>"I must say, this housing website is simply splendid! I found my perfect home with ease and utmost convenience."</i> </p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-5.png" alt="">
            <div>
               <h3>Rajesh Patel</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p><i>"I was amazed by the seamless experience of finding my dream home with this website - thank you so much!"</i></p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-6.png" alt="">
            <div>
               <h3>Mei Ling</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p><i>"I cannot express my gratitude enough for this incredible housing website - it made finding my dream home a breeze!"</i> </p>
      </div>

   </div>

</section>

<!-- review section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>