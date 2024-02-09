<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ElectroHub</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ingrid+Darling&display=swap" rel="stylesheet">
</head>
<body>

 <!-- The navigation start  -->
  <nav class="row align-content-center" id="nav">

    <!-- logo and the humburger menu -->

    <div class="col-lg-1 col-3 col-sm-1 d-flex justify-content-evenly ">
        <div class="menu-hum ">
               <div class="hmenu-line"></div> 
               <div  class="hmenu-line" ></div>
               <div  class="hmenu-line"></div>
        </div>
    </div>

    <div class="logo col-lg-3 col-5 col-sm-3"><a href="index.html">  ElectroHub</a></div> 

    <!-- adding icon form xsm screen size -->
    <div class="col-4 d-flex d-sm-none d-md-none d-lg-none d-xxl-none">
        <img src="img/person-fill.svg" alt="login option" class="navbar-menu-icon col-6">
        <img src="img/chat-fill.svg" alt="chat with customer" class="navbar-menu-icon col-6">
    </div>
      
    <!-- logo and the humburger menu end  -->

    <!-- search box start  -->

    <div class="col-lg-3 col-10 col-sm-6 ">
         <div class="serach d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <div id="search-icon"><img src="img/search (1).svg" alt="search icon"></div>
         </div>
    </div>
    <!-- search box end -->

    <!-- nav menu start  -->
    <div class="col-lg-5  col justify-content-evenly  d-none d-sm-none d-md-none d-lg-flex align-content-center">
         <div class="navbar-menu d-flex">
            <p> Customer <br>services</p>
            <img src="img/chat-fill.svg" alt="img of the svg" class="navbar-menu-icon">

         </div>
         <div class="navbar-menu d-flex" >
            <p>Stores</p>
            <img src="img/geo-alt-fill.svg" alt="img of the location" class="navbar-menu-icon">
         </div>
         <div class="navbar-menu d-flex">
            <p>Shopping carts</p>
            <img src="img/basket.svg" alt="the shopping cart" class="navbar-menu-icon">
         </div>
         <div class="navbar-menu d-flex">
            <p><a href="login.html">login</a></p>
            <img src="img/person-fill.svg" alt="the user login icon" class="navbar-menu-icon">
         </div>
    </div>
    <!-- nav menu end  -->

    <!-- smaller screen nav menu  -->
    <div class="col-2  d-flex d-sm-flex d-md-flex d-lg-none d-xxl-none"> 
      <img src="img/basket.svg" alt="the shopping basket" class="navbar-menu-icon">
      <img src="img/person-fill.svg" alt="login person icon" class="d-none d-sm-flex d-md-flex navbar-menu-icon">
      <img src="img/chat-fill.svg" alt="customer service" class="d-none d-sm-flex d-md-flex navbar-menu-icon">
    </div>
    <!-- smaller screen nav menu end  -->
  </nav>
<!-- Navigation bar end  -->


