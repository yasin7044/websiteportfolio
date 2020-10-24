
<?php
          if (isset($_POST['sbmt'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $msg = $_POST['message'];

            $to = 'yasin.quraishy@gmail.com';
            $from = $email;
            $subject = 'Contact Request';
            $message="Name :".$name."\n"."Wrote the following :"."\n\n".$msg;
            $headers = "From: " . $from . "\r\n";
            //echo $to;echo '<br>';
            //echo $from;echo '<br>';
           // echo $subject;echo '<br>';
           // echo $message;echo '<br>';
           // echo $headers;echo '<br>';
            echo mail($to, $subject, $message, $headers);
            echo "Thank You!";
          }
          ?>
          <!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

  <!--Main -->
  <link rel="stylesheet" href="css/main.css" />
  <title>Polestar Capital | Home</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.html">
      <img src="images/logo.png" alt="Logo" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#special">Specialization</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#transaction">TRANSACTIONS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#members">TEAM PROFILE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>

  <section class="hero">
    <div class="hero">
      <div class="hero-img hero-home">
        <div class="hero-text">
          <h1 class="big-heading">Polestar Capital</h1>
          <h3 class="big-subheading">
            acts as the guiding principle for its valuable clients to help
            them navigate through appropriate capital solutions for their
            businesses.
          </h3>
          <a href="#about" class="btn btn-blue">About That</a>
        </div>
      </div>
    </div>
  </section>

  <main>
    <!-- //////=========////////// About \\\\\\\\\\=========\\\\\\ -->

    <section id="about">
      <div class="container">
        <h1>Who We Are</h1>
        <p>
          Polestar Capital is a specialist Investment Bank primarily focused
          on Mezzanine Capital, Private Equity and Venture capital. We work
          closely with both business Owners as well as their Operating
          Companies to help them access optimum capital solutions through our
          global investor coverage. Our team has collectively delivered over
          US$ 40.0bn of capital solutions to our clients over the past several
          years.
        </p>
        <p>
          We are based out of Mumbai with pan India coverage and offer Indian
          credit and equity exposure to global Institutional Investors. We
          operate in the North American and European markets through select
          International IB tie-ups.
        </p>

        <!-- //////=========////////// Cards \\\\\\\\\\=========\\\\\\ -->
        <div class="row cards">
          <div class="col-xs-12 col-md-4">
            <div class="card">
              <div class="has-card-icon">
                <img src="../polestar/images/icons/card-debt.png" alt="debt" />
              </div>
              <h3>Debt and Equity Solutions</h3>
              <p>
                We work closely with large marquee organizations as well as
                mid-sized corporates to help them provide both Debt and Equity
                solutions.
              </p>
            </div>
          </div>
          <div class="col-xs-12 col-md-4">
            <div class="card">
              <div class="has-card-icon">
                <img src="../polestar/images/icons/card-capital.png" alt="debt" />
              </div>
              <h3>Capital Solutions</h3>
              <p>
                Polestar has strong international linkages through select
                International IB tie-ups across America and Europe to provide
                optimum international capital solutions to its clients.
              </p>
            </div>
          </div>
          <div class="col-xs-12 col-md-4">
            <div class="card">
              <div class="has-card-icon">
                <img src="../polestar/images/icons/card-transaction.png" alt="debt" />
              </div>
              <h3>Transactional Approach</h3>
              <p>
                We always approach our clients with an intention to add value
                to their business should there be an opportunity as we are not
                conflicted or driven by short term objectives.
              </p>
            </div>
          </div>
        </div>

        <h3 class="subheading">Core Values</h3>
        <section>
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-lg-3">
              <div class="has-small-icon">
                <img src="../polestar/images/icons/icon-independent.png" alt="debt" />
              </div>
              <h3>Independent</h3>
              <p>
                We are fiercely independent in our approach and do not shy
                away from giving advise that is best suited for a situation as
                we believe in providing sustainable solution.
              </p>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-3">
              <div class="has-small-icon">
                <img src="../polestar/images/icons/icon-integrity.png" alt="debt" />
              </div>
              <h3>Integrity</h3>
              <p>
                We have the highest level of integrity in our day to day
                dealings is core to our heart and we uphold it in highest
                regard.
              </p>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-3">
              <div class="has-small-icon">
                <img src="../polestar/images/icons/icon-cutting-edge.png" alt="debt" />
              </div>
              <h3>Cutting Edge</h3>
              <p>
                We go the extra mile in trying to innovate the best possible
                solution for our clients in complex situations.
              </p>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-3">
              <div class="has-small-icon">
                <img src="../polestar/images/icons/icon-transparency.png" alt="debt" />
              </div>
              <h3>Transparency</h3>
              <p>
                We are always transparent in our communication with client
                which we believe is a great virtue as the same is often highly
                regarded by our clients.
              </p>
            </div>
          </div>

          <a href="about.html" class="btn btn-blue btn-on-light">Learn More</a>
        </section>
      </div>
    </section>

    <!-- //////=========////////// Our Specialization \\\\\\\\\\=========\\\\\\ -->

    <section id="special">
      <div class="container special">
        <h1 class="heading">Our Specialization</h1>
        <div class="row">
          <div class="col-xs-12 col-sm-7">
            <p>
              Polestar Capital provides spectrum of Capital solutions
              including Debt and Equity. With focus on growth Capital,
              Polestar Capital specializes in Structured Finance, Private
              Finance, Private Equity and Venture Capital. While we have
              capability to deliver both high grade as well as high yield
              capital solutions, we lay special emphasis on be-spoke, complex
              solutions as the Firm believes that is an area where it can add
              value to a specific situation/opportunity. We provide solutions
              across varied areas such as leveraged finance, special
              situations, structured credit, pre IPO, subordinated debt, etc
              both at an Operating Company as well as its Promoter level.
            </p>
          </div>
          <div class="col-xs-12 col-sm-2"></div>
          <div class="col-xs-12 col-sm-3">
            <div class="has-links">
              <h3><a href="special.html#mezzanine">Mezzanine Capital</a></h3>
              <h3><a href="special.html#privateequity">Private Equity</a></h3>
              <h3><a href="special.html#venturecapital">Venture Capital</a></h3>
              <h3><a href="special.html#others">Others</a></h3>
            </div>
          </div>
        </div>

        <a href="special.html" class="btn btn-white">Learn More</a>
      </div>
    </section>

    <!-- //////=========////////// Our Transactions \\\\\\\\\\=========\\\\\\ -->

    <section id="transaction">
      <div class="container">
        <h1>Our Transactions</h1>
        <p>
          Polestar Capital's successful journey began during onset of Spring
          2015. In a short span of time we have been able to deliver some
          unique value proposition to our clients. We have been able to
          provide solution across mezzanine finance, private financing,
          private equity, overseas funding & fund placement. We have delivered
          some of the most complex and bespoke transactions to our clients,
          which demonstrate our capabilities and differentiates us from the
          rest.
        </p>

        <p></p>
        <p>
          <small>
            *As a matter of policy we do not disclose names of the
            Counterparties involved in the Transaction. Should you wish to
            know more about the Transaction, please get in touch with us.
          </small>
        </p>

        <!-- //////=========////////// Cards \\\\\\\\\\=========\\\\\\ -->
        <div class="row cards">
          <div class="col-xs-12 col-md-4">
            <div class="card">
              <h3 class="subheading">June 2018</h3>
              <p>Exclusive Advisor</p>
              <div class="has-card-icon">
                <img src="../polestar/images/icons/icon-coins.png" alt="coin" />
              </div>
              <h3>INR 2,500 mn</h3>
              <p>Senior Secured AA-rated Maiden</p>
            </div>
          </div>
          <div class="col-xs-12 col-md-4">
            <div class="card">
              <h3 class="subheading">May 2018</h3>
              <p>Sole Advisor</p>
              <div class="has-card-icon">
                <img src="../polestar/images/icons/icon-coins.png" alt="coin" />
              </div>
              <h3>INR 1,950 mn</h3>
              <p>From a large Institutional Investor</p>
            </div>
          </div>
          <div class="col-xs-12 col-md-4">
            <div class="card">
              <h3 class="subheading">Mar 2018</h3>
              <p>Sole Advisor</p>
              <div class="has-card-icon">
                <img src="../polestar/images/icons/icon-coins.png" alt="coin" />
              </div>
              <h3>INR 300 mn</h3>
              <p>From a Private Bank</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- //////=========////////// Members \\\\\\\\\\=========\\\\\\ -->

    <section id="members">
      <div class="container">
        <h1>Members</h1>

        <!-- //////=========////////// Profile Cards \\\\\\\\\\=========\\\\\\ -->
        <div class="row">
          <div class="col-xs-12 col-md-4">
            <div class="profile-card">
              <div class="has-profile-pic">
                <img src="images/member-1.jpg" alt="" />
              </div>
              <div class="has-profile-content">
                <p>
                  Sanjay Singh
                  <br />
                  <br />
                  Managing Director
                </p>
                <a href=""><img src="images/icons/right-arrow.png" alt="next" /></a>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-md-4">
            <div class="profile-card">
              <div class="has-profile-pic">
                <img src="images/member-2.jpg" alt="" />
              </div>
              <div class="has-profile-content">
                <p>
                  Abhijit Rao
                  <br />
                  <br />
                  Managing Director
                </p>
                <a href=""><img src="images/icons/right-arrow.png" alt="next" /></a>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-md-4">
            <div class="profile-card">
              <div class="has-profile-pic">
                <img src="images/member-3.jpg" alt="" />
              </div>
              <div class="has-profile-content">
                <p>
                  Vikas Maskeri
                  <br />
                  <br />
                  Assistant Vice President
                </p>
                <a href=""><img src="images/icons/right-arrow.png" alt="next" /></a>
              </div>
            </div>
          </div>
        </div>

        <h3 class="subheading">Be One Of Us</h3>
        <p>
          We firmly believe that the strength of an organization lies in its
          people and we are always looking to add exceptional talent across
          business verticals. If you are interested in exploring opportunities
          and be part of the team, do write to us at
          <span class="has-links"><a href="mailto: info@polestarholdings.com">careers@polestarholdings.com</a></span>.
        </p>
      </div>
    </section>

    <!-- //////=========////////// Profile Cards \\\\\\\\\\=========\\\\\\ -->

    <section id="contact">
      <div class="container">
        <h1>Contact Us</h1>
        <div class="row">
          

          <form class="col-md-5 col-xs-12" action="" method="post">
            <div class="form-group">
              <label for="inlineFormInputName">Name</label>
              <input type="text" name="name" class="form-control" placeholder="John Doe" />
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="iam@someone.com" />
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Message</label>
              <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Let Us Know"></textarea>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1" />
              <label class="form-check-label has-links" for="exampleCheck1"><a href="">Privacy Policy</a> applies</label>
            </div>
            <a class="btn btn-blue btn-on-light">Submit</a>
            <input type="submit" class="btn btn-blue btn-on-light" name="sbmt" value="Submit">
          </form>

          <div class="col-md-3"></div>

          <div class="col-xs-12 col-md-4">
            <h3>Our Location</h3>
            <p>
              <span class="has-small-icon">
                <img src="images/icons/bank-small.png" alt="address" />
              </span>
              Polestar Capital Advisory & Investment Holdings Pvt Ltd.
              <br />
              1135, B Wing, Peninsula Business Park,
              <br />
              Senapati Bapat Marg
              <br />
              Lower Parel (W)
              <br />
              Mumbai – 400013
            </p>
            <p>
              <span class="has-small-icon">
                <img src="images/icons/phone.png" alt="address" />
              </span>
              + 91 22 6687 9368
            </p>
            <p>
              <span class="has-small-icon">
                <img src="images/icons/email.png" alt="address" />
              </span>
              info@polestarholdings.com
            </p>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- //////=========////////// Footer \\\\\\\\\\=========\\\\\\ -->

  <footer>
    <section id="footer">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-4">
            <h3>Links</h3>
            <ul class="has-links">
              <li><a href="about.html">About</a></li>
              <li><a href="special.html">Specialization</a></li>
              <li><a href="#transaction">Transaction</a></li>
              <li><a href="">Team Profile</a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-md-4">
            <h3>Location</h3>
            <p>
              Polestar Capital Advisory & Investment Holdings Pvt Ltd.
              <br />
              1135, B Wing, Peninsula Business Park,
              <br />
              Senapati Bapat Marg
              <br />
              Lower Parel (W)
              <br />
              Mumbai – 400013
            </p>
          </div>
          <div class="col-xs-12 col-md-4">
            <h3>Contact</h3>
            <ul class="has-links">
              <li><a href="tel: + 91 22 6687 9368">+ 91 22 6687 9368</a></li>
              <li>
                <a href="mailto: info@polestarholdings.com">info@polestarholdings.com</a>
              </li>
            </ul>
          </div>
        </div>

        <hr />
        <p class="has-links our-site">
          Powered by &ndash;
          <a href="https://www.simplysyntax.in/">Simply Syntax Technologies</a>
        </p>
      </div>
    </section>
  </footer>

  <!-- Optional JavaScript -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>