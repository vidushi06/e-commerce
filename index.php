<?php

include "session.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" type="text/css" href="css/post.css">
<link href="css/multislider.css" rel="stylesheet">
<link href="css/slider_item.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<style type="text/css">
  
</style>
</head>
<body  onload="myFunction()">

  <div id="loading">

    
  </div>
<?php include "header.php" ?>

<section><!--start of slider-->

 <div class="carousel slide" data-ride="carousel" id="myslide" style="margin-top: -20px">


  <div class="carousel-inner">

      <div class="carousel-item active" data-interval="3000">
           <img src="image/items.jpg" alt="First slide" class="img-fluid" width="100%" style="height: 650px">
           
           <div class="carousel-caption">
                <h1 style="font-size: 50px;color: white;text-shadow: 2px 2px black;">Get all popular brands at one place :)</h1>
           </div>

      </div>

      <div class="carousel-item" data-interval="3000">
           <img src="image/sales.jpg" alt="First slide" class="img-fluid" width="100%"style="height: 650px">
           <div class="carousel-caption">
           		 <h1 style="font-size: 50px;text-shadow: 2px 2px black;" class="text-danger" >best of 2021</h1>
              <button style="border-radius: 20px;text-shadow: 2px 2px black;" class="btn btn-danger">Shop Now</button>
           </div>

      </div>

      <div class="carousel-item" data-interval="3000">
           <img src="image/cosmetics.jpg" alt="First slide" class="img-fluid" width="100%" style="height: 650px">
           <div class="carousel-caption">
           		<h1 class="text-warning" style="font-size: 50px;text-shadow: 2px 2px black;">20%<span class="text-light">Off on Best cosmetics Brands</span></h1>
           </div>

      </div>

      <div class="carousel-item" data-interval="3000">
           <img src="image/img.jpg" alt="First slide" class="img-fluid" width="100%" style="height: 650px">
           <div class="carousel-caption">
           		
           </div>

      </div>
         

  </div><!-- end carousel-inner-->


		 <!--  <ul class="carousel-indicators" style="height:1px">
		     <li data-target="#a" data-slide-to="0" class="active"></li>
		     <li data-target="#myslide" data-slide-to="1" class=""></li>
		     <li data-target="#myslide" data-slide-to="2" class=""></li>
		     <li data-target="#myslide" data-slide-to="3" class=""></li>
		  </ul> -->

		  
		  <a href="#myslide" data-slide="prev" class="carousel-control-prev">
		       <span class="carousel-control-prev-icon"></span>
		  </a>

		  <a href="#myslide" data-slide="next" class="carousel-control-next">
		       <span class="carousel-control-next-icon"></span>
		  </a>
	</div>
</section><!--end of slider-->

<section><!--start of nav-->

  <div class="container-fluid" style="background-color: #f0bb1b">
      <div class="container">
          <nav class="navbar navbar-expand-sm  navbar-dark">

            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="electronics.php">electronics</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="furniture.php">furniture</a>
              </li>
              <!-- Dropdown -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                  Clothing
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="mens.php">men</a>
                  <a class="dropdown-item" href="womens.php">women</a>
                </div>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
            </ul>
          </nav>
      </div>
  </div>
</section><!--end of nav-->

