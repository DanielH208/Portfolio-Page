<?php 

    session_start();
    
    if (!isset($_SESSION['success'])) {
        $_SESSION['success'] = false;
    }
    if (!isset($_SESSION['errMsg'])) {
        $_SESSION['errMsg'] = '';
    }
   
    function santise_input($data) {
        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
    }

    function validate_input($data, $input, $regex=true) {
        if (empty($data) == true) {
            $_SESSION['errMsg'] = $input . " has no value";
            //$_SESSION[$input ."-valid"] = false;
            return false;
        }
        else if ($regex == false) {
            $_SESSION['errMsg'] = $data . " is not a valid " . $input;
            //$_SESSION[$input ."-valid"] = false;
            return false;
        }
        //$_SESSION[$input ."-valid"] = true;
        return true;
    }

    function debug_to_console($data, $context = 'Debug in Console') {

        // Buffering to solve problems frameworks, like header() in this and not a solid return.
        ob_start();

        $output  = 'console.info(\'' . $context . ':\');';
        $output .= 'console.log(' . json_encode($data) . ');';
        $output  = sprintf('<script>%s</script>', $output);

        echo $output;
    } 


    include 'php/sendMessage.php';
    


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Filter out any invalid or malicious inputs and store form values inside corresponding variables
        $_SESSION['first-name'] = santise_input($_POST["first-name"]);
        $_SESSION['last-name'] = santise_input($_POST["last-name"]);
        $_SESSION['email'] = santise_input($_POST["email"]);
        $_SESSION['subject'] = santise_input($_POST["subject"]);;
        $_SESSION['message'] = santise_input($_POST["message"]);



        // Session variables for storing whether an input is valid 
        //$_SESSION['name-valid'] = true;
        //$_SESSION["email-valid"] = true;
        //$_SESSION["telephone number-valid"] = true;
        //$_SESSION["message-valid"] = true;


        // If all inputs are validated to true call function to send data to database
        if (
            validate_input($_SESSION['first-name'],"first name", preg_match("/^[a-zA-Z-' ]*$/", $_SESSION['first-name']))  && 
            validate_input($_SESSION['last-name'],"last name", preg_match("/^[a-zA-Z-' ]*$/", $_SESSION['last-name'])) &&
            validate_input($_SESSION['email'], "email", filter_var($_SESSION['email'], FILTER_VALIDATE_EMAIL)) && 
            validate_input($_SESSION['message'], "message")
            ) 
            {
            sendData($_SESSION['first-name'], $_SESSION['last-name'], $_SESSION['email'], $_SESSION['subject'], $_SESSION['message']);
            unset($_SESSION['first-name']);
            unset($_SESSION['last-name']);
            unset($_SESSION['email']);
            unset($_SESSION['subject']);
            unset($_SESSION['message']);
            $_SESSION['success'] = true;
            $_SESSION['errMsg'] = '';
        } 
        header('Location: index.php#submit-button');
        exit();
    }
