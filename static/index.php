<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full stack</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    h4,
    h5 {
        font-style: italic;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    #card{
        background-color: indigo !important;
    }
</style>

<body class="bg-light">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-sm-6 col-md-6 text-center">
                <h2>Full Stack Web development</h2>
            </div>
        </div>
    </div>
    <div id="container" class="container-fluid">
        <div class="row">
            <div class="col-lg-3 position-fixed end-0 mt-4 ">
                <div id="card" class="card text shadow p-3 mb-5 rounded style bg-light">
                    <div class="card-body bg-white">
                        <div class="card-title mb-5">
                            <form action="config.php" method="post">
                                <h2>Enquiry Form</h2>
                        </div>
                        <div class="card-text">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" name="email" class="form-control" id="email"
                                    placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone:</label>
                                <input type="tel" name="phone" class="form-control" id="phone"
                                    placeholder="Enter your phone number">
                            </div>
                            <div class="form-group">
                                <label for="message">Message:</label>
                                <textarea class="form-control" name="message" id="message"
                                    placeholder="Enter your message"></textarea>
                            </div>
                            <button class="btn btn-primary btn-sm mt-2" type="submit" id="submit" name="sumbit">
                                Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="card  mt-4 shadow-lg p-3 mb-5 rounded">
                    <div class="col-lg-12">
                        <p class="lead">
                        <h5>Full Stack Web</h5>
                        Full stack web development refers to the development of a complete web application, from the
                        front-end (client-side) to the back-end (server-side). A full stack web developer is
                        proficient
                        in both front-end and back-end development, and can handle all the layers involved in
                        building a
                        web application.</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="images/image1.jpg" width="75%" height="125">
                        </div>
                        <div class="col-lg-4">
                            <img src="images/image2.jpg" width="75%" height="125">
                        </div>
                        <div class="col-lg-4">
                            <img src="images/image3.jpg" width="75%" height="125">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card  mt-4 shadow-lg p-3 mb-5 rounded">
                        <div class="col-lg-12">
                            <p>
                            <h4 class=" pl-5">Front-end (Client-side):</h4>

                            User Interface (UI) and User Experience (UX)
                            Client-side logic using JavaScript, HTML, CSS, and frameworks like React, Angular, or Vue.js
                            Responsive web design for various devices and browsers

                            <h4 class="pl-5">Back-end (Server-side):</h4>
                            Server-side logic using programming languages like Python, Ruby, PHP, Java, or .NET
                            Database integration using relational databases like MySQL or PostgreSQL, or NoSQL databases
                            like MongoDB
                            API design and development using RESTful APIs or GraphQL
                            Server-side rendering and templating engines like Handlebars or Mustache
                            </p>
                        </div>

                        <div class="row">
                            <div>
                                <h4 class="pl-5">Key Skills for a Full Stack Web
                                    Developer:</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <p>

                                    Proficiency in front-end and back-end programming languages and frameworks
                                    Knowledge of databases, APIs, and data storage solutions
                                    Understanding of web architecture and design patterns
                                    Experience with version control systems like Git
                                    Familiarity with Agile development methodologies and DevOps practices
                                <h4 class="pl-5">Benefits of Full Stack Web Development:</h4>

                                Faster development and deployment of web applications
                                Improved communication and collaboration between front-end and back-end developers
                                Increased efficiency and productivity
                                Better understanding of the entire web development process
                                Ability to work on a wide range of projects and technologies
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div>
                                <h4 class="col-lg-12 pl-5">Technologies Used For Full
                                    StackWeb Development</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <p>
                                    Frontend (Client-side)
                                    HTML/CSS
                                    JavaScript
                                    Frameworks
                                    React
                                    Angular
                                    Vue.js
                                    Libraries:
                                    jQuery: Simplifies DOM manipulation and event handling
                                    Lodash: Utility library for functional programming
                                    UI Components:
                                    Material-UI: Google's Material Design implementation
                                    Bootstrap: Popular CSS framework for responsive design
                                    Backend (Server-side)

                                    Programming Languages:
                                    JavaScript (with Node.js): Server-side runtime environment
                                    Python: Popular language for web development
                                    Ruby: Dynamic language for web development
                                    PHP: Mature language for web development
                                    Frameworks:
                                    Express.js: Lightweight Node.js framework
                                    Django: High-level Python framework
                                    Ruby on Rails: Opinionated Ruby framework
                                    Laravel: PHP framework for rapid development
                                    Databases:
                                    Relational:
                                    MySQL: Popular open-source RDBMS
                                    PostgreSQL: Powerful open-source RDBMS
                                    NoSQL:
                                    MongoDB: Popular document-based database
                                    Redis: In-memory data store
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-9">
                        <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/image4.jpg" class="d-block w-100 " alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/image5.jpg" class="d-block w-100 " alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/image6.jpg" class="d-block w-100 " alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>






        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
            integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
            crossorigin="anonymous"></script>
</body>

</html>