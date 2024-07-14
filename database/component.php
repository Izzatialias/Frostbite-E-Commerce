<?php

function component($M_name, $M_price, $M_img, $M_Code){
    $element = "
    
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
                <form action=\"cakes.php\" method=\"post\">
                    <div class=\"card shadow\">
                        <div>
                            <img src=\"$M_img\" alt=\"Image1\" class=\"img-fluid card-img-top\">
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$M_name</h5>
                            <p class=\"card-text\">
                                NOHOHOH
                            </p>
                            <h5>
                                <span class=\"price\">RM$M_price</span>
                            </h5>
                            <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                             <input type='hidden' name='M_Code' value='$M_Code'>
                        </div>
                    </div>
                </form>
            </div>
    ";
    echo $element;
}

function cartElement($M_img, $M_name, $M_price, $M_Code){
    $element = "
    
    <form action=\"cart.php?action=remove&id=$M_Code\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$M_img alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$M_name</h5>
                                <h5 class=\"pt-2\">RM$M_price</h5><br>
								 
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