<?php
$db_hostname="127.0.0.1";
$db_username="root";
$db_password="";
$db_name="spices";

$conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
session_start();
if(!$conn){
    echo "connection failed:".mysqli_connect_error();
    exit;
}
?>
<!DOCTYPE html>
<html>
    <head> 
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>spices</title>
        
        <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />  
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" >
        <link href="css/spices.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://kit.fontawesome.com/3c8dc5873c.js" crossorigin="anonymous"></script>
        
        <script type="text/javascript" src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
    <nav class="navbar navbar-expand-sm bg-light navbar-light sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Spices</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#Home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#About us">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Products">Products</a>
        </li>  
        <li class="nav-item">
          <a class="nav-link" href="#Contact us">Contact us</a>
        </li>   
      </ul>
    </div>
    </div>
              <ul class="navbar-nav ">
                <li class="nav-item"><a class="nav-link" id="nav-button" href="#" data-toggle="modal" data-target="#signup-modal"><span id="span"> Signup</span></a></li>

                <li class="nav-item"><a class="nav-link" id="nav-button" href="#" data-toggle="modal" data-target="#login-modal"> <span id="span"> Login</span></a></li>
            </ul>
            
            </div>
  </div>
</nav>

          <div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="signup-heading" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="signup-heading">Signup</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
    
                    <div class="modal-body">
                        <form action="signup_submit.php" method="post" id="signup-form" class="form"  >
                            <div class="input-group form-group">
                                
                                <input type="text" class="form-control" name="full_name" placeholder="Full Name" maxlength="30" required>
                            </div>
    
                            <div class="input-group form-group">
                                
                                <input type="text" class="form-control" name="phone" placeholder="Phone Number" maxlength="10" minlength="10" required>
                            </div>
    
                            <div class="input-group form-group">

                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                            </div>
    
                            <div class="input-group form-group">

                                <input type="password" class="form-control" name="password" placeholder="Password" minlength="6" required>
                            </div>
    
                            <div class="input-group form-group">
                                <input type="text" class="form-control" name="conform password" placeholder="conform password" maxlength="6" required>
                            </div>

                            <div class="input-group form-group">
                              <input type="text" class="form-control" name="address" placeholder="Address"  required>
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" class="btn btn-success form-control btn-block">Create Account</button>
                            </div>
                        </form>
                        <div class="modal-footer">
                          <span>
                              Already have an account?
                              <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#login-modal">Login</a>
                          </span>
                      </div>
                    </div>
    
                    
                </div>
            </div>
        </div>
    
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-heading" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="login-heading">Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
    
                    <div class="modal-body">
                        <form action="login_submit.php" method="post" id="login-form" class="form" role="form">
                            <div class="input-group form-group">
                                
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                            </div>
    
                            <div class="input-group form-group">
                                
                                <input type="password" class="form-control" name="password" placeholder="Password" minlength="6" required>
                            </div>
    
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-success">Login</button>
                            </div>
                        </form>
                    </div>
    
                    <div class="modal-footer">
                        <span>
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#signup-modal">Click here</a>
                            to register a new account
                        </span>
                    </div>
                </div>
            </div>
        </div>

          <section id="Home">
            <h1 class="text-center">Organic spices</h1>
            <p>Organic spices are grown without chemicals and preservatives and are not fumigated or irradiated</p>
          </section>

          <section id="About us" class="about">
            <div id="container fluid">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="img/about.png" class="img-fluid">
                </div>
                <div  class="col-lg-6 col-md-6 col-12 p-lg-5 p-2">
                    <h2>ABOUT US</h2>
                    <p>A spice may be available in several forms: fresh, whole dried, or pre-ground dried. Generally, spices are dried. Spices may be ground into a powder for convenience. A whole dried spice has the longest shelf life, so it can be purchased and stored in larger amounts, making it cheaper on a per-serving basis. A fresh spice, such as ginger, is usually more flavorful than its dried form, but fresh spices are more expensive and have a much shorter shelf life. Some spices are not always available either fresh or whole, for example turmeric, and often must be purchased in ground form. Small seeds, such as fennel and mustard seeds, are often used both whole and in powder form.

                      Although health benefits are often claimed for spices, there is not currently good evidence for this.</p>
                </div>
              </div>
            </div>
          </section>
          <section id="Products">
              <div class="container">
                <h2 class="text-center">OUR PRODUCTS</h2>
                <div class="row">
                    
                      <?php
                      $query= "SELECT * FROM `items` ";
                      $query_run=mysqli_query($conn,$query);
                    
                      while($row=mysqli_fetch_array($query_run)){
                      echo '
                      <div class="col-lg-4 col-md-4 col-12">
                      <div class="card">
                        <img src="data:image;base64,'.base64_encode($row['image']).'" class="img-responsive">
                          <div class="card-body text-center">
                          <h5 class="card-title ">'.$row['name'].' <i class="fa-solid fa-indian-rupee-sign"></i>'. $row['price'].'</h5>
                          <p><a href="view.php?id='.$row['pid'].'" class="btn btn-success">Add to Card</a></p>
                          </div>
                          </div>
                      </div>

                      ';
                        }
                      ?>      
                    
                  </div>                    
              </div>
          </section>
          <section id="Contact us" class="contact">
            <div class="container box">
              <div class="row">
                <div class="col-md-6 col-lg-6 col-12">
                   <img src="img/contact.jpg" class="img-fluid"> 
                </div>
                <div class="col-md-6 col-lg-6 col-12">
                  <h2>CONTACT US</h2>
                  <form>
                    <input type="text" class="form-control" placeholder="Enter your name">
                    <input type="email" class="form-control" placeholder="Enter your email">
                    <textarea type="text" class="form-control" placeholder="Enter your message"></textarea>
                  <button class="btn btn-success">submit</button>
                </form>
               </div>
              </div>
            </div>
          </section>
          <div class="footer container-fluid text-center">
            <div class="row">
               <div class="col-lg-5 col-md-5 col-10" id="address">
                <h2>Head office</h2><hr>
                <p> 15,Guru street,<br>
                 R G Nagar,<br>
                 Coimbatore-641005.</p>
               </div> 
               <div class="col-lg-5 col-md-5 col-10">
                
                <div class="con"><a href="#"><i class="fa-solid fa-phone"></i> 6754321670</a></div><hr>
                <div class="con"><a href="#"><i class="fa-solid fa-envelope"></i> info@spices.com</a></div><hr>
                
              <div class="conn"><a href="#">
              <i class="fa-brands fa-facebook"></i>
              <i class="fa-brands fa-twitter"></i>
              <i class="fa-brands fa-instagram"></i>
              <i class="fa-brands fa-whatsapp"></i></a>
            </div>

              </div> 
            </div>
          </div>
          

          
    </body>
</html>
