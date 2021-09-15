<?php 
  session_start(); 
  
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>covid-19 website design </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="loader-gif" id="loading"></div>
    <!-- header section starts  -->

    <header>

        <a href="#" class="logo">c<span class="fas fa-virus" id="spin"></span>vid-19</a>

        <div id="menu" class="fas fa-bars"></div>

        <nav class="navbar">
            <a class="active" href="#home">home</a>
            <a href="#prevent">prevent</a>
            <a href="#symptoms">symptoms</a>
            <a href="#precautions">precautions</a>
            <a href="#doctor">doctor</a>
            <a href="#contact-us">Contact Us</a>
    	    <a href="home.php?logout='1'" >logout</a>
        </nav>

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <h1>Prevention from Corona Virus</h1>
            <h3>stay home, stay safe</h3>
            <a href="#prevent" class="btn">how to prevent</a>
        </div>

    </section>

    <!-- home section ends -->

    
    <!-- prevent section starts  -->

    <section class="prevent" id="prevent">
        
        <h1 class="heading"> how to prevent virus </h1>
        <div class="box-container">
            <!-- <div id="theme-toggler" class="fas fa-moon"></div> -->
            <div class="box">
                <img src="images/pre-1.png" alt="">
                <h3>Wash your place</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe aut asperiores quos! Nesciunt harum pariatur corporis obcaecati nihil temporibus dolorem.</p>
            </div>
            <div class="box">
                <img src="images/pre-2.png" alt="">
                <h3>Maintain Distance</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe aut asperiores quos! Nesciunt harum pariatur corporis obcaecati nihil temporibus dolorem.</p>
            </div>
            <div class="box">
                <img src="images/pre-3.png" alt="">
                <h3>Don't touch face</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe aut asperiores quos! Nesciunt harum pariatur corporis obcaecati nihil temporibus dolorem.</p>
            </div>
            <div class="box"> 
                <img src="images/pre-4.png" alt="">
                <h3>Wash your hands</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe aut asperiores quos! Nesciunt harum pariatur corporis obcaecati nihil temporibus dolorem.</p>
            </div>
            <div class="box">

                <img src="images/pre-5.png" alt="">
                <h3>Use napkins</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe aut asperiores quos! Nesciunt harum pariatur corporis obcaecati nihil temporibus dolorem.</p>
            </div>
            <div class="box">
                <img src="images/pre-6.png" alt="">
                <h3>Wear a mask</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe aut asperiores quos! Nesciunt harum pariatur corporis obcaecati nihil temporibus dolorem.</p>
            </div>

        </div>

    </section>

    <!-- prevent section ends -->
<!-- symptoms section starts  -->
 
<section class="symptoms" id="symptoms">

    <h1 class="heading">covid-19 symptoms</h1>

    <div class="column">

        <div class="main-image">
            <img src="images/main-symp-img.png" alt="">
        </div>

        <div class="box-container">

            <div class="box">
                <img src="images/symp-a.png" alt="">
                <h3>dry cough</h3>
            </div>

            <div class="box">
                <img src="images/symp-b.png" alt="">
                <h3>sore throat</h3>
            </div>

            <div class="box">
                <img src="images/symp-c.png" alt="">
                <h3>cold</h3>
            </div>

            <div class="box">
                <img src="images/symp-d.png" alt="">
                <h3>fever</h3>
            </div>

            <div class="box">
                <img src="images/symp-e.png" alt="">
                <h3>headache</h3>
            </div>

            <div class="box">
                <img src="images/symp-f.png" alt="">
                <h3>vomiting</h3>
            </div>

        </div>

    </div>

</section>

<!-- symptoms section ends -->
<!-- precautions section starts  -->
 
