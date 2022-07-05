<section class="footer">

    <div class="footer-container">

        <div class="box-container">

            <div class="box">
                <h3>branch location</h3>
                <a href="#">Daman</a>
                <a href="#">Mumbai</a>
                <a href="#">Slivasse</a>
                <a href="#">Diu</a>
                <a href="#">Suart</a>
            </div> 
            
            <div class="box">
                <h3>quick links</h3>
                <a href="index.php">home</a>
                <a href="services.php">services</a>
                <a href="">featured</a>
                <a href="contact.php">contact</a>
                <a href="admin.php">Admin</a>
            </div> 

            <div class="box">
                <h3>extra links</h3>
                <a href="#">my account</a>
                <a href="#">my favorite</a>
                <a href="#">my list</a>
            </div> 

            <div class="box">
                <h3>follow us</h3>
                <a href="#">facebook</a>
                <a href="#">twitter</a>
                <a href="#">instagram</a>
                <a href="#">linkedin</a>
            </div> 

        </div>
       
        <div class="credit">created by <a href="https://g.dev/amanchoudhary"><span>Aman Choudhary</a>  </span>  | all rights reserved! </div>

    </div>

</section>



















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
