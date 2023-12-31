<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Daniel Higgins portfolio">
        <meta name="keywords" content="Daniel, Higgins, Software, Software developer, HTML, CSS, JavaScript">
        <meta name="author" content="Daniel Higgins">
        <title>Daniel Higgins Portfolio</title>
        <link rel="icon" type="image/x-icon" href="assets/Capturedsds-removebg-preview.png">
        <link rel="stylesheet" href="js/slick/slick.css">
        <link rel="stylesheet" href="js/slick/slick-theme.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/hamburgers.css">
        <link rel="stylesheet" href="css/animate.css">
        <script src="https://kit.fontawesome.com/7cba581338.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/application.css">
    </head>
    <body>
        <?php include("php/sidenav.php"); ?>
        <main>
            <?php include("php/aboutSummary.php"); ?>
            <div id="about-me-extended-container">
                <h1>About Me</h1>
                <div id="about-me-extended"> 
                    <div id="about-me-overview" class="about-me-columns">
                        <h1>Overview</h1>
                        <p>
                            I am keen to further my career in professional software development.I am an enthusiastic young developer with the ambition to keep continuously learning and 
                            honing my skills whilst working hard as part of a development team.
                            <br>
                            <br>
                            I have nearly completed Netmatters Scion software developer program which is a 6 months long program covering HTML, CSS, Javascript, Jquery, SQL, PHP, Laravel, C#, .net.
                            I have also previously completed a 14 week software developer bootcamp from QA and acquired a 
                            <a href="https://www.credly.com/badges/7c293974-6cd4-42dd-8c60-3d9c73a31826" target="_blank">Microsoft Azure AZ-900</a> certification, which has given me 
                            knowledge of the Microsoft Azure cloud ecosystem and services. This bootcamp added some more specific software development skills and experience to my existing 
                            <a href="https://www.linkedin.com/in/danielhiggins20/overlay/1583766359559/single-media-viewer?type=DOCUMENT&profileId=ACoAAC-fj6kBLRMLDcfDMaxTP5SrZWY0CfXyqWg&lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base%3B4T5uxyiGSZC6HpBm5RKuZA%3D%3D" target="_blank">
                            level 3 BTEC extended IT diploma</a>. As well as formal qualifications, I have also completed a number of online training courses in front-end development using JavaScript, HTML5, 
                            CSS and React from <a href="https://www.coursera.org/account/accomplishments/certificate/4YCAH6339PZR" target="_blank">Meta</a>, Codecademy and 
                            <a href="https://coursera.org/share/a22b4ee466d27c85aeabb68792f23b83" target="_blank">Duke University</a>.
                        </p>
                        <div id="coding-icons">
                            <h2>
                                Im interested in learning any coding languages and techniques. These are my main core coding languages and technologies I have the most experience with:
                            </h2>
                            <ul id="coding-icons-container">
                                <li><i class="fa-brands fa-python fa-4x"></i></li>
                                <li><i class="fa-brands fa-square-js fa-4x"></i></li>
                                <li><img src="assets/jquery.svg" alt="Jqeury logo"></li>
                                <li><i class="fa-brands fa-css3 fa-4x"></i></li>
                                <li><i class="fa-brands fa-html5 fa-4x"></i></li>
                                <li><i class="fa-solid fa-cloud-arrow-up fa-3x"></i></li>
                                <li><img src="assets/mysql.svg" alt="mySQL logo"></li>
                                <li><i class="fa-brands fa-react fa-4x"></i></li>
                                <li><i class="fa-brands fa-jira fa-4x"></i></li>
                                <li><i class="fa-brands fa-github fa-4x"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div id="about-me-experience" class="about-me-columns">
                        <h1>Experience</h1>
                        <p>
                            In my previous job as junior software developer I was trained and gained some hands-on experience working with modern Front ends frameworks such as React, 
                            Angular 12 and Redux, REST APIs and  some object orientated programming using Java SE 11 and Java EE 6. Also debugging in IntelliJ and using Junit to automate testing.
                            Whilst working there I also gained experience with modern development practices such as an Agile working with Jira, continuous integration (CI) using Bamboo, Maven for 
                            build automation and version control using Git and Subversion
                            <br>
                            <br>
                            For the past few years I have been working on a project to build a data processing and prediction web app for Cryptocurrency transaction fee / gas prediction (<a>GasGuru</a>).
                            The back end is written in Python using the Pandas library to manipulate and analyse JSON data from an external REST API. I then use a custom Flask REST API to feed the 
                            prediction and real time data to the front-end app. Front end is a React web app which allows clean representation of the data as well as a interactive slider for smoothly inputting
                            desired preference of trascation time vs cost to be sent as a GET request to the flask API to retrieve the predicted best hour to send crypto in.
                            <br>
                            <br>
                            I have some experience and qualifications in cloud services specifically I acquired a <a href="https://www.credly.com/badges/7c293974-6cd4-42dd-8c60-3d9c73a31826" target="_blank">Microsoft Azure AZ-900</a>
                            certification by passing the Microsoft AZ-900 (Azure) exam. Also my GasGuru project has given me hands-on experience with AWS Cloud technologies, as some of the python files 
                            are hosted on an ec2 instance which pulls data from the external API every minute.
                        </p>
                    </div>
                </div>
            </div>
        </main>
    <script src="js/jquery-3.7.0.min.js"></script>
    <script src="js/aeo-typewriter.js"></script>
    <script src="js/slick/slick.js"></script>
    <script src="js/app.js"></script>
    </body>
</html>