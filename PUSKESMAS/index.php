<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8" id="home">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMS</title>
    <link rel="stylesheet" href="front/css/bootstrap.min (1).css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="front/css/style.css">
</head>

<body>
   <?php include "layout/navbar.php" ?>
    <!-- HOME SECTION  -->

    <section class="carousel" id="carousel">
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="front/images/Hospit.avif" alt="Los Angeles" class="d-block" style="width:100%">
                    <div class="carousel-caption">
                        <h3>PUSKESMAS TELANG</h3>
                        <p>Hanya Menerima Orang yang mau bayar Saja.</p>
                    </div>

                </div>
                <div class="carousel-item">
                    <img src="front/images/Hospit02.webp" alt="Chicago" class="d-block" style="width:100%">
                    <div class="carousel-caption">
                        <h3>PUSKESMAS TELANG</h3>
                        <p>Tidak Menerima Pembayaran Melalui <span class="text-info text-danger">BPJS<span>.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="front/images/Hospit02.webp" alt="New York" class="d-block" style="width:100%">
                    <div class="carousel-caption">
                        <h3>PUSKESMAS TELANG</h3>
                        <p>Semoga Lekas Sembuh 😊</p>
                    </div>

                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </section>

    <!-- About us option start -->
    <section class="about" id="about">
        <div class="container">
            <h2>Layanan Puskesmas</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="front/images/Cardiology.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4> Kardiologi </h4>
                            <p class="card-text">Specializing in heart-related issues.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="front/images/Orthopedics.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4>Orthopedics:</h4>
                            <p class="card-text">Dealing with bone and joint problems.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="front/images/Pediatrics.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4>Pediatrics</h4>
                            <p class="card-text">Focusing on child healthcare</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="front/images/Neurosurgery.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4>Neurosurgery:</h4>
                            <p class="card-text">Specializing in brain and nervous system surgeries.</p>

                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="front/images/Internal Medicine.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4>Internal Medicine:</h4>
                            <p class="card-text">Providing general medical care.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="front/images/Pharmacy.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4>Pharmacy</h4>
                            <p class="card-text"> Dispensing medications..</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Doctor Sections  -->
    <section class="doctors" id="doctors">
        <div class="container text-center">
            <h1 class="font-weight-bold">Daftar Dokter</h1>
            <p class="text-dark">Berikut adalah Dokter Profesional yang berkerja dengan tulus melayani anda</p>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="card text-center">
                        <div class="card-header">Dr. Amina Khan - Pediatrician</div>
                        <div class="card-body" style="height: 220px; display: flex; align-items: center; justify-content: center;">
                            <img src="front/images/Amina Khan.jpg" alt="Dr. Amina Khan" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                        </div>
                        <div class="card-footer">
                            <p>Specializes in children's health.</p>
                            <a href="#doctors">Contact</a>
                        </div>
                    </div>
                </div>



                <div class=" col-lg-4 col-12">
                    <div class="card  text-center">
                        <div class="card-header">Dr. Jamal Ahmed - Cardiologist</div>
                        <div class="card-body" style="height: 220px; display: flex; align-items: center; justify-content: center;">
                            <img src="front/images/Jamal Ahmed.jpg" alt="Dr. Amina Khan" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                        </div>
                        <div class="card-footer">
                            <p>Specializes focuses on heart health.</p>
                            <a href="#doctors">Contact</a>
                        </div>
                    </div>
                </div>



                <div class=" col-lg-4 col-12">
                    <div class="card  text-center">
                        <div class="card-header">Dr. Ahmed Hassan - Orthopedic Surgeon</div>
                        <div class="card-body" style="height: 220px; display: flex; align-items: center; justify-content: center;">
                            <img src="front/images/Ahmed Hassan.jpg" alt="Dr. Amina Khan" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                        </div>
                        <div class="card-footer">
                            <p> Specializes in bone and joint issues.</p>
                            <a href="#doctors"">Contact</a>
                        </div>
                    </div>
                </div>

                </div>

            <div class=" row">
                                <div class="col-lg-4 col-12">
                                    <div class="card  text-center">
                                        <div class="card-header">Dr. Fatima Malik -</div>
                                        <div class="card-body" style="height: 220px; display: flex; align-items: center; justify-content: center;">
                                            <img src="front/images/Fatima Malik1.jpg" alt="Dr. Amina Khan" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                                        </div>
                                        <div class="card-footer">
                                            <p> Specializes Malik helps with mental health.</p>
                                            <a href="#doctors">Contact</a>
                                        </div>
                                    </div>
                                </div>


                                <div class=" col-lg-4 col-12">
                                    <div class="card  text-center">
                                        <div class="card-header">Dr. Ali Rizvi -
                                            Family Medicine Practitioner</div>
                                        <div class="card-body" style="height: 220px; display: flex; align-items: center; justify-content: center;">
                                            <img src="front/images/Ali Rizvi.jpg" alt="Dr. Amina Khan" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                                        </div>
                                        <div class="card-footer">
                                            <p>provides general healthcare for
                                                families.</p>
                                            <a href="#doctors"">Contact</a>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-4 col-12">
                                                <div class="card  text-center">
                                                    <div class="card-header">Dr.
                                                        Mohammed Hassan</div>
                                                    <div class="card-body" style="height: 220px; display: flex; align-items: center; justify-content: center;">
                                                        <img src="front/images/Mohammed Hassan.avif" alt="Dr. Amina Khan" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                                                    </div>
                                                    <div class="card-footer">
                                                        <p>focuses on digestive
                                                            health</p>
                                                        <a href="#doctors">Contact</a>
                                                    </div>
                                                </div>
                                        </div>

                                    </div>

                                </div>
    </section>

    <!-- Contact_US Start -->
    <section class="contacUs " id="contact">
        <div class="container heading text-center">
            <h1 class="text-center font-weight-bold">Hubungi Kami</h1>
            <p class="text-center  pt-1">We are here to help and answer any questions you night have you we Look farword
                to hearing from You
            </p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-nd8 col-10 offset-lg-2 offset-md-2 col-1 ">
                    <form>
                        <div class="mb-3 mt-3">
                            <input type="text" class="form-control" id="email" required autocomplete="off" placeholder="Enter Your Name" name="email">
                        </div>

                        <div class="mb-3">
                            <input type="Email" class="form-control" id="pwd" placeholder="Enter your Email" name="pswd">
                        </div>

                        <div class="mb-3">
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="5" id="comment" name="text">
                            </textarea>
                        </div>

                        <button type="submit" class="btn btn-info form-control com btn-outline-info">Submit</button>

                    </form>
                </div>

            </div>

        </div>
    </section>
    <!-- Contact_US End -->
    <!-- Foor Section -->
    < <!-- Footer_section start-->
        <section class="footer">
            <Footer class="footersectiion" id="footer_div">
                <div class="container">
                    <!-- Copyright -->
                    <div class="footer-copyright text-center py-3 text-light">© Copyright 2023 All right | Created to
                        fulfill information systems course assignments
                    </div>
                    <!-- Copyright -->

                </div>
            </Footer>
        </section>

        <!-- Footer_section End-->


        <script src="front/js/script.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>