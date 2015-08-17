<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Benavides Cancer Institute </title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>application/views/ui/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>application/views/ui/css/Login.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#About">About</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">University of Santo Tomas</div>
                <div class="intro-heading">  Benavides Cancer Institute </div>

            <div class="message warning">
                <div class="inset">
                  <div class="login-head">
        <h1>Welcome</h1>
                </div>
        <?php
        echo form_open('patient/validate_credentials');
        ?>
            <li>
              <?php  echo form_input('username', '', 'placeholder = "Username" class = "form-control"'); ?> 
            </li>
                <div class="clear"> </div>
            <li>
                <input type="password" spellcheck-"false" class="form-control" placeholder="Password" required  > 
            </li>
            <div class="clear"> </div>
            <button class="btn btn-lg btn-primary" onclick="" type="submit"> Log In </button>
        </div>
               
            </div>
            <?php
        echo form_close();
        ?>
        </div>
    </header>

    <!-- About Section -->
    <section id="About">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">University of Santo Tomas Hospital </h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row text-center">
                <p>       The UST Hospital, our premier medical facility, is a non-stock, non-profit hospital. Its primary mission is to provide the best quality healthcare possible, especially to our less fortunate brothers and sisters. </p>

                <p>        The UST Hospital trains young men and women in the medical arts and science, through clinical exposure and research, and ultimately molds them towards the professional care of patients, with compassion and love. </p> 

                <p>       Your Hospital currently maintains 460 dedicated beds for charity or clinical patients. These are financially sustained by just 352 private patient beds, of which the resulting revenues support and delimit the extent of charity to the sick and poor in the clinical or charity beds. </p>

                <p>        To sustain the ever-expanding needs of our sick and poor patients, the UST Hospital must maintain and in fact expand its paying or private division. </p>

                <p>         But first, our deepest gratitude must be given to the following: </p> 

                <p >        Our Paying, or Private Patients, for entrusting their care to The UST Hospital for these past fifty-nine years; </p>

                <p>         Our devoted Medical Staff, for their selfless and tireless professional services and expertise, rendered gratis, that the physical, emotional and spiritual ailments of thousands of poor patients may be alleviated, year after year; </p>

                <p>         Our dear Employees, Volunteers and Non-Medical Staff, for generously cooperating with the Hospital in helping fulfill its mission; </p> 
                <p>         We specially thank our Generous Benefactors, Sponsors and Partners, for continuously believing in The UST Hospital and its noble mission, delivering the blessings of good health to those who have less in life; </p>

                <p>         And finally, we humbly and sincerely thank The Supreme Healer, for guiding us to do the best we can to ease the suffering of our brothers and sisters. </p> 
        </div>
    </section>

   
            
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

</body>

</html>
