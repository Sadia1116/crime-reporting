<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/b99e675b6e.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="CSS/homepage.css">

  <title>Online Crime Reporting</title>

</head>

<body>


  <!-- ====================================== Hearder : Navigation Bar Design ======================================= -->


  <div class="container-fluid">
    <nav class="navbar fixed-top navbar-expand-md">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span> <i class="fas fa-bars navbar-icon"></i> </span>
      </button>

      <a href="#" class="navbar-brand text-uppercase font-weight-bold">Online <span>Crime
        </span><span>reporting</span></a>


      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Home
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#about">About</a>
              <a class="dropdown-item" href="#our-services">Our Services</a>
              <a class="dropdown-item" href="#news">Recent News</a>
              <a class="dropdown-item" href="#photography">Photography</a>
              <a class="dropdown-item" href="#contact">Contact</a>
              
              
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link text-center text-md-left" href="crimerate.php">Crime Rate</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link text-center text-md-left" href="complain.php">Complaint Box</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-center text-md-left" href="register.php">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-center text-md-left" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </nav>

  </div>


  <!--===================================== main : Image ======================================================-->


  <main>
    <!--Carusel start-->

    <div id="indicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#indicators" data-slide-to="0" class="active"></li>
        <li data-target="#indicators" data-slide-to="1"></li>
        <li data-target="#indicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('img/MM-13.jpg')">

        </div> <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('img/MM-11.jpg')">

        </div> <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('img/MM-2.jpg')">

        </div>
      </div> <a class="carousel-control-prev" href="#indicators" role="button" data-slide="prev"> <span
          class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a
        class="carousel-control-next" href="#indicators" role="button" data-slide="next"> <span
          class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
    </div>

  </main>
  <!--carusel end-->




  <div class="text">
    <b>Want to Report a <br> complaint ?</b> <br>
    <button type="button" class="btn btn-warning" ><b> <a href="complain.php">
      Complain!</b></a></button>
  </div>


  <!--===================================== Header : Image ======================================================-->




  <!--======================================= main: About Section===================== -->

  <section id="about">
    <div class="container-fluid about-section">

      <div>
        <div class="title">
          <h2>About Crime</h2>

        </div>
        <div class="row">
          <div class="col">
            <div class="about-logo">
              <img src="img/five.jpg" alt="pro">
            </div>
          </div>
          <div class="col">
            <div class="about-text">
              <h2> How to report a Crime </h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Iusto nisi optio quo asperiores iste vitae, perferendis modi
                itaque laboriosam harum praesentium nihil labore, hic
                libero consequuntur dignissimos magnam. Doloremque
                deserunt quod consectetur, expedita magnam illo corrupti
                illum cum. Nobis expedita recusandae amet nesciunt? E
                xpedita, harum impedit. Deleniti, ea consequuntur.
                Iste quis eius, molestiae adipisci vel ipsa ullam
                dolorem harum iusto possimus eum nesciunt nobis accusamus blanditiis rem ducimus? Eum
                enim unde d
                olorem recusandae reiciendis officia sint qui iusto e
                arum. Voluptates earum aspernatur, vel perferendis con
                sequuntur error ea rem amet, labore magni aliquid ab i
                ste consectetur deserunt nulla corrupti, dolorem ipsa
                m nemo commodi? Magnam optio error quam voluptates q
                uisquam, beatae laboriosam magni eum iusto voluptati
                bus facere fugit et inventore aperiam libero nulla
                , est dolorum reprehenderit in soluta consectetur nostrum
                aliquid? Dolor quas est aliquam? Ipsam corrupti e
                aque expedita eligendi minus voluptas magnam dele
                ctus adipisci quod.s nam autem tempora. A
                iquam, doloribus. Ullam reprehenderit voluptas ut iusto magnam simi

              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>





  <!--======================================= Our Service ===================== -->
  <section id="our-services">
    <div class="container-fluid">

      <div class="service-section">
        <div class=title>
          <h2>our service</h2>

        </div>
        <div class="service">
          <div class="serv-icon">
            <i class="fa fa-book"></i>
          </div>
          <h3>General Diary</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Consectetur eaque voluptates distinctio nisi quo fuga similique nobis labore quas.
            Quidem.
          </p>
        </div>
        <div class="service">
          <div class="serv-icon">
            <i class="fas fa-file-alt"></i>
          </div>
          <h3>File a Case</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Consectetur eaque voluptates distinctio nisi quo fuga similique nobis labore quas.
            Quidem.
          </p>
        </div>

        <div class="service">
          <div class="serv-icon">
            <i class="fas fa-file-alt"></i>
          </div>
          <h3>File a Case</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Consectetur eaque voluptates distinctio nisi quo fuga similique nobis labore quas.
            Quidem.
          </p>
        </div>

        <div class="service">
          <div class="serv-icon">
            <i class="fas fa-file-alt"></i>
          </div>
          <h3>File a Case</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Consectetur eaque voluptates distinctio nisi quo fuga similique nobis labore quas.
            Quidem.
          </p>
        </div>
      </div>

    </div>

  </section>

  <!--======================================= RECRNT NEWS ===================== -->
  <section id="news">
  <!-- Custom Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet">

  <section class="news pt-0">
    <div class="container-fluid mt-md-5">
      <h2 class="mx-4 my-0 text-center">Recent News</h2>
      <ul class="row d-lg-flex list-unstyled image-block justify-content-center px-lg-0 mx-lg-0">
        <li class="col-lg-4 col-md-5 image-block full-width p-3">
          <div class="image-block-inner">
            <a class="mh-100" href="#">
              <img src="img/news1.jpg"
                alt="Arrest" class="img-responsive w-100"></a>
           
            <h4 class="mt-3"><a href="https://www.dhakatribune.com/bangladesh/nation/2021/11/10/two-arrested-for-international-financial-fraud">Two arrested for international financial fraud</a></h4>
            <!--  <p></p> -->
            <a href="https://www.dhakatribune.com/bangladesh/nation/2021/11/10/two-arrested-for-international-financial-fraud" class="read-more">Read more &gt;</a>
          </div><!-- .image-block-inner -->
        </li>
        <li class="col-lg-4 col-md-5 image-block full-width p-3">
          <div class="image-block-inner">
            <a class="mh-100" href="#">
              <img src="img/news2.jpeg"
                alt="RAB" class="img-responsive w-100"></a>
            
            <h4 class="mt-3"><a href="https://www.dhakatribune.com/bangladesh/2021/11/09/rab-arrests-12-men-with-arms-after-gunfight-in-narsingdi">RAB arrests 12 men with arms after gunfight in Narsingdi</a></h4>
            <!--  <p></p> -->
            <a href="https://www.dhakatribune.com/bangladesh/2021/11/09/rab-arrests-12-men-with-arms-after-gunfight-in-narsingdi" class="read-more">Read more &gt;</a>
          </div><!-- .image-block-inner -->
        </li>
        <li class="col-lg-4 col-md-5 image-block full-width p-3">
          <div class="image-block-inner">
            <a class="mh-100" href="#">
              <img src="img/news3.jpg"
                alt="LunarXP Sets Target for First Mars Landing in 2030" class="img-responsive w-100"></a>
            
            <h4 class="mt-3"><a href="https://www.dhakatribune.com/bangladesh/2021/11/09/man-held-with-8000-yaba-pills-at-dhaka-airport">Man held with 8,000 yaba pills at Dhaka airport</a></h4>
            <!--  <p></p> -->
            <a href="https://www.dhakatribune.com/bangladesh/2021/11/09/man-held-with-8000-yaba-pills-at-dhaka-airport" class="read-more">Read more &gt;</a>
          </div><!-- .image-block-inner -->
        </li>
      </ul>
    </div>
  </section>









  <!--=======================================RECENT NEWS ===================== -->



  <!--======================================= Photography frame ===================== -->

  <!-- Page Content -->
  <section id="photography">
    <div class="container-fluid">

      <h1 class="fw-light text-center text-lg-start mt-4 mb-0 head">Photography of Bangladesh Police</h1>

      <hr class="mt-2 mb-5">

      <div class="row text-center text-lg-start">

        <div class="col-lg-3 col-md-4 col-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="img/police1.jpg" alt="Police Activity">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="img/police2.jpg" alt="Police Activity">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="img/police3.jpg" alt="Police Activity">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="img/police4.jpg" alt="Police Activity">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="img/police5.jpg" alt="Police Activity">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="img/police6.jpg" alt="Police Activity">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="img/police7.jpg" alt="Police Activity">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="img/police8.jpg" alt="Police Activity">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="img/police9.jpg" alt="Police Activity">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="img/police10.jpg" alt="Police Activity">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="img/police11.jpg" alt="Police Activity">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="img/police12.jpg" alt="Police Activity">
          </a>
        </div>
      </div>

    </div>
  </section>

















  <!--======================================= Photography frame end ===================== -->



  <!--======================================= CONTACT ===================== -->

  <section id="contact">
    <div class="container-max-fluid about-form">

      <div class="contract-section">
        <div class="title">
          <h2> Send an Email </h2>
        </div>


        <div class="container-fluid flex-center">
          <div class="row pt-5 mt-3">
            <div class="col-lg-6 wow fadeIn mb-5 text-center text-lg-left">
              <div class="white-text">

                <p class="wow fadeInLeft" data-wow-delay="0.3s">
                <p></p><br><br><strong>Bangladesh Police Police Headquarters</strong><br>
                6,Phoenix Road, Fulbaria Dhaka - 1000 <br>
                Postal Address: G.P.O. Box 579</br>

                </p>
                <p class="wow fadeInLeft" data-wow-delay="0.3s">
                <p><strong>Contact Information</strong>
                  <br>Tel: +880-2-223381967,
                  +880-2-223383515</br>
                  <br>Fax: +880-2-9563362,
                  +880-2-9563358,
                  +880-2-7126305,
                  +880-2-9562330
                  </br>
                  <br>Email: oic_opscr@police.gov.bd</br>


                </p>



              </div>
            </div>

            <div class="col-lg-6 wow fadeIn">
              <div class="wrapper">
                <div class="title">
                  Give us your feedback

                </div>
                <!--form start-->
                <form name="form" method="post" action="success.php" OnSubmit="return fncValidate();"
                  autocomplete="off">
                  <table align="center" width="400" border="0">
                    <tr>
                      <td width="125"> Firstname :</td>
                      <td width="180">
                        <div class="input-group">
                          <input type="text" name="fname" size="20" required>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td width="125"> Lastname :</td>
                      <td width="180">
                        <div class="input-group">
                          <input type="text" name="lname" size="20"required>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td> Email :</td>
                      <td>
                        <div class="input-group"><input type="text" name="email"required></div>
                      </td>
                    </tr>


                    <tr>
                      <td>Comment :</td>
                      <td><textarea name="comment" class="textarea-field"required></textarea></td>
                    </tr>




                    <tr>
                      <td></td>
                      <td><input type="submit" name="Submit" value="Submit" class="btn">
                        <input type="reset" name="reset" value="Reset" class="btn">
                      </td>
                    </tr>
                  </table>

                </form>

                <!--form end-->
              </div>
            </div>
          </div>
  </section>









  <!--======================================= Footer Section ===================== -->


  <footer>
    <div class="row text-white">
      <div class="col-lg-6 text-center text-lg-left mb-3 mb-lg-0">
        <p class="small mb-0 mt-1 ">&copy; Copyright Proshenjit Karmakar & Mominul Haque</p>
      </div>
      <div class="col-lg-6 text-center text-lg-right">
        <a href="#">Home</a>
        <a href="https://www.facebook.com/aarka2"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/proshenjit.karmakar/"><i class="fab fa-instagram"></i></a>
        <a href="https://www.linkedin.com/in/proshenjit-karmakar-6ba399157/"><i class="fab fa-linkedin-in"></i></a>

      </div>
    </div>
  </footer>


















  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




</body>

</html>