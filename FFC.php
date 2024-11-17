<!DOCTYPE html>

<html>
   <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="FFC.css">
      <title>Fit-zone Fitness Center</title>
      <!-- Icon web link -->
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   </head>
   <body>

      <!-- Navigation bar codes -->
      <header>
         <a href="#home" class="gym_logo">
            <div class="circle">
               <div class="logo">
                  <div class="logo_text">
                     <p>FITZONE-FITNESS-CENTER-</p>
                  </div>
               </div>
            </div>
         </a>

         <div class='bx bx-menu' id="menu-icon"></div>

         <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#plan">Plans</a></li>
            <li><a href="#review">Review</a></li>

         </ul>

         <div class="top-btn">
            <a href="FFC_Login.php" class="nav-btn-login">Login</a>
            <a href="FFC_Singin.php" class="nav-btn-singin">Sing in</a>

         </div>
      </header>

      <!-- Home section -->

      <section class="home" id="home">
         <div class="home-section">

            <h3>Build Your</h3>
            <h1>Dream Physique</h1>
            <h3><span class="multiple-text">Bodybuilding</span></h3>

            <p>Discover fitness excellence at our premier gym.With top equipment, expert trainers,and dynamic classes, we're committed to helping you reach
               your goals. Join us today and unleash your full potential!</p>

            <a href="FFC_Singin.php" class="btn">Join Us</a>
         </div>

         <div class="home-img">
            <img src="FFCimg\image.png" alt="Home Image">
         </div>

      </section>

      <!-- Services section -->
      
      <section class="services" id="services">
