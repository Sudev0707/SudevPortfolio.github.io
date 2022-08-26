<?php
//error_reporting(0);
// php database connection
require './db/config.php';
$sql = "SELECT * FROM project ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/sudev.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" type="text/css" href="your_website_domain/css_root/flaticon.css">
    <script src="https://kit.fontawesome.com/24bb2596e9.js" crossorigin="anonymous"></script>

    <title>portfolio sudev</title>
</head>

<!-- top navbar start -->
<nav>
    <div class="container ">
        <a href="#" class="logo">SudevMajhi</a>
        <ul class="">
            <li><a href="#home" class="active">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#education">Education</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </div>
</nav>
<!-- top navbar end -->


<!-- banner start -->
<div class="hero " id="home">
    <!-- <h1 class="name">Sudev</h1> -->
    <div class="container ">
        <div class="hero-info ">
            <p>Hi, My Name is</p>
            <h2>Sudev Majhi</h2>
            <h6>I build things for the web</h6>

        </div>
    </div>
</div>
<!-- banner end -->



<!-- content section start -->
<section class="container content p-5" id="about">
    <div class="about-title text-center">
        <h1>About Me</h1>
    </div>
    <div class="about-info d-flex">
        <div class="my-img col-4  p-2 ">
            <img src="/img/sudev1.jpg" alt="" class="" width="280px" height="330px">
        </div>
        <div class="my-intro col-8  px-5 text-center">
            <p>Hello! I'm Sudev Majhi, I am a self-motivated Web Developer and passionate coder.
                I am completely dedicated to my profession and always on toes to take up exciting projects and
                interesting challenges to improve lives around me.
                Interested in exploring things and learning new things. If I'll be hired by you then it would be a
                great pleasure for me.
                I’m currently looking for opportunities. To get in touch mail me
            <p><a href="mailto:sudev1997@gmail.com">here</a></p>
            </p>
            <div class="my-resume ">
                <button type="button" class="btn btn-primary text-light">
                    <a onClick="openTab(this)" href="/files/Sudev Majhi_CV_6.pdf" target="_blank" name="PDF/Sudev_majhi_CV.pdf" class="text-light">
                        View Resume </a>
                </button>
            </div>
        </div>
    </div>
</section>
<!-- content section end -->



<!-- project section start -->
<!--  -->
<!-- project section end -->
<div class="container-fluid p-4 project-container" id="projects">
    <!-- <div class="container projects" > -->

    <div class="container">
        <div class="educ-title text-center mb-5">
            <h1 class="text-light"> Projects</h1>
        </div>
        <div class="row">

            <?php
            if ($result != 0) {
            ?>
                <?php
                $i = 0;
                while ($record = mysqli_fetch_assoc(($result))) {
                ?>
                    <div class="col-md-4 border">
                        <div class="blog-card blog-card-blog ">
                            <div class="blog-card-image">
                                <img class="img p-img" src="<?php echo $record['image']; ?>">
                                <div class="ripple-cont"></div>
                            </div>
                            <div class="blog-table ">
                                <!-- <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> News</h6> -->
                                <h5 class="blog-card-caption">
                                    <?php echo $record['title']; ?>
                                </h5>
                                <p class="blog-card-description"> <?php echo $record['descr']; ?> </p>
                                <div class="ftr text-center">
                                    <a class="project-link" href="<?php echo $record['git']; ?>" title="github icons"><i class="fa-brands fa-github"></i></a>
                                    <a class="project-link" href="<?php echo $record['web']; ?>" title="github icons"><i class="fa-brands fa-github"></i></a>
                                    <!-- <div class="author">
                                    <a href="#"> <img src="https://picsum.photos/id/1005/5760/3840" alt="..."
                                            class="avatar img-raised"> <span>Lorem</span> </a>
                                </div>
                                <div class="stats"> <i class="far fa-clock"></i> 10 min </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--blog card end-->
            <?php
                    $i++;
                }
            } else {;
            }
            ?>



        </div>
    </div>
    <!-- </div> -->
</div>
<!-- skills section -->

<div class="container-fluid skill-section">
    <div class="container p-2" id="skills">
        <div class="skill-title text-center  justify-content-center p-2">
            <h1 class="text-light "> Skills & Abilities </h1>
        </div>
        <div class="flex-container justify-content-center p-4 ">
            <div>
                <img class="" src="/img/c++.png" alt="" width="45px" height="45px">
                <p>C++</p>
            </div>
            <div>
                <img class="" src="/img/php (1).png" alt="" width="60px" height="45px">
                <p>PHP</p>
            </div>
            <div>
                <img class="" src="/img/mysql (1).png" alt="" width="60px" height="45px">
                <p>MySql</p>
            </div>
            <div>
                <img class="" src="/img/pyhton (1).png" alt="" width="45px" height="45px">
                <p>Python</p>
            </div>
            <div>
                <img class="" src="/img/django (1).png" alt="" width="60px" height="45px">
                <p>Django</p>
            </div>
            <!-- <div>
                        <img class="" src="/img/java (1).png" alt="" width="50px" height="45px">
                        <p>Java</p>
                    </div> -->
            <!-- <div>
                        <img class="" src="/img/javascript (1).png" alt="" width="45px" height="45px">
                        <p>Javascript</p>
                    </div> -->
            <div>
                <img class="" src="/img/bootstrap (1).png" alt="" width="45px" height="45px">
                <p>Bootstrap</p>
            </div>
            <div>
                <img class="" src="/img/wordpress (1).png" alt="" width="45px" height="45px">
                <p>Wordpress</p>
            </div>
            <div>
                <img class="" src="/img/github (1).png" alt="" width="45px" height="45px">
                <p>Github</p>
            </div>
            <!-- <div>
                        <img class="" src="/img/node.png" alt="" width="60px" height="45px">
                        <p>NodeJS</p>
                    </div> -->
            <!-- <div></div>   -->
        </div>
    </div>