<br>
<!--start of covid essentials-->
<section>
  <div class="container-fluid">
        <section>
             <div class="row">
              <center><br>
                    <h3>COVID 19 <span class="underline">Essentials</span></h3>
              </center>

             <div id="blogSlider">
             <div class="MS-content">
                <div class="item">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#">
                            <img class="pic-1" src="https://tse4.mm.bing.net/th?id=OIP.cm7onbRVUkQjPMvoDlqvZAHaHa&pid=Api&P=0&w=300&h=300" style="height: 200px">
                            </a>
                                     
                            <ul class="social">
                                <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                <li><a href="" data-tip="Quick View"><i class="fa fa-heart"></i></a></li>
                                <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                            <span class="product-new-label">Sale</span>
                            <span class="product-discount-label">10%</span>
                        </div>
                        <ul class="rating">
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                        </ul>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Pack of 8 masks</a></h3>
                            <div class="price">
                                Rs.500
                                <span>Rs.378</span>
                            </div>
                            <a class="add-to-cart" href="">+ Add To Cart</a>
                        </div>
                    </div>
                </div>

                 <div class="item">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#">
                                <img class="pic-1" src="https://tse4.mm.bing.net/th?id=OIP.8tdBWWmTJspAmRYAtIY_1wHaHa&pid=Api&P=0&w=300&h=300" style="height: 200px">
                            </a>
                            <ul class="social">
                                <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                <li><a href="" data-tip="Quick View"><i class="fa fa-heart"></i></a></li>
                                <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                            <span class="product-new-label">Sale</span>
                            <span class="product-discount-label">20%</span>
                        </div>
                            <ul class="rating">
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                            </ul>
                            <div class="product-content">
                                <h3 class="title"><a href="#">N95 mask</a></h3>
                                <div class="price">
                                     Rs.950
                                     <span>Rs.450</span>
                                </div>
                                <a class="add-to-cart" href="">+ Add To Cart</a>
                            </div>
                        </div>
                    </div>                  


                    <div class="item">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#">
                                <img class="pic-1" src="https://tse4.mm.bing.net/th?id=OIP.E5Vj7GiXvizIXKMwIMe2MAHaEZ&pid=Api&P=0&w=259&h=155" style="height: 200px">
                                </a>
                                <ul class="social">
                                    <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                    <li><a href="" data-tip="Quick View"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                                    <span class="product-new-label">Sale</span>
                                    <span class="product-discount-label">20%</span>
                            </div>
                                 <ul class="rating">
                                     <li class="fa fa-star"></li>
                                     <li class="fa fa-star"></li>
                                     <li class="fa fa-star"></li>
                                     <li class="fa fa-star"></li>
                                     <li class="fa fa-star"></li>
                                 </ul>
                                 <div class="product-content">
                                     <h3 class="title"><a href="#">Covid special gloves</a> pack of 3</h3>
                                     <div class="price">
                                         Rs.599
                                         <span>Rs.250</span>
                                     </div>
                                     <a class="add-to-cart" href="">+ Add To Cart</a>
                                </div>
                        </div>
                    </div>


                    <div class="item">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#">
                                 <img class="pic-1" src="https://tse4.mm.bing.net/th?id=OIP.TwPLyFZNTQRmw8PuEL7V9QHaG5&pid=Api&P=0&w=167&h=156" style="height: 200px">
                                </a>
                                <ul class="social">
                                    <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                    <li><a href="" data-tip="Quick View"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                                <span class="product-new-label">Sale</span>
                                <span class="product-discount-label">10%</span>
                            </div>
                                <ul class="rating">
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                 </ul>
                                 <div class="product-content">
                                     <h3 class="title"><a href="#">PPE Kit</a></h3>
                                     <div class="price">
                                         Rs.1,999
                                         <span>Rs.999</span>
                                     </div>
                                     <a class="add-to-cart" href="">+ Add To Cart</a>
                                 </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#">
                                    <img class="pic-1" src="https://tse4.mm.bing.net/th?id=OIP.4ovbEe2isOkQ8T6iTiJtVgHaHa&pid=Api&P=0&w=300&h=300" style="height: 200px">
                                </a>
                                <ul class="social">
                                    <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                    <li><a href="" data-tip="Quick View"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                                <span class="product-new-label">Sale</span>
                                <span class="product-discount-label">50%</span>
                            </div>
                                 <ul class="rating">
                                     <li class="fa fa-star"></li>
                                     <li class="fa fa-star"></li>
                                     <li class="fa fa-star"></li>
                                     <li class="fa fa-star"></li>
                                     <li class="fa fa-star"></li>
                                 </ul>
                            <div class="product-content">
                               <h3 class="title"><a href="#">Senitizer</a></h3>
                                    <div class="price">
                                        Rs.999
                                         <span>Rs.678</span>
                                    </div>
                                <a class="add-to-cart" href="">+ Add To Cart</a>
                            </div>
                        </div>
                    </div>
                         
                         
                    <div class="item">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#">
                                   <img class="pic-1" src="https://tse4.mm.bing.net/th?id=OIP.kyvKrYpywhU9yXWW7axlegHaHa&pid=Api&P=0&w=300&h=300"  style="height: 200px">
                                </a>
                                <ul class="social">
                                    <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                    <li><a href="" data-tip="Quick View"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                                <span class="product-new-label">Sale</span>
                                <span class="product-discount-label">20%</span>
                            </div>
                                 <ul class="rating">
                                     <li class="fa fa-star"></li>
                                     <li class="fa fa-star"></li>
                                     <li class="fa fa-star"></li>
                                     <li class="fa fa-star"></li>
                                     <li class="fa fa-star"></li>
                                 </ul>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Setizer spray</a></h3>
                                <div class="price">
                                     Rs.899
                                     <span>Rs.605</span>
                            </div>
                                 <a class="add-to-cart" href="">+ Add To Cart</a>
                            </div>
                        </div>
                    </div>



                    <div class="item">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#">
                                    <img class="pic-1" src="https://tse3.mm.bing.net/th?id=OIP.3eJp69dyvvtfRzvqkcGn-AHaHY&pid=Api&P=0&w=167&h=167" style="height: 200px">
                                </a>
                                <ul class="social">
                                    <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                    <li><a href="" data-tip="Quick View"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                                <span class="product-new-label">Sale</span>
                                <span class="product-discount-label">20%</span>
                                 </div>
                                 <ul class="rating">
                                     <li class="fa fa-star"></li>
                                     <li class="fa fa-star"></li>
                                     <li class="fa fa-star"></li>
                                     <li class="fa fa-star"></li>
                                     <li class="fa fa-star"></li>
                                 </ul>
                                <div class="product-content">
                                     <h3 class="title"><a href="#">Disposable masks</a></h3>
                                     <div class="price">
                                         8 for
                                         <span>Rs.250</span>
                                     </div>
                                     <a class="add-to-cart" href="">+ Add To Cart</a>
                                 </div>
                        </div>
                    </div>

                     </div>
                         <div class="MS-controls">
                             <button class="MS-left"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                             <button class="MS-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                         </div>
                     </div>
                </div>
        </section>
  </div>
