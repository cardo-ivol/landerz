<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="/public/mdb/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="/public/mdb/css/mdb.min.css" rel="stylesheet">
    <!-- Slick JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" integrity="sha256-3h45mwconzsKjTUULjY+EoEkoRhXcOIU4l5YAw2tSOU=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha256-4hqlsNP9KM6+2eA8VUT0kk4RsMRTeS7QGHIM+MZ5sLY=" crossorigin="anonymous" />
    <style>
        body {
            font-weight: 400;
        }

        html,
        body,
        header,
        .intro-2 {
          height: 100%;
        }

        @media (max-width: 740px) {
          html,
          body,
          header,
          .intro-2 {
            height: 900px;
          }
        }

        @media (min-width: 800px) and (max-width: 850px) {
            html,
            body,
            header,
            .intro-2 {
              height: 900px;
            }
        }

        .t-shadow {
          text-shadow: 1px 1px 1px #000;
        }

        .min-chart .percent-alter {
            display: inline-block;
            line-height: 110px;
            z-index: 2;
        }

        .min-chat-alter {
          margin-top: 10px !important;
          margin-bottom: 10px !important;
        }

        .primary {
          color: #1476FB !important;
        }

        .primary-bg {
          background-color: #1476FB !important;
        }

        .top-h1 {
          font-size: 2rem !important;
        }

        .card-opac {
          background-color:rgba(255,255,255, 0.7);
        }
    </style>
</head>