?>

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
        <link href="css/prism.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap.rtl.css" rel="stylesheet">
        <link href="css/bootstrap.rtl.min.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/7cba581338.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/application.css">
    </head>
    <body class="line-numbers"  data-prismjs-copy-timeout="500">
        <?php include("php/sidenav.php"); ?>
        <main>
            <?php include("php/aboutSummary.php"); ?>
            <div class="containers">
                <div id="portfolio">
                    <h1>Portfolio</h1>
                    <ul id="portfolio-row">
                        <li id="portfolio-row-item-one" class="portfolio-row-item">
                            <a class="portfolio-project-link" href="#"></a>
                            <img src="assets/Gasguru.JPG" alt="Image of Gasguru website template">
                            <h4>GasGuru </h4>
                            <p>
                                Data processing and prediction web app for Cryptocurrency transaction fee / gas. Back end written in Python using the Pandas library to 
                                manipulate and analyse JSON data from an external REST API. Custom Flask REST API feeds predication and real time data to the front-end React web app.<br>
                                <span class="badge text-bg-primary">HTML5 & CSS</span> <span class="badge text-bg-success">Python</span> <span class="badge text-bg-warning">JavaScript</span> <span class="badge text-bg-light">React</span> <span class="badge text-bg-danger">SQL</span>
                            </p>
                            <a class="view-project-link" href="https://github.com/DanielH208/GasGuruExample" target="_blank">Github Repo <i class="fa-solid fa-arrow-right"></i></a>
                        </li>
                        <li id="portfolio-row-item-two" class="portfolio-row-item">
                            <a class="portfolio-project-link" href="https://js-array.daniel-higgins.netmatters-scs.co.uk/" target="_blank"></a>
                            <img src="assets/JavaScriptArrays.JPG" alt="Image of JavaScript Arrays webpage">
                            <h4>JavaScript Arrays</h4>
                            <p>
                                Webpage that pulls down a random image using fetch from a external API. User can then enter an email address which if it passes validation the 
                                image is assigned to a UL for the corresponding email address. If validation fails a custom error message pops up explaining why the email
                                failed validation.<br> 
                                <span class="badge text-bg-primary">HTML5 & CSS & SCSS</span> <span class="badge text-bg-warning">JavaScript</span>
                            </p>
                            <a class="view-project-link" href="https://github.com/DanielH208/JavaScript-Arrays" target="_blank">Github Repo <i class="fa-solid fa-arrow-right"></i></a>
                        </li>
                        <li id="portfolio-row-item-three" class="portfolio-row-item">
                            <a class="portfolio-project-link"  href="https://netmatters.daniel-higgins.netmatters-scs.co.uk/" target="_blank"></a>
                            <img src="assets/Netmatters.JPG" alt="Image of webpage designed for Netmatters homepage">
                            <h4>Netmatters homepage</h4>
                            <p>
                                Hand written homepage for Netmatters homepage. Covers all sections essential for a effective homepage with various user interactive elements and responsive styling.
                                Site is optimised for all device sizes with dynamic styling providing a clean and visually appealing website.<br>
                                <span class="badge text-bg-primary">HTML5 & CSS & SCSS</span> <span class="badge text-bg-warning">JavaScript</span> <span class="badge text-bg-info">PHP</span> <span class="badge text-bg-danger">SQL</span>
                            </p>
                            <a class="view-project-link" href="https://github.com/DanielH208/example_homepage" target="_blank">Github Repo <i class="fa-solid fa-arrow-right"></i></a>
                        </li>
                        <li id="portfolio-row-item-four" class="portfolio-row-item">
                            <a class="portfolio-project-link" href="#"></a>
                            <img src="assets/CdStore.JPG" alt="Image of h2 database for java cd store api">
                            <h4>Java CD store REST API</h4>
                            <p>
                                Cloud based database using a REST API to manage stock/inventory of a CD store. This makes CRUD commands easier then managing
                                the inventory using physical files. Unit and intergration tested to a high coverage level. Developed with detailed Jira storyboard using storypoints.<br>
                                <span class="badge text-bg-secondary">Java</span> <span class="badge text-bg-danger">SQL</span>
                            </p>
                            <a class="view-project-link" href="https://github.com/DanielH208/CD-Store-API" target="_blank">Github Repo <i class="fa-solid fa-arrow-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="containers">
                <h1>Coding Examples</h1>
                <div id="coding-examples">
                    <div id="slides">
                        <div class="slide-content">
                            <div class="code-content-container">
                                <pre class="line-numbers"><code class="language-python">
from flask import Flask
from flask_cors import CORS
from GasGuruPredictorApi import getBestHours
from GasGuruPredictorApi import getCurrentValues

app = Flask(__name__)
CORS(app)

@app.route('/hello/', methods=['GET', 'POST'])
def welcome():
    return hello

@app.route("/getBestHours/", defaults={ "price_weight": 0.8, "time_weight": 0.2})
@app.route('/getBestHours/&lt;float:price_weight>/&lt;float:time_weight>', methods=['GET', 'POST'], )
def returnBestHours(price_weight: float, time_weight: float):
    return getBestHours(price_weight, time_weight)

