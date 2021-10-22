<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Next Shopping</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="shortcut icon" href="panda-commerce-master/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="custom style.css">
</head>
<body>
    <!-- header start -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top mb-5">
          <div class="container ">
            <a class="navbar-brand" href="#"> 
                <img  src="panda-commerce-master/logo.png" alt="">
                <span>Next Shopping</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active fw-bold" aria-current="page" href="Index.php">Home</a>
                </li>
                
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle fw-bold text-reset " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Catagories
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="men.php">Men</a></li>
                    <li><a class="dropdown-item" href="women.php">Women</a></li>
                    <li><a class="dropdown-item" href="kids.php">Kids</a></li>
                  </ul>
                </li>
                
              </ul>
              
              <form class="d-flex justify-content-between">
                
                <button class="btn btn-outline-success " type="submit">Login</button>
              </form>
            </div>
          </div>
          </nav>
          <!-- Image slider -->
          <section class="container mt-5">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active ">
                      <div class="row panda-Background bg-gradient border rounded d-flex align-items-center p-5">
                          <div class="col-lg-7">
                              <h1>Stylish shoes for women</h1>
                              <p>Be it for a road trip or a daily outing, there are various footwear designs ideally crafted for each women</p>
                              <h1>Taka-420/-</h1>
                              <div class="btn btn button-color">Buy Now</div>
                          </div>
                          <div class="col-lg-5">
                            <img src="panda-commerce-master/images/women/slider-img/ws-1.png" class="d-block w-100" alt="...">
                           </div>
                      </div>
                   
                  </div>
                  <div class="carousel-item ">
                    <div class="row panda-Background bg-gradient border rounded d-flex align-items-center p-5">
                        <div class="col-lg-7 ">
                            <h1>Fashionable bag for women</h1>
                            <p>The high-quality luggage that can accompany you all over the world</p>
                            <h1>Taka-350/- </h1>
                            <div class="btn btn button-color">Buy Now</div>
                        </div>
                        <div class="col-lg-5">
                            <img src="panda-commerce-master/images/banner-images/2.png" class="d-block w-100" alt="...">
                         </div>
                    </div>
                    
                  </div>
                  <div class="carousel-item">
                    <div class="row panda-Background bg-gradient border rounded d-flex align-items-center p-5 ">
                        <div class="col-lg-7">
                            <h1>Trendy dresses</h1>
                            <p>Shop latest collections of Kids Fashion for you</p>
                            <h1>taka-250/- </h1>
                            <div class="btn btn button-color">Buy Now</div>
                        </div>
                        <div class="col-lg-5">
                            <img src="panda-commerce-master/images/women/slider-img/wd-5.png" class="d-block w-100" alt="...">
                         </div>
                    </div>
                  
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
          </section>
    </header>
    <main>
        <!-- catagory -->
        <section class="container my-5 catagory">
                <div class="row g-4">
                  <div class="col-lg-4 col-md-6">
                    <div class="p-3 border rounded-3 catagory-background-one d-flex align-items-center justify-content-between"><h1 class="text-white">Shoes</h1>
                        <img src="panda-commerce-master/images/women/catagories/ws-2.png" alt="">
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="p-3 border rounded-3 catagory-background-two d-flex align-items-center justify-content-between"><h1 class="text-white">Bag</h1>
                        <img src="panda-commerce-master/images/categories/ll.png" alt=""></div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="p-3 border rounded-3 catagory-background-three d-flex align-items-center justify-content-between"><h1 class="text-white">Dress</h1>
                        <img src="panda-commerce-master/images/women/wd-4.png" alt=""></div>
                  </div>
                  
                </div>
                
        </section>
        <!-- Bags -->
        <section class="container mb-5"  id="Bags">
            <h1>Bags</h1>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 ">
                <div class="col ">
                  <div class="card border-0 h-100 shadow-lg ">
                    <img src="panda-commerce-master/images/bags/b1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Rainbow ash </h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="m-3">
                        <h4>Taka-1250/-</h4>
                      <button class="btn button-color rounded-pill">Buy Now</button>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card border-0 h-100 shadow-lg ">
                    <img src="panda-commerce-master/images/bags/b2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Dark brown Bag</h5>
                      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="m-3">
                        <h4>Taka-2250/-</h4>
                        <button class="btn button-color rounded-pill">Buy Now</button>
                    </div>
                  </div>
                </div>
                <div class="col ">
                  <div class="card border-0 h-100 shadow-lg">
                    <img src="panda-commerce-master/images/bags/b3.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Black Ninja bag</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                    <div class="m-3">
                        <h4>Taka-3250/-</h4>
                        <button class="btn button-color rounded-pill">Buy Now</button>
                    </div>
                  </div>
                </div>
              </div>
        </section>
        <!-- shoes -->
        <section class="container mb-5" id="Shoes">
            <h1>Shoes</h1>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 ">
                <div class="col ">
                  <div class="card border-0 h-100 shadow-lg ">
                    <img src="panda-commerce-master/images/women/shoes/ws-3.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Ladies Chappal</h5>
                      <p class="card-text">Ladies Chappal Series 01 Price 1050 to 3500 – Original Brand</p>
                    </div>
                    <div class="m-3">
                        <h4>Taka-250/-</h4>
                      <button class="btn button-color rounded-pill">Buy Now</button>
                    </div>
                  </div>
                </div>
                <div class="col ">
                  <div class="card border-0 h-100 shadow-lg ">
                    <img src="panda-commerce-master/images/women/shoes/ws-4.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Party Girl Red Flat Sandal</h5>
                      <p class="card-text">A lightweight and comfortable open toe flat sandal with synthetic upper and PU sole that will give an elegant look.</p>
                    </div>
                    <div class="m-3">
                        <h4>Taka-270/-</h4>
                        <button class="btn button-color rounded-pill">Buy Now</button>
                    </div>
                  </div>
                </div>
                <div class="col ">
                  <div class="card border-0 h-100 shadow-lg">
                    <img src="panda-commerce-master/images/women/shoes/ws-5.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Womens Flat Sandal</h5>
                      <p class="card-text">The comfortable white sandals have fully encased back which ensures wearer comfort</p>
                    </div>
                    <div class="m-3">
                        <h4>Taka-500/-</h4>
                        <button class="btn button-color rounded-pill">Buy Now</button>
                    </div>
                  </div>
                </div>
              </div>
        </section>
        <!--  Dress -->
        <section class="container mb-5" id="Shoes">
          <h1>Women Dress</h1>
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 ">
              <div class="col ">
                <div class="card border-0 h-100 shadow-lg ">
                  <img src="panda-commerce-master/images/women/dress/wd-1.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Mudrika Long Length Cotton Maxi</h5>
                    <p class="card-text">Mudrika Long Length Cotton Maxi Gown with Belt Comfort FIT (Multicolour, Free Size)</p>
                  </div>
                  <div class="m-3">
                    <h4>Taka-2150/-</h4>
                    <button class="btn button-color rounded-pill">Buy Now</button>
                  </div>
                </div>
              </div>
              <div class="col ">
                <div class="card border-0 h-100 shadow-lg ">
                  <img src="panda-commerce-master/images/women/dress/wd-2.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Mudrika Women Cotton Long Dresses Anarkali Dress</h5>
                    <p class="card-text">Mudrika offers you to attract compliments by this attractive stitched Gown made with fine quality material and beautiful work.</p>
                  </div>
                  <div class="m-3">
                    <h4>Taka-1250/-</h4>
                      <button class="btn button-color rounded-pill">Buy Now</button>
                  </div>
                </div>
              </div>
              <div class="col ">
                <div class="card border-0 h-100 shadow-lg">
                  <img src="panda-commerce-master/images/women/dress/wd-3.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Elegant women dress</h5>
                    <p class="card-text">elegant women dress new 2021 summer v neck bandage casual dresses ladies korean office dress</p>
                  </div>
                  <div class="m-3">
                    <h4>Taka-2550/-</h4>
                      <button class="btn button-color rounded-pill">Buy Now</button>
                  </div>
                </div>
              </div>
            </div>
      </section>
        <!-- Subscription -->
        <section style="height: 300px;" class="container panda-Background d-flex justify-content-center align-items-center rounded-3" id="subscribe">
            <div>
                <h1>LET'S STAY IN TOUCH</h1>
            <p>Get updates on sales, specials and more</p>
            <input class="form-control" type="text " placeholder="Your Email"><br>
            <button class="btn button-color">Submit</button>
            </div>
        </section>
    </main>
    <footer class="mt-5 text-center">
        <p><small>©2021. Next Shopping. All rights reserved. Dhaka, Bangladesh.</small></p>
        <p><small>Developed By <a class="name" target="blank" href="https://www.linkedin.com/in/soliman-umor-8ba46418a/">Soliman Umor</a></small></p>
    </footer>
    <!-- bootstrap script -->
    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>