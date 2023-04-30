<?php 
include_once("include/modal.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <!-- bootstrap link -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/custom.css">

</head>
<body>
    <!--Nav-bar  -->
    <nav class="navbar navbar-expand-lg navbar-light my-bgo sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#index">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-braces-asterisk" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.114 8.063V7.9c1.005-.102 1.497-.615 1.497-1.6V4.503c0-1.094.39-1.538 1.354-1.538h.273V2h-.376C2.25 2 1.49 2.759 1.49 4.352v1.524c0 1.094-.376 1.456-1.49 1.456v1.299c1.114 0 1.49.362 1.49 1.456v1.524c0 1.593.759 2.352 2.372 2.352h.376v-.964h-.273c-.964 0-1.354-.444-1.354-1.538V9.663c0-.984-.492-1.497-1.497-1.6ZM14.886 7.9v.164c-1.005.103-1.497.616-1.497 1.6v1.798c0 1.094-.39 1.538-1.354 1.538h-.273v.964h.376c1.613 0 2.372-.759 2.372-2.352v-1.524c0-1.094.376-1.456 1.49-1.456v-1.3c-1.114 0-1.49-.362-1.49-1.456V4.352C14.51 2.759 13.75 2 12.138 2h-.376v.964h.273c.964 0 1.354.444 1.354 1.538V6.3c0 .984.492 1.497 1.497 1.6ZM7.5 11.5V9.207l-1.621 1.621-.707-.707L6.792 8.5H4.5v-1h2.293L5.172 5.879l.707-.707L7.5 6.792V4.5h1v2.293l1.621-1.621.707.707L9.208 7.5H11.5v1H9.207l1.621 1.621-.707.707L8.5 9.208V11.5h-1Z"/>
            </svg>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto fw-bold">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#index">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#resume">Resume</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact_me">Contact Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="users_profiles.php" target="_blank">Users Information</a>
                    </li>
                </ul>
                <ul class="navbar-nav mr-auto gap-2 ">
                    <li class="nav-item">
                        <button type="button" class="btn btn-outline-dark fw-bold" data-bs-toggle="modal" data-bs-target="#signin">Sign In</button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-outline-dark fw-bold"  data-bs-toggle="modal" data-bs-target="#signup">Sign Up</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Nav-bar end  -->
<!-- Index page -->
<section id="index" >
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-2">
                <div class="text">
                    <div class="text-hello"><h2 style="font-size:3rem">Hello</h2></div>
                    <div class="line"></div>
                </div>
                <div class="name-info">
                    <h1 style="font-size:4rem">
                        <span style="color: #fff;">I'm Ihsan,</span><br>
                        Web Developer
                    </h1>
                </div>
                <div class="my-details">
                    <p class="my-clr">
                        <span class="fw-bolder">Lorem, ipsum</span> dolor sit amet consectetur adipisicing elit. Velit eligendi distinctio iste, aspernatur quam voluptatum illum beatae obcaecati fugiat molestias dolorem maxime, reprehenderit quia iure architecto necessitatibus ea perspiciatis praesentium consequatur? Sunt tempora iste laboriosam incidunt veritatis minima officia, obcaecati dolorum, totam error libero quibusdam aut illo ratione natus labore!
                    </p>
                </div>
                <a type="button" class="btn btn-outline-warning " href="#contact_me">Contact Me</a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-2">
                <!-- <img src="images/ihsan.png" class="img-fluid pt-4" alt="no image"> -->
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/ihsan.png" class="d-block  img-fluid pt-4" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/ihsan.png" class="d-block img-fluid pt-4" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/ihsan.png" class="d-block img-fluid pt-4" alt="...">
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- hr line -->
<div class="hr my-bgo pb-2 d-flex justify-content-center" style="width:85%;height:3px; border-radius:10px; margin: 0 auto;"></div>
<!-- Resume -->
<section id="resume" >
<div class="container">
    <div class="row py-5">
        <!-- Education -->
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="education-details text-center" >
                <h1 class="hd text-white pt-3 pb-3">Education</h1>
                <div class="m-3 p-2" style="background-color: rgb(102 112 129 / 28%);">
                    <h3 class="text-white">Bachelor Degree</h3>
                    <p class="my-clr fw-bold">University of Sindh, Jamshoro / 2019 - 2022</p>
                </div>
                <div class="m-3 p-2" style="background-color: rgb(102 112 129 / 28%);">
                    <h3 class="text-white">Intermediate</h3>
                    <p class="my-clr fw-bold">Ustad Bukhari Govt Collage, Dadu / 2016 - 2017</p>
                </div>
                <div class="m-3 p-2" style="background-color: rgb(102 112 129 / 28%);">
                    <h3 class="text-white">Matriculation</h3>
                    <p class="my-clr fw-bold">Sunny Bright High School, Dadu / 2004 - 2015</p>
                </div>
            </div>
        </div>
        <!-- Education end here-->
        <!-- Skills -->
        <div class="row py-5">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="Skills text-center" >
                <h1 class="hd text-white pt-3 pb-3">Skills</h1>
                    <h5 class="text-white mb-1">HTML / CSS</h5>
                    <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar progress-bar-striped progress-bar-animated my-bgo" style="width: 90%">90%</div>
                    </div>
                    <div class="mt-3"></div>
                    <h5 class="text-white mb-1">PHP</h5>
                    <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar progress-bar-striped progress-bar-animated my-bgo" style="width: 80%">80%</div>
                    </div>
                    <div class="mt-3"></div>
                    <h5 class="text-white mb-1">MYSQL</h5>
                    <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar progress-bar-striped progress-bar-animated my-bgo" style="width: 85%">85%</div>
                    </div>
                    <div class="mt-3"></div>
                    <h5 class="text-white mb-1">JAVASCRIPT</h5>
                    <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar progress-bar-striped progress-bar-animated my-bgo" style="width: 50%">50%</div>
                    </div>
                    <div class="mt-3"></div>
                    <h5 class="text-white mb-1">GRAPHIC DESIGN</h5>
                    <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar progress-bar-striped progress-bar-animated my-bgo" style="width: 75%">75%</div>
                    </div>
            </div>
         </div>
        </div>
        <!-- Skills end here-->
</div>
</section>

<!-- hr line -->
<div class="hr my-bgo pb-2 d-flex justify-content-center" style="width:85%;height:3px; border-radius:10px; margin: 0 auto;"></div>
<!-- Portfolio -->
<section id="portfolio">
    <div class="container">
        <h1 class="hd text-white pt-5 text-center">Portfolio</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 py-5">
            <div class="col">
                <div class="card h-100">
                <img src="images/portfolio/1.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>

                </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                <img src="images/portfolio/2.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>

                </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                <img src="images/portfolio/3.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                <img src="images/portfolio/4.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                <img src="images/portfolio/5.png" class="card-img-top" alt="...">
                <div class="card-body bgcard">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                <img src="images/portfolio/6.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
                </div>
            </div>
        </div>
        </div>
</section>

<!-- hr line -->
<div class="hr my-bgo pb-2 d-flex justify-content-center" style="width:85%;height:3px; border-radius:10px; margin: 0 auto;"></div>
<!-- Contact  -->
<section id="contact_me">
    <div class="container">
        <form action="">
            <div class="row py-5">
                <h1 class="hd text-white  text-center">Get in Touch</h1>
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="row pt-4">
                        <div class="col">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Subject">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Message"></textarea>
                            </div>
                            <input type="button" class="btn my-bgo" value="Send Message">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-white">
                    <div class="contact-me">
                        <h2>Contact Info</h2>
                        <p>Always available for freelance work if the right project comes along, Feel free to contact me!</p>
                        <div class="mb-3">
                            <h5 class="m-0">Name</h5>
                            <p>Muhammad Ihsan Chandio</p>
                        </div>
                        <div class="mb-3">
                            <h5 class="m-0">Location</h5>
                            <p>Jamshoro, Sindh</p>
                        </div>
                        <div class="mb-3">
                            <h5 class="m-0">Call Me</h5>
                            <p>+92 315 7073 692</p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- Footer -->
<footer>
    <div class="container-fluid my-bgo">
      <div class="container">
        <div class="row py-5">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="logo-title">
                    <div class="mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor" class="bi bi-braces-asterisk" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.114 8.063V7.9c1.005-.102 1.497-.615 1.497-1.6V4.503c0-1.094.39-1.538 1.354-1.538h.273V2h-.376C2.25 2 1.49 2.759 1.49 4.352v1.524c0 1.094-.376 1.456-1.49 1.456v1.299c1.114 0 1.49.362 1.49 1.456v1.524c0 1.593.759 2.352 2.372 2.352h.376v-.964h-.273c-.964 0-1.354-.444-1.354-1.538V9.663c0-.984-.492-1.497-1.497-1.6ZM14.886 7.9v.164c-1.005.103-1.497.616-1.497 1.6v1.798c0 1.094-.39 1.538-1.354 1.538h-.273v.964h.376c1.613 0 2.372-.759 2.372-2.352v-1.524c0-1.094.376-1.456 1.49-1.456v-1.3c-1.114 0-1.49-.362-1.49-1.456V4.352C14.51 2.759 13.75 2 12.138 2h-.376v.964h.273c.964 0 1.354.444 1.354 1.538V6.3c0 .984.492 1.497 1.497 1.6ZM7.5 11.5V9.207l-1.621 1.621-.707-.707L6.792 8.5H4.5v-1h2.293L5.172 5.879l.707-.707L7.5 6.792V4.5h1v2.293l1.621-1.621.707.707L9.208 7.5H11.5v1H9.207l1.621 1.621-.707.707L8.5 9.208V11.5h-1Z"/>
                    </svg>
                    </div>    
                        <p>
                           Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                           Recusandae aut dicta optio est necessitatibus, tempore neque,
                            quam ipsum.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div>
                        <h2 class="f-clr">Quick Links</h2>
                    <ul style="list-style: none;">
                        <li>
                            <a class="anchr" href="#index">Home</a>
                        </li>
                        <li>
                            <a class="anchr" href="#resume">Resume</a>
                        </li>
                        <li>
                            <a class="anchr" href="#portfolio">Portfolio</a>
                        </li>
                        <li>
                            <a class="anchr" href="#contact_me">Contact Me</a>
                        </li>
                    </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div>
                        <h2 class="f-clr">Social Media</h2>
                        <div class="row pt-3">
                            <div class="col">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-android2" viewBox="0 0 16 16">
                                    <path d="m10.213 1.471.691-1.26c.046-.083.03-.147-.048-.192-.085-.038-.15-.019-.195.058l-.7 1.27A4.832 4.832 0 0 0 8.005.941c-.688 0-1.34.135-1.956.404l-.7-1.27C5.303 0 5.239-.018 5.154.02c-.078.046-.094.11-.049.193l.691 1.259a4.25 4.25 0 0 0-1.673 1.476A3.697 3.697 0 0 0 3.5 5.02h9c0-.75-.208-1.44-.623-2.072a4.266 4.266 0 0 0-1.664-1.476ZM6.22 3.303a.367.367 0 0 1-.267.11.35.35 0 0 1-.263-.11.366.366 0 0 1-.107-.264.37.37 0 0 1 .107-.265.351.351 0 0 1 .263-.11c.103 0 .193.037.267.11a.36.36 0 0 1 .112.265.36.36 0 0 1-.112.264Zm4.101 0a.351.351 0 0 1-.262.11.366.366 0 0 1-.268-.11.358.358 0 0 1-.112-.264c0-.103.037-.191.112-.265a.367.367 0 0 1 .268-.11c.104 0 .19.037.262.11a.367.367 0 0 1 .107.265c0 .102-.035.19-.107.264ZM3.5 11.77c0 .294.104.544.311.75.208.204.46.307.76.307h.758l.01 2.182c0 .276.097.51.292.703a.961.961 0 0 0 .7.288.973.973 0 0 0 .71-.288.95.95 0 0 0 .292-.703v-2.182h1.343v2.182c0 .276.097.51.292.703a.972.972 0 0 0 .71.288.973.973 0 0 0 .71-.288.95.95 0 0 0 .292-.703v-2.182h.76c.291 0 .54-.103.749-.308.207-.205.311-.455.311-.75V5.365h-9v6.404Zm10.495-6.587a.983.983 0 0 0-.702.278.91.91 0 0 0-.293.685v4.063c0 .271.098.501.293.69a.97.97 0 0 0 .702.284c.28 0 .517-.095.712-.284a.924.924 0 0 0 .293-.69V6.146a.91.91 0 0 0-.293-.685.995.995 0 0 0-.712-.278Zm-12.702.283a.985.985 0 0 1 .712-.283c.273 0 .507.094.702.283a.913.913 0 0 1 .293.68v4.063a.932.932 0 0 1-.288.69.97.97 0 0 1-.707.284.986.986 0 0 1-.712-.284.924.924 0 0 1-.293-.69V6.146c0-.264.098-.491.293-.68Z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="col">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-box-seam-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003 6.97 2.789ZM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461L10.404 2Z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="col">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-browser-chrome" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M16 8a8.001 8.001 0 0 1-7.022 7.94l1.902-7.098a2.995 2.995 0 0 0 .05-1.492A2.977 2.977 0 0 0 10.237 6h5.511A8 8 0 0 1 16 8ZM0 8a8 8 0 0 0 7.927 8l1.426-5.321a2.978 2.978 0 0 1-.723.255 2.979 2.979 0 0 1-1.743-.147 2.986 2.986 0 0 1-1.043-.7L.633 4.876A7.975 7.975 0 0 0 0 8Zm5.004-.167L1.108 3.936A8.003 8.003 0 0 1 15.418 5H8.066a2.979 2.979 0 0 0-1.252.243 2.987 2.987 0 0 0-1.81 2.59ZM8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cloud-lightning-fill" viewBox="0 0 16 16">
                                        <path d="M7.053 11.276A.5.5 0 0 1 7.5 11h1a.5.5 0 0 1 .474.658l-.28.842H9.5a.5.5 0 0 1 .39.812l-2 2.5a.5.5 0 0 1-.875-.433L7.36 14H6.5a.5.5 0 0 1-.447-.724l1-2zm6.352-7.249a5.001 5.001 0 0 0-9.499-1.004A3.5 3.5 0 1 0 3.5 10H13a3 3 0 0 0 .405-5.973z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="col">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-collection-play-fill" viewBox="0 0 16 16">
                                        <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm6.258-6.437a.5.5 0 0 1 .507.013l4 2.5a.5.5 0 0 1 0 .848l-4 2.5A.5.5 0 0 1 6 12V7a.5.5 0 0 1 .258-.437z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="col">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-award-fill" viewBox="0 0 16 16">
                                        <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
                                        <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="text-center">
                        Copyright &#169; - <?php  echo date("Y");?> @ Developed by &hearts; <b>HIST-Software Engineer Ihsan Chandio</b> 
                    </p>
                </div>
            </div>
      </div>
    </div>
</footer>
<!-- Footer end here -->

<!-- bootstrap js script link -->
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
