<?php 
      
      echo '<nav>
      <div class="container nav-wrapper">
          <div class="brand">
              <h2>SGTB: RMS</h2>
          </div>
          <div class="hamburger">
              <span></span>
              <span></span>
              <span></span>
          </div>
          <ul class="nav-list">
              <li>
                  <a href="index.php">HOME</a>
              </li>
              <li>';
                  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
                  {
                    if($_SESSION['role'] == 'teacher')
                    {
                        echo '<a href="records.php"><button class="btn">Records</button></a>';
                    }else{
                        echo '<a href="results.php"><button class="btn">Results</button></a>';
                    }
                    echo '<a href="logout.php"><button class="btn">Logout</button></a>';
                }else
                {
                    echo '<a href="login.php"><button class="btn">Login</button></a>';
                    echo '<a href="signup.php"><button class="btn">SignUp</button></a>';
                }
              echo'</li>
          </ul>
      </div>
  </nav>'
?>