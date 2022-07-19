<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-90680653-2');
    </script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>Admission</title>

    <!-- vendor css -->
    <link href="lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="lib/morris.js/morris.css" rel="stylesheet">
    <link href="lib/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="lib/jqvmap/jqvmap.min.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="css/azia.css">
    <?php
    session_start();
    if(!isset($_SESSION["ic"])) {
        header("Location: index.php");
        exit();
    }
    ?>
  </head>

<?php
include 'talum.php';
  $ic = $_SESSION['ic'];
  $sql = "SELECT role FROM student WHERE stud_ic = '$ic'";
  $records = mysqli_query($dbconfig,"select * from student where stud_ic='$ic'"); 
  $result = mysqli_query($dbconfig,$sql);
  while($row=mysqli_fetch_array($result))
  {
    $role = $row['role'];
  }
 ?>
  </head>
<?php while($row = mysqli_fetch_array($records)) { ?>
  <body class="az-body az-body-sidebar">
    <div class="az-sidebar">
      <div class="az-sidebar-header">
        <a href="" class="az-logo">Admission</a>
      </div><!-- az-sidebar-header -->
      <div class="az-sidebar-loggedin">
        <!-- <div class="az-img-user online"><img src="img/faces/face1.jpg" alt=""></div> -->
        <div class="media-body">
          <h6><?php echo $row['stud_name']; ?></h6>
          <span></span>
        </div><!-- media-body -->
      </div><!-- az-sidebar-loggedin -->
      <div class="az-sidebar-body">

        <ul class="nav">
        <li class="nav-label">Main Menu</li>
          <li class="nav-item show current">
            <a href="dashboard1.php" class="nav-link with-sub"><i class="typcn typcn-document"></i>MID</a>
            <ul class="nav-sub">
              <li class="nav-sub-item  "><a href="tab_adminrk.php" class="nav-sub-link ">Add Rakan Kerjasama</a></li>
              <li class="nav-sub-item  "><a href="list_rakankerjasama.php" class="nav-sub-link ">List of Rakan Kerjasama</a></li>
              <li class="nav-sub-item  "><a href="list_approved_rk.php" class="nav-sub-link ">List of Approved RK</a></li>
            </ul>
          </li><!-- nav-item -->
        </div>
      </div>

    <div class="az-content az-content-dashboard-two">
      <div class="az-header">
        <div class="container-fluid">
          <div class="az-header-left">
            <a href="" id="azSidebarToggle" class="az-header-menu-icon"><span></span></a>
          </div><!-- az-header-left -->
          <div class="az-header-center">
            <input type="search" class="form-control" placeholder="Search for anything...">
            <button class="btn"><i class="fas fa-search"></i></button>
          </div><!-- az-header-center -->
          <div class="az-header-right">
            <div class="az-header-message">
              <a href=""><i class="typcn typcn-messages"></i></a>
            </div><!-- az-header-message -->
            <div class="dropdown az-header-notification">
              <a href="" class="new"><i class="typcn typcn-bell"></i></a>
              <div class="dropdown-menu">
                <div class="az-dropdown-header mg-b-20 d-sm-none">
                  <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                </div>
                <h6 class="az-notification-title">Notifications</h6>
                <p class="az-notification-text">You have 2 unread notification</p>
                <div class="az-notification-list">
                  <div class="media new">
                    <div class="az-img-user"><img src="img/faces/face2.jpg" alt=""></div>
                    <div class="media-body">
                      <p>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</p>
                      <span>Mar 15 12:32pm</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <div class="media new">
                    <div class="az-img-user online"><img src="img/faces/face3.jpg" alt=""></div>
                    <div class="media-body">
                      <p><strong>Joyce Chua</strong> just created a new blog post</p>
                      <span>Mar 13 04:16am</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <div class="media">
                    <div class="az-img-user"><img src="img/faces/face4.jpg" alt=""></div>
                    <div class="media-body">
                      <p><strong>Althea Cabardo</strong> just created a new blog post</p>
                      <span>Mar 13 02:56am</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <div class="media">
                    <div class="az-img-user"><img src="img/faces/face5.jpg" alt=""></div>
                    <div class="media-body">
                      <p><strong>Adrian Monino</strong> added new comment on your photo</p>
                      <span>Mar 12 10:40pm</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                </div><!-- az-notification-list -->
                <div class="dropdown-footer"><a href="">View All Notifications</a></div>
              </div><!-- dropdown-menu -->
            </div><!-- az-header-notification -->
            <div class="dropdown az-profile-menu">
              <a href="" class="az-img-user"><img src="img/faces/face1.jpg" alt=""></a>
              <div class="dropdown-menu">
                <div class="az-dropdown-header d-sm-none">
                  <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                </div>
                    <div class="az-header-profile">
                  <div class="az-img-user">
                    <img src="img/faces/face1.jpg" alt="">
                  </div><!-- az-img-user -->
                  <h6><?php echo $row['stud_name']; ?></h6>
                </div><!-- az-header-profile -->
                <a href="signout.php" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
              </div><!-- dropdown-menu -->
            </div>
            <?php } ?>
          </div><!-- az-header-right -->
        </div><!-- container -->
      </div><!-- az-header -->
