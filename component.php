<?php

function component($bookimg,$bookname,$sellername,$bookprice,$bookid){
    $element = "
    
    <div class=\"col-md-3 col-sm-7 my-4 my-md-1\">
    <form action=\"01.mainpage.php\" method=\"post\">
       <div class=\"card shadow\">
           <div>
               <img src=\"$bookimg\" alt=\"book_1\" class=\"img-fluid card-img-top\">
           </div>
           <div class=\"cared-body\">
               <h5 class=\"card-title\">$bookname</h5>
               <h6>
                   <i class=\"fas fa-star\"></i>
                   <i class=\"fas fa-star\"></i>
                   <i class=\"fas fa-star\"></i>
                   <i class=\"fas fa-star\"></i>
                   <i class=\"far fa-star\"></i>
               </h6>
               <p class=\"card-text\">Seller Name:
                   $sellername
               </p>
               <h5 class=\"price\">
                   <small><s class=\"text-secondary\">₹400</s></small>
                   <span class=\"price\">₹$bookprice</span>
               </h5>
               <button type=\"submit\" class=\"btn btn-info\" name=\"add\">Add to cart<i class=\"fas fa-shopping-cart\"></i></button>
               <input type='hidden' name='bookid' value='$bookid'>
               
               <button type=\"Learn More\" class=\"btn btn-info\">Learn More
               <a href=\"book_description.php\">
               </button>
               </a>

           </div>
       </div>
    </form>
    </div>
    ";
    echo $element;
}
function cartElement($bookimg, $bookname,$sellername, $bookprice,$bookid){
    $element = "
    
    <form action=\"cart.php?action=remove&id=$bookid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$bookimg alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$bookname</h5>
                                <small class=\"text-secondary\">Seller:$sellername </small>
                                <h5 class=\"pt-2\">₹$bookprice</h5>
                                <button type=\"submit\" class=\"btn btn-warning\">Save for Later</button>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                            </div>
                            <div class=\"col-md-3 py-5\">
                                <div>
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
                                    <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}
?>