<head>
<link rel="stylesheet" type="text/css" href="styles/footer.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>

<!-- The starting of footer -->
<footer>
    <!-- The main wrap around footer -->
    <div class="wrap-footer">
        <div class="banner">
            <p> <h3> Connect with us on Social Networks </h3></p>
            <div class="social-icons">
                <ul class="social-icons-list">
                    <li> <span class="facebook"> <a href="#" class="fa fa-facebook"> </a> </span> </li>
                    <li> <span class="twitter"> <a href="#" class="fa fa-twitter"> </a> </span> </li>
                    <li> <span class="google"> <a href="#" class="fa fa-google"> </a> </span> </li>
                    <li> <span class="linkedin"> <a href="#" class="fa fa-linkedin"> </a> </span> </li>
                    <li> <span class="instagram"> <a href="#" class="fa fa-instagram"> </a> </span> </li>
                </ul>
            </div>
        </div>
        <div class="column-wrapper">
            <div class="first-column">
                <h6 class="column-1-heading"> About </h6>
                <br />
                <hr class="column-hr" />
                <br />
                <p class="column-1-text"> A complete guide designed for the students who are studying at Salo. The website contains all the information, one needs before starting to live in a completely new area. </p>
            </div>
            <div class="second-column">
                <h6 class="column-2-heading"> Useful Links </h6>
                <br />
                <hr class="column-hr" />
                <br />
                <?php 
                    $links = array("Home", "Travel-Guide", "Accommodation", "Official-Places", "Food & Bar", "General");

                    for($x = 0; $x < count($links); $x++){
                     echo '<p class="column-2-text"><a href="'. $links[$x] .'.php">'. $links[$x] .'</a></p>';

                    }
                ?>

            </div>
            <div class="third-column">
                <h6 class="column-3-heading"> Contact Us </h6>
                <br />
                <hr class="column-hr" />
                <br />
                <p class="column-3-text"> You can reach us at : - <a href="mailto:info@kcl.com?Subject=Describe%20your%20issue" target="_top">
                 info@kcl.com</a> </p>
            </div>
         </div>
         <hr class="end-hr">
         <p class="copyright-text">Copyright © 2020 All Rights Reserved by KCL</p>     
       </div>
       <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

</footer>