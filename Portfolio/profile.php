<?php
require_once('head.php');
?>

<body>
    <?php
    require_once('nav.php');
    ?>
    <div class="container-fluid features">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 text-center intro" style="text-align: center;">
                <img class="profile-picture" src="../images/20230801_223850-1.jpg" />
                <h1>Wondimu Toma</h1>
                <h3 class="roleAndCompany">Web Developer At ETDU</h3>
                <p> <i> Programming is NOT typing, It is thinking </i> </p>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="card text-bg-blue" id="about">
                <h3 class="card-header">
                    My hobbies
                </h3>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="sectionTitle">I am</h5>
                            <ul class="about-list">
                                <li>An engineer</li>
                                <li>A reader</li>
                                <li>A coder</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h5 class="sectionTitle">I like</h5>
                            <ul class="like-list">
                                <li>Meet new people</li>
                                <li>Play guitar</li>
                                <li>Eat Icecream</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="card" id="projects">
                    <h3 class="card-header">
                        My projects
                    </h3>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 project-image-wrapper">
                                <h4>Project 1</h4>
                                <img width="300" height="250" class="project-image" src="../images/pr1.jpg" alt="Project_1">

                            </div>
                            <div class="col-md-6 project-image-wrapper">
                                <h4>Project 2</h4>
                                <img width="300" height="250" class="project-image" src="../images/th2.jpg" alt="Project_2">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 project-image-wrapper">
                                <h4>Project 3</h4>
                                <img width="300" height="250" class="project-image" src="../images/th3.jpg" alt="Project_3">
                            </div>
                            <div class="col-md-6 project-image-wrapper">
                                <h4>Project 4</h4>
                                <img width="300" height="250" class="project-image" src="../images/th4.jpg" alt="Project_4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card">
                    <h3 class="card-header">
                        Contact Me
                    </h3>
                    <div class="row card-body">
                        <div class="col-md-6 col-lg-6" style="border-right: 1 px dashed blue;text-align: left;  padding-left: 10%; ">
                            <h3 class="sectionTitle">Links</h3>
                            <ul>
                                <li>
                                    <a href="https://github.com/wondetom860">Github</a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/2wondemu">Twitter</a>
                                </li>
                                <li>
                                    <a href="https://linkedin.com/in/wondemutoma4671">Linkedin</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-6 form-grid">
                            <form action="/Proj1.0/contact-us.php" id="form_id">
                                <label for="email">
                                    <h4>Email: </h4>
                                    <input type="email" required id="email" placeholder="Enter your email" />
                                </label>
                                <label for="message">
                                    <h4>Message: </h4>
                                    <textarea id="message" required placeholder="Your Message"></textarea>
                                </label>
                                <div class="submit-button-wrapper">
                                    <input type="submit" id="submitButton" valid="Send Message" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require_once('footer.php');
    ?>
</body>