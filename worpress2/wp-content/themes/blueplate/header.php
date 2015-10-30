
<!doctype html>
    <html>
        <head>

            <meta charset="<?php bloginfo('chaset'); ?>">
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />

            <title><?php bloginfo('name'); ?></title>
            <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
            <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
            <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
            <?php wp_head(); ?>

        </head>
    <body <?php body_class(); ?>>

    <!-- blueplate header -->
    <div id="reserve-a-table" class="hide row">
        <div id="drop-up" class="small-12 large-6 columns">
            <h4 class="table">FIND A TABLE</h4>
            <form>
                <div id="date-time-mobile" class="row">
                    <div class="large-6 columns">
                        <div id="left" class="row">
                            <div class="small-3 columns">
                                <label class="right inline">DATE</label>
                            </div>
                            <div class="small-9 columns">
                                <input type="text" class="right-label" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="large-6 columns">
                        <div id="party" class="row prefix-radius">
                            <div class="small-6 columns size">
                                <label class="right inline">PARTY SIZE</label>
                            </div>
                            <div class="small-6 columns">
                                <input type="text" class="party-size" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="large-6 columns">
                            <div class="row postfix-radius">
                                <div class="small-3 columns">
                                    <label class="right inline">TIME</label>
                                </div>
                                <div class="small-9 columns">
                                    <input type="text" class="right-label" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="large-6 columns">
                    <!-- Button -->
                    <a href="#" class="button radius">FIND A TABLE</a>
                </div>
                <div class="large-6 columns">
                    <a><img class="logo" src="http://blueplate.capacitr.com/wp-content/uploads/2015/10/Home-M.png" alt="open table"></a>
                </div>
            </div>
        </div>
        <div id="info-panel" class="large-6 columns">
            <a href="#" class="close">Close</a>
            <p class="hours">The Blue plate accepts reservations for dinner service Monday - Thursday from<br> 5:30 to 10:00
                Friday and Saturday from 5:30 to 10:30 and Sunday from 5:30 to 9:30.</p>

            <p class="events">For Special events and large parties greater than 6 please email
                reservations@blueplatesf.com for any large party of events requests.  To make a request by phone please
                call (419)282-6777.</p>
        </div>
    </div>
    <nav class="navigation-nav top-bar row" data-topbar role="navigation">
        <ul class="title-area">
            <li class="name">
                <h1 id="blue-plate-logo"><a href="#"><img src="http://blueplate.capacitr.com/wp-content/uploads/2015/10/Blue-Plate.png"  alt="Neighborhood"></a>
                </h1>
            </li>
            <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
            <li class="m-find-table">
                <a href="#" id="m-table-finder" class="button radius visible-for-medium-down">FIND A TABLE</a>
            </li>
            <li class="toggle-topbar menu-icon">

                <a href="#"><span></span></a>
            </li>
        </ul>

        <section class="top-bar-section clearfix">
            <!-- Left Nav Section -->
            <ul id="menu" class="right">
<!--                --><?php
//                $args = array(
//                    'theme_location' => 'primary'
//                );
//                ?>
<!--                --><?php //wp_nav_menu( $args)?>
                <li><a href="#">HOME</a></li>
                <li><a href="#">OUR MENU</a></li>
                <li><a href="#">ABOUT US</a></li>
                <li><a href="#">EVENTS</a></li>
                <li><a href="#">CONTACT US</a></li>
                <li id="find-a-table">
                    <a href="#" class="find-table button radius hidden-for-medium-down">FIND A TABLE</a>
                </li>
            </ul>
        </section>
    </nav>


