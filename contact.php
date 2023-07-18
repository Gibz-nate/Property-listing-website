<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

if(isset($_POST['send'])){

   $msg_id = create_unique_id();
   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $message = $_POST['message'];
   $message = filter_var($message, FILTER_SANITIZE_STRING);

   $verify_contact = $conn->prepare("SELECT * FROM `messages` WHERE name = ? AND email = ? AND number = ? AND message = ?");
   $verify_contact->execute([$name, $email, $number, $message]);

   if($verify_contact->rowCount() > 0){
      $warning_msg[] = 'message sent already!';
   }else{
      $send_message = $conn->prepare("INSERT INTO `messages`(id, name, email, number, message) VALUES(?,?,?,?,?)");
      $send_message->execute([$msg_id, $name, $email, $number, $message]);
      $success_msg[] = 'message send successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact Us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<!-- contact section starts  -->

<section class="contact">

   <div class="row">
      <div class="image">
         <img src="images/contact-img.svg" alt="">
      </div>
      <form action="" method="post">
         <h3>get in touch</h3>
         <input type="text" name="name" required maxlength="50" placeholder="enter your name" class="box">
         <input type="email" name="email" required maxlength="50" placeholder="enter your email" class="box">
         <input type="number" name="number" required maxlength="10" max="9999999999" min="0" placeholder="enter your number" class="box">
         <textarea name="message" placeholder="enter your message" required maxlength="1000" cols="30" rows="10" class="box"></textarea>
         <input type="submit" value="send message" name="send" class="btn">
      </form>
   </div>

</section>

<!-- contact section ends -->

<!-- faq section starts  -->

<section class="faq" id="faq">

   <h1 class="heading">FAQ</h1>

   <div class="box-container">

      <div class="box active">
         <h3><span>how to cancel booking?</span><i class="fas fa-angle-down"></i></h3>
         <p>If you need to cancel a booking, simply contact us through our website's messaging system, email, or phone to inform us of the cancellation. We'll then issue a refund if applicable and update our booking system to reflect the cancellation.</p>
      </div>

      <div class="box active">
         <h3><span>when will I get the possession?</span><i class="fas fa-angle-down"></i></h3>
         <p>The possession date for your property depends on several factors, including the completion of the construction or renovation process, and any necessary legal or regulatory approvals.</p>
      </div>

      <div class="box">
         <h3><span>where can I pay the rent?</span><i class="fas fa-angle-down"></i></h3>
         <p>Tenants have multiple options to pay rent. The most common methods are online payment, in-person payment at the landlord or property manager's office, mail payment through check or money order, and automatic payment from a bank account or credit card. Tenants should keep records of their payments and any receipts or confirmation numbers received. If any questions or concerns arise about making rent payments, tenants should contact their landlord or property manager for assistance.</p>
      </div>

      <div class="box">
         <h3><span>how to contact with the buyers?</span><i class="fas fa-angle-down"></i></h3>
         <p>As a seller on a housing website, there are several ways to contact potential buyers. These include responding to inquiries promptly, scheduling an open house, sharing contact information in the property listing, utilizing social media to advertise the property, and contacting the website's support team for assistance. It's important to respond professionally and promptly to interested buyers to build trust and encourage them to take the next step in the buying process.</p>
      </div>

      <div class="box">
         <h3><span>why my listing not showing up?</span><i class="fas fa-angle-down"></i></h3>
         <p>If your listing is not showing up on a housing website, it could be due to various reasons. It could be because your listing has expired, has been flagged for violating terms and conditions or community guidelines, has not been approved by moderators, or technical issues that need to be resolved. To identify why your listing is not visible, you can contact the website's support team for assistance. They can help you understand why your listing may not be visible and provide necessary support.</p>
      </div>

      <div class="box">
         <h3><span>how to promote my listing?</span><i class="fas fa-angle-down"></i></h3>
         <p>To promote your listing on a housing website, you can optimize your listing by including complete and accurate information, high-quality photos, and a compelling description. You can also share your listing on social media, host an open house, use paid advertising options, utilize email marketing, and leverage word-of-mouth to attract potential buyers. Being persistent in promoting your listing and staying proactive in generating interest in your property is key to attracting buyers.</p>
      </div>

   </div>

</section>

<!-- faq section ends -->










<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php include 'components/message.php'; ?>

</body>
</html>