</div>
<!-- skills section end-->




<!-- education section -->
<div class="container-fluid education-section">
    <div class="container pb-2" id="education">
        <div class="edu-title text-center  justify-content-center p-2">
            <h1 class=" "> My Education </h1>
        </div>

        <div class="card ">
            <div class="row">
                <div class="col-sm-5">
                    <img class="d-block w-100" src="/img/Vidyasagar_University.png" alt="">
                </div>
                <div class="col-sm-7">
                    <div class="card-block">
                        <!--           <h4 class="card-title">Small card</h4> -->
                        <br>
                        <h4>Master of Computer Application</h4>
                        <p>Vidyasagar University | West Bengal</p>
                        <h5>2020-2022 | Completed</h5>
                        <br>
                        <!-- <a href="#" class="btn btn-primary btn-sm float-right">Read More</a> -->
                    </div>
                </div>
            </div>
        </div>


        <div class="card ">
            <div class="row">
                <div class="col-sm-5">
                    <img class="d-block w-100" src="/img/ranchi-university.jpg" alt="" width="200px" height="200px">
                </div>
                <div class="col-sm-7">
                    <div class="card-block">
                        <!--           <h4 class="card-title">Small card</h4> -->
                        <br>
                        <h4>Bachelor of Science in Information Technology</h4>
                        <p>Ranchi University | Jharkhand</p>
                        <h5>2016-2019 | Completed</h5>
                        <br>
                        <!-- <a href="#" class="btn btn-primary btn-sm float-right">Read More</a> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="card ">
            <div class="row">
                <div class="col-sm-5">
                    <img class="d-block w-100" src="/img/Vidyasagar_University.png" alt="">
                </div>
                <div class="col-sm-7">
                    <div class="card-block">
                        <!--           <h4 class="card-title">Small card</h4> -->
                        <br>
                        <h4>Higher Secondary | Science</h4>
                        <p>Mosaboni Mines Inter College | JAC </p>
                        <h5>2013-2016 | Completed</h5>
                        <br>
                        <!-- <a href="#" class="btn btn-primary btn-sm float-right">Read More</a> -->
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- education section end-->



<!-- contact section start -->
<div class="container-fluid contact-section" id="contact">
    <div class="container contact text-center p-4 ">
        <div class="con-box ">
            <h1 class="con-title">Get In Touch</h1>
            <p width="">I’m currently looking for any new opportunities, my inbox is always open.
                Whether you have a question or just want to say hi, I’ll try my best to get back to you! </p>
            <br>
            <button type="button" class="btn p-2"><a href="mailto:sudev1997@gmail.com">Say Hello</a></button>

        </div>
    </div>
</div>


<!-- contact section end -->



<footer class=" m-0 ">
    <div class="container ">
        <div class="footer-container">
            <div>
                <h4>Sudev's Portfolio</h4>
                <p>Thank you for visiting my personal portfolio website.
                    Connect with me over socials.</p>
            </div>
            <div>
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#education">Education</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div>
                <h4>Contact Info</h4>
                <p><i class="fa-solid fa-phone-flip con-icon" style="font-size:18px;"></i>&nbsp; +91 7488854261
                </p>
                <p><i class="fa-solid fa-envelope con-icon" style="font-size:18px;"></i>&nbsp;
                    sudev1997@gmail.com</p>
                <p><i class="fa-solid fa-map-location-dot con-icon" style="font-size:18px;"></i>&nbsp; Kolkata,
                    India-721102</p>
                <div class="links ">
                    <a class="social" href="" title="linkedin icons"><i class="fa-brands fa-linkedin-in" style="font-size:20px;"></i></a>
                    <a class="social" href="" title="github icons"><i class="fa-brands fa-github" style="font-size:20px;"></i></a>
                    <a class="social" href="" title="mail icons"><i class="fa-solid fa-envelope" style="font-size:20px;"></i></a>
                    <a class="social" href="" title="twitter icons"><i class="fa-brands fa-twitter" style="font-size:20px;"></i></a>
                    <a class="social" href="" title="telegram icons"><i class="fa-brands fa-telegram" style="font-size:20px;"></i></a>


                </div>

            </div>
        </div>
    </div>
    <div class="author text-center text-light">
        <p>Made with <span class="heart"> &#10084;</span> by <span class="name">Sudev </span></p>
        <p class="copyright">No <i class='far'>&#xf1f9;</i> copyright issues. Feel free to copy.</p>
    </div>
</footer>


<!-- <div class="navbar-header col-md-4 ">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand">Company Logo</a>
    </div> -->









<script src="js/sudev.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>