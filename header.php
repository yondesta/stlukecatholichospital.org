<?php
// PHP code to get the current page file name
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>St. Luke Catholic Hospital & College of Nursing and Midwifery</title>
  <meta name="description" content="St. Luke Catholic Hospital and College of Nursing and Midwifery, providing quality healthcare and education rooted in faith.">
  <meta name="keywords" content="St. Luke, Catholic Hospital, Nursing College, Midwifery, Healthcare, Medical Care, Education">

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
        <h1 class="sitename">St. Luke's<span>.</span></h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php" class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">Home</a></li>
          <li><a href="about.php" class="<?php echo ($current_page == 'about.php') ? 'active' : ''; ?>">About</a></li>
          <li><a href="departments.php" class="<?php echo ($current_page == 'departments.php') ? 'active' : ''; ?>">Departments</a></li>
          <li><a href="services.php" class="<?php echo ($current_page == 'services.php') ? 'active' : ''; ?>">Services</a></li>
          <li><a href="doctors.php" class="<?php echo ($current_page == 'doctors.php') ? 'active' : ''; ?>">Doctors</a></li>
          
          <li class="dropdown">
            <?php
              // Check if any College sub-page is active to highlight the main dropdown
              $is_college_active = in_array($current_page, ['college-about.php', 'college-programs.php', 'college-admissions.php', 'college-contact.php']);
            ?>
            <a href="#" class="<?php echo ($is_college_active) ? 'active' : ''; ?>">
              <span>College</span> <i class="bi bi-chevron-down toggle-dropdown"></i>
            </a>
            <ul>
              <li><a href="college-about.php" class="<?php echo ($current_page == 'college-about.php') ? 'active' : ''; ?>">About College</a></li>
              <li><a href="college-programs.php" class="<?php echo ($current_page == 'college-programs.php') ? 'active' : ''; ?>">Programs Offered</a></li>
              <li><a href="college-admissions.php" class="<?php echo ($current_page == 'college-admissions.php') ? 'active' : ''; ?>">Admissions</a></li>
              <li><a href="college-contact.php" class="<?php echo ($current_page == 'college-contact.php') ? 'active' : ''; ?>">College Contact</a></li>
            </ul>
          </li>
          <li><a href="contact.php" class="<?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="appointment.php">Appointment</a>

    </div>
  </header>

  <main class="main">
    ```