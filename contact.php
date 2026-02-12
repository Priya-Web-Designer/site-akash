<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Akash College | Contact</title>

    <?php include "include/header.php"; ?>

    <!-- Page breadcrumb -->
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>Contact</h2>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Contact</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb -->

    <div class="col-md-12 col-sm-12" style="margin-top: 50px;">
        <img src="assets/img/1.jpg " alt="College" style="width: 100%;">
    </div>

    <!-- Start contact  -->
    <section id="mu-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-contact-area">
                        <!-- start title -->
                        <div class="mu-title">
                            <h2>Get in Touch</h2>
                        </div>
                        <!-- end title -->
                        <!-- start contact content -->
                        <div class="mu-contact-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mu-contact-left">
                                        <form class="contactform" method="post" action="server.php">
                                            <p class="comment-form-author">
                                                <label for="author">Name <span class="required">*</span></label>
                                                <input type="text" required="required" size="30" value="" name="name">
                                            </p>
                                            <p class="comment-form-email">
                                                <label for="email">Email <span class="required">*</span></label>
                                                <input type="email" required="required" aria-required="true" value=""
                                                    name="email">
                                            </p>
                                            <p class="comment-form-url">
                                                <label for="phone">Phone</label>
                                                <input type="text" name="phone">
                                            </p>
                                            <p class="comment-form-url">
                                                <label for="subject">Subject</label>
                                                <input type="text" name="subject">
                                            </p>
                                            <p class="comment-form-comment">
                                                <label for="comment">Comment/Suggestion/Request for Information:</label>
                                                <textarea required="required" aria-required="true" rows="8" cols="45"
                                                    name="comment"></textarea>
                                            </p>
                                            <p class="form-submit">
                                                <input type="submit" value="Send Message" class="mu-post-btn"
                                                    name="submit">
                                            </p>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mu-contact-right">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6966.351039909636!2d76.37424944318016!3d29.188959001461672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3912095ba11ddb5b%3A0x6734fb5d867a004d!2sGatauli%2C%20Haryana%20126114!5e0!3m2!1sen!2sin!4v1714199938906!5m2!1sen!2sin"
                                            width="100%" height="450" frameborder="0" style="border:0"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end contact content -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End contact  -->

    <?php include "include/footer.php"; ?>