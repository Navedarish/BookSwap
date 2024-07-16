<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
    header("location: registration.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Story Books</title>
    <link rel="stylesheet" href="mainpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <section>
        <div class="header">
            <div class="menu">
                <div class="logo">
                    <img src="image/logo.png">
                </div>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="25.Offers.php">Offers</a></li>
                <li><a href="#">Setting</a>
                    <ul>
                        <li><a href="29.Profile.php">Profile</a></li>
                        <li><a href="37.Wallet.php">Wallet</a></li>
                        <li><a href="51.orders.php">Orders</a></li>
                        <li><a href="31.Notification.php">Notifications</a></li>
                        <li><a href="33.AboutUs.php">About Us</a></li>
                        <li><a href="27.ContactUs.php">Contact Us</a></li>
                        <li><a href="35.T&C.php">Term's & Condition</a></li>
                    </ul>
                </li>
                <li><a href="logout.php">Logout</a></li>
                </ul>
                <div class="searchbox">
                    <input type="search" name="" placeholder="Search Books">
                    <button><a href="#">Search</a></button>
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <a href="09.MainPage.php">
                <div class="logo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-house-door" viewBox="0 0 15 15"> 
                        <path
                            d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"
            />
                    </svg>
                    Home
                </div>
            
            </a>
            <a href="11.NovelBook.php">Novels Books</a>
            <a href="23.SchoolBook.php">School Books</a>
            <a href="13.FictionBook.php">Fiction Books</a>
            <a href="17.BPharmaBook.php">B.Pharma Books</a>
            <a href="15.MPharmaBook.php">M.Pharma Books</a>
            <a href="19.EngineeringBook.php">Engineering Books</a>
            <a href="21.DiplomaBook.php">Diploma Engineering Books</a>
        </div>
        
<div class="container2">
    <a href="#">
        <div class="logo">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                class="bi bi-filter-left" viewBox="0 0 16 16">
                <path
                    d="M2 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
            </svg>
        </div>
    </a>
 <br>
    <a href="#">
        <label for="Subject"></label>
        <select name="filter" id="#">
            <option value="abc">Subject</option>
        </select>

    </a>

    <a href="#">
        <label for="Condition"></label>
        <select name="filter" id="#">
            <option value="abc">Condition</option>
            <option value="abc">New</option>
            <option value="abc">Used</option>
        </select>
    </a>

    <a href="#">
        <label for="Price"></label>
        <select name="myState" id="state">
            <option value="abc">Price</option>
            <option value="abc">under 100</option>
            <option value="abc">100-199</option>
            <option value="abc">200-299</option>
            <option value="abc">300-399</option>
            <option value="abc">400-499</option>
            <option value="abc">500-599</option>
            <option value="abc">600-699</option>
        </select>
    </a>

    <a href="#">
        <label for="Offers"></label>
        <select name="filter" id="#">
            <option value="abc">Offers</option>
            <option value="abc">10% Discount</option>
            <option value="abc">25% Discount</option>
            <option value="abc">50% Discount</option>
            <option value="abc">70% Discount</option>
        </select>
    </a>

    <a href="#">
        <label for="Published Year"></label>
        <select name="filter" id="#">
            <option value="abc">Published Year</option>
            <option value="abc">1999</option>
            <option value="abc">2000</option>
            <option value="abc">2001</option>
            <option value="abc">2002</option>
            <option value="abc">2003</option>
            <option value="abc">2004</option>
            <option value="abc">2005</option>
            <option value="abc">2006</option>
            <option value="abc">2007</option>
            <option value="abc">2008</option>
            <option value="abc">2009</option>
            <option value="abc">2010</option>
            <option value="abc">2011</option>
            <option value="abc">2012</option>
            <option value="abc">2013</option>
            <option value="abc">2014</option>
            <option value="abc">2015</option>
            <option value="abc">2016</option>
            <option value="abc">2017</option>
            <option value="abc">2018</option>
            <option value="abc">2019</option>
            <option value="abc">2020</option>
            <option value="abc">2021</option>
        </select>
    </a>

    <button>Apply</button>

</div>
<div class="img1">
    <div id="border1">
        <div class="card">
            <div class="flip-card">
               <div class="front">
   <img src="image/13reasons.jpg" width="200px" height="300px">
</div>


</div> 
</div>
</div>
</div> 
<div class="order1">
    <br>
   <h2> 13 Reasons Why  </h2>
   
   <h4> Seller Name : Aishika Pal
       <br>
       Availability: In Stock
   </h4>
   <br>
   <h3> ₹ 220.00 </h3>
  <br>
   <div class="stars flex text-center ">
       <img src="image/shopping cart.jpg"  width="30" height="30">
   </div>
   <br>

   <div class=quantity>
       <label for="Quantity"> Select Quantity </label>
       <select name="Quantity" id="Quantity">
           <Option value="RE"> 1 </Option>
           <Option value="RE"> 2 </Option>
           <Option value="RE"> 3 </Option>
   </div>
   </select>
   <br>
  
 
   <div class="icon1">
       <br>
       <button>
        <i class="fa fa-shopping-cart"></i>

           <span> Add to cart </span>
       </button>
   </div>
   <div>
   <a href="book_description.php" class="about_btn">Learn More</a>
   </div>
</div>
</div>
  <br> 

   <div class="img2">
       <div id="border2">
        <div class="card">
            <div class="flip-card">
               <div class="front">
       <img src="image/13reasons.jpg" width="200px" height="300px">
   </div>
   
    <br>
    
       
</div> 
</div>
</div>
</div> 
   <div class="order2">
       <h2> Holy Vedas (Grapevine India Publishers) </h2>

       <h4> Seller Name : Aishika Pal
           <br>
           Availability: In Stock
       </h4>
        <br>
       <h3> ₹ 270.00 </h3>
       <br>
       <div class="stars flex text-center ">
           <img src="image/" alt="">

       </div>
       <br>
       <div class=quantity>
           <label for="Quantity"> Select Quantity </label>
           <select name="Quantity" id="Quantity">
               <Option value="RE"> 1 </Option>
               <Option value="RE"> 2 </Option>
               <Option value="RE"> 3 </Option>
       </div>
       </select>
       <br>

       <div class="icon1">
           <br>
           <button>
            <i class="fa fa-shopping-cart"></i>

               <span> Add to cart </span>
           </button>
       </div>
       <div>
       <a href="#" class="about_btn">Learn More</a>
       </div>

          
 <div>
</div>
</div>
     <div class="img3">
           <div id="border3">
            <div class="card">
                <div class="flip-card">
                   <div class="front">
           <img src="image/13reasons.jpg" width="200px" height="300px">
       </div>
       
           <br>
    </div> 
    </div>
    </div>
    </div> 
       <div class="order3">
           <h2> 13 Reasons Why ( Razorbill) </h2>
   
           <h4> Seller Name: Aishika Pal
               <br>
               Availability: In Stock
           </h4>
         <br>
           <h3> ₹ 299.00 </h3>
         <br>
     <div class="stars flex text-center ">
             
           </div>
           <br>
           <div class=quantity>
               <label for="Quantity"> Select Quantity </label>
               <select name="Quantity" id="Quantity">
                   <Option value="RE"> 1 </Option>
                   <Option value="RE"> 2 </Option>
                   <Option value="RE"> 3 </Option>
           </div>
           </select>
           <br>

           <div class="icon2">
               <br>
               <button>
                <i class="fa fa-shopping-cart"></i>

                   <span> Add to cart </span>
               </button>
           </div>

           <div>
            <a href="#" class="about_btn1">Learn More</a>
            </div>
       </div>
       <div class="img4">
        <div id="border4">
         <div class="card">
             <div class="flip-card">
                <div class="front">
        <img src="image/13reasons.jpg" width="200px" height="300px">
    </div>
    
        <br>
 </div> 
 </div>
 </div>
 </div> 
 <br>
 <br>
 <br>
 <br>
 <br>
    <div class="order4">
        <h2> 13 Reasons Why ( Razorbill) </h2>

        <h4> Seller Name: Aishika Pal
            <br>
            Availability: In Stock
        </h4>
      <br>
        <h3> ₹ 299.00 </h3>
      <br>
  <div class="stars flex text-center ">
            

        </div>
        <br>
        <div class=quantity>
            <label for="Quantity"> Select Quantity </label>
            <select name="Quantity" id="Quantity">
                <Option value="RE"> 1 </Option>
                <Option value="RE"> 2 </Option>
                <Option value="RE"> 3 </Option>
        </div>
        </select>
        <br>

        <div class="icon1">
            <br>
            <button>
                <i class="fa fa-shopping-cart"> </i>

                <span> Add to cart </span>
            </button>
        </div>

        <div>
            <a href="#" class="about_btn">Learn More</a>
            </div>
    </div>
      
          


            
        </div>
        </div>
        </div> 
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
   
       <div class="pagination">
        <button class="page-btn">1</button>
        <button class="page-btn">2</button>
        <button class="page-btn">3</button>
        <button class="page-btn">4</button>
        <button class="page-btn">5</button>
    </div>
    
           
    </section>
    
    
</body>
</html>