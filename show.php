<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $_SESSION['name']; ?>'s Dashboard</title>
  <link href='c.css' rel='stylesheet'>
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
  <div class="sidebar">
    <div class="logo_details">
        <img src="https://th.bing.com/th/id/OIG.iksIsP1.CdZJVjofzcg1?pid=ImgGn&w=1024&h=1024&rs=1" alt="hao" class="d1">
    </div>
    <ul>
      <li>
        <a href="show.php" class="active">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">
            Dashboard
          </span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-user'></i>
          <span class="links_name">
            Profile
          </span>
        </a>
      </li>
      <li>
        <a href="#">
          <i>★</i>
          <span class="links_name">
            Reviews
          </span>
        </a>
      </li>
     

      <li>
          <a href="clander.html" target="frame">
        <i class="fas fa-calendar"></i>
          <span class="links_name">
           Personal Clander
          </span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fas fa-comment-dots"></i>

          <span class="links_name">
          Help Center
          </span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cart-alt'></i>
          <span class="links_name">
            Order
          </span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-heart'></i>
          <span class="links_name">
            Saved
          </span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cog'></i>
          <span class="links_name">
            Setting
          </span>
        </a>
      </li>
      <li class="login">
        <a href="login.php">
          <span class="links_name login_out">
            Login Out
          </span>
          <i class='bx bx-log-out' id="log_out"></i>
        </a>
      </li>
    </ul>
  </div>
  
  <section class="home_section">
    <div class="topbar">
      <div class="toggle">
        <i class='bx bx-menu' id="btn"></i>
      </div>
      <h3 class="c1"><a href="show.php">Home</a></h3>
      <h3 class="c1"><a href="quiz.html" target="frame">Home</a></h3>
      <h3 class="c1"><a href="#">Home</a></h3>
      <div class="search_wrapper">
        <label>
          <span>
            <i class='bx bx-search'></i>
          </span>
          <input type="search" placeholder="Search...">
        </label>
      </div>
      <div class="user_wrapper">
        <img src="data:image/jpeg;base64,<?php echo $_SESSION['img']; ?>" class="user-pic" onclick="Menu()"><br>
            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="uer-info">
                        <img src="data:image/jpeg;base64,<?php echo $_SESSION['img']; ?>" id="i1">
                        <p>Hello <br> <?php echo $_SESSION['name']; ?>  ! </p>
                    </div>
                    <hr>
                    <h3>EMAIL:</h3><p><?php echo $_SESSION['email']; ?>.</p>
                    
                    <h3>GENDER:</h3><p><?php echo $_SESSION['gender']; ?>.</p>
                    
                    <h3>PHONE NUMBER:</h3><p><?php echo $_SESSION['phone']; ?>.</p>
                    <h3>COURSES:</h3>
                     <?php
                    if (isset($_SESSION['cou'])) {
                    $cou = $_SESSION['cou'];

                        echo '<div class="d"><ul>';
                        foreach ($cou as $element) {
                        echo '<li><p>' . $element .'.'. '</p></li>';
                            }
                             echo '</ul></div>';
                             } ?> 
                </div>
      </div>
      </div>
    </div>
      
      <div>
        <iframe src="courses.php" name="frame" width="100%" height="700px" frameborder="0"></iframe>
      </div>
  </section>
    
  

  <script>
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");

    closeBtn.addEventListener("click", () => {
      sidebar.classList.toggle("open");
      // call function
      changeBtn();
    });

    function changeBtn() {
      if(sidebar.classList.contains("open")) {
        closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
      } else {
        closeBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      }
    }
    let sname=document.getElementById("subMenu");
        function Menu()
        {
            sname.classList.toggle("open-menu");
        }
  </script>
</body>
</html>