<!-- body code start -->
  <div id="widerscreen-space">

   <!-- landing page first row start  -->
     <div class="row text-center img-reponsive " id="landing-page-bg-img">
       <div ><img src="img/discount.png" class="img-fluid col-2  " id="discount-img" alt="discount image " ></div>
       <div class="col-10 text-center" id="h1forimg" ><h1 > Great offer in Stores and online !</h1></div>
       <div id="hello"><button ><h6>See our offers</h6></button></div>
     </div>
    <!-- landing page first row end  -->

    <!-- second row of the body start  -->
      <div class="row second-row">

        <!-- first coloum flash sales -->
        <div class="col-12 col-sm-6 col-md-6 col-lg-4  text-center">
          <h1 id="heading-of-second-row">Flash Sales</h1>
          <hr>
          <img src="img/iphone15pro.png" id="iphone" class="img-fluid" alt="Iphone 15 promax">
          <h6>IPhone 15 ProMax  Dual SIM 256GB <br>15MegaPixel Rear Camera</h6>
           <p id="items-features">. Front camera 15Pixel <br>. Back Camera 48 Pixel</p>
           <div id="prices">
            <p >save 50€</p>
           </div>
          <div>
            <p id="pricess">1500€</p>
          </div>
 

          </div>
        <!-- first column flash sales end  -->

            <!-- second  column of the row start from here  -->
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 text-center second-body-second-column">
           <h1 id="heading-of-second-row">Most popular products</h1>
           <hr>
          <div class="row">
            <p class="col-6">Telephones </p>
            <p class="col-3"></p>
            <p class="col-3 click">><p>
          </div>
           <hr>
           <div class="row">
            <p class="col-6">Computers </p>
            <p class="col-3"></p>
            <p class="col-3 click">><p>
            </div>
           <hr>
           <div class="row">
            <p class="col-6">Washing Macchine </p>
            <p class="col-3"></p>
            <p class="col-3 click">><p>
            </div>
           <hr>
           <div class="row">
            <p class="col-6">Smart Watch </p>
            <p class="col-3"></p>
            <p class="col-3 click">><p>
            </div>
           <hr>
           <div class="row">
            <p class="col-6">Vaccumm Cleaner</p>
            <p class="col-3"></p>
            <p class="col-3 click">><p>
            </div>
           <hr>
           <div class="row">
            <p class="col-6">Digital Camera</p>
            <p class="col-3"></p>
            <p class="col-3 click"><a href="img/iphone.jpeg">></a><p>
            </div>
           <hr>
        </div>
        <!-- end of the second column of secornd row  -->

        <!-- start the third column of  second row  -->
        <div class="col-12 col-sm-12 col-md-12 col-lg-4 text-center">
           <h1 id="heading-of-second-row">Selection From The Products</h1>
           <hr>
           <!-- headphone and its description  -->

           <div class="row">
                <div id="ovalshape-image" class="col-4 "><img src="img/studioproheadphone.jpg" alt=" image of studio pro headphones" class="img-fluid" ></div>
                <div id="item-description"  class="col-8"> 
                  <p> <h3 >JBL Head Phone version 3.5</h3> </p>
                  <div  class="row">
                    <p class="col-4"></p>
                    <p class="col-4" id="price">105€</p>
                    <p class="col-4"></p>
                  </div>
                </div>
           </div>
             
           <!-- washing machine code  -->
           <div class="row">
             <div id="ovalshape-image" class="col-4 "><img src="img/washingMachine.png" alt=" image of studio pro washingmachine" class="img-fluid" ></div>
             <div id="item-description"  class="col-8"> 
               <p> <h3 >Washing Machine</h3> </p>
               <div  class="row">
                <p class="col-4"></p>
                <p class="col-4" id="price">€700</p>
                <p class="col-4"></p>
               </div>
             </div>
           </div>

           <!-- Samsung galaxy  -->
           <div class="row">
            <div id="ovalshape-image" class="col-4 "><img src="img/samsung.jpg" alt=" image of studio pro headphones" class="img-fluid" ></div>
            <div id="item-description"  class="col-8"> 
              <p> <h3 >Samsung Galaxy S24Ultra</h3> </p>
              <div  class="row">
               <p class="col-4"></p>
               <p class="col-4" id="price">€1399</p>
               <p class="col-4"></p>
              </div>
            </div>
          </div>

          <!-- macbook pro  -->
          <div class="row">
            <div id="ovalshape-image" class="col-4 "><img src="img/macbookpro13M18GB256GBSSD.jpg" alt=" image of macbookpro" class="img-fluid" ></div>
            <div id="item-description"  class="col-8"> 
              <p> <h3 >macbook pro 13</h3> </p>
              <div  class="row">
               <p class="col-4"></p>
               <p class="col-4" id="price">€1600</p>
               <p class="col-4"></p>
              </div>
            </div>
          </div>

        <!-- third  end of third column of the second  row -->
      
      </div>
    <!-- seond row of the body end  -->
    <hr>


    <!-- third row of the body start where is picture of phone will appear  -->
    <div class="row">
       <div class="col-lg-6 col-12 img-fluid" id="third-row-img"><img src="img/iphone2.png" alt="this is the picture of the iagepnone on landing p"></div>
       <div class="col-lg-6 d-none d-sm-none d-md-none d-lg-flex img-fluid"><img src="img/iphone3.png" alt="this is the picture of the iagepnone on landing p"></div>
    </div>
    <!-- this is the end of the third row  -->
    <div class="text-center" id="notice-products">
      <h1>Did you notice that products?</h1>
    </div>
    <div id="ale">
      <img src="img/ale.png" class="img-fluid" alt="this is the ale ale picture">
    </div>
    <!-- forth row start from here  -->
    
    <!-- forth row first column  -->
   
    <div class="row justify-content-center align-items-center " id="moving-center">
       <!-- items1 -->
      <div class="col-12 col-md-6 col-lg-3 justify-content-center align-content-center">
       <img src="img/iphone15pro.png" id="iphone" class="img-fluid" alt="Iphone 15 promax">
          <h6>IPhone 15 ProMax  Dual SIM 256GB <br>15MegaPixel Rear Camera</h6>
           <p id="items-features">. Front camera 15Pixel <br>. Back Camera 48 Pixel</p>
           <div id="tprices">
            <p >save 50€</p>
           </div>
         <div style="display: flex; align-items: center;">
            <p id="tpricess">1500€</p>
            <p style="margin-left:70px;">    <?php $product_id = 1;include './loadingfeedback.php'; ?></p>
    </div>

      </div>
      <!-- end first items  -->

      <!-- items 2 -->
       <div class="col-12 col-md-6 col-lg-3 justify-content-center align-content-center">
         <img src="img/APPLE IPHONE 14 128 GT STAR WHITE.png" id="iphone" class="img-fluid" alt="Iphone 14">
           <h6>IPhone 14 128GT STAR WHITE <br>15MegaPixel Rear Camera</h6>
            <p id="items-features">. Front camera 15Pixel <br>. Back Camera 48 Pixel</p>
            <div id="tprices">
             <p >save 50€</p>
            </div>
          <div style="display: flex; align-items: center;">
            <p id="tpricess">1050€</p>
            <p style="margin-left:70px;">    <?php $product_id = 2; include './loadingfeedback.php'; ?></p>
    </div>
      
         
           

       </div>
      <!-- items2 end  -->

      <!-- items3 start  -->
        <div class="col-12 col-md-6 col-lg-3 justify-content-center align-content-center">
         <img src="img/Smart-watches.png" id="iphone" class="img-fluid" alt="Smart watch">
           <h6>APPLE WATCH ULTRA 2 GPS <br>CELLULAR, 49MM TITANIUM CASE, BLUE ALPINE STRAP - MEDIUM</h6>
            <p id="items-features">GPS + Cellular <br>Environmentally responsible production<br>
              M - fits 145-190 mm wrists</p>
            <div id="tprices">
             <p >save 50€</p>
            </div>
          <div style="display: flex; align-items: center;">
            <p id="tpricess">750€</p>
            <p style="margin-left:70px;">    <?php $product_id = 3; include './loadingfeedback.php'; ?></p>
    </div>
       </div>

       <!-- items3 end -->
    </div>
    
    <!-- forth row end here  -->
  </div>
  <!-- fifth row of the vody start  -->
  <div class="row justify-content-center align-items-center " id="moving-center">
    <!-- items1 -->
   <div class="col-12 col-md-6 col-lg-3 justify-content-center align-content-center">
    <img src="img/tv.png" id="iphone" class="img-fluid" alt="Smart tv">
       <h6>Samsung Smart <br> 32 inch Q-led Tv</h6>
        <p id="items-features">32" 120 Hz FHD+ HDR QLED screen <br/>Quantum Processor 4K <br/>
       4K@120Hz, FreeSync, VRR, ALLM, HGiG
       </p>

        <div id="tprices">
         <p >save 50€</p>

        </div>
        <div style="display: flex; align-items: center;">
            <p id="tpricess">550€</p>
            <p style="margin-left:70px;">    <?php $product_id = 4; include './loadingfeedback.php'; ?></p>
    </div>
   </div>
   <!-- end first items  -->

   <!-- items 2 -->
   <div class="col-12 col-md-6 col-lg-3 justify-content-center align-content-center">
    <img src="img/HP Laptop 14-em0008no 14 laptop, Win 11 .png" id="iphone" class="img-fluid" alt="Hp laptops">
    <h6>IPhone 14 128GT STAR WHITE <br>15MegaPixel Rear Camera</h6>
    <p id="items-features">AMD Ryzen™ 7 5825U processor<br>15.6" FHD SVA screen</p>

        <div id="tprices">
            <p>save 50€</p>
        </div>
      <div style="display: flex; align-items: center;">
            <p id="tpricess">550€</p>
            <p style="margin-left:70px;">    <?php $product_id = 5; include './loadingfeedback.php'; ?></p>
    </div>
