<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Next Shopping</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="custom style.css">
    <link rel="shortcut icon" href="panda-commerce-master/logo.png" type="image/x-icon">
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
                              <h1>Cool watches for kids</h1>
                              <p>Kids Smart Watches with Tracker Phone Call for Boys Girls, Waterproof IP67, Digital Wrist Watch, Sport Smart Watch</p>
                              <h1>Taka-320/-</h1>
                              <div class="btn btn button-color">Buy Now</div>
                          </div>
                          <div class="col-lg-5">
                            <img src="panda-commerce-master/images/childs/slider-img/kw-5.png" class="d-block w-100" alt="...">
                           </div>
                      </div>
                   
                  </div>
                  <div class="carousel-item ">
                    <div class="row panda-Background bg-gradient border rounded d-flex align-items-center p-5">
                        <div class="col-lg-7 ">
                            <h1>Dreamy bag for kids</h1>
                            <p>The high-quality luggage that can accompany you all over the world</p>
                            <h1>Taka-350/- </h1>
                            <div class="btn btn button-color">Buy Now</div>
                        </div>
                        <div class="col-lg-5">
                            <img src="panda-commerce-master/images/childs/slider-img/kb-5-removebg-preview.png" class="d-block w-100" alt="...">
                         </div>
                    </div>
                    
                  </div>
                  <div class="carousel-item">
                    <div class="row panda-Background bg-gradient border rounded d-flex align-items-center p-5 ">
                        <div class="col-lg-7">
                            <h1>Trendy kids dress</h1>
                            <p>Shop latest collections of Kids Fashion for your boy and girl</p>
                            <h1>taka-250/- </h1>
                            <div class="btn btn button-color">Buy Now</div>
                        </div>
                        <div class="col-lg-5">
                            <img src="panda-commerce-master/images/banner-images/1.png" class="d-block w-100" alt="...">
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
                    <div class="p-3 border rounded-3 catagory-background-one d-flex align-items-center justify-content-between"><h1 class="text-white">Watch</h1>
                        <img src="panda-commerce-master/images/childs/catagories/kw-4.png" alt="">
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="p-3 border rounded-3 catagory-background-two d-flex align-items-center justify-content-between"><h1 class="text-white">Bag</h1>
                        <img src="panda-commerce-master/images/childs/catagories/kb-4-removebg-preview.png" alt=""></div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="p-3 border rounded-3 catagory-background-three d-flex align-items-center justify-content-between"><h1 class="text-white">Kids dress</h1>
                        <img src="panda-commerce-master/images/categories/mm.png" alt=""></div>
                  </div>
                  
                </div>
                
        </section>
        <!-- Bags -->
        <section class="container mb-5"  id="Bags">
            <h1>Bags</h1>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 ">
                <div class="col ">
                  <div class="card border-0 h-100 shadow-lg ">
                    <img src="panda-commerce-master/images/childs/bag/kb-2-removebg-preview.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Kids' Backpack- Planete Ecole The Little Prince</h5>
                      <p class="card-text">For school, sports, weekends, outings, or holidays, your child will be able to put in this pretty backpack all he/she loves!.</p>
                    </div>
                    <div class="m-3">
                        <h4>Taka-2290/-</h4>
                      <button class="btn button-color rounded-pill">Buy Now</button>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card border-0 h-100 shadow-lg ">
                    <img src="panda-commerce-master/images/childs/bag/kb-3-removebg-preview.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Kids School Bag</h5>
                      <p class="card-text">Being one of the renowned organizations in the industry, we are highly engaged in providing a premium quality range of Kids School Bag.</p>
                    </div>
                    <div class="m-3">
                        <h4>Taka-1290/-</h4>
                        <button class="btn button-color rounded-pill">Buy Now</button>
                    </div>
                  </div>
                </div>
                <div class="col ">
                  <div class="card border-0 h-100 shadow-lg">
                    <img src="panda-commerce-master/images/childs/bag/kb-6-removebg-preview.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Kids' Backpack - NEO Owl</h5>
                      <p class="card-text">Backpack, Backpack! With our Neo backpack, even Dora will envy your child! For a girl or a boy, our Neo backpack will accompany your child.</p>
                    </div>
                    <div class="m-3">
                        <h4>Taka-1590/-</h4>
                        <button class="btn button-color rounded-pill">Buy Now</button>
                    </div>
                  </div>
                </div>
              </div>
        </section>
        <!-- watch -->
        <section class="container mb-5" id="Shoes">
            <h1>kids Watch</h1>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 ">
                <div class="col ">
                  <div class="card border-0 h-100 shadow-lg ">
                    <img src="panda-commerce-master/images/childs/Watches/kw-1-removebg-preview.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Spiderman iTime Kids Smart Watch, 40 MM</h5>
                      <p class="card-text">Spider-Man iTime Kids' Smart Watch in multi-printed rubber strap, square red case; Functions Include: 3 wallpapers.</p>
                    </div>
                    <div class="m-3">
                        <h4>Taka-290/-</h4>
                      <button class="btn button-color rounded-pill">Buy Now</button>
                    </div>
                  </div>
                </div>
                <div class="col ">
                  <div class="card border-0 h-100 shadow-lg ">
                    <img src="panda-commerce-master/images/childs/Watches/kw-2-removebg-preview.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Ice-Watch 014428 watch - ICE Ola Kids</h5>
                      <p class="card-text">Dare to mix bold colours with the ICE ola kids Robot! This small ultramarine blue soft silicone watch with bright orange detailing.</p>
                    </div>
                    <div class="m-3">
                        <h4>Taka-390/-</h4>
                        <button class="btn button-color rounded-pill">Buy Now</button>
                    </div>
                  </div>
                </div>
                <div class="col ">
                  <div class="card border-0 h-100 shadow-lg">
                    <img src="panda-commerce-master/images/childs/Watches/kw-3-removebg-preview.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">CakCity Kids Watch Waterproof Boys Wrist Watch</h5>
                      <p class="card-text">Precise Time & Powerful Battery: Our kids analog watch use Quartz Movement to provide precise and accurate time keeping.</p>
                    </div>
                    <div class="m-3">
                        <h4>Taka-590/-</h4>
                        <button class="btn button-color rounded-pill">Buy Now</button>
                    </div>
                  </div>
                </div>
              </div>
        </section>
        <!-- Kids Dress -->
        <section class="container mb-5" id="Shoes">
          <h1>Kids Dresses</h1>
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 ">
              <div class="col ">
                <div class="card border-0 h-100 shadow-lg ">
                  <img src="panda-commerce-master/images/Kids dress/kd1.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Yellow black dress</h5>
                    <p class="card-text"> whether it's effortless maxis in mustard yellow or floral printed midis</p>
                  </div>
                  <div class="m-3">
                    <h4>Taka-1290/-</h4>
                    <button class="btn button-color rounded-pill">Buy Now</button>
                  </div>
                </div>
              </div>
              <div class="col ">
                <div class="card border-0 h-100 shadow-lg ">
                  <img src="panda-commerce-master/images/Kids dress/kd2.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Yellow punjabi</h5>
                    <p class="card-text">Children's printed and embroidered Panjabis made with comfortable fabric to fit you perfectly!.</p>
                  </div>
                  <div class="m-3">
                    <h4>Taka-2290/-</h4>
                      <button class="btn button-color rounded-pill">Buy Now</button>
                  </div>
                </div>
              </div>
              <div class="col ">
                <div class="card border-0 h-100 shadow-lg">
                  <img src="panda-commerce-master/images/Kids dress/kd3.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Black and pink dress</h5>
                    <p class="card-text">Dark Pink puff sleeve shirred tea dress in blue daisy print gingham</p>
                  </div>
                  <div class="m-3">
                    <h4>Taka-2390/-</h4>
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