@app.route("/getCurrentValues", methods=['GET'])
def returnCurrentValues():
    return getCurrentValues() 
                                </code></pre>   
                            </div>
                            <h1>GasGuru Flask REST API </h1>
                            <p>
                                GasGuru flask API for feeding data to the React front end web app. Two GET requests, getBestHours returns best hour to 
                                send transactions in and getCurrentValues returns the current data to the closest minute.
                                <br>
                                <br>
                                The interactable slider on the React web app allows the user to send a custom GET request with their own 
                                price and time weight split. This in turn sends the best hour for that user to send transactions in based off
                                matching the best hour that corellates with the specific time weight split.

                            </p>
                            <p><span class="badge text-bg-success">Python</span> <span class="badge text-bg-success">Flask</span></p>
                        </div>
                        <div class="slide-content">
                            <!--<img id="javascript-val-image" src="assets/coding-examples/form-validation.JPG" alt="Image of custom JavaScript validation">-->
                            <div class="code-content-container">
                                <pre class="line-numbers"><code data-prismjs-copy="Copy the JavaScript snippet!" class="language-javascript">                                   
function regexPassOrFail(regex, input, field) {
    if (regex.test(input)) {
        field.css("border-color", "transparent");
    } else {
        field.css("border-color", "red");
    }
}

function empty(input, field) {
    if (input == "") {
        field.css("border-color", "red");
    } else {
        field.css("border-color", "transparent");
    }
}

$("#submit-button").click((event) => {
    event.preventDefault(); 

    let userEmailInput = $("#form-email").val();
    let emailField = $("#form-email");
    const emailRegex = new RegExp(/^\w+([\.-]?\w+)
    *@\w+([\.-]?\w+)*(\.\w{2,3})+$/);
    regexPassOrFail(emailRegex, userEmailInput, emailField);


    const nameRegex = new RegExp(/^[A-Za-z]+$/);
    let firstNameInput= $("#form-firstname").val();
    let firstNameField = $("#form-firstname");
    
    let lastNameInput= $("#form-lastname").val();
    let lastNameField = $("#form-lastname");

    let textareaInput = $("#form-textarea").val();
    let textareaField = $("#form-textarea");

    empty(firstNameInput, firstNameField);
    empty(lastNameInput, lastNameField);
    empty(textareaInput, textareaField);
    regexPassOrFail(nameRegex, firstNameInput, firstNameField);
    regexPassOrFail(nameRegex, lastNameInput, lastNameField);
})
                                </code></pre>
                            </div>
                            <h1>Form Validation</h1>
                            <p>
                                Custom JavaScript / JQeuery form validation for a contact me form 
                                from my portfolio website. This validation checks for wrong input 
                                types as well as fields being left empty by the user. If validation fails
                                the input box is highlighted red giving the user a visual cue that they entered
                                an invalid input. The validation is stored in two functions so it can be easily called on different 
                                input fields if needed in the future. Regex validation function can be used with any 
                                different regex expression in the future easily by just setting and testing a new expression. 
                                The empty function can easily be applied to any input boxs in the future giving the webpage
                                a consistent default error checking.
                            </p>
                             <p><span class="badge text-bg-warning">JavaScript</span> <span class="badge text-bg-warning">Jquery</span></p>
                        </div>
                        <div class="slide-content">
                            <div class="code-content-container">
                                <pre class="line-numbers"><code data-prismjs-copy="Copy the JavaScript snippet!" class="language-scss">
