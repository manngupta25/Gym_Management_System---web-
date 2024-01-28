<?php
include("connection.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poltawski+Nowy:ital,wght@0,400;0,500;1,400;1,700&display=swap" rel="stylesheet">
    <title>GYM MANAGEMENT</title>
    <style>
        body {
            background: rgb(253, 252, 251);
            background: linear-gradient(124deg, rgba(253, 252, 251, 1) 6%, rgba(226, 209, 195, 1) 97%);
        }

        .container {
            font-family: 'Poltawski Nowy', serif;
        }

        .demo-wrap {
            font-family: 'Poltawski Nowy', serif;
            overflow: hidden;
            position: relative;
            height: 500px;
        }

        .demo-bg {
            opacity: 0.4;
            position: absolute;
            width: 100%;
            height: 600px;
        }

        .demo-content {
            position: relative;
            padding: 90px 0;
            text-align: center;
            font-size: 90px;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg " style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <img src="image\logo2.png" alt="" alt="Logo" width="50" height="50" class=" align-text-top m-2">

            <a class="navbar-brand " href="#">

                FITPRO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-1 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="package.php">Package</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="facilities.php">Facility</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  active" aria-current="page" href="#">Contact Us</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="POST">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="fusername" name="fusername" placeholder="name@example.com">
                                            <label for="fusername">Username : </label>
                                        </div>
                                        <div class="form-floating">
                                            <input type="password" class="form-control" id="fpass" name="fpass" placeholder="Password">
                                            <label for="fpass">Password : </label>
                                        </div>

                                </div>
                                <div class="modal-footer">

                                    <button type="submit" name="login" class="btn btn-primary">Login</button>
                </form>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
        </div>

        <button type="submit" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#login">
            Login
        </button>



        </form>
        </div>
        </div>
    </nav>
    <div class="demo-wrap">
        <img class="demo-bg img-fluid" src="https://c1.wallpaperflare.com/preview/265/909/238/shaking-hands-handshake-teamwork-staff.jpg" alt="">
        <div class=" demo-content ">
            <p>We are here to <br>help you !</p>
        </div>
    </div>

    <div class="container">
        <br>
        <div class="card border-light">
            <h2 class="card-header">

                <center>&mdash; Frequently Asked Question &mdash;</center>

            </h2>

            <div class="accordion card-body" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            Ques:- How Long Should I Work Out For?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                            The length of your workout will largely depend on your fitness level, as well as the type of
                            training and intensity you’re working out at. The CDC recommends at least 30 minutes of
                            moderate-intensity aerobic activity <strong>5 days a week</strong>, as well as 2 full body
                            strength training
                            sessions. Making sure you’re hitting these minimums for exercise is a great way to make sure
                            you’re on track. However, if you’re under the recommendation, it’s okay, we all must start
                            somewhere!
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                            Ques:- How Can I Increase Lean Muscle Mass?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body">
                            <strong>Adding heavy strength training into your routine is just one way to increase lean
                                muscle
                                mass.</strong>
                            But there are many ways to increase strong lean muscle tone in your body. Any form of
                            resistance
                            that your muscles must fight against that is greater than what they normally experience, can
                            help stimulate the muscle growth process. Completing exercises with your body weight or
                            resistance bands are also effective ways of training to build strength. Start with what you
                            feel
                            most comfortable with and continue building from there. As your exercises or the weight,
                            you’re
                            using start to feel too easy, increase your weight or choose more challenging exercises to
                            continue challenging your muscles and see results.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            Ques:- How Much Weight Should I Use When Strength Training?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                        <div class="accordion-body">
                            When strength training, it’s important to always remember that the workout you’re performing
                            is
                            ‘your workout’. <strong>Don’t focus on the number of weight others are using to complete
                                workouts.
                                Instead, focus on your rate of perceived exertion on a scale of 1 to 10.</strong> When
                            strength training,
                            you should feel a perceived exertion of 7 to 9, each rep should feel challenging with the
                            last
                            reps and sets feeling significantly harder. If you complete a workout and aren’t feeling
                            challenged, you know it’s time to move up in weight the next time you complete that workout.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingfour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsefour" aria-expanded="false" aria-controls="panelsStayOpen-collapsefour">
                            Ques:- What Training Should I Be Doing to Lose Weight?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapsefour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingfour">
                        <div class="accordion-body">
                            <strong>When it comes to weight loss, I like to focus on a full-scale approach. Regular
                                cardio
                                training
                                is great for increasing your daily calorie burn. While strength training will help you
                                build
                                lean muscle, which will increase your metabolism and help you burn more calories at
                                rest!
                            </strong><br>
                            I’d also recommend adding in a few HIIT sessions per week, rather it is your favorite type
                            of
                            cardio, body weight, or light dumbbell exercises. HIIT is designed to get your body working
                            at
                            high intensities, burning a ton of calories in a short period of time. Create a schedule
                            with a
                            blend of regular cardio, a few full body strength training sessions, and a few HIIT training
                            sessions each week.
                            <br>
                            Finally, don’t forget to eat a healthy, well-balanced diet emphasizing whole foods. With
                            weight
                            loss it’s important to maximize the nutrients in the calories you’re consuming to fuel your
                            workouts
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingfive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsefive" aria-expanded="false" aria-controls="panelsStayOpen-collapsefive">
                            Ques:- How Often Should I Rest?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapsefive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingfive">
                        <div class="accordion-body">
                            <strong>Your rest will depend on your workout schedule.</strong> Like I said previously, I
                            recommend 1 or 2 full
                            days of rest in your schedule. This isn’t only great for giving your body time to recover
                            from
                            your workouts, it also can be a great time for self-care to promote mental health.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingsix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsesix" aria-expanded="false" aria-controls="panelsStayOpen-collapsesix">
                            Ques:- How Long Does It Take to See Results?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapsesix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingsix">
                        <div class="accordion-body">
                            <strong>can take anywhere from 6-8 weeks or more to see results from your program.</strong>
                            That
                            can be
                            discouraging as so many of us are living in an instant world - we expect results and changes
                            instantaneously. Don’t get discouraged. Know that your hard work is paying off, even if you
                            don’t see the results you’re looking for on the scale right away.
                            <br>
                            A few other ways to track your progress as you go can be the fit of your clothing, being
                            able to
                            complete more challenging or longer workouts, or taking progress photos and comparing as you
                            continue your journey. It’s all the little wins along the way that help keep you going, so
                            keep
                            cueing into your body and all of the smaller successes and changes you see along the way and
                            celebrate them!
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="jumbotron">
            <h2 class="text-center">&mdash; Get in touch &mdash;</h2>
            <br>
            <p class="text-center">If you have any questions or need help, please fill out the form below. we do our
                best to respond
                within 2-3 bussiness days.</p>
            <hr>
            <div class="card border-light">
                <form method="POST">
                    <div class="row g-2 m-2 card-body">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
                                <label for="fname">First Name</label>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="sname" name="sname" placeholder="Second Name">
                                <label for="sname">Second Name</label>
                            </div>
                        </div>
                        <div class="form-floating">
                            <input type="number" class="form-control" id="pnumber" name="pnumber" placeholder="Phone number">
                            <label for="pnumber">Phone Number </label>
                        </div>
                        <div class="form-floating">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            <label for="email">Email </label>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="message" name="message" style="height: 100px"></textarea>
                            <label for="message">Message</label>
                        </div>
                    </div>
                    <div class="text-center"><br>
                        <button type="submit" for="submit" name="submit" class="btn btn-primary ">Submit</button>
                    </div>
                    <br>
                </form>
            </div>

            <br><br>
            <hr>
        </div>
        <div class="row g-2 ">
            <div class="col-md">
                <h5>Location : </h5>
                <br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1753.741447438341!2d77.51152832983225!3d28.46500054908301!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1682158496428!5m2!1sen!2sin" width="500" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md ">
                <h5>
                    Contact Number :
                </h5>
                <p>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAA40lEQVR4nO3Vvw7BUBTH8a/EJEZikoinEO/AEyDegt3KI0gfQYmZWUQHg8kTsKlBJVSaHHLT1N+ebn7JmXpzPuntOSn882XmgG+UB9RQjBcCfKCvCewjAEsTWEYAK03AigAuQFYLaD95g7QWkAfORvMNUEA5tjTfCqieigBHoERCmQpiJwWUAVeQTlJIQ4Ar0HxyJpiuTBykZyDd0LNgABzZE0d2aADUvwFSBhLUGChK83XEzgR1+vW6DtLAlRH2X9TPH37ypnEs4J4qMAptvCpwTw5oAUNgAezkfzJ7nPiHD3IDdftjhkFxZisAAAAASUVORK5CYII=">
                    1800-500-520
                    <br>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAA40lEQVR4nO3Vvw7BUBTH8a/EJEZikoinEO/AEyDegt3KI0gfQYmZWUQHg8kTsKlBJVSaHHLT1N+ebn7JmXpzPuntOSn882XmgG+UB9RQjBcCfKCvCewjAEsTWEYAK03AigAuQFYLaD95g7QWkAfORvMNUEA5tjTfCqieigBHoERCmQpiJwWUAVeQTlJIQ4Ar0HxyJpiuTBykZyDd0LNgABzZE0d2aADUvwFSBhLUGChK83XEzgR1+vW6DtLAlRH2X9TPH37ypnEs4J4qMAptvCpwTw5oAUNgAezkfzJ7nPiHD3IDdftjhkFxZisAAAAASUVORK5CYII=">
                    1800-480-510
                </p>
                <br>
                <h5>
                    Address :
                </h5>
                <address>Near Pari Chowk Park, <br>Greater Noida,<br> Uttar Pradesh, India,<br> 201310</address>
            </div>

        </div>




        <br><br><br><br>
    </div>
    <footer class="text-center ">
        <!-- Grid container -->
        <div class="container pt-4">

            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                    </svg></a>

                <!-- Twitter -->
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                    </svg>
                </a>

                <!-- Google -->
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                    </svg>
                </a>

                <!-- Instagram -->
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                    </svg>
                </a>
                <!-- whatsapp -->
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                    </svg>
                </a>

            </section>
            <!-- Section: Social media -->

        </div>
        <!-- Grid container -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); 
            font-family: 'Poltawski Nowy', serif;">
            FITPRO © 2023 All Rights Reserved.
        </div>

    </footer>
</body>
<?php

if(isset($_POST['submit']))
    {
        $fname = $_POST['fname'];
        $sname = $_POST['sname'];
        $pnumber = $_POST['pnumber'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        

      
        $sql = "INSERT INTO `get_in_touch`(`first_name`, `second_name`, `phone_num`, `email`, `message`) 
        VALUES ('$fname','$sname','$pnumber','$email','$message')";
        if($conn->query($sql))
            {
                echo"<script>alert('thank you, we do our best to respond within 2-3 bussiness days.')</script>";
            }
        else  
        {
            echo "Sorry, there was an error in saving your data";
        }
    }
?>