</section>
<!--end of covid essentials-->
<br>
<!--start of items-->
<section>
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-2">
              <div class="card card shadow">
                  <div class="card-header">Beauty</div>
                  <img src="https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Fuji/2020/May/Dashboard/Fuji_Dash_Beauty_1x._SY304_CB432774351_.jpg" class="card-img-top">
                  <div class="card-body">
                    <a href="" class="btn btn-warning">Shop Now</a>
            
                  </div><!--end of card body-->
              </div><!--end of card-->
          </div><!--end of col-->

          <div class="col-md-2">
              <div class="card card shadow">
                  <div class="card-header">Top Categories</div>
                  <img src="https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Events/2020/PrimeDay/Fuji_Dash_PD_Nonprime__1x._SY304_CB403084762_.jpg" class="card-img-top">
                  <div class="card-body">
                    <a href="" class="btn btn-warning">Shop Now</a>
            
                  </div><!--end of card body-->
              </div><!--end of card-->
          </div><!--end of col-->

          <div class="col-md-2">
              <div class="card card shadow">
                  <div class="card-header">Food</div>
                  <img src="https://img.freepik.com/free-photo/top-view-pantry-food-ingredients_23-2148796316.jpg?size=626&ext=jpg&ga=GA1.2.516988847.1612722310" class="card-img-top" style="height: 170px">
                  <div class="card-body">
                    <a href="" class="btn btn-warning">Shop Now</a>
            
                  </div><!--end of card body-->
              </div><!--end of card-->
          </div><!--end of col-->


          <div class="col-md-2">
              <div class="card card shadow">
                  <div class="card-header">Electronics</div>
                  <img src="https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Fuji/2020/May/Dashboard/Fuji_Dash_PC_1x._SY304_CB431800965_.jpg" class="card-img-top">
                  <div class="card-body">
                    <a href="" class="btn btn-warning">Shop Now</a>
            
                  </div><!--end of card body-->
              </div><!--end of card-->
          </div><!--end of col-->

          <div class="col-md-2">
              <div class="card card shadow">
                  <div class="card-header">Clothes</div>
                  <img src="https://tpc.googlesyndication.com/daca_images/simgad/2603831496085703479" class="card-img-top" style="height: 170px">
                  <div class="card-body">
                    <a href="" class="btn btn-warning">Shop Now</a>
            
                  </div><!--end of card body-->
              </div><!--end of card-->
          </div><!--end of col-->


          <div class="col-md-2">
              <div class="card card shadow">
                  <div class="card-header">Furniture</div>
                  <img src="https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Fuji/2020/May/Dashboard/Fuji_Dash_HomeBedding_Single_Cat_1x._SY304_CB418596953_.jpg" class="card-img-top">
                  <div class="card-body">
                    <a href="" class="btn btn-warning">Shop Now</a>
            
                  </div><!--end of card body-->
              </div><!--end of card-->
          </div><!--end of col-->

      </div><!--end of row-->

      <div class="row"><!--start of row toy-->
           <br>
           <center><br>
                    <h3 style="font-weight: bold;">Toys</h3>
              </center>
       </div><!--end of row toy-->
       <br>
       <div class="row">
          <div class="col-md-2">
              <div class="card card shadow">
                  <img src="https://m.media-amazon.com/images/I/41-7l-po+EL._AC_SY200_.jpg" class="card-img-top" style="height: 230px">
                  <div class="card-body text-center" style="margin: auto;">
                    <a href="" class="btn btn-warning">Shop Now</a>
            
                  </div><!--end of card body-->
              </div><!--end of card-->
          </div><!--end of col-->

          <div class="col-md-2">
              <div class="card card shadow">
                  <img src="https://m.media-amazon.com/images/I/81-80FPGX0L._AC_UL480_FMwebp_QL65_.jpg" class="card-img-top" style="height: 230px">
                  <div class="card-body text-center" style="margin: auto;">
                    <a href="" class="btn btn-warning">Shop Now</a>
            
                  </div><!--end of card body-->
              </div><!--end of card-->
          </div><!--end of col-->

          <div class="col-md-2">
              <div class="card card shadow">
                  <img src="https://m.media-amazon.com/images/I/819t3qdQV7L._AC_UL480_FMwebp_QL65_.jpg" class="card-img-top" style="height: 230px">
                  <div class="card-body text-center" style="margin: auto;">
                    <a href="" class="btn btn-warning">Shop Now</a>
            
                  </div><!--end of card body-->
              </div><!--end of card-->
          </div><!--end of col-->

          <div class="col-md-2">
              <div class="card card shadow">
                  <img src="https://m.media-amazon.com/images/I/91GEsg65O1L._AC_UL480_FMwebp_QL65_.jpg" class="card-img-top" style="height: 230px">
                  <div class="card-body text-center" style="margin: auto;">
                    <a href="" class="btn btn-warning">Shop Now</a>
            
                  </div><!--end of card body-->
              </div><!--end of card-->
          </div><!--end of col-->

          <div class="col-md-2">
              <div class="card card shadow">
                  <img src="https://cdn.pixabay.com/photo/2015/11/20/17/51/stuffed-animal-1053580__340.jpg" class="card-img-top" style="height: 230px">
                  <div class="card-body text-center" style="margin: auto;">
                    <a href="" class="btn btn-warning">Shop Now</a>
            
                  </div><!--end of card body-->
              </div><!--end of card-->
          </div><!--end of col-->

          <div class="col-md-2">
              <div class="card card shadow">
                  <img src="https://cdn.pixabay.com/photo/2016/08/23/13/12/knitting-1614283__340.jpg" class="card-img-top" style="height: 230px">
                  <div class="card-body text-center" style="margin: auto;">
                    <a href="" class="btn btn-warning">Shop Now</a>
            
                  </div><!--end of card body-->
              </div><!--end of card-->
          </div><!--end of col-->
       
      </div><!--end of row--><br>
      <h3 style="font-weight: bold;text-align: center;">Latest mobile phones</h3><br>
      <div class="row">
          <div class="col-md-2">
              <div class="card card shadow">
                  <img src="https://m.media-amazon.com/images/I/71XXJC7V8tL._FMwebp__.jpg" class="card-img-top" style="height: 230px;margin: auto">
                  <div class="card-body text-center">
                    <p>New Apple iPhone 12</p>
                    <p class="text-danger">Currently Unavailable</p>
                    <a href="" class="btn btn-warning">Shop Now</a>
            
                  </div><!--end of card body-->
              </div><!--end of card-->
          </div><!--end of col-->

          <div class="col-md-2">
              <div class="card card shadow">
                  <img src="https://rukminim1.flixcart.com/image/416/416/kesv0y80/mobile/n/u/v/poco-m2-mzb9920in-original-imafvdrfzhw52yc6.jpeg?q=70" class="card-img-top" style="height: 230px;margin: auto">
                  <div class="card-body text-center">
                    <p>POCO M2</p>
                    <p class="text-danger"><del>12,999</del> 9,999Rs.</p>
                    <a href="" class="btn btn-warning">Shop Now</a>
            
                  </div><!--end of card body-->
              </div><!--end of card-->
          </div><!--end of col-->

          <div class="col-md-2">
              <div class="card card shadow">
                  <img src="https://n4.sdlcdn.com/imgs/i/6/1/JIO-MOBILE-Black-4G-Security-SDL187430964-3-6f07f.jpg" class="card-img-top" style="height: 230px;margin: auto">
                  <div class="card-body text-center">
                    <p>Jio</p>
                    <p class="text-danger"><del>999</del> 699Rs.</p>
                    <a href="" class="btn btn-warning">Shop Now</a>
            
                  </div><!--end of card body-->
              </div><!--end of card-->
          </div><!--end of col-->


          <div class="col-md-2">
              <div class="card card shadow">
                  <img src="https://tse1.mm.bing.net/th?id=OIP.SGguKXNqH5YQnLZ-OIJIYAHaJ4&pid=Api&P=0&w=300&h=300" class="card-img-top" style="height: 230px;margin: auto">
                  <div class="card-body text-center">
                    <p>honor</p>
                    <p class="text-danger"><del>12,999</del>  10,999Rs.</p>
                    <a href="" class="btn btn-warning">Shop Now</a>
            
                  </div><!--end of card body-->
              </div><!--end of card-->
          </div><!--end of col-->

          <div class="col-md-2">
              <div class="card card shadow">
                  <img src="https://rukminim1.flixcart.com/image/416/416/kf2v3ww0/mobile/e/h/7/redmi-9i-mzb0817in-mzb080uin-original-imafvmf4szdbwamg.jpeg?q=70" class="card-img-top" style="height: 230px">
                  <div class="card-body text-center">
                    <p>Redmi i9</p>
                    <p class="text-danger"><del>9,999</del> 7,999Rs.</p>
                    <a href="" class="btn btn-warning">Shop Now</a>
            
                  </div><!--end of card body-->
              </div><!--end of card-->
          </div><!--end of col-->


          <div class="col-md-2">
              <div class="card card shadow">
                  <img src="https://rukminim1.flixcart.com/image/312/312/jnj7iq80/mobile/u/b/g/apple-iphone-xr-mryj2hn-a-original-imafa6zkm7qhv2zd.jpeg?q=70" class="card-img-top" style="height: 230px;width: 94px;margin: auto">
                  <div class="card-body text-center">
                    <p>Apple iPhone XR</p>
                    <p class="text-danger"><del>47,999</del> 41,499Rs.</p>
                    <a href="" class="btn btn-warning">Shop Now</a>
            
                  </div><!--end of card body-->
              </div><!--end of card-->
          </div><!--end of col-->
       
      </div><!--end of row-->

  </div>