<body class="creative-lp">

    <!-- Navigation & Intro -->
    <header>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top scrolling-navbar white">
            <div class="container">
                <a class="navbar-brand font-weight-bold title" href="#">DYZN LLC</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto smooth-scroll">
                        <li class="nav-item">
                            <a class="nav-link title" href="#home">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link title" href="#about" data-offset="90">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link title" href="#features" data-offset="90">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link title" href="#services" data-offset="90">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link title" href="#team" data-offset="90">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link title" href="#contact" data-offset="90">Contact</a>
                        </li>
                    </ul>
                    <!-- Social Icon  -->
                    <ul class="navbar-nav nav-flex-icons">
                        <li class="nav-item">
                            <a class="nav-link">
                                <i class="fa fa-facebook title"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">
                                <i class="fa fa-twitter title"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">
                                <i class="fa fa-instagram title"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!--Intro Section-->
        <section class="view intro-2" style="background-image: url('/public/img/bg.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
            <div class="mask">
                <div class="container h-100 d-flex justify-content-center align-items-center">
                    <div class="row flex-center pt-5 mt-3">
                        <div class="col-md-12 col-lg-6 text-center text-md-left margins">
                            <div class="dark-grey-text">
                                <h1 class="top-h1 title mt-md-5 mt-lg-0 font-weight-bold wow fadeIn" data-wow-delay="0.3s">
                                    <strong>Innovative connections to <br>meaningful encounters</strong>
                                </h1>
                                <hr class="hr-light wow fadeIn" data-wow-delay="0.3s">
                                <!-- <h6 class="wow fadeIn" data-wow-delay="0.3s">Innovative connections to meaningful encounters -->
                                </h6>
                                <br>
                                <a class="btn btn-white btn-rounded blue-text font-weight-bold ml-lg-0 wow fadeIn" data-wow-delay="0.3s">Portfolio</a>
                                <a class="btn blue-gradient white-text btn-rounded font-weight-bold wow fadeIn" data-wow-delay="0.3s">Learn more
                                </a>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                            <!-- <img src="https://mdbootstrap.com/img/Mockups/Transparent/Small/admin-new.png" alt="" class="img-fluid"> -->
                            <img src="/public/img/dzyn.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </header>
    <!-- Navigation & Intro -->

    <!-- Main content -->
    <main>
      <div class="productList">
        <div><img src="/public/img/f2f_app.jpg" class="img-fluid"></div>
        <div><img src="/public/img/dskreat_app.jpg" class="img-fluid"></div>
        <div><img src="/public/img/syftr_app.jpg" class="img-fluid"></div>
        <div><img src="/public/img/l4l_app.jpg" class="img-fluid"></div>
      </div>
        <div class="container">

            <!-- Section: About -->
            <section id="about" class="section about mt-5 mb-5 py-3 wow fadeIn" data-wow-delay="0.2s">

                <!-- Grid row -->
                <div class="row pt-2 mt-5">
                  <div class="col-md-12 mb-3 wow slideInUp" data-wow-delay="0.2s">

                  </div>

                    <!-- Grid column -->
                    <div class="col-lg-3 col-md-12 mb-3 wow slideInLeft" data-wow-delay="0.4s">
                        <!-- Image -->
                        <img src="/public/img/iphone.png" class="img-fluid" alt="My photo">
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-9 ml-auto col-md-12 wow fadeIn" data-wow-delay="0.4s">

                        <!-- Secion heading -->
                        <h3 class="mb-5 dark-grey-text title font-weight-bold wow fadeIn" data-wow-delay="0.2s">
                            <strong>The Vision</strong>
                        </h3>

                        <!-- Description -->
                        <p align="justify" class="grey-text">DYZN, LLC creates innovative software, connecting individuals in geographic proximity for casual and meaningful encounters in real time, incorporating the highest transparency standard in the industry.</p>


                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </section>
            <!-- Section: About -->

            <hr>

            <!-- Section: About -->
            <section id="about" class="section about mt-5 mb-5 py-3 wow fadeIn" data-wow-delay="0.2s">

                <!-- Grid row -->
                <div class="row pt-2 mt-5">



                    <!-- Grid column -->
                    <div class="col-md-12 wow fadeIn" data-wow-delay="0.4s">

                        <!-- Secion heading -->
                        <h3 class="mb-5 dark-grey-text title font-weight-bold text-center wow fadeIn" data-wow-delay="0.2s">
                            <strong>The Market</strong>
                        </h3>

                        <!-- Description -->
                        <p align="justify" class="grey-text">The dating industry is a $10B plus international market opportunity with consistent three digit revenue growth annually experienced by Tinder, the world's most popular dating software.</p>


                    </div>
                    <!-- Grid column -->
                </div>

                <div class="row">
                  <div class="col-md-12 wow fadeIn" data-wow-delay="0.6s">
                    <canvas id="lineChart"></canvas>
                  </div>

                </div>
                <!-- Grid row -->

            </section>
            <!-- Section: About -->

          </div>

          <div class="view jarallax">
            <image src="/public/img/problem_jar.jpg" class="jarallax-img">
            <div class="flex-center mask rgba-grey-strong">
              <div class="container py-4">

                  <!--Section: Services-->
                  <section id="integrated" class="section mt-3">

                      <!-- Section heading -->
                      <h3 class="text-center title mt-5 mb-3 white-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">
                          <strong>The Problem</strong>
                      </h3>

                      <!-- First row -->
                      <div class="row wow fadeIn white-text text-center" data-wow-delay="0.4s">
                        <div class="col-md-12">
                          <h4 class="mb-3 title py-4 t-shadow"><strong>Dating Apps suffer from misleading profile pictures and personal information</strong></h4>
                          <br>
                          <p>"Cat fishing" and similar tactics negatively affect user experience and trust in the product. The market has a need for more niche dating and relationship Apps, customized to specific targeted demographics currently being underserved or overlooked.
                          </p>
                        </div>

                      </div>
                      <div class="row wow fadeIn white-text py-5" data-wow-delay="0.4s">
                        <div class="col-6 mx-auto">
                          <div class="card card-opac">
                            <div class="card-body">
                              <canvas id="problemChart" style="max-width:500px;"></canvas>
                            </div>
                          </div>
                        </div>
                      </div>



                      <!-- /.First row -->

                  </section>
                  <!--/Section: Services-->

              </div>
            </div>
          </div>
          <!-- </div> -->
          <!--Second container-->

          <div class="container">

            <!-- Section: About -->
            <section id="about" class="section about mt-5 mb-5 py-3 wow fadeIn" data-wow-delay="0.2s">

                <!-- Grid row -->
                <div class="row pt-2 mt-5">



                    <!-- Grid column -->
                    <div class="col-md-12 wow fadeIn" data-wow-delay="0.4s">

                        <!-- Secion heading -->
                        <h3 class="mb-5 dark-grey-text title font-weight-bold text-center wow fadeIn" data-wow-delay="0.2s">
                            <strong>The Solution</strong> <i class="text-success fa fa-check-circle"></i>
                        </h3>

                        <!-- Description -->
                        <p align="justify" class="grey-text"><em>syftr</em> and its sister Apps (face2face, dskreat, L4L) provide users with tools to confirm accurate identification, incorporating innovative timestamped profile facial pictures and video chats for confirmation. DYZN, LLC has created a revolutionary infrastructure (template) currently incorporated in syftr, f2f, dskreat and L4L that can be replicated and deployed seamlessly into new niche Apps to meet the needs of other demographics. (veterans, seniors, pets, etc)</p>


                    </div>
                    <!-- Grid column -->
                </div>


                <!-- Grid row -->

            </section>
            <!-- Section: About -->

          </div>

          <div class="container-fluid" style="background-color: #F8F9FA">
            <div class="container py-4">

              <!-- Section: About -->
              <section id="marketing" class="section about mt-5 mb-5 py-3 wow fadeIn" data-wow-delay="0.2s">

                  <!-- Grid row -->
                  <div class="row pt-2 mt-5">



                      <!-- Grid column -->
                      <div class=" ml-auto col-md-12 wow fadeIn" data-wow-delay="0.4s">

                          <!-- Secion heading -->
                          <h3 class="mb-5 dark-grey-text title font-weight-bold wow fadeIn text-center" data-wow-delay="0.2s">
                              <strong>The Opportunity</strong>
                          </h3>


                              <!--Panel-->


                                  <!-- <p class="grey-text font-small mx-4">Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente earu
                                      proident. Ad vegan excepteur butcher vice lomo leggings.

                                  </p> -->
                                  <div class="mx-4 my-4">
                                  <p align="justify" class="grey-text">DYZN, LLC has initiated it's first round private investment offering. This round of funding has a target raise of $1.6M by December 1, 2018.</p>
                                  <p align="justify" class="grey-text">Funding will launch syftr's ad campaign, complete and publish the Android syftr edition, (iOS/Apple version is complete) and complete the development of DYZN WebRTC (video chat) solution.</p>
                                  <p align="justify" class="grey-text">face2face, dskreat and L4L Apps will follow in succession with projected launches throughout 2019.</p>
                                </div>

                              <!--/.Panel-->



                      </div>


                  </div>
                  <!-- Grid row -->

              </section>
              <!-- Section: About -->

            </div>
          </div>

          <div class="container">

            <!-- Section: About -->
            <section id="about" class="section about mt-5 mb-5 py-3 wow fadeIn" data-wow-delay="0.2s">

                <!-- Grid row -->
                <div class="row pt-2 mt-5">



                    <!-- Grid column -->
                    <div class="col-md-12 wow fadeIn" data-wow-delay="0.4s">

                        <!-- Secion heading -->
                        <h3 class="mb-5 dark-grey-text title font-weight-bold text-center wow fadeIn" data-wow-delay="0.2s">
                            <strong>Investor Highlights</strong>
                        </h3>
                        <h4 class="dark-grey-text title font-weight-bold text-center wow fadeIn" data-wow-delay="0.4s">
                          Minimum Investment: $40,000
                        </h4>
                        <p class="mb-5 grey-text text-center">
                          (1 unit equal to $40,000/8 units equal to 1% total company ownership)
                        </p>

                      </div>

                      <hr>

                      <div class="col-6 wow fadeIn" data-wow-delay="0.6s">
                        <div class="text-center">
                          <h4 class="dark-grey-text title font-weight-bold wow fadeIn" data-wow-delay="0.6s">
                            Year 1
                          </h4>
                          <span class="min-chart min-chart-alter" id="roi1" data-percent="30"><span class="percent-alter">20-30%</span></span>
                          <h5><span class="badge green">Projected ROI <i class=" ml-2 fa fa-arrow-circle-up"></i></span></h5>
                        </div>
                      </div>
                      <div class="col-6 wow fadeIn" data-wow-delay="0.4s">
                        <div class="text-center">
                          <h4 class="dark-grey-text title font-weight-bold wow fadeIn" data-wow-delay="0.6s">
                            Year 2
                          </h4>
                          <span class="min-chart min-chart-alter" id="roi2" data-percent="80"><span class="percent-alter">60-80%</span></span>
                          <h5><span class="badge green">Projected ROI <i class="ml-2 fa fa-arrow-circle-up"></i></span></h5>
                        </div>
                      </div>
                        <!-- Description -->
                        <!-- <p align="justify" class="grey-text"><em>syftr</em> and its sister Apps (face2face, dskreat, L4L) provide users with tools to confirm accurate identification, incorporating innovative timestamped profile facial pictures and video chats for confirmation. DYZN, LLC has created a revolutionary infrastructure (template) currently incorporated in syftr, f2f, dskreat and L4L that can be replicated and deployed seamlessly into new niche Apps to meet the needs of other demographics. (veterans, seniors, pets, etc)</p> -->


                    </div>
                    <div class="row pt-2 mt-5">
                      <div class="col-md-12 wow fadeIn text-center" data-wow-delay="0.8s">
                        <h6 class="wow fadeIn" data-wow-delay="0.3s">Revenues from Round 1 Projected to commence: 4th QTR 2018
                        </h6>
                        <h6 class="wow fadeIn" data-wow-delay="0.3s">Exit Strategy Summation: IPO or Company Buyout by 2023
                        </h6>
                      </div>
                    </div>

                    <!-- Grid column -->



                <!-- Grid row -->

            </section>
            <!-- Section: About -->

            <hr class="mt-5">

            <!-- Section: Team v.1 -->
            <section class="section team-section pb-5" id="team">

                <!-- Section heading -->
                <h3 class="text-center title my-5 dark-grey-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">
                    <strong>Who We Are</strong>
                </h3>
                <!-- Section description -->
                <p class="text-center w-responsive mx-auto my-5 grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate
                    esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>

                <!-- Grid row -->
                <div class="row text-center wow slideInUp" data-wow-delay="0.4s">

                    <!-- Grid column -->
                    <div class="col-lg-3 col-md-6 mb-4">
                      <!-- Rotating card -->
                        <div class="card-wrapper">
                        <div id="card-1" class="card-rotating effect__click text-center h-100 w-100">

                          <!-- Front Side -->
                          <div class="face front">

                            <!-- Image-->
                            <div class="card-up">
                              <img  class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/photo7.jpg" alt="Image with a photo of clouds.">
                            </div>

                            <!-- Avatar -->
                            <div class="avatar mx-auto white"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg" class="rounded-circle" alt="Sample avatar image.">
                            </div>

                            <!-- Content -->
                            <div class="card-body">
                              <h4 class="font-weight-bold mb-3">Marie Johnson</h4>
                              <p class="font-weight-bold blue-text">Web developer</p>
                              <!-- Triggering button -->
                              <a class="rotate-btn" data-card="card-1"><i class="fa fa-repeat"></i> Click here to rotate</a>
                            </div>
                          </div>
                          <!-- Front Side -->

                          <!-- Back Side -->
                          <div class="face back">
                            <div class="card-body">

                              <!-- Content -->
                              <h4 class="font-weight-bold">About me</h4>
                              <hr>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime quae, dolores dicta. Blanditiis rem amet repellat, dolores nihil quae in mollitia asperiores ut rerum repellendus, voluptatum eum, officia laudantium quaerat?
                              </p>
                              <hr>
                              <!-- Social Icons -->
                              <ul class="list-inline py-2">
                                <li class="list-inline-item"><a class="p-2 fa-lg fb-ic"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="p-2 fa-lg tw-ic"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a class="p-2 fa-lg gplus-ic"><i class="fa fa-google-plus"></i></a></li>
                                <li class="list-inline-item"><a class="p-2 fa-lg li-ic"><i class="fa fa-linkedin"></i></a></li>
                              </ul>
                              <!-- Triggering button -->
                              <a class="rotate-btn" data-card="card-1"><i class="fa fa-undo"></i> Click here to rotate back</a>

                            </div>
                          </div>
                          <!-- Back Side -->

                        </div>
                      </div>
                      <!-- Rotating card -->
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-3 col-md-6 mb-4">
                      <!-- Rotating card -->
                        <div class="card-wrapper">
                        <div id="card-1" class="card-rotating effect__click text-center h-100 w-100">

                          <!-- Front Side -->
                          <div class="face front">

                            <!-- Image-->
                            <div class="card-up">
                              <img  class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/photo7.jpg" alt="Image with a photo of clouds.">
                            </div>

                            <!-- Avatar -->
                            <div class="avatar mx-auto white"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2810%29.jpg" class="rounded-circle" alt="Sample avatar image.">
                            </div>

                            <!-- Content -->
                            <div class="card-body">
                              <h4 class="font-weight-bold mb-3">Marie Johnson</h4>
                              <p class="font-weight-bold blue-text">Web developer</p>
                              <!-- Triggering button -->
                              <a class="rotate-btn" data-card="card-1"><i class="fa fa-repeat"></i> Click here to rotate</a>
                            </div>
                          </div>
                          <!-- Front Side -->

                          <!-- Back Side -->
                          <div class="face back">
                            <div class="card-body">

                              <!-- Content -->
                              <h4 class="font-weight-bold">About me</h4>
                              <hr>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime quae, dolores dicta. Blanditiis rem amet repellat, dolores nihil quae in mollitia asperiores ut rerum repellendus, voluptatum eum, officia laudantium quaerat?
                              </p>
                              <hr>
                              <!-- Social Icons -->
                              <ul class="list-inline py-2">
                                <li class="list-inline-item"><a class="p-2 fa-lg fb-ic"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="p-2 fa-lg tw-ic"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a class="p-2 fa-lg gplus-ic"><i class="fa fa-google-plus"></i></a></li>
                                <li class="list-inline-item"><a class="p-2 fa-lg li-ic"><i class="fa fa-linkedin"></i></a></li>
                              </ul>
                              <!-- Triggering button -->
                              <a class="rotate-btn" data-card="card-1"><i class="fa fa-undo"></i> Click here to rotate back</a>

                            </div>
                          </div>
                          <!-- Back Side -->

                        </div>
                      </div>
                      <!-- Rotating card -->
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-3 col-md-6 mb-4">
                      <!-- Rotating card -->
                        <div class="card-wrapper">
                        <div id="card-1" class="card-rotating effect__click text-center h-100 w-100">

                          <!-- Front Side -->
                          <div class="face front">

                            <!-- Image-->
                            <div class="card-up">
                              <img  class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/photo7.jpg" alt="Image with a photo of clouds.">
                            </div>

                            <!-- Avatar -->
                            <div class="avatar mx-auto white"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2831%29.jpg" class="rounded-circle" alt="Sample avatar image.">
                            </div>

                            <!-- Content -->
                            <div class="card-body">
                              <h4 class="font-weight-bold mb-3">Marie Johnson</h4>
                              <p class="font-weight-bold blue-text">Web developer</p>
                              <!-- Triggering button -->
                              <a class="rotate-btn" data-card="card-1"><i class="fa fa-repeat"></i> Click here to rotate</a>
                            </div>
                          </div>
                          <!-- Front Side -->

                          <!-- Back Side -->
                          <div class="face back">
                            <div class="card-body">

                              <!-- Content -->
                              <h4 class="font-weight-bold">About me</h4>
                              <hr>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime quae, dolores dicta. Blanditiis rem amet repellat, dolores nihil quae in mollitia asperiores ut rerum repellendus, voluptatum eum, officia laudantium quaerat?
                              </p>
                              <hr>
                              <!-- Social Icons -->
                              <ul class="list-inline py-2">
                                <li class="list-inline-item"><a class="p-2 fa-lg fb-ic"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="p-2 fa-lg tw-ic"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a class="p-2 fa-lg gplus-ic"><i class="fa fa-google-plus"></i></a></li>
                                <li class="list-inline-item"><a class="p-2 fa-lg li-ic"><i class="fa fa-linkedin"></i></a></li>
                              </ul>
                              <!-- Triggering button -->
                              <a class="rotate-btn" data-card="card-1"><i class="fa fa-undo"></i> Click here to rotate back</a>

                            </div>
                          </div>
                          <!-- Back Side -->

                        </div>
                      </div>
                      <!-- Rotating card -->
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-3 col-md-6 mb-4">
                      <!-- Rotating card -->
                        <div class="card-wrapper">
                        <div id="card-1" class="card-rotating effect__click text-center h-100 w-100">

                          <!-- Front Side -->
                          <div class="face front">

                            <!-- Image-->
                            <div class="card-up">
                              <img  class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/photo7.jpg" alt="Image with a photo of clouds.">
                            </div>

                            <!-- Avatar -->
                            <div class="avatar mx-auto white"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg" class="rounded-circle" alt="Sample avatar image.">
                            </div>

                            <!-- Content -->
                            <div class="card-body">
                              <h4 class="font-weight-bold mb-3">Marie Johnson</h4>
                              <p class="font-weight-bold blue-text">Web developer</p>
                              <!-- Triggering button -->
                              <a class="rotate-btn" data-card="card-1"><i class="fa fa-repeat"></i> Click here to rotate</a>
                            </div>
                          </div>
                          <!-- Front Side -->

                          <!-- Back Side -->
                          <div class="face back">
                            <div class="card-body">

                              <!-- Content -->
                              <h4 class="font-weight-bold">About me</h4>
                              <hr>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime quae, dolores dicta. Blanditiis rem amet repellat, dolores nihil quae in mollitia asperiores ut rerum repellendus, voluptatum eum, officia laudantium quaerat?
                              </p>
                              <hr>
                              <!-- Social Icons -->
                              <ul class="list-inline py-2">
                                <li class="list-inline-item"><a class="p-2 fa-lg fb-ic"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="p-2 fa-lg tw-ic"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a class="p-2 fa-lg gplus-ic"><i class="fa fa-google-plus"></i></a></li>
                                <li class="list-inline-item"><a class="p-2 fa-lg li-ic"><i class="fa fa-linkedin"></i></a></li>
                              </ul>
                              <!-- Triggering button -->
                              <a class="rotate-btn" data-card="card-1"><i class="fa fa-undo"></i> Click here to rotate back</a>

                            </div>
                          </div>
                          <!-- Back Side -->

                        </div>
                      </div>
                      <!-- Rotating card -->
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </section>
            <!-- Section: Team v.1 -->

            <!-- Section: Features v.4 -->
            <section id="features" class="section feature-box mb-5 pb-4">

                <!-- Section heading -->
                <h3 class="text-center title my-5 dark-grey-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">
                    <strong>Awesome features</strong>
                </h3>

                <!-- Section sescription -->
                <p class="text-center w-responsive mx-auto my-5 grey-text wow fadeIn" data-wow-delay="0.2s">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quas, eos officia maiores ipsam ipsum dolores reiciendis
                    ad voluptas, animi obcaecati adipisci sapiente mollitia.</p>
                <!-- Grid row -->
                <div class="row features-small wow fadeIn" data-wow-delay="0.4s">

                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-12">
                        <!-- Grid row -->
                        <div class="row mb-3">
                            <div class="col-2">
                                <i class="fa fa-edit primary fa-2x"></i>
                            </div>
                            <div class="col-10 mb-2">
                                <h5 class="font-weight-bold title">Modern design</h5>
                                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam
                                    minima.
                                </p>
                            </div>
                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="row mb-3">
                            <div class="col-2">
                                <i class="fa fa-cogs primary fa-2x"></i>
                            </div>
                            <div class="col-10 mb-2">
                                <h5 class="font-weight-bold title">Easy customize</h5>
                                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam
                                    minima assumenda.</p>
                            </div>
                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="row">
                            <div class="col-2">
                                <i class="fa fa-tablet primary fa-2x"></i>
                            </div>
                            <div class="col-10 mb-2">
                                <h5 class="font-weight-bold title">Responsive layouts</h5>
                                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam.</p>
                            </div>
                        </div>
                        <!-- Grid row -->
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-12 mb-1 text-center text-md-left">
                        <img src="https://mdbootstrap.com/img/Mockups/Transparent/Small/admin-new.png" alt="" class="z-depth-0 img-fluid">
                    </div>
                    <!-- Grid column -->

                    <!-- Third column -->
                    <div class="col-lg-4 col-md-12">
                        <!-- Grid row -->
                        <div class="row mb-3">
                            <div class="col-2">
                                <i class="fa fa-line-chart primary fa-2x"></i>
                            </div>
                            <div class="col-10 mb-2">
                                <h5 class="font-weight-bold title">Optymized for SEO</h5>
                                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam.</p>
                            </div>
                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="row mb-3">
                            <div class="col-2">
                                <i class="fa fa-group primary fa-2x"></i>
                            </div>
                            <div class="col-10 mb-2">
                                <h5 class="font-weight-bold title">Technical support</h5>
                                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam
                                    minima assumenda.</p>
                            </div>
                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="row">
                            <div class="col-2">
                                <i class="fa fa-diamond primary fa-2x"></i>
                            </div>
                            <div class="col-10 mb-2">
                                <h5 class="font-weight-bold title">High quality</h5>
                                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam
                                    minima.
                                </p>
                            </div>
                        </div>
                        <!-- Grid row -->
                    </div>
                    <!-- Third column -->
                </div>
                <!-- Grid row -->

            </section>
            <!-- Section: Features v.4 -->

        </div>

        <div class="container">
            <!-- Section: Contact v.2 -->
            <section id="contact" class="section mb-5">

                <!-- Section heading -->
                <h3 class="text-center title my-5 py-4 dark-grey-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">
                    <strong>Contact us</strong>
                </h3>

                <!-- Section sescription -->
                <p class="text-center grey-text my-5 w-responsive mx-auto wow fadeIn" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate
                    esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>

                <div class="row wow fadeIn" data-wow-delay="0.4s">

                    <!-- Grid column -->
                    <div class="col-md-8 col-lg-9">
                        <form>
                            <!-- Grid row -->
                            <div class="row">
                                <!-- Grid column -->
                                <div class="col-md-6">
                                    <div class="md-form">
                                        <div class="md-form">
                                            <input type="text" id="form41" class="form-control">
                                            <label for="form41" class="">Your name</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Grid column -->
                                <div class="col-md-6">
                                    <div class="md-form">
                                        <div class="md-form">
                                            <input type="text" id="form52" class="form-control">
                                            <label for="form52" class="">Your email</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Grid row -->

                            <!-- Grid row -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form">
                                        <input type="text" id="form51" class="form-control">
                                        <label for="form51" class="">Subject</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Grid row -->

                            <!-- Grid row -->
                            <div class="row">
                                <!-- Grid column -->
                                <div class="col-md-12">

                                    <div class="md-form">
                                        <textarea type="text" id="form76" class="md-textarea form-control" rows="3"></textarea>
                                        <label for="form76">Your message</label>
                                    </div>

                                </div>
                            </div>
                            <!-- Grid row -->
                        </form>

                        <div class="text-center text-md-left mb-5 mt-4">
                            <a class="btn btn-rounded btn-white font-weight-bold">Send</a>
                        </div>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3">
                        <ul class="text-center list-unstyled float-md-right">
                            <li>
                                <i class="fa fa-map-marker fa-2x title"></i>
                                <p>New York, NY 10012, USA</p>
                            </li>

                            <li>
                                <i class="fa fa-phone fa-2x title"></i>
                                <p>+ 01 234 567 89</p>
                            </li>

                            <li>
                                <i class="fa fa-envelope fa-2x title"></i>
                                <p>contact@gmail.com</p>
                            </li>
                        </ul>
                    </div>
                    <!-- Grid column -->

                </div>
            </section>
            <!-- Section: Contact v.2 -->

        </div>

    </main>
    <!-- Main content -->

    <!--Footer-->
    <footer class="page-footer text-center text-md-left unique-color-dark pt-0">

        <div class="primary-bg">
            <div class="container">

                <!--Grid row-->
                <div class="row py-4 d-flex align-items-center">

                    <!--Grid column-->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-md-0">
                        <h6 class="mb-0 white-text">Get connected with us on social networks!</h6>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 col-lg-7 text-center text-md-right">
                        <!--Facebook-->
                        <a class="p-2 m-2 fa-lg fb-ic ml-0">
                            <i class="fa fa-facebook white-text mr-lg-4"> </i>
                        </a>
                        <!--Twitter-->
                        <a class="p-2 m-2 fa-lg tw-ic">
                            <i class="fa fa-twitter white-text mr-lg-4"> </i>
                        </a>
                        <!--Google +-->
                        <a class="p-2 m-2 fa-lg gplus-ic">
                            <i class="fa fa-google-plus white-text mr-lg-4"> </i>
                        </a>
                        <!--Linkedin-->
                        <a class="p-2 m-2 fa-lg li-ic">
                            <i class="fa fa-linkedin white-text mr-lg-4"> </i>
                        </a>
                        <!--Instagram-->
                        <a class="p-2 m-2 fa-lg ins-ic">
                            <i class="fa fa-instagram white-text mr-lg-4"> </i>
                        </a>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->
            </div>
        </div>

        <!-- Copyright -->
        <div class="footer-copyright py-3 text-center wow fadeIn" data-wow-delay="0.3s">
            <div class="container-fluid">
                © 2018 Copyright: <a href="https://mdbootstrap.com/bootstrap-tutorial/" target="_blank"> YourSite.com </a>
            </div>
        </div>
        <!-- Copyright -->

    </footer>
    <!--/.Footer-->

    <!-- JQuery -->
    <script type="text/javascript" src="/public/mdb/js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="/public/mdb/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="/public/mdb/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="/public/mdb/js/mdb.min.js"></script>
    <!-- Slick JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha256-NXRS8qVcmZ3dOv3LziwznUHPegFhPZ1F/4inU7uC8h0=" crossorigin="anonymous"></script>
    <script>
        //Animation init
        new WOW().init();

        //Modal
        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').focus()
        })

        // Material Select Initialization
        $(document).ready(function () {
            $('.mdb-select').material_select();
        });

        $('.jarallax').jarallax({
          speed: 0.2
        });
    </script>

    <script>
    $('.productList').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000
    });
    </script>

    <script>
        $(function () {
            var selectedClass = "";
            $(".filter").click(function () {
                selectedClass = $(this).attr("data-rel");
                $("#gallery").fadeTo(100, 0.1);
                $("#gallery div").not("." + selectedClass).fadeOut().removeClass('animation');
                setTimeout(function () {
                    $("." + selectedClass).fadeIn().addClass('animation');
                    $("#gallery").fadeTo(300, 1);
                }, 300);
            });
        });
    </script>

    <script>
    $(function () {
        $('.min-chart#roi1').easyPieChart({
            barColor: "#4caf50",
            onStep: function (from, to, percent) {
                $(this.el).find('.percent').text(Math.round(30));
            }
        });
        $('.min-chart#roi2').easyPieChart({
            barColor: "#4caf50",
            onStep: function (from, to, percent) {
                $(this.el).find('.percent').text(Math.round(80));
            }
        });
    });
    </script>

    <script>
    //line
    var ctxL = document.getElementById("lineChart").getContext('2d');
    var myLineChart = new Chart(ctxL, {
      type: 'line',
      data: {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
            label: "My First dataset",
            data: [40, 41, 43, 47, 52, 65, 85],
            backgroundColor: [
              'rgba(158, 158, 158, .2)',
            ],
            borderColor: [
              'rgba(0, 0, 0, .3)',
            ],
            borderWidth: 2
          }
        ]
      },
      options: {
        responsive: true
      }
    });
    </script>

    <script>
    var ctx = document.getElementById("problemChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Catfished", "Safety Concerns", "Inappropriate Images"],
            datasets: [{
                label: '% of Users',
                data: [34, 29, 26],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
    </script>
</body>

</html>
