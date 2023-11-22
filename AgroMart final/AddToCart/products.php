<?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>AgroMart</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <div class="container">
                <div class="jumbotron">
                    <h1>Welcome to our AgroMart Store!</h1>
                    <p>We have the best fertilizers and seeds for you. No need to hunt around, we have all in one place.</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/1.jpeg" alt="Bio">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Geolife Flowering kit</h3>
                                    <p><h4>MRP-675(50 gm)</h4><br>
<h4>Brand:</h4> Geolife Agritech India Pvt. Ltd.<br>
<h4>Item Form:</h4>Powder<br>
<h4>Description:</h4>NANO VIGORE: It is an unique nano technology product to profuse flowering.It provides rapid absorption & quick response from plant.
It increase yield & quality to optimum level. 
It can be applied on all crops where flowering plays a major role in its life cycle<br>
<h4>Dosage:</h4>1gm for 150- 200 liters of water/acre</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/2.jpeg" alt="Bio">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>TIGER N 20 </h3>
                                    <p><h4>MRP-120(1 L)</h4><br>
<h4>Brand:</h4>Noble Crop Science,NCS Tiger N-20<br>
<h4>Item Form:</h4>Liquid<br>
<h4>Description:</h4>TIGER N20 is based on liquid Sulphur.
Sulphur is an effective fungicide and plant nutrient<br>
<h4>Dosage:</h4>40-50 Ml for 15 Litr water spreay volume</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(2)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/3.jpeg" alt="Bio">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>ABTEC PSEUDO</h3>
                                    <p><h4>MRP-</h4>250(1 kg)<br>
<h4>Brand:</h4> ABTEC<br>
<h4>Item Form:</h4>Powder<br>
<h4>Description:</h4><br>
ABTEC Pseudo Chitinase Plus is a chitinase induced liquid formulation of Pseudomonas flourescens. 
In addition to all the benefits of ABTEC Pseudo , ABTEC Pseudo Chitinase Plus has the added benefit of controlling soft tissue pests.<br>
<h4>Dosage:</h4>Mix 500 ml ABTEC Pseudo in 50 litres of water and spray on the foliage during evening hours.</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(3)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/4.jpeg" alt="Organic">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>HUBEL </h3>
                                    <p><h4>MRP-</h4>174(250 gm)<br>
<h4>Brand:</h4>Noble Crop Science<br>
<h4>Item Form:</h4>Powder<br>
<h4>Description:</h4>HUBEL is a combination of Super Potassium Humate and Fulvic Acid. It has excellent beneficial with nutrients and compost. 
Hence mix with vermicompost/microbial compost HUBEL.<br>
<h4>Dosage:</h4>For Spraying: 15-25 gm per 15 litre spray volume.</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(4)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=4" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/5.jpeg" alt="Oragnic">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Prime 7525 </h3>
                                    <p><h4>MRP-</h4>900(1 L)<br>
                                    <h4>Brand:</h4> BioPrime AgriSolutions Pvt. Ltd.<br>
                                    <h4>Categories:</h4> Certified Organic Products, Plant Growth Stimulator<br>
                                    <h4>Item Form:</h4>Liquid<br>
                                    <h4>Description:</h4>
Bioprime’s Prime 7525 advanced complex blend of naturally derived essential minerals and nutrients that act as a super charger along with seaweed extracts. 
It helps in increase of foliage along with inducing more flowering and ultimately fruit conversion.  
It helps to get uniform fruit size and weight with uniform harvesting every plucking. 
7525 is completely biodegradable and residue free.<br>
<h4>Dosage:</h4>Foliar Spray with 1.5 ml / Liter</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(5)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=5" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/6.jpeg" alt="Organic">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Prime 1515   </h3>
                                    <p><h4>MRP-</h4>320(500 ml)<br>
                                    <h4>Brand:</h4> BioPrime AgriSolutions Pvt. Ltd.<br>
                                    <h4>Categories:</h4> Certified Organic Products, Plant Growth Stimulator<br>
                                    <h4>Item Form:</h4>Liquid<br>
                                    <h4>Description:</h4>
Bioprime’s Prime 1515 is a unique blend of Humic fortified with nutrients & biostimulants. Fast acting formulation of Humic acid and other bio-stimulants that acts like a booster. 
Induces white roots.  
Better nutrient uptake and absorption. Instantly boosts growth.<br>
<h4>Dosage:</h4>Foliar Spray with 500 ml / Acre</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(6)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=6" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/7.jpeg" alt="Chemical">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Magnesium Sulphate  </h3>
                                    <p><h4>MRP-</h4>32(1 kg)<br>
                                    <h4>Brand:</h4>Sikko<br>
                                    <h4>Item Form:</h4>Powder<br>
                                    <h4>Description:</h4>Magnesium Sulphate Fertilizer (MgSo4) offered is made available under Sikko brand.
