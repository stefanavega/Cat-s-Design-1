<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Istok+Web" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/datepicker.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.es-drawermenu.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <header>
        <div class="navbar">
            <div class="menu-left">
                <svg version="1.1" class="hamburger drawer-toggle" id="hamburger" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 302 212.9" style="enable-background:new 0 0 302 212.9;" xml:space="preserve">
              <g><rect width="302" height="26.3" /></g>
              <g><rect y="93.3" width="302" height="26.3"/></g>
              <g><rect y="186.7" width="302" height="26.3"/></g>
            </svg>
            </div>
            <div class="menu-right"></div>
            <nav class="drawermenu">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="projects.html">Projects</a></li>
                    <li><a href="contact.php">Contact</a> </li>
                </ul>
            </nav>
            <div class="drawermenu-overlay"></div>
        </div>
        <div class="right1">
            <a href="#" class="icons"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#" class="icons"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>
        <div class="right2"><a href="index.html"><img src="img/logoheader.png"></a></div>
        <div class="clearfix"></div>
    </header>
    <div class="decorationlefttoright"></div>
    <div class="decorationlefttobottom"></div>
    <div class="decorationbottom"></div>
    <ul class="fixedul">
        <li><a href="contact.php">C o n t a c t</a></li>
        <li><a href="projects.html">P r o j e c t s</a></li>
        <li><a href="about.html">A b o u t</a></li>
        <li><a href="index.html">H o m e</a></li>
    </ul>
    <div class="contactlogo"><img src="img/logo.png"></div>
    <main class="maincontact">
        <div class="leftcontact">
            <p class="titlecontact">CONTACT INFORMATION</p>
            <p class="infocontact">Cat's Design, 7 Mercy Street, Timisoara, Romania <span><i class="fa fa-map-marker" aria-hidden="true"></i></span></p>
            <p class="infocontact">+40 (356) 356 356 <span><i class="fa fa-phone" aria-hidden="true"></i></span></p>
            <p class="infocontact">cathrynmaters@catsdesign.com <span><i class="fa fa-envelope" aria-hidden="true"></i></span></p>
        </div>
        <div class="rightcontact">
            <p class="titlecontact">LEAVE A MESSAGE</p>
            <form method="post" action="mailto:vegastefana@gmail.com?subject=message_submission" enctype="text/plain">
                <input type="text" placeholder="Name and surname" required name="name">
                <input type="email" placeholder="Your email address" required name="email">
                <textarea placeholder="Your message" required name="message"></textarea>
                <input type="submit">
            </form>
        </div>
        <div class="clearfix"></div>

        <div class="appointment">
            <p>MAKE AN APPOINTMENT</p>
            <form method="post" action="mailto:vegastefana@gmail.com?subject=appointment_submission" enctype="text/plain">
                <input type="text" placeholder="Name and surname" required name="name" id="name">
                <input type="email" placeholder="Your email" required name="email" id="email">
                <input type="text" class="datepick" datepicker placeholder="Choose a date for your appointment" required name="date" id="date">
                <input type="time" required name="time" id="time">
                <textarea placeholder="Leave a message if you want!" name="message" id="message" maxlength="500"></textarea>
                <input type="submit">
            </form>
        </div>
        <div id="map" class="map"></div>
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/datepicker.js"></script>
    <script type="text/javascript" src="js/jquery.es-drawermenu.js"></script>
    <script>
        $('.drawermenu').drawermenu({
            // change the speed of the drawer
            speed: 100,
            // If position: right, draw from the right
            position: 'left'
        });

        $('nav li').hover(
            function() {
                $('ul', this).stop().slideDown(200);
            },
            function() {
                $('ul', this).stop().slideUp(200);
            }
        );
        $(".datepick").datepicker();

    </script>
    <script>
        function initMap() {
            var uluru = {
                lat: 45.7573,
                lng: 21.2288
            };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 16,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }

    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQ7likSC31BOMFzLxOBbz90vNSbKZNA-c&callback=initMap"></script>
</body>

</html>