</div>
   <!-- items2 end  -->
   <!-- items3 start  -->
     <div class="col-12 col-md-6 col-lg-3 justify-content-center align-content-center">
      <img src="img/jbl.png" id="iphone" class="img-fluid" alt="JBL Speaker">
        <h6>Portable party speaker with light effects <br>and wireless microphone</h6>
         <p id="items-features">JBL Pro Sound with 100 W power<br>Battery life: 6 hours<br>Water resistant (IPX4)
           </p>
         <div id="tprices">
          <p >save 50€</p>
         </div>
      <div style="display: flex; align-items: center;">
            <p id="tpricess">250€</p>
            <p style="margin-left:70px;">    <?php
$product_id = 6;
include './loadingfeedback.php';
 ?></p>
    </div>
    </div>

    <!-- items3 end -->
 </div>
 
  <!-- fifth row of the body end -->
<!-- end of the body -->

<!-- footer codding start -->
    <footer>
      <div class="row "> 
        <div class="col-12 col-md-6 col-lg-4" id="footer-first-row">
          <p id="footer-heading">Contact-Us</p>
         <hr id="hr">
         <!-- website link  -->
         <div  class="row " id="footer-row" >
          <p id="footer-img" class="col-3"><img src="img/Internet.png" alt="logo of internet"></p>
          <a href="index.html" id="footer-text" class="col-9">www.electrohub.fi</a>
         </div>

         <!-- location link  -->
         <div  class="row " id="footer-row" >
          <p id="footer-img" class="col-3"><img src="img/geo-alt-fill.svg" alt="logo of internet"></p>
          <a href="https://www.google.com/maps/@60.178432,24.9462784,11z?entry=ttu" id="footer-text" class="col-9">Helsingiforskatu 25</a>
         </div>
         <!-- email link  -->  
         <div  class="row " id="footer-row" >
          <p id="footer-img" class="col-3"><img src="img/Email.png" alt="logo of internet"></p>
          <a href="mailto:electrohub@yahoo.fi" id="footer-text" class="col-9">electrohub@yahoo.fi</a>
         </div>
        </div>
         <!-- finnish contact us -->
        <!-- starting customer service  -->
         
          <div class="col-12 col-md-6 col-lg-4" id="footer-first-row">
            <p id="footer-heading">Customer Services</p>
            <hr id="hr">
          
           <div  class="row " id="footer-row" >
            <p class="col-3"></p>
            <p id="footer-text" class="col-9">About ElectroHub</p>
           </div>
           <div  class="row " id="footer-row" >
            <p class="col-3"></p>
            <p id="footer-text" class="col-9">Jobs</p>
           </div>
           <div  class="row " id="footer-row" >
            <p class="col-3"></p>
            <p id="footer-text" class="col-9">Privacy Policy</p>
           </div>
           <div  class="row " id="footer-row" >
            <p class="col-3"></p>
            <p id="footer-text" class="col-9">Deliveries</p>
           </div>
          </div>
         <!-- end of the customer service  -->

         <!-- start follow us  -->
         
          <div class="col-12 col-md-6 col-lg-4" id="footer-first-row">
             <p id="footer-heading">Follow Us</p>
            <hr id="hr">
            <!-- facebook link  -->
            <div  class="row " id="footer-row" >
            <p id="footer-img" class="col-3"><img src="img/fb.png" alt="logo of internet"></p>
            <a href="index.html" id="footer-text" class="col-9">Facebook</a>
            </div>
  
           <!-- Twitweer -->
            <div  class="row " id="footer-row" >
            <p id="footer-img" class="col-3"><img src="img/twitter.png" alt="logo of internet"></p>
            <a href="https://www.google.com/maps/@60.178432,24.9462784,11z?entry=ttu" id="footer-text" class="col-9">Twitter</a>
            </div>
            <!-- Instagram   -->
            <div  class="row " id="footer-row" >
            <p id="footer-img" class="col-3"><img src="img/Instagram.png" alt="logo of internet"></p>
            <a href="mailto:electrohub@yahoo.fi" id="footer-text" class="col-9">Instagram</a>
            </div>
            <!-- tiktok -->
            <div  class="row " id="footer-row" >
            <p id="footer-img" class="col-3"><img src="img/Tiktok.png" alt="logo of internet"></p>
            <a href="mailto:electrohub@yahoo.fi" id="footer-text" class="col-9">TikTok</a>
            </div>
          </div>
         <!-- end of the follow us -->
         <div class="col-12 text-center " id="company-copyright">
          <p>Copyright@ElectroHub OY</p>
         </div>
      </div>
      
    </footer>
<!-- footer code end -->



<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>


</body>
</html>