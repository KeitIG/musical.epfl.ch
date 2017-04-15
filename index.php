<?php

/*
 *---------------------------------------------------------------
 * ERROR REPORTING
 *---------------------------------------------------------------
 *
 * Different environments will require different levels of error reporting.
 * By default development will show errors but testing and live will hide them.
 */

if (defined('ENVIRONMENT'))
{
    switch (ENVIRONMENT)
    {
        case 'development':
        error_reporting(E_ALL);
        break;

        case 'testing':
        case 'production':
        error_reporting(0);
        break;

        default:
        exit('The application environment is not set correctly.');
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>IOC - Discover Rio 2016 venues through interactive tours</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex, nofollow">
        <link rel="icon" type="image/png" href="images/favicon.png">
        <link href="libs/bootstrap.min.css" rel="stylesheet">
        <link href="styles/main.css" rel="stylesheet">
    </head>
    <body>
        <div class="main-content">
            <section class="fullscreen-section" id="welcome">
                <div class="container">
                    <div class="row align-items-center justify-content-center flex-direction-column full-height">
                        <div class="col-xs col-md-10 text-center">
                            <img class="main-logo mb-1" src="images/welcome-logo.png" alt="Musical">
                            <h3 class="font-weight-thin mb-5">Music in the bunker</h3>
                            <p>Musical an EPFL association providing to students a fully-equiped rehearsal room</p>
                            <div class="btn-group">
                                <a class="btn btn-outline-secondary btn-lg" href="#musical">What we do</a>
                                <a class="btn btn-outline-secondary btn-lg" href="#subscription">Subscription</a>
                                <a class="btn btn-outline-secondary btn-lg" href="#booking">Booking</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="fullscreen-section" id="musical">
                <div class="container">
                    <div class="row align-items-center py-3 full-height">
                        <div class="col-xs col-md-8">
                            <h3>What we do</h3>
                            <p>...</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="fullscreen-section" id="subscription">
                <div class="container">
                    <div class="row align-items-center py-3 full-height">
                        <div class="col-xs col-md-8">
                            <h3>Subscription</h3>
                            <p>To become a member of the MUSICAL and obtain the key to the room, you need to register at the Agepoly and pay the following dues:</p>
                            <h4>Tarifs</h4>
                            <ul>
                                <li>200 CHF per bands</li>
                                <li>50 CHF additional for each non-EPFL-student</li>
                                <li>50 CHF of deposit for the key</li>
                            </ul>
                            <h4>Conditions</h4>
                            <p>The person in charge of the band is responsible, through his/her signature, to pay 500 CHF in case of a non-restitution of the key, as well as judicial proceedings. The person in charge must be an EPFL student. The names of each member of the band must be written on the sign-up sheet. If new members join the band later on, you need to go back to the Agepoly tu update the registration. Bands have priority over single persons for the attribution of Keys. Bands have 2 persons minimum and 5 persons maximum.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="fullscreen-section" id="booking">
                <div class="container">
                    <div class="row align-items-center py-3 full-height">
                        <div class="col-xs col-md-8">
                            <h2>Booking</h2>
                            <p>The booking of the rehearsal room is done online using the spreadsheets in this page.</p>
                            <h4>Rules</h4>
                            <ul>
                                <li>No more than 3 hours per band and per week</li>
                                <li>It is forbidden to use the room without reservation</li>
                            </ul>
                            <h4>Booking sheets</h4>
                            <ul>
                                <?php include 'weeks.php'; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section class="fullscreen-section" id="about">
                <div class="container">
                    <div class="row align-items-center justify-content-between align-content-between py-3 full-height">
                        <div class="col-xs-10 col-sm-5 mb-2">
                            <h3>Join us</h3>
                            <p class="caption">As students come and go, we're always looking for new committee members, particularly at the end of the year. Feel free to contact us to learn more about that.</p>
                        </div>
                        <div class="col-xs-10 col-sm-5">
                            <h3>Contact</h3>
                            <address class="caption">Musical - Agepoly<br><a href="mailto:musical@epfl.ch">musical@epfl.ch</a><br><a href="" target="_blank">our Facebook page</a></address>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer>
            <div class="container">
                <div class="row main align-items-center justify-content-center">
                    <div class="col-xs-10 col-sm-12 col-md-3 col-lg-2"><img class="logo" src="images/footer-logo.png" alt="Musical"></div>
                    <div class="col-xs-10 col-sm-12 col-md-9 col-lg-10">&copy; Copyright 2016. All rights reserved</div>
                </div>
            </div>
        </footer>
        <script src="scripts/main.js"></script>
    </body>
</html>