w
         <h2 class="heading">Our <span>Offerings</span></h2>

         <div class="services_container">

            <div class="slide">

               <div class="item" style="background-image: url(FFCimg/weigth_loss2.png);">
                  <div class="content">
                     <div class="name"> Weight Lose</div>
                     <div class="des">Weight loss primarily depends on reducing the total intake of calories, not adjusting the proportions of carbohydrates, fat, and protein in the diet</div>
                     <button>See More</button>
                  </div>
               </div>

               <div class="item" style="background-image: url(FFCimg/bodybuilding.jpg);">
                  <div class="content">
                     <div class="name"> Bodybuilding</div>
                     <div class="des">Bodybuilding is the sport of developing one's muscles through hypertrophic exercises</div>
                     <button>See More</button>
                  </div>
               </div>

               <div class="item" style="background-image: url(FFCimg/Running.jpg);">
                  <div class="content">
                     <div class="name">Running</div>
                     <div class="des">Running is one of the most popular sports worldwide. It is easy to do, relatively inexpensive and can be easily adapted to one's own pace and level.</div>
                     <button>See More</button>
                  </div>
               </div>

               <div class="item" style="background-image: url(FFCimg/zumba2.png);">
                  <div class="content">
                     <div class="name">Zumba</div>
                     <div class="des" >Zumba is a Workout on modern dance music. Together with the teacher you can dance on your favorite music. </div>
                     <button>See More</button>
                  </div>
               </div>

               <div class="item" style="background-image: url(FFCimg/cross_fit.jpg);">
                  <div class="content">
                     <div class="name">Cross Fit</div>
                     <div class="des">CrossFit is a high-intensity interval training program that combines strength and conditioning with functional movements to help people improve their health and performance</div>
                     <button>See More</button>
                  </div>
               </div>

               <div class="item" style="background-image: url(FFCimg/Power.jpg);">
                  <div class="content">
                     <div class="name">Power Lifting</div>
                     <div class="des">CrossFit is a high-intensity interval training program that combines strength and conditioning with functional movements to help people improve their health and performance</div>
                     <button>See More</button>
                  </div>
               </div>

            </div>

            <div class="button">
               <button class="prev"><i class='bx bx-left-arrow-alt' ></i></button>
               <button class="next"><i class='bx bx-right-arrow-alt' ></i></button>
            </div>

         </div>
      </section>

      <!-- About section -->

      <section class="about" id="about">


         <div class="about-img">
            <img src="FFCimg/image1.jpg" alt="about-img">
         </div>

         <div class="about-content">
            <h2 class="heading">Why Choose Us</h2>

            <p>paragraph 1.............................................</p>
            <p>paragraph 2.............................................</p>
            <p>paragraph 3.............................................</p>
            <p>paragraph 4.............................................</p>

            <a href="#" class="btn">Book a Free Class</a>
         </div>


      </section>

      <!-- pricing section -->

      <section class="plan" id="plan">

         <h2 class="heading">Our pricing<span> Plans</span></h2>
         
         <div class="plan_card_bg">
            <div class="card_wrapper">
               
               <div class="plan_box" style="--card-clr: #C0C0C0;">
                  <div class="plan_box_content">
                     <h3>Silver Plan</h3>
                     <h2><span>Rs.2500/Month</span></h2>
                        <ul>
                           <li>Smart Workout Plan</li>
                           <li>At Home Workout</li>
                        </ul>
                     <a href="#" class="btn"><i class='bx bx-dollar-circle'></i>Buy</a>
                  </div>
               </div>

               <div class="plan_box" style="--card-clr: #77ff00;">
                  <div class="plan_box_content">
                     <h3>Platinum Plan</h3>
                     <h2><span>Rs.7500/Month</span></h2>
                        <ul>
                           <li>Pro GYMs</li>
                           <li>Smart Workout Plan</li>
                           <li>At Home Workout</li>
                        </ul>
                  <a href="#" class="btn"><i class='bx bx-dollar-circle'></i>Buy</a>
                  </div>
               </div>

               <div class="plan_box" style="--card-clr: gold;">
                  <div class="plan_box_content">
                     <h3>Gold Plan</h3>
                     <h2><span>Rs.5000/Month</span></h2>
                        <ul>
                           <li>ELITE GYMs and classes</li>
                           <li>Personal training</li>
                           <li>Pro GYMs</li>
                           <li>Smart Workout Plan</li>
                           <li>At Home Workout</li>
                        </ul>
                     <a href="#" class="btn"><i class='bx bx-dollar-circle'></i>Buy</a>
                  </div>
               </div>
               
            </div>
         </div>
         
      </section>

      <!-- review section  -->
      <section = class="review" id="review">
         <div class="review_box">
            <h2 class="heading">Client <span>Reviews</span></h2>

            <div class="wrapper">
               <div class="review-item">
                  <img src="FFCimg/cbum.jpg" alt="">
                  <h2>cbum</h2>
                  <div class="ratings">
                     <i class='bx bxs-star'  id="star"></i>
                     <i class='bx bxs-star' id="star"></i>
                     <i class='bx bxs-star' id="star"></i>
                     <i class='bx bxs-star' id="star"></i>
                     <i class='bx bxs-star' id="star"></i>
                  </div>
                  <p>this gym is soo nice</p>
               </div>

               <div class="review-item">
                  <img src="FFCimg/shaki.jpg" alt="">
                  <h2>Shakya Parindi</h2>
                  <div class="ratings">
                     <i class='bx bxs-star' id="star"></i>
                     <i class='bx bxs-star' id="star"></i>
                     <i class='bx bxs-star' id="star"></i>
                     <i class='bx bxs-star' id="star"></i>
                     <i class='bx bxs-star' id="star"></i>
                  </div>
                  <p>Great Gym with a wide variety of cardio/weight training equipment / machines/free weights to choose from. Exercise & training made all the more enjoyable by super friendly /helpful staff .Its a great place to work out. I always enjoy working out there. Location is fantastic with easy access from all routes. I have to recommend this GYM with a 5*</p>
               </div>

               <div class="review-item">
                  <img src="FFCimg/cbum.jpg" alt="">
                  <h2>cbum</h2>
                  <div class="ratings">
                     <i class='bx bxs-star' id="star"></i>
                     <i class='bx bxs-star' id="star"></i>
                     <i class='bx bxs-star' id="star"></i>
                     <i class='bx bxs-star' id="star"></i>
                     <i class='bx bxs-star' id="star"></i>
                  </div>
                  <p>this gym is soo nice</p>
               </div>
            </div>
         </div>
      </section>

      <footer class="footer">
         <div class="social-media">
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-instagram' ></i></a>
            <a href="#"><i class='bx bxl-tiktok' ></i></a>
         </div>

         <p class="copyright">
            &copy; Fit_zone fitness 2024 - All rights reserved
         </p>
      </footer>


   <script src="FFC.js"></script>  

   </body>
</html>