<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate Management System</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link --> 
    <link rel="stylesheet" href="style.css"> <!--stylelogin.ccs-->
    <script src="js/click.js"></script>

</head>
<body>
    
<!-- header section starts  index.html calling -->


<header><?php include'nav_footer/header.php';?></header><br><br><br><br>



<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/s-1.png" alt="">
            <h3>buying home</h3>
            <p>Buying a home involves finding the property, securing financing, making an offer, getting a home inspection, and closing on the purchase.</p>
            <a href="#" class="btn">learn more</a>
        </div>

        <div class="box">
            <img src="images/s-2.png" alt="">
            <h3>Asset</h3>
<p>An asset is a resource with economic value that an individual, corporation, or country owns or controls with the expectation that it will provide a future benefit.</p>
            <a href="#" class="btn">learn more</a>
        </div>

        <div class="box">
            <img src="images/s-3.png" alt="">
            <h3>selling home</h3>
            <p>Short selling involves borrowing a security and selling it on the open market. You then purchase it later at a lower price, pocketing the difference after repaying the initial loan.</p>
            <a href="#" class="btn">learn more</a>
        </div>

    </div>

</section>



<!-- footer section-->
<footer>
<?php
include'nav_footer/footer.php';
?>
    </footer>

<!-- footer section end-->












    <script>
    function login() {
    alert("Please Login");
    }
    </script>ends -->

<!-- javascript part --> 
<script>

let menu = document.querySelector('#menu-bars');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    navbar.classList.toggle('active');
    menu.classList.toggle('fa-times');
}

window.onscroll = () =>{
    navbar.classList.remove('active');
    menu.classList.remove('fa-times');
}

</script>

</body>
</html>