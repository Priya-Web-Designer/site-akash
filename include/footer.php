<!-- ========================================== -->
<div class="popup-onload">
    <div class="cnt223" style=" background-color: #043844;color: white;">
        <div class="popup-content">
            <h2 class="text-center text-white">Enquiry Form</h2>
            <!-- <div class="container"> -->
            <div class="row">
                <div class="col-lg-6 col-md-6" style="margin-top: 30px; ">
                    <div class=""><img src="assets/img/about-us.png" alt="AFTE" style="width: 100%; " /></div>
                </div>
                <div class="col-lg-6 col-md-6" style="margin-top: 30px; ">
                    <form action="server.php" method="post">
                        <input type="text" name="name" required placeholder="Name *" autocomplete="off" /><br />
                        <input type="email" name="email" required placeholder="Email Address *"
                            autocomplete="off" /><br />
                        <input type="text" name="phone" required placeholder="phone *" autocomplete="off" /><br />
                        <input type="text" name="course" required placeholder="Course *" autocomplete="off" /><br />
                        <button class="" name="submit" type="submit">
                            Submit</button><br />
                    </form>
                </div>
            </div>
            <!-- </div> -->
            <a href="" class="close"
                style="position: absolute; top: 0; right: 10px; font-size: 28px; color: orangered;">x</a>
        </div>
    </div>
</div>
<!-- ============================================ -->

<!-- Start footer -->
<footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top">
        <div class="container">
            <div class="mu-footer-top-area">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="mu-footer-widget">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="academics.php">Academics</a></li>
                                <li><a href="admission.php">Admission</a></li>
                                <li><a href="activities.php">Activities</a></li>
                                <li><a href="infrastructure.php">Infrastructure</a></li>
                                <li><a href="sitemap.xml">Sitemap</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="mu-footer-widget">
                            <h4>Important Links</h4>
                            <ul>
                                <li><a href="https://crsu.ac.in/">CRSU</a></li>
                                <!-- <li><a href="#">KUK</a></li> -->
                                <li><a href="https://ncte.gov.in/Website/Index.aspx">NCTE</a></li>
                                <li><a href="https://www.ncert.nic.in/">NCERT</a></li>
                                <li><a href="https://scertharyana.in/">SCERT</a></li>
                                <li><a href="https://www.ugc.gov.in/">UGC</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="mu-footer-widget">
                            <h4>Contact</h4>
                            <address>
                                <p>V.P.O Gatauli Teh. Julana Distt. Jind Haryana - INDIA</p>
                                <p>Mob. No: +91-9911763333</p>
                                <p>Mob. No: +91-9810043472</p>
                                <p>Mob. No: +91-9868405063</p>
                                <p>Email : akashcollegejind@yahoo.in</p>
                            </address>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="mu-footer-widget">
                            <h4>SOCIAL MEDIA</h4>
                            <p>Connect With Our Social Media Platform's You will explore about us try to know more
                            </p>
                            <div class="row" style="display: flex; justify-content: space-between;">
                                <a href="#"><span class="fa fa-facebook"></span></a>
                                <a href="#"><span class="fa fa-twitter"></span></a>
                                <a href="#"><span class="fa fa-google-plus"></span></a>
                                <a href="#"><span class="fa fa-linkedin"></span></a>
                                <a href="#"><span class="fa fa-youtube"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end footer top -->
    <!-- start footer bottom -->
    <div class="mu-footer-bottom">
        <div class="container">
            <div class="mu-footer-bottom-area">
                <p>&copy; All Right Reserved. Designed by Akash College</p>
            </div>
        </div>
    </div>
    <!-- end footer bottom -->
</footer>
<!-- End footer -->

<!-- jQuery library -->
<script src="assets/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="assets/js/bootstrap.js"></script>
<!-- Slick slider -->
<script type="text/javascript" src="assets/js/slick.js"></script>
<!-- Counter -->
<script type="text/javascript" src="assets/js/waypoints.js"></script>
<script type="text/javascript" src="assets/js/jquery.counterup.js"></script>
<!-- Mixit slider -->
<script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
<!-- Add fancyBox -->
<script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>


<!-- Custom js -->
<script src="assets/js/custom.js"></script>


<!-- ======================== -->
<!-- <script src="https://code.jquery.com/jquery-1.8.2.js"></script> -->
<script>
    $(function () {
        var overlay = $('<div id="overlay"></div>');
        overlay.show();
        overlay.appendTo(document.body);
        // $(".popup-onload").show();
        setTimeout(function () {
            $(".popup-onload").show();
        }, 1000);

        $(".close").click(function () {
            $(".popup-onload").hide();
            overlay.appendTo(document.body).remove();
            return false;
        });

        $(".x").click(function () {
            $(".popup").hide();
            overlay.appendTo(document.body).remove();
            return false;
        });
    });
</script>
<!-- ========================== -->
<!-- openform -->
<script>
    function openform() {
        var overlay = $('<div id="overlay"></div>');
        overlay.show();
        overlay.appendTo(document.body);

        $(".popup-onload").css("display", "block");

        $(".close").click(function () {
            $(".popup-onload").hide();
            overlay.remove();
            return false;
        });
    }
</script>

</body>

</html>