Perfect for acid soil, highly leaching soil, sandy soils<br>
<h4>Dosage:</h4>Foliar Spray with 4-5 g/L</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(7)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=7" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/8.jpeg" alt="Chemical">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>NPK 00:52:34   </h3>
                                    <p><h4>MRP-</h4>400(1 kg)<br>
                                    <h4>Brand:</h4>SHAMROCK AL-SACH With Logo (Label Mark)<br>
                                    <h4>Item Form:</h4>Granules<br>
                                    <h4>Description:</h4>
NPK 00:52:34 (Mono Potassium Phosphate) is a free flowing, 100% water soluble product and recommended to used for drip fertigation. 
It supplies P and K at crop growth stages, when Nitrogen is not required.This product is a source of potassium and phosphorus. 
It is also a buffering agent.<br>
<h4>Dosage:</h4>foliar spray - 3 - 6 gm per litre.</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(8)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=8" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/9.jpeg" alt="Chemical">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Katyayani 3In1  </h3>
                                    <p><h4>MRP-430(100 ml)</h4><br>
                                    <h4>Brand:</h4>SHAMROCK<br>
                                    <h4>Item Form:</h4>Liquid<br>
                                    <h4>Description:</h4>It is Cost effective 3 in 1 product.
it is a New Technology ORGANIC PESTICIDE solution with Its Unique 3 in 1 Action. 
3 in 1 Money Saver Product under 500 with features of 3 products in a single product.<br>
<h4>Dosage:</h4>Only 4 ml Per Liter Water That means 200 ml</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(9)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=9" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/10.jpeg" alt="hybridseed">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>MAHYCO-MAHA KALPATARU  </h3>
                                    <p><h4>MRP-</h4>560(100 gm)<br>
                                    <h4>Brand :</h4> Mahyco seeds<br>
                                    <h4>Item Form:</h4>Solid<br>
                                    <h4>Description:</h4>Purple variegated This high yielding variety is used for curry as well as for paste.
It has a high rejuvenation capacity that makes it good for rationing.</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(10)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=10" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/11.jpeg" alt="hybridseed">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Mahyco-Mahy Anagha Tomato Seeds</h3>
                                    <p><h4>MRP-</h4>560(200 gm)<br>
                                    <h4>Brand:</h4>Generic<br>
                                    <h4>Item Form:</h4>Other<br>
                                    <h4>Description:</h4>Regular Segment This semi-indeterminate hybrid variety with an average weight of 80-100 grams is tolerant to LCV.</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(11)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=11" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/12.jpeg" alt="hybridseed">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Mahyco MHCP 317    </h3>
                                    <p><h4>Sierra Hybrid Chilli Seeds</h4><br>
                                    <h4>MRP-</h4>1200(200 gm)<br>
                                    <h4>Brand:</h4>MAHYCO<br>
                                    <h4>Item Form:</h4>Solid<br>
                                    <h4>Description:</h4>Green These fresh green, medium long and shiny green fruit are heavy bearing and have good rejuvenation capabilities.
This hybrid variety is tolerant to powdery mildew.</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(12)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=12" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/13.jpeg" alt="naturalseed">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Bansi Desi Kantola Seeds   </h3>
                                    <p><h4>MRP-</h4>40(200 gm)<br>
                                    <h4>Brand:</h4>Momordica dioica<br>
                                    <h4>Item Form:</h4>Generic<br>
                                    <h4>Description:</h4>Scientific name of kantola seed is Momordica dioica, commonly known as  spine gourd and also known as bristly balsma pear, 
prickbyly carolaho, teasle gourd, is a species of flowering plant in the gourd family.</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(11)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=11" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/14.jpeg" alt="naturalseed">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Lemon Seeds  </h3>
                                    <p><h4>MRP-</h4>399(1 kg)<br>
                                    <h4>Brand:</h4>RK Seeds</br>
                                    <h4>Item Form:</h4>Solid</br>
                                    <h4>Description:</h4>Lemons can make excellent houseplants and will be comfortable in a container as long it provides adequate drainage and room for growth. 
Heights of around 3 to 5 feet can be expected for a lemon tree growing indoors.</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(11)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=11" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/15.jpeg" alt="naturalseed">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Melia Dubia Seeds      </h3>
                                    <p>Malaivembu Tree Seeds <br>    
                                    <h4>MRP-</h4>299(500 gm)<br>
                                    <h4>Brand:</h4>Murugan Seeds<br>
                                    <h4>Item Form:</h4>Solid<br>
                                    <h4>Description:</h4>It is best to sow seeds during March – April. 
Cleaned and dried seeds should be sown in the open raised nursery beds, in drilled lines, 5 cm apart. 
Seeds do not germinate in sand.</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(11)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=11" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br><br><br>
           
        </div>
    </body>
</html>
