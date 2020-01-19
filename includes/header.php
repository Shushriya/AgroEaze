<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" id="main-nav">
                    <div class="container">
                      
                      <a href="http://localhost/ht_manual" class="navbar-brand">AgroEaze</a>
                      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav ml-auto">
                          <li class="nav-item">
                            <a href="http://localhost/ht_manual" class="nav-link">HOME</a>
                          </li>
                          <li class="nav-item">
                            <a href="http://localhost/ht_manual/accounts/customer/catalog.php" class="nav-link">SHOP</a>
                          </li>
                          <?php
                            if(isset($_SESSION['site_token'])){
                              echo '<li class="nav-item">
                              <a href="http://localhost/ht_manual/accounts/logout.php" class="nav-link">LOGOUT</a>
                            </li>';
                            }else{
                              echo '<li class="nav-item">
                              <a href="http://localhost/ht_manual/accounts/login.php" class="nav-link">LOGIN</a>
                            </li><li class="nav-item">
                            <a href="http://localhost/ht_manual/accounts/register.php" class="nav-link">REGISTER</a>
                          </li>';
                            }
                          ?>
                          
                          <li class="nav-item" style="background-color: rgb(216, 179, 17) ; padding-left: 20px; padding-right: 20px;margin-left: 40px; border-radius: 4px;">
                            <a href="http://localhost/ht_manual/accounts/customer/cart.php" class="nav-link"  >CART</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>