</section>
<!---end of items-->
<br>
<section><!--start of section-->
  <div class="container-fluid"><!--start of container fluid-->

    <div class="row">
        <img src="image/c19.jpg" style="height: 500px">
    </div>

  
    <br>
    <center><br>
      <h3>Popular <span class="underline">Deals</span></h3>
    </center><hr>
      

  
    </div>
</section><!--end of section-->
<br>
<section><!--start of section with makeup,mens and womens items etc-->
    <div class="container-fluid">
      <center><br>
        <h3>Makeup</h3>
      </center><hr>
        <div class="row"><!--start of makeup-->
           <div class="column">
              <img src="image/make1.jpg" />
              <img src="image/make2.jpg" />
              <img src="image/make3.jpg" />
            </div>
            <div class="column">
              <img src="image/make6.jpg">
              <img src="https://cdn.pixabay.com/photo/2016/05/02/17/56/lipstick-1367775__340.jpg">
              <img src="image/make8.jpg">
            </div>
            <div class="column">
              <img src="image/make11.jpg" />
              <img src="image/make12.jpg" />
              <img src="image/make10.jpg">
            </div>
            <div class="column">
              <img src="image/make5.jpg" />
              <img src="image/make9.jpg">
              <img src="image/make4.jpg" />
                
            </div>
        </div><br>
        <div class="row">
            <a href="" class="btn btn-warning" style="font-size: 20px;font-weight: bolder;margin:auto;">View More</a>
        </div><!--end of makeup-->


        <!--start of mens fashion-->
          <br><br>
          <center><br>
            <h3>Mens <span class="underline">Fashion</span></h3>
          </center><hr>
          <br>
        <div class="row1">
           <div class="column1">
              <img src="https://images.pexels.com/photos/988914/pexels-photo-988914.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"/>
              <img src="https://images.pexels.com/photos/267301/pexels-photo-267301.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" />
              <img src="https://images.pexels.com/photos/1639729/pexels-photo-1639729.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">
            </div>
            <div class="column1">
              <img src="https://cdn.pixabay.com/photo/2015/07/31/17/52/suit-869380__340.jpg">
              <img src="https://cdn.pixabay.com/photo/2017/03/20/15/13/wrist-watch-2159351__340.jpg">
            </div>
            <div class="column1">
              <img src="https://cdn.pixabay.com/photo/2019/09/13/17/48/hat-4474522__340.jpg" />
              <img src="https://images.pexels.com/photos/167686/pexels-photo-167686.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" />
              <img src="https://media.istockphoto.com/photos/mens-suits-on-hangers-in-different-colors-picture-id887360960?b=1&k=6&m=887360960&s=170667a&w=0&h=rEKd87MMvL4kwR9Fgv_FprzLfLSLio8cmvgbvI9kX-M=" />
            </div>
            <div class="column1">
                <img src="https://images.pexels.com/photos/2897529/pexels-photo-2897529.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" />
                <img src="https://cdn.pixabay.com/photo/2017/04/07/16/47/interview-2211354__340.jpg">
            </div>
        </div><br><!--end off row-->
        <div class="row">
            <a href="" class="btn btn-warning" style="font-size: 20px;font-weight: bolder;margin:auto;">View More</a>
        </div>

        <!--end of mens fashion-->

        <!--start of womens fashion-->
        <br><br>
        <center><br>
                    <h3>Womens <span class="underline">Fashion</span></h3>
              </center><hr>
          <br>
        <div class="row1">
           <div class="column1">
              <img src="https://media.istockphoto.com/photos/portrait-of-blonde-woman-in-sunglasses-picture-id1174306176?b=1&k=6&m=1174306176&s=170667a&w=0&h=qxU9khl6JJ9KyTfUa5uwZgH8BG6IyXD183TYEGGMaLI=" />
              <img src="https://images.pexels.com/photos/3682293/pexels-photo-3682293.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" />
            </div>
            <div class="column1">
              <img src="https://images.pexels.com/photos/3782789/pexels-photo-3782789.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">
            </div>
            <div class="column1">
              <img src="https://cdn.pixabay.com/photo/2016/08/21/10/22/bag-1609281__340.jpg " />
              <img src="https://media.istockphoto.com/photos/portrait-of-confident-cool-sweet-pretty-dark-skin-girl-dream-feel-picture-id1181197567?b=1&k=6&m=1181197567&s=170667a&w=0&h=Xrsl1Fq-n4QelpKvmIppeAQj7RBhlH1tT1FYSNlILFQ=">
            </div>
            <div class="column1">
              <img src="https://images.pexels.com/photos/1848471/pexels-photo-1848471.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" />  
            </div>
        </div><br><!--end of row-->
        <div class="row">
            <a href="" class="btn btn-warning" style="font-size: 20px;font-weight: bolder;margin:auto;">View More</a>
          <br>
        </div>
        <br><br>
        <!--end of womens fashion-->

        <div class="row">
          <div class="col-sm-4">
              <div class="card card shadow furniture img-fluid" style="height: 250px">
                  <div class="card-body">
                     <div class="card-text text-light">
                        <h2  style="font-weight: bold;">Get 50% off <br>on FURNITURE</h2>
                        <a href="" class="stretched-link"></a>
                     </div>
                  </div>
              </div>
          </div><!--end of col-->

          <div class="col-sm-4">
              <div class="card card shadow appliances img-fluid" style="height: 250px">
                  <div class="card-body">
                     <div class="card-text">
                        <h2  style="font-weight: bold;">Appliances <br>Starting From<br>3,000/-</h2>
                        <a href="" class="stretched-link"></a>
                     </div>
                  </div>
              </div>
          </div><!--end of col-->

          <div class="col-sm-4">
              <div class="card card shadow electronics img-fluid" style="height: 250px">
                  <div class="card-body">
                     <div class="card-text text-light">
                        <h2  style="font-weight: bold;text-shadow: 2px">Electronics <br>At resonable prices</h2>
                        <a href="" class="stretched-link"></a>
                     </div>
                  </div>
              </div>
          </div>
          
        </div><!--end of row-->
        <div class="row">
            
        </div>
        <br>

        <div id="demo" class="carousel slide" data-ride="carousel">

          <!-- Indicators -->
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
          </ul>
          
          <!-- The slideshow -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://cdn.pixabay.com/photo/2017/08/10/07/32/dell-2619501__340.jpg" alt="dell products" width="100%" height="400px">
              <div class="carousel-caption text-dark" style="text-decoration: underline;">dell products</div>
            </div>
            <div class="carousel-item">
              <img src="https://cdn.pixabay.com/photo/2014/07/01/12/37/kindle-381242__340.jpg" alt="kindle" width="100%" height="400px">
              <div class="carousel-caption text-dark" style="text-decoration: underline;">Kindle</div>
            </div>
            <div class="carousel-item">
              <img src="https://media.istockphoto.com/photos/new-samsung-galaxy-note-10-android-smartphone-picture-id1199648781?b=1&k=6&m=1199648781&s=170667a&w=0&h=PbuE4iAYQs0w9M6DbaAwaSR1wBW5xB2c7gf-tXzh8ZE=" alt="samsung" width="100%" height="400px">
              <div class="carousel-caption" style="text-decoration: underline;">samsung</div>
            </div>
          </div>
          
          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>

        <br>
        <center><br>
          <h3>Happy <span class="underline">Coustomers</span></h3>
        </center><hr>
        <div class="row"><!--start of happy coustomer-->
          <br>
          <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="https://tse2.mm.bing.net/th?id=OIP.2TCQ5rgg-KPeV8pAsDRwsQHaHa&pid=Api&P=0&w=300&h=300" alt="Card image" style="width:70%;display: block;margin: auto; border-radius: 50%">
                <div class="card-body">
                  <h4 class="card-title">John Doe</h4>
                  <repeat n="3">★</repeat>
                  <p class="card-text">Great product..but delivery took too long!!</p>
                </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                <img class="card-img-top" src="https://tse4.mm.bing.net/th?id=OIP.TctatNGs7RN-Dfc3NZf91AAAAA&pid=Api&P=0&w=300&h=300" alt="Card image" style="width:70%; border-radius: 50%;display: block;margin: auto;">
                <div class="card-body">
                  <h4 class="card-title">vikas jain</h4>
                  <repeat n="2">★</repeat>
                  <p class="card-text">Items are not relly as they appear here!</p>
                </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                <img class="card-img-top" src="https://tse1.mm.bing.net/th?id=OIP.IfgmaUOZrA4VPmr7F0gn7QAAAA&pid=Api&P=0&w=300&h=300" style="width:70%; border-radius: 50%;display: block;margin: auto;">
                <div class="card-body">
                  <h4 class="card-title">John Doe</h4>
                  <repeat n="3">★</repeat>
                  <p>amazing products)</p>
                  
                </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                <img class="card-img-top" src="https://tse2.mm.bing.net/th?id=OIP.fx8DjC9heP-uOr5RFLADjwHaHa&pid=Api&P=0&w=300&h=300" style="width:70%;display: block;margin: auto; border-radius: 50%">
                <div class="card-body">
                  <h4 class="card-title">John Doe</h4>
                  <repeat n="4">★</repeat>
                  <p class="card-text">:)great</p>
                  
                </div>
                </div>
            </div>
        </div><!--end of happy coustomer-->
        <br>
    </div><!--end of container-->

</section><!--end of section with makeup men and womens items etc-->

<!--cart modal-->


<div class="modal fade" id="cc">
  <div class="modal-dialog" >
      <div class="modal-content" style="background:#fff url('https://media.tenor.com/images/b8cfc0a9f0bcb7d127f632e6f3990708/tenor.gif');width: 100%;height: 100%;background-repeat: no-repeat;">
        <div class="modal-header">
            <h1 class="modal-title text-warning">CART</h1>
            <button type="button" class="" data-dismiss="modal">
            <span >&times;</span>
            </button>
        </div>
         <div class="modal-body text-warning" style="height: 403px">
                    

        </div>
      </div>
  </div>
</div>


<?php include"footer.php" ?>

<script src="js/bootstrap.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="js/multislider.min.js"></script>
   <script src="js/custom.js"></script>
   
    

<!-- product sliders script -->
  <script>
   
$('#blogSlider').multislider({
    duration: 750,
      interval: 3000
  });
       
//    </script>

<script type="text/javascript">
  
  var preloader=document.getElementById('loading');

  function myFunction(){
    preloader.style.display= 'none';
  }
  
</script>
</body>
</html>