@mixin button ($width, $colour, $border-colour) {
    width: $width;
    margin-top: 5px;
    margin-bottom: 5px;
    margin-left: auto;
    margin-right: auto;
    color: white;
    padding: 10px 5px;
    border: solid 6px;
    background-color: $colour;
    border-color: $border-colour;
    border-radius: 15px;
}
                                </code></pre>   
                            </div>
                            <h1>Button Mixin</h1>
                            <p>
                                Custom button mixin for applying easy default styling to buttons. I decided to use
                                a mixin for the buttons as it makes creating buttons with matching styling much easier
                                which gives the  webpage a more uniformed look. 
                                <br>
                                <br>
                                The mixin works like a function call
                                where you call the mixin within the css selector you want and pass in the parameters values
                                in the order they are set within the mixin. A mixin offers flexability as you can overide 
                                any of the default set value with your own custom values. Such as changing the colour to make
                                certain buttons more distinct. If the user doesnt pass in all the parameters then the values
                                are simply just not set say you dont want to declare a width for the button leaving it on default.

                            </p>
                            <p><span class="badge text-bg-primary">SCSS</span></p>
                        </div>
                    </div>  
                </div>
            </div>
            <div id="scion-container">
                <h1>SCS Scheme</h1>
                <div id="scion">      
                    <div id="scion-intro" class="scion-column">
                        <h1>Introduction to Scion Coalition Scheme</h1>
                        <p>
                            The Scion Coalition Scheme is an intensive, specially tailored training program run by 
                            Netmatters in order to give willing candidates the opportunity to enter the industry as 
                            web developers.
                        </p>
                        <p>
                             Under the supervision of senior web developers, scions generally aim to 
                            complete training within six to nine months. The course is intensive and therefore the level 
                            of learning achieved is extensive in a short space of time.
                        </p>                 
                    </div>
                    <div id="about-netmatters" class="scion-column">
                        <h1>About Netmatters</h1>
                        <p> 
                            Established in 2008
                            Norfolk's leading technology company
                            Winner of the Princess Royal Training Award
                            Winner of EDP Skills of Tomorrow Award
                            80+ staff, 2 locations across Norfolk
                            Digital Marketing, Website & Software development & IT Support
                            Broad spectrum of clients, working nationwide
                            Operate to strict company values.
                        </p> 
                    </div>
                    <div id="about-treehouse" class="scion-column">
                        <h1>Treehouse</h1>
                        <p>
                            Treehouse is an online learning community, featuring videos covering 
                            a number of topics from basic HTML to C# programming, iOS development, 
                            data analysis, and more. By completing courses users can earn points, 
                            allowing them to track their progress and see how much they?ve covered 
                            in certain areas.
                            <br>
                            <br>
                            Total Score: <a href="https://teamtreehouse.com/profiles/danielhiggins2"> teamtreehouse.com/DanielHiggins</a>
                        </p>
                    </div>                  
                </div>
            </div>
            <div class="containers">
                <h1>Contact Me</h1>
                <div id="form-section-container">
                    <div id="form-info" class="form-section">
                        <h1>Get In Touch</h1>
                        <p>
                            If you want to conntact me about any work 
                            opportunities or to connect me about something
                            work related below is my mobile phone number
                            and email address
                        </p>
                        <a href="tel:+447729356209"><h2>07729 356209</h2></a>
                        <a href="mailto:daniel.higgins7@btinternet.com"><h2>daniel.higgins7@btinternet.com</h2></a>
                    </div>
                    <div id="form-container" class="form-section">
                        <form action="index.php" method="post" onsubmit="return validateInputs()">
                            <input id="form-firstname" name="first-name" class="form-elements" type="text" placeholder="First Name *" maxlength="30" value="<?= $_SESSION['first-name'] ?? '' ?>">
                            <input id="form-lastname" name="last-name" class="form-elements" type="text" placeholder="Last Name *" maxlength="30" value="<?= $_SESSION['last-name'] ?? '' ?>">
                            <input class="form-elements" name="email" id="form-email" type="text" placeholder="Email Address *" value="<?= $_SESSION['email'] ?? '' ?>">
                            <input class="form-elements" name="subject" type="text" placeholder="Subject" value="<?= $_SESSION['subject'] ?? '' ?>">
                            <textarea id="form-textarea" name ="message" class="form-elements" placeholder="Message *" rows="4"><?= $_SESSION['message'] ?? '' ?></textarea>
                            <br>
                            <span class="enquiry-error<?php if ($_SESSION['errMsg']) echo '-active' ?>">
                                    <?php
                                        echo $_SESSION['errMsg'];
                                        unset($_SESSION['errMsg']);
                                        ?>
                                    </span>
                            <?php
                                    if ($_SESSION['success']) {
                                        echo "<span class='enquiry-success-message'>Thank you for your message</span>";
                                        unset($_SESSION['success']);
                                    }
                            ?>
                            <br>
                            <button id="submit-button" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <a href="#">
                <div id="scroll-up">  
                    <h3>Back To Top</h3>
                    <i class="arrow-up"></i>    
                </div>
            </a>
        </footer>
    <script src="js/jquery-3.7.0.min.js"></script>
    <script src="js/aeo-typewriter.js"></script>
    <script src="js/slick/slick.js"></script>
    <script src="js/prism.js"></script>
    <script src="js/app.js"></script>
    
    </body>
</html>