<?php
if (isset($_POST['submit'])) {
    $name = $_POST['fullname'];
    $purpose = $_POST['purpose'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $email = $_POST['email'];
    $owner_email="mpavlov@rediffmail.com";
    $subject="Contact us Mail Form";

    $messageBody ="";
    $messageBody .= 'Name: ' . $name . "\n";
    $messageBody .= "\n";
    $messageBody .= 'Email Address: ' .$email  . "\n";
    $messageBody .=  "\n";
    $messageBody .= 'Phone Number: ' . $phone  . "\n";
    $messageBody .= "\n";
    $messageBody .= 'Purpose Number: ' . $purpose . "\n";
    $messageBody .=  "\n";
    $messageBody .= 'Message: ' .$message  . "\n";
    if(mail($owner_email, $subject, $messageBody, $email))
    {
        echo '<script>alert("Email Sent Successful");</script>';
    }
    else
    {
      echo "Email Not Sent";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Rahara Paschimpara</title>

    <!-- //////=========////////// Bootstrap CSS \\\\\\\\\\=========\\\\\\ -->
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css" />
    <link rel="stylesheet" href="css/bootstrap-grid.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <!-- //////=========////////// Main CSS \\\\\\\\\\=========\\\\\\ -->
    <link rel="stylesheet" href="css/main.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php">
        <img src="images/logo-s.png" alt="Logo" />
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php"
              >Home <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#events">Events</a>
          </li>
          <li class="nav-item contact">
            <a class="btn btn-white" href="#contact-us">Contact Us</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="hero"></div>

    <!-- //////=========////////// Section Theme \\\\\\\\\\=========\\\\\\ -->

    <section class="container">
      <h1 class="section-title">Schooler Bag ta boddo bhaari</h1>
      <img class="theme-img" src="images/image-theme.jpg" alt="theme" />
      <p>
        The survey, according to The New Indian Express, also noted that over
        88% of children, in the age group of 7-13, carry more than 45% of their
        weight on their backs.
      </p>
      <p>
        This study was carried out among more than 2500 children and 1000
        parents in major cities. The findings also included startling facts such
        as most students mandatorily carry over 20 textbooks and exercise copies
        daily, together with sports kits and other equipments on certain days.
      </p>
      <p>
        It's healthy to want to bring out the best in your child. But sometimes,
        parents put children under so much pressure to perform well that their
        children suffer serious consequences.
      </p>
      <img src="images/theme-banner.jpg" alt="theme" />
      <div class="row members">
        <div class="col-xs-12 col-md-6">
          <div class="card flex-row">
            <div class="img-square-wrapper">
              <img class="" src="images/img-member-1.jpg" alt="member" />
            </div>
            <div class="card-body">
              <h3 class="card-title">Malbika Sen</h3>
              <p class="card-text">Brand Ambassador</p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-6">
          <div class="card flex-row">
            <div class="img-square-wrapper">
              <img class="" src="images/img-member-2.jpg" alt="member" />
            </div>
            <div class="card-body">
              <h3 class="card-title">Piyali Sengupta</h3>
              <p class="card-text">Theme Music</p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-6">
          <div class="card flex-row">
            <div class="img-square-wrapper">
              <img class="" src="images/img-member-3.jpg" alt="member" />
            </div>
            <div class="card-body">
              <h3 class="card-title">Sanjib Narayan Dutta</h3>
              <p class="card-text">Sculpture Artist</p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-6">
          <div class="card flex-row">
            <div class="img-square-wrapper">
              <img class="" src="images/img-member-4.jpg" alt="member" />
            </div>
            <div class="card-body">
              <h3 class="card-title">Ashim Kundu</h3>
              <p class="card-text">Theme Artist</p>
            </div>
          </div>
        </div>
      </div>

      <!-- //////=========////////// Section Advertise \\\\\\\\\\=========\\\\\\ -->
    <div class="advert" style="background: #c3b2b2; height: 300px; display: flex; justify-content: center; align-items: center;">
    <marquee style="text-transform: uppercase; font-size: 1.5rem; font-weight: 700;">Your ad here<br>+91 9433649895<br>+91 6290848010</marquee>

  </div>
  
   
    </section>




    



    <!-- //////=========////////// Section About \\\\\\\\\\=========\\\\\\ -->

    <section id="about" class="container">
      <h1 class="section-title">About Us</h1>
      <p>
        Established in the year 1953, We Paschimpara Sarbojonin Durga Puja
        Committee are stepping in our 66th year. We have a track record of
        mesmerizing presentations on various subjects of in-depth thought and
        bagged awards and recognitions from different honorable appraisers year
        on year. Our biggest compliment comes from you guests who rush to see
        our creations every year from distant places across the city and beyond,
        facing all odds.
      </p>
      <p>
        We cordially invite everyone of you to grace the occasion with your
        presence during the puja days. We, from Paschimpara Durga Puja Committee
        wish everyone a very happy puja in advance.
      </p>

      <div class="row members">
        <div class="col-xs-12 col-md-6">
          <div class="card flex-row">
            <div class="img-square-wrapper">
              <img class="" src="images/img-member-5.jpg" alt="member" />
            </div>
            <div class="card-body">
              <h3 class="card-title">Ashit Choudhury</h3>
              <p class="card-text">President</p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-6">
          <div class="card flex-row">
            <div class="img-square-wrapper">
              <img class="" src="images/img-member-6.jpg" alt="member" />
            </div>
            <div class="card-body">
              <h3 class="card-title">Avik Banerjee</h3>
              <p class="card-text">Secretary</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- //////=========////////// Events \\\\\\\\\\=========\\\\\\ -->

    <section id="events">
      <h1 class="section-title">Events</h1>
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-4">
            <div class="card">
              <div class="img-top">
                <img class="" src="images/img-event-1.jpg" alt="member" />
              </div>
              <div class="card-body">
                <h3 class="card-title">Khunti Puja</h3>
                <span class="date">4/7/19</span>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-md-4">
            <div class="card">
              <div class="img-top">
                <img class="" src="images/img-event-2.jpg" alt="member" />
              </div>
              <div class="card-body">
                <h3 class="card-title">Khunti Puja</h3>
                <span class="date">4/7/19</span>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-md-4">
            <div class="card">
              <div class="img-top">
                <img class="" src="images/img-event-3.jpg" alt="member" />
              </div>
              <div class="card-body">
                <h3 class="card-title">Sit & Draw Contest</h3>
                <span class="date">22/9/19</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- //////=========////////// Locate Us \\\\\\\\\\=========\\\\\\ -->
    <section class="container">
      <h1 class="section-title">Locate Us</h1>
      <div class="map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3680.0739351849506!2d88.37646532359062!3d22.72549315177452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89b9412f11c05%3A0xda09ee9296572549!2sPaschim%20Para%2C%20Chowdhary%20Para%2C%20Rahara%2C%20Khardaha%2C%20West%20Bengal%20700119!5e0!3m2!1sen!2sin!4v1568288187587!5m2!1sen!2sin"
          width="600"
          height="450"
          frameborder="0"
          style="border:0;"
          allowfullscreen=""
        ></iframe>
      </div>
    </section>

    <!-- //////=========////////// Contact Us \\\\\\\\\\=========\\\\\\ -->
    <section id="contact-us">
      <h1 class="section-title">Contact Us</h1>
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-6">
            <form  method="POST">
              <div class="row">
                <div class="col-xs-12 col-md-6">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Full Name"'
                    name="fullname"
                  />
                </div>
                <div class="col-xs-12 col-md-6">
                  <input type="text" class="form-control" placeholder="Phone" name="phone"/>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-md-6">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Purpose"
                    name="purpose"
                  />
                </div>
                <div class="col-xs-12 col-md-6">
                  <input type="text" class="form-control" name="email" placeholder="Email" />
                </div>
              </div>
              <div class="form-group">
                <textarea
                  class="form-control"
                  id="exampleTextarea"
                  rows="3"
                  placeholder="Your message here"
                  name="message"
                ></textarea>
              </div>
              <input class="btn btn-green" type="submit" name="submit" value="Submit" />
            </form>
          </div>
          <!-- Form Over -->
          <div class="col-md-2"></div>
          <div class="col-xs-12 col-md-4">
            <div class="contact-info">
              <div class="has-fa-icon">
                <span class="fa fa-envelope-o"></span>
                <span style="word-break: break-all"
                  >khardaraharapaschimpara@gmail.com</span
                >
              </div>
              <div class="has-fa-icon">
                <span class="fa fa-phone"></span>
                <p>
                  +91 9433649895 <br />
                  +91 8017849554
                </p>
              </div>
              <div class="has-fa-icon">
                <span class="fa fa-map-marker"></span>
                <p>
                  Paschimpara, Rahara <br />
                  PS: Kharda <br />
                  Kolkata - 700118
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- //////=========////////// Footer \\\\\\\\\\=========\\\\\\ -->
    <footer>
      <img class="theme-img" src="images/logo-l.png" alt="">
      <section>
        <div class="social-icons">
          <span class="fa fa-facebook-official"></span>
          <span class="fa fa-instagram"></span>
          <span class="fa fa-twitter"></span>
          <span class="fa fa-youtube-play"></span>
        </div>
      </section>
      <section class="footer_info">
        Designed by <a href="simplysyntax.in">Simply Syntax Technologies</a>
      </section>
    </footer>

    <!-- //////=========////////// Javascript \\\\\\\\\\=========\\\\\\ -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.flipster.min.js"></script>
  </body>
</html>