<section class="precautions" id="precautions">

    <h1 class="heading">take precautions against covid-19</h1>

    <div class="column">

        <div class="box-container">

            <h3 class="title">things you should do</h3>

            <div class="box">
                <img src="images/do-img1.png" alt="">
                <div class="info">
                    <h3>wash your hand</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel odit quo saepe illum tempora corrupti sint distinctio, perferendis maxime illo!</p>
                </div>
            </div>

            <div class="box">
                <img src="images/do-img2.png" alt="">
                <div class="info">
                    <h3>always wear a mask</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel odit quo saepe illum tempora corrupti sint distinctio, perferendis maxime illo!</p>
                </div>
            </div>

            <div class="box">
                <img src="images/do-img3.png" alt="">
                <div class="info">
                    <h3>stay home during fever</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel odit quo saepe illum tempora corrupti sint distinctio, perferendis maxime illo!</p>
                </div>
            </div>

        </div>

        <div class="box-container">

            <h3 class="title">things you should NOT DO</h3>

            <div class="box">
                <img src="images/dont-img1.png" alt="">
                <div class="info">
                    <h3>avoid close contact with animals</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel odit quo saepe illum tempora corrupti sint distinctio, perferendis maxime illo!</p>
                </div>
            </div>

            <div class="box">
                <img src="images/dont-img2.png" alt="">
                <div class="info">
                    <h3>avoid close contact with peoples</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel odit quo saepe illum tempora corrupti sint distinctio, perferendis maxime illo!</p>
                </div>
            </div>

            <div class="box">
                <img src="images/dont-img3.png" alt="">
                <div class="info">
                    <h3>avoid crowded area</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel odit quo saepe illum tempora corrupti sint distinctio, perferendis maxime illo!</p>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- precautions section ends -->
    <!-- doctor section start  -->

    <section class="doctor" id="doctor">

        <h1 class="heading">consult to our doctors</h1>
        <div class="box-container">

            <div class="box">
                <img src="images/doc1.png" alt="">
                <h3>Doctor</h3>
                <span>Lorem ipsum</span>
                <div class="share">
                <a href="https://www.whatsapp.com/" class="fab fa-whatsapp"></a>
                    <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                    <a href="https://www.youtube.com/" class="fab fa-twitter"></a>
                    <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                    <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/doc3.png" alt="">
                <h3>Doctor</h3>
                <span>Lorem ipsum</span>
                <div class="share">
                <a href="https://www.whatsapp.com/" class="fab fa-whatsapp"></a>
                    <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                    <a href="https://www.youtube.com/" class="fab fa-twitter"></a>
                    <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                    <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/doc1.png" alt="">
                <h3>Doctor</h3>
                <span>Lorem ipsum</span>
                <div class="share">
                    <a href="https://www.whatsapp.com/" class="fab fa-whatsapp"></a>
                    <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                    <a href="https://www.youtube.com/" class="fab fa-twitter"></a>
                    <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                    <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
                </div>
            </div>

        </div>
        <div class="vacc-reg">
            <button class="button" style="vertical-align:middle"><span> <a href="https://www.cowin.gov.in/"> Get Vaccinated</a></span> </button>
        </div>
    </section>

    <!-- doctor section ends -->

    <!-- contact-us section starts  -->
    <section class="contact-us" id="contact-us">

        <h1 class="heading">Contact Us</h1>

        <div class="column">
            <ul class="sci">
                <li data-color="#1877f2">
                    <a href="https://www.facebook.com/" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <li  data-color="#ff0000">
                    <a href="https://www.youtube.com/" class="youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                </li>
                <li  data-color="#0099ff">
                    <a href="https://www.twitter.com/" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li  data-color="#e4405f">
                    <a href="https://www.instagram.com/" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li>
            </ul>
        </div>

    </section>
    <!-- contact-us section ends -->

    <!-- footer section starts  -->

    <div class="footer">

        <div class="box-container">

            <div class="box">
                <h3>about us</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate minima soluta distinctio eaque magni veritatis dicta dolore dignissimos totam quis!</p>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#home">home</a>
                <a href="#prevent">prevent</a>
                <a href="#symptoms">symptoms</a>
                <a href="#doctor">doctor</a>
                <a href="#Contact Us">Contact Us</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="https://www.facebook.com">facebook</a>
                <a href="https://www.twitter.com">twitter</a>
                <a href="https://www.instagram.com">instagram</a>
                <a href="https://www.linkedin.com">linkedin</a>
                <a href="https://www.youtube.com">youtube</a>
            </div>
            <div class="box">
                <h1><a href="#" class="f-logo">c<span class="fas fa-virus" id="spin"></span>vid-19</a></h1>
            </div>
        </div>

        <h1 class="credit"> created by <a href="#">THE-HACK-PIRATES</a> </h1>

    </div>

    <!-- footer section ends -->

    <!-- scroll top  -->

    <a href="#home" class="scroll-top">
        <img src="images/image.png" alt="">
    </a>

        
 


    <!-- jquery cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- custom js file link  -->
    <script src="script.js"></script>
    <script src="/https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- <script src="vanilla-tilt.min.js"></script> -->
    <!-- 
    <script> VanillaTilt.init(document.querySelector(".sci li a"), {
        max: 30,
        speed: 400,
        glare: true,
        "max-glare": 1,
    });
        let list = document.querySelectorAll('.sci li');
        let bg = document.querySelector('.socialMedia');
        list.forEach(elements => {
            elements.addEventListener('mouseenter', function(event){
                let color = event.target.getAttribute('data-color');
                bg.style.backgroundColor = color;
            })
            elements.addEventListener('mouseleave', function(event){
                bg.style.backgroundcolor = '#fff';
            })
        })
    </script>
      -->
    <script>

    </script>
    <!--  
    <script>
        $(document).ready(function(){
        // Add smooth scrolling to all links
        $("a").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){
        
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
            } // End if
        });
        });
    </script>
    -->
</body>
</html>