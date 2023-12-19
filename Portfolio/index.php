<?php
$title = "index";
require_once('head.php');
?>

<body>
    <?php
    require_once('nav.php');
    ?>
    <div class="container-fluid features">
        <div class="contianer-fluid" style="min-height: 600px;">
            <header class="page-header header container-fluid">
                <div class="overlay"></div>
            </header>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <h3 class="feature-title">Lorem ipsum</h3>
                    <img src="../images/column-1.jpg" class="img-fluid">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis
                        placerat ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis.</p>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <h3 class="feature-title">Lorem ipsum</h3>
                    <img src="../images/column-2.jpg" class="img-fluid">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis
                        placerat ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis.</p>
                </div>

                <div class="col-md-4 col-lg-4 form-grid" style="border-left: 1px solid black;">
                    <h3>Cotact Me</h3>
                    <form method="post" action="ContactMe.php" id="form_id">
                        <label for="email">
                            <h4>Email: </h4>
                            <input type="email" required id="email" placeholder="Enter your email" />
                        </label>
                        <label for="message">
                            <h4>Message: </h4>
                            <textarea id="message" required placeholder="Your Message"></textarea>
                        </label>
                        <div class="submit-button-wrapper">
                            <input type="submit" name="submit" id="submitButton" valid="Send Message" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    require_once('footer.php');
    ?>
</body>