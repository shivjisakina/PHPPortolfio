<?php include 'includes/header.php';?>

<!-- Portfolio Grid Section -->
<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Projects</h2>
                <br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/liribot2.jpg" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Liri Bot</h4>
                    <p class="text-muted">A command line node app</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/Bamazon4.jpg" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Bamazon</h4>
                    <p class="text-muted">A storefront merchandise app</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/workout.jpg" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Workout4U</h4>
                    <p class="text-muted">The perfect workout, at your fingertips</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Modal 1 -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Liri Bot</h2>
                            <p class="item-intro text-muted">Its like siri....in the form of a command line app :)</p>
                            <img class="img-responsive img-centered" src="img/portfolio/lirinode.gif" alt="">
                            <h3>Technologies Used:</h3>
                            <p>- NodeJS</p>
                            <p>- Twitter NPM Pakcage</p>
                            <p>- node-spotify-api</p>
                            <p>- request</p>
                            <p>- 9gag-scraper</p>
                            <p>- 8Ball</p>
                            <p>- say-something</p>
                            <p>- chalk</p>
                            <p>- password-generator</p>
                            <p>- geocoder</p>
                            <p>- inquirer</p>
                            <p>- weather-js</p>

                            <p>LIRI is like iPhone's SIRI. However, while SIRI is a <strong>Speech Interpretation and Recognition Interface</strong>, LIRI is a <strong>Language Interpretation and Recognition Interface.</strong> LIRI is a command line node app that takes in parameters and gives you back data.</p>

                            <h4>You can find the project <a href="https://github.com/shivjisakina/liri-node-app">here</a></h4>
                            <br>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 2 -->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Bamazon</h2>
                            <p class="item-intro text-muted">Buying and stocking merchandise has never been so easy!</p>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/K2jU4i69LlY" frameborder="0" allowfullscreen></iframe>
                            <br>
                            <br>
                            <h3>Technologies Used:</h3>
                            <p>- NodeJS</p>
                            <p>- mysql</p>
                            <p>- inquirer</p>
                            <p>- cli-table</p>
                            <br>
                            <h4>You can find the project <a href="https://github.com/shivjisakina/Bamazon">here</a></h4>
                            <br>
                            <img class="img-responsive img-centered" src="img/portfolio/BamazonChart.png" alt="">

                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 3 -->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Workout4U</h2>
                            <p class="item-intro text-muted">Who needs dating apps when you can hook yourself up with an amazing workout? They never disappoint.</p>
                            <h4>Take the quiz <a href="https://fathomless-beyond-24344.herokuapp.com/">here</a></h4>
                            <br>
                            <br>
                            <h3>Technologies Used:</h3>
                            <p>- HTML</p>
                            <p>- CSS</p>
                            <p>- Javascript</p>
                            <p>- NodeJS</p>
                            <p>- Node Packages(body-parser, express, path)</p>
                            <br>
                            <h4>You can find the project <a href="https://github.com/shivjisakina/WorkoutFinder">here</a></h4>
                            <br>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Theme JavaScript -->
<script src="js/agency.min.js"></script>

<?php include 'includes/footer.php';?>
