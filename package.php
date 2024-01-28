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


        a.one:link,
        a.one:visited {
            margin-left: 28%;
            border: 1px solid black;
            color: black;
            padding: 10px 50px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }

        a.one:hover,
        a.one:active {
            color: #f1f1f1;
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
                        <a class="nav-link " href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="package.php">Package</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="facilities.php">Facility</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
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
    <div class="container">
        <br><br>
        <div class="row">
            <div class="col m-4">
                <div class="card m-3 bronze" style="width: 30rem;">
                    <img src="image/bronze m.png" class="card-img-top" alt="bronze">
                    <div class="card-body">
                        <h5 class="card-title text-center">Bronze Memebership</h5>
                        <p class="card-text">
                        <div class="row">
                            <div class="col">
                                <ul>
                                    <li>Personal Training</li>
                                    <li>Cardio Training</li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul>
                                    <li>Weight Training</li>
                                    <li>Group Fitness</li>
                                </ul>
                            </div>
                        </div>
                        </p>

                        <div class="container">
                            <form method="POST" action="" enctype="multipart/form-data">
                                <!---- first registration page-->
                                <div class="modal fade" id="perdetail" aria-hidden="true" aria-labelledby="perdetail" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="perdetail">Personal Details</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body ">
                                                <div class="container ">

                                                    <div class="row g-3 mb-3">
                                                        <div class="col-sm-2">
                                                            <label for="mr-mrs-ms" class="form-label">Mr/Mrs/Miss</label>
                                                            <select class="form-select" name="mr-mrs-ms" id="autoSizingSelect">
                                                                <option value=""></option>
                                                                <option value="mr">Mr.</option>
                                                                <option value="mrs">Mrs.</option>
                                                                <option value="miss">Miss.</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <label for="fname" class="form-label">First Name :</label>
                                                            <input type="text" class="form-control" name="fname" placeholder="First name" id="fname" aria-label="First name">
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <label for="sname" class="form-label">Second Name :</label>
                                                            <input type="text" class="form-control" name="sname" placeholder="Last name" id="sname" aria-label="Last name">
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 mb-3">
                                                        <div class="col">
                                                            <label for="gender" class="form-label">Gender :</label>
                                                            <select class="form-select" name="gender" id="gender">
                                                                <option value="" selected></option>
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>

                                                            </select>
                                                        </div>
                                                        <div class="col">
                                                            <label for="age" class="form-label">Age :</label>
                                                            <input type="number" class="form-control" name="age" placeholder="Age" id="" aria-label="Contact Number">
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 mb-3">
                                                        <div class="col">
                                                            <label for="cnumber" class="form-label">Contact Number :</label>
                                                            <input type="number" class="form-control" name="cnumber" placeholder="Contact Number" id="cnumber" aria-label="Contact Number">
                                                        </div>
                                                        <div class="col">
                                                            <label for="enumber" class="form-label">Emergency Contact Number :</label>
                                                            <input type="number" class="form-control" id="enumber" name="enumber" placeholder="Emergency Contact Number" aria-label="Emergency Contact Number">
                                                        </div>
                                                        <div class="col">
                                                            <label for="email1" class="form-label">Email Address :</label>
                                                            <input type="email" class="form-control" name="email" placeholder="Email Address" id="email1" aria-label="Email">
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 mb-3">
                                                        <label for="addres">Address :</label>
                                                        <textarea class="form-control" placeholder="Enter Your Address " name="address" id="addres" name="addres" style="height: 60px; "></textarea>
                                                    </div>
                                                    <div class="row g-3 mb-3">
                                                        <label for="memtype">Membership type :</label>
                                                        <select class="form-select" id="memtype" name="memtype">
                                                            <option value=""></option>
                                                            <option value="bronze">Bronze Membership ( 1 month ) </option>
                                                            <option value="silver">Silver Membership ( 3 month ) </option>
                                                            <option value="gold">Gold Membership ( 6 month ) </option>
                                                            <option value="platinum">Platinum Membership ( 12 month ) </option>
                                                        </select>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="container">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button class="btn btn-primary" data-bs-target="#meddetail" data-bs-toggle="modal">Next</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!---- second registration page-->
                                <div class="modal fade" id="meddetail" aria-hidden="true" aria-labelledby="meddetail" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="meddetail">Medical Details</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container">
                                                    <div class="row g-3 mb-3">
                                                        <div class="col-sm">
                                                            <label for="height" class="form-label">Height :</label>
                                                            <input type="number" class="form-control" name="height" id="height" placeholder="Height">
                                                        </div>
                                                        <div class="col-sm">
                                                            <label for="weight" class="form-label">Weight :</label>
                                                            <input type="number" class="form-control" name="weight" id="weight" placeholder="Weight">
                                                        </div>
                                                    </div>

                                                    <div class="row g-3 mb-3">
                                                        <label for="hproblem" class="form-label">Do you have any health problem ?</label>
                                                        <input type="text" class="form-control" id="hproblem" name="hproblem" placeholder="Health problem">
                                                    </div>
                                                    <div class="row g-3 mb-3">
                                                        <div class="col">
                                                            <label for="injury" class="form-label">Do you have any injuries ? </label>
                                                            <select class="form-select" id="injury" name="injury">
                                                                <option value=""></option>
                                                                <option value="00">none</option>
                                                                <option value="0">Knee Injury</option>
                                                                <option value="1">Muscle pull and strain</option>
                                                                <option value="2">Sprained ankle</option>
                                                                <option value="3">Shoulder injury</option>
                                                                <option value="4">Lowerback injury</option>
                                                                <option value="5">Wrist sprain or dislocation</option>
                                                                <option value="6">Other</option>
                                                            </select>
                                                        </div>
                                                        <div class="col">
                                                            <label for="smoke" class="form-label">Do you Smoke ? </label>
                                                            <select class="form-select" id="smoke" name="smoke">
                                                                <option value=""></option>
                                                                <option value="yes">Yes</option>
                                                                <option value="no">No</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br>

                                                    <div class="row mb-3">
                                                        <div class="col-sm align-items-center">

                                                            <div class="form-check  ">
                                                                <div>
                                                                    <input class="form-check-input" type="checkbox" id="strue" name="strue1" required>
                                                                    <label class="form-check-label" for="strue1">
                                                                        I here by declare that the above information is correct upto my
                                                                        knowledge.
                                                                    </label>
                                                                    <div class="invalid-feedback">
                                                                        You must agree before submitting.
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div>
                                                                    <input class="form-check-input" type="checkbox" id="strue" name="strue2" required>
                                                                    <label class="form-check-label" for="strue2">
                                                                        Open gym memberships do not expire and are non-transferable. You may
                                                                        lose
                                                                        your
                                                                        membership if you
                                                                        allow others to use your card.
                                                                    </label>
                                                                    <div class="invalid-feedback">
                                                                        You must agree before submitting.
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div>
                                                                    <input class="form-check-input" type="checkbox" id="strue" name="strue3" required>
                                                                    <label class="form-check-label" for="strue3">
                                                                        Participants <strong>MUST CHECK IN AND SHOW THEIR MEMBERSHIP CARD EACH
                                                                            VISIT.</strong>
                                                                    </label>
                                                                    <div class="invalid-feedback">
                                                                        You must agree before submitting.
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div>
                                                                    <input class="form-check-input" type="checkbox" id="strue" name="strue4" required>
                                                                    <label class="form-check-label" for="strue4">
                                                                        Rubber soled athletic shoes (no cleats) and clothing (including shirts)
                                                                        must
                                                                        be worn
                                                                        at all times
                                                                    </label>
                                                                    <div class="invalid-feedback">
                                                                        You must agree before submitting.
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div>
                                                                    <input class="form-check-input" type="checkbox" id="strue" name="strue5" required>
                                                                    <label class="form-check-label" for="strue5">
                                                                        Absolutely NO DUNKING or HANGING ON THE RIM. Repeat offenses could
                                                                        result in
                                                                        suspension or permanent loss of privileges.
                                                                    </label>
                                                                    <div class="invalid-feedback">
                                                                        You must agree before submitting.
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="container">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button class="btn btn-success" for="submit" name="submit" data-bs-target="">Submit</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <a class=" one" data-bs-toggle="modal" href="#perdetail" role="button">Register Now</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col m-4">
                <div class="card m-3 silver" style="width: 30rem;">
                    <img src="image/silver m.png" class="card-img-top" alt="bronze">
                    <div class="card-body">
                        <h5 class="card-title text-center">Silver Memebership</h5>
                        <p class="card-text">
                        <div class="row">
                            <div class="col">
                                <ul>
                                    <li>Personal Training</li>
                                    <li>Cardio Training</li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul>
                                    <li>Weight Training</li>
                                    <li>Group Fitness</li>
                                </ul>
                            </div>
                        </div>
                        </p>

                        <div class="container">
                            <form method="POST" action="" enctype="multipart/form-data">
                                <!---- first registration page-->
                                <div class="modal fade" id="perdetail" aria-hidden="true" aria-labelledby="perdetail" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="perdetail">Personal Details</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body ">
                                                <div class="container ">

                                                    <div class="row g-3 mb-3">
                                                        <div class="col-sm-2">
                                                            <label for="mr-mrs-ms" class="form-label">Mr/Mrs/Miss</label>
                                                            <select class="form-select" name="mr-mrs-ms" id="autoSizingSelect">
                                                                <option value=""></option>
                                                                <option value="mr">Mr.</option>
                                                                <option value="mrs">Mrs.</option>
                                                                <option value="miss">Miss.</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <label for="fname" class="form-label">First Name :</label>
                                                            <input type="text" class="form-control" name="fname" placeholder="First name" id="fname" aria-label="First name">
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <label for="sname" class="form-label">Second Name :</label>
                                                            <input type="text" class="form-control" name="sname" placeholder="Last name" id="sname" aria-label="Last name">
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 mb-3">
                                                        <div class="col">
                                                            <label for="gender" class="form-label">Gender :</label>
                                                            <select class="form-select" name="gender" id="gender">
                                                                <option value="" selected></option>
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>

                                                            </select>
                                                        </div>
                                                        <div class="col">
                                                            <label for="age" class="form-label">Age :</label>
                                                            <input type="number" class="form-control" name="age" placeholder="Age" id="" aria-label="Contact Number">
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 mb-3">
                                                        <div class="col">
                                                            <label for="cnumber" class="form-label">Contact Number :</label>
                                                            <input type="number" class="form-control" name="cnumber" placeholder="Contact Number" id="cnumber" aria-label="Contact Number">
                                                        </div>
                                                        <div class="col">
                                                            <label for="enumber" class="form-label">Emergency Contact Number :</label>
                                                            <input type="number" class="form-control" id="enumber" name="enumber" placeholder="Emergency Contact Number" aria-label="Emergency Contact Number">
                                                        </div>
                                                        <div class="col">
                                                            <label for="email1" class="form-label">Email Address :</label>
                                                            <input type="email" class="form-control" name="email" placeholder="Email Address" id="email1" aria-label="Email">
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 mb-3">
                                                        <label for="addres">Address :</label>
                                                        <textarea class="form-control" placeholder="Enter Your Address " name="address" id="addres" name="addres" style="height: 60px; "></textarea>
                                                    </div>
                                                    <div class="row g-3 mb-3">
                                                        <label for="memtype">Membership type :</label>
                                                        <select class="form-select" id="memtype" name="memtype">
                                                            <option value=""></option>
                                                            <option value="bronze">Bronze Membership ( 1 month ) </option>
                                                            <option value="silver">Silver Membership ( 3 month ) </option>
                                                            <option value="gold">Gold Membership ( 6 month ) </option>
                                                            <option value="platinum">Platinum Membership ( 12 month ) </option>
                                                        </select>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="container">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button class="btn btn-primary" data-bs-target="#meddetail" data-bs-toggle="modal">Next</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!---- second registration page-->
                                <div class="modal fade" id="meddetail" aria-hidden="true" aria-labelledby="meddetail" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="meddetail">Medical Details</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container">
                                                    <div class="row g-3 mb-3">
                                                        <div class="col-sm">
                                                            <label for="height" class="form-label">Height :</label>
                                                            <input type="number" class="form-control" name="height" id="height" placeholder="Height">
                                                        </div>
                                                        <div class="col-sm">
                                                            <label for="weight" class="form-label">Weight :</label>
                                                            <input type="number" class="form-control" name="weight" id="weight" placeholder="Weight">
                                                        </div>
                                                    </div>

                                                    <div class="row g-3 mb-3">
                                                        <label for="hproblem" class="form-label">Do you have any health problem ?</label>
                                                        <input type="text" class="form-control" id="hproblem" name="hproblem" placeholder="Health problem">
                                                    </div>
                                                    <div class="row g-3 mb-3">
                                                        <div class="col">
                                                            <label for="injury" class="form-label">Do you have any injuries ? </label>
                                                            <select class="form-select" id="injury" name="injury">
                                                                <option value=""></option>
                                                                <option value="00">none</option>
                                                                <option value="0">Knee Injury</option>
                                                                <option value="1">Muscle pull and strain</option>
                                                                <option value="2">Sprained ankle</option>
                                                                <option value="3">Shoulder injury</option>
                                                                <option value="4">Lowerback injury</option>
                                                                <option value="5">Wrist sprain or dislocation</option>
                                                                <option value="6">Other</option>
                                                            </select>
                                                        </div>
                                                        <div class="col">
                                                            <label for="smoke" class="form-label">Do you Smoke ? </label>
                                                            <select class="form-select" id="smoke" name="smoke">
                                                                <option value=""></option>
                                                                <option value="yes">Yes</option>
                                                                <option value="no">No</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br>

                                                    <div class="row mb-3">
                                                        <div class="col-sm align-items-center">

                                                            <div class="form-check  ">
                                                                <div>
                                                                    <input class="form-check-input" type="checkbox" id="strue" name="strue1" required>
                                                                    <label class="form-check-label" for="strue1">
                                                                        I here by declare that the above information is correct upto my
                                                                        knowledge.
                                                                    </label>
                                                                    <div class="invalid-feedback">
                                                                        You must agree before submitting.
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div>
                                                                    <input class="form-check-input" type="checkbox" id="strue" name="strue2" required>
                                                                    <label class="form-check-label" for="strue2">
                                                                        Open gym memberships do not expire and are non-transferable. You may
                                                                        lose
                                                                        your
                                                                        membership if you
                                                                        allow others to use your card.
                                                                    </label>
                                                                    <div class="invalid-feedback">
                                                                        You must agree before submitting.
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div>
                                                                    <input class="form-check-input" type="checkbox" id="strue" name="strue3" required>
                                                                    <label class="form-check-label" for="strue3">
                                                                        Participants <strong>MUST CHECK IN AND SHOW THEIR MEMBERSHIP CARD EACH
                                                                            VISIT.</strong>
                                                                    </label>
                                                                    <div class="invalid-feedback">
                                                                        You must agree before submitting.
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div>
                                                                    <input class="form-check-input" type="checkbox" id="strue" name="strue4" required>
                                                                    <label class="form-check-label" for="strue4">
                                                                        Rubber soled athletic shoes (no cleats) and clothing (including shirts)
                                                                        must
                                                                        be worn
                                                                        at all times
                                                                    </label>
                                                                    <div class="invalid-feedback">
                                                                        You must agree before submitting.
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div>
                                                                    <input class="form-check-input" type="checkbox" id="strue" name="strue5" required>
                                                                    <label class="form-check-label" for="strue5">
                                                                        Absolutely NO DUNKING or HANGING ON THE RIM. Repeat offenses could
                                                                        result in
                                                                        suspension or permanent loss of privileges.
                                                                    </label>
                                                                    <div class="invalid-feedback">
                                                                        You must agree before submitting.
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="container">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button class="btn btn-success" for="submit" name="submit" data-bs-target="">Submit</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <a class=" one" data-bs-toggle="modal" href="#perdetail" role="button">Register Now</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col m-4">
                <div class="card m-3 gold" style="width: 30rem;">
                    <img src="image/gold m.png" class="card-img-top" alt="bronze">
                    <div class="card-body">
                        <h5 class="card-title text-center">Gold Memebership</h5>
                        <p class="card-text">
                        <div class="row">
                            <div class="col">
                                <ul>
                                    <li>Personal Training</li>
                                    <li>Cardio Training</li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul>
                                    <li>Weight Training</li>
                                    <li>Group Fitness</li>
                                </ul>
                            </div>
                        </div>
                        </p>

                        <div class="container">
                            <form method="POST" action="" enctype="multipart/form-data">
                                <!---- first registration page-->
                                <div class="modal fade" id="perdetail" aria-hidden="true" aria-labelledby="perdetail" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="perdetail">Personal Details</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body ">
                                                <div class="container ">

                                                    <div class="row g-3 mb-3">
                                                        <div class="col-sm-2">
                                                            <label for="mr-mrs-ms" class="form-label">Mr/Mrs/Miss</label>
                                                            <select class="form-select" name="mr-mrs-ms" id="autoSizingSelect">
                                                                <option value=""></option>
                                                                <option value="mr">Mr.</option>
                                                                <option value="mrs">Mrs.</option>
                                                                <option value="miss">Miss.</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <label for="fname" class="form-label">First Name :</label>
                                                            <input type="text" class="form-control" name="fname" placeholder="First name" id="fname" aria-label="First name">
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <label for="sname" class="form-label">Second Name :</label>
                                                            <input type="text" class="form-control" name="sname" placeholder="Last name" id="sname" aria-label="Last name">
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 mb-3">
                                                        <div class="col">
                                                            <label for="gender" class="form-label">Gender :</label>
                                                            <select class="form-select" name="gender" id="gender">
                                                                <option value="" selected></option>
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>

                                                            </select>
                                                        </div>
                                                        <div class="col">
                                                            <label for="age" class="form-label">Age :</label>
                                                            <input type="number" class="form-control" name="age" placeholder="Age" id="" aria-label="Contact Number">
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 mb-3">
                                                        <div class="col">
                                                            <label for="cnumber" class="form-label">Contact Number :</label>
                                                            <input type="number" class="form-control" name="cnumber" placeholder="Contact Number" id="cnumber" aria-label="Contact Number">
                                                        </div>
                                                        <div class="col">
                                                            <label for="enumber" class="form-label">Emergency Contact Number :</label>
                                                            <input type="number" class="form-control" id="enumber" name="enumber" placeholder="Emergency Contact Number" aria-label="Emergency Contact Number">
                                                        </div>
                                                        <div class="col">
                                                            <label for="email1" class="form-label">Email Address :</label>
                                                            <input type="email" class="form-control" name="email" placeholder="Email Address" id="email1" aria-label="Email">
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 mb-3">
                                                        <label for="addres">Address :</label>
                                                        <textarea class="form-control" placeholder="Enter Your Address " name="address" id="addres" name="addres" style="height: 60px; "></textarea>
                                                    </div>
                                                    <div class="row g-3 mb-3">
                                                        <label for="memtype">Membership type :</label>
                                                        <select class="form-select" id="memtype" name="memtype">
                                                            <option value=""></option>
                                                            <option value="bronze">Bronze Membership ( 1 month ) </option>
                                                            <option value="silver">Silver Membership ( 3 month ) </option>
                                                            <option value="gold">Gold Membership ( 6 month ) </option>
                                                            <option value="platinum">Platinum Membership ( 12 month ) </option>
                                                        </select>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="container">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button class="btn btn-primary" data-bs-target="#meddetail" data-bs-toggle="modal">Next</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!---- second registration page-->
                                <div class="modal fade" id="meddetail" aria-hidden="true" aria-labelledby="meddetail" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="meddetail">Medical Details</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container">
                                                    <div class="row g-3 mb-3">
                                                        <div class="col-sm">
                                                            <label for="height" class="form-label">Height :</label>
                                                            <input type="number" class="form-control" name="height" id="height" placeholder="Height">
                                                        </div>
                                                        <div class="col-sm">
                                                            <label for="weight" class="form-label">Weight :</label>
                                                            <input type="number" class="form-control" name="weight" id="weight" placeholder="Weight">
                                                        </div>
                                                    </div>

                                                    <div class="row g-3 mb-3">
                                                        <label for="hproblem" class="form-label">Do you have any health problem ?</label>
                                                        <input type="text" class="form-control" id="hproblem" name="hproblem" placeholder="Health problem">
                                                    </div>
                                                    <div class="row g-3 mb-3">
                                                        <div class="col">
                                                            <label for="injury" class="form-label">Do you have any injuries ? </label>
                                                            <select class="form-select" id="injury" name="injury">
                                                                <option value=""></option>
                                                                <option value="00">none</option>
                                                                <option value="0">Knee Injury</option>
                                                                <option value="1">Muscle pull and strain</option>
                                                                <option value="2">Sprained ankle</option>
                                                                <option value="3">Shoulder injury</option>
                                                                <option value="4">Lowerback injury</option>
                                                                <option value="5">Wrist sprain or dislocation</option>
                                                                <option value="6">Other</option>
                                                            </select>
                                                        </div>
                                                        <div class="col">
                                                            <label for="smoke" class="form-label">Do you Smoke ? </label>
                                                            <select class="form-select" id="smoke" name="smoke">
                                                                <option value=""></option>
                                                                <option value="yes">Yes</option>
                                                                <option value="no">No</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br>

                                                    <div class="row mb-3">
                                                        <div class="col-sm align-items-center">

                                                            <div class="form-check  ">
                                                                <div>
                                                                    <input class="form-check-input" type="checkbox" id="strue" name="strue1" required>
                                                                    <label class="form-check-label" for="strue1">
                                                                        I here by declare that the above information is correct upto my
                                                                        knowledge.
                                                                    </label>
                                                                    <div class="invalid-feedback">
                                                                        You must agree before submitting.
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div>
                                                                    <input class="form-check-input" type="checkbox" id="strue" name="strue2" required>
                                                                    <label class="form-check-label" for="strue2">
                                                                        Open gym memberships do not expire and are non-transferable. You may
                                                                        lose
                                                                        your
                                                                        membership if you
                                                                        allow others to use your card.
                                                                    </label>
                                                                    <div class="invalid-feedback">
                                                                        You must agree before submitting.
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div>
                                                                    <input class="form-check-input" type="checkbox" id="strue" name="strue3" required>
                                                                    <label class="form-check-label" for="strue3">
                                                                        Participants <strong>MUST CHECK IN AND SHOW THEIR MEMBERSHIP CARD EACH
                                                                            VISIT.</strong>
                                                                    </label>
                                                                    <div class="invalid-feedback">
                                                                        You must agree before submitting.
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div>
                                                                    <input class="form-check-input" type="checkbox" id="strue" name="strue4" required>
                                                                    <label class="form-check-label" for="strue4">
                                                                        Rubber soled athletic shoes (no cleats) and clothing (including shirts)
                                                                        must
                                                                        be worn
                                                                        at all times
                                                                    </label>
                                                                    <div class="invalid-feedback">
                                                                        You must agree before submitting.
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div>
                                                                    <input class="form-check-input" type="checkbox" id="strue" name="strue5" required>
                                                                    <label class="form-check-label" for="strue5">
                                                                        Absolutely NO DUNKING or HANGING ON THE RIM. Repeat offenses could
                                                                        result in
                                                                        suspension or permanent loss of privileges.
                                                                    </label>
                                                                    <div class="invalid-feedback">
                                                                        You must agree before submitting.
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="container">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button class="btn btn-success" for="submit" name="submit" data-bs-target="">Submit</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <a class=" one" data-bs-toggle="modal" href="#perdetail" role="button">Register Now</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col m-4">
                <div class="card m-3 bronze" style="width: 30rem;">
                    <img src="image/platinum m.png" class="card-img-top" alt="bronze">
                    <div class="card-body">
                        <h5 class="card-title text-center">Platinum Memebership</h5>
                        <p class="card-text">
                        <div class="row">
                            <div class="col">
                                <ul>
                                    <li>Personal Training</li>
                                    <li>Cardio Training</li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul>
                                    <li>Weight Training</li>
                                    <li>Group Fitness</li>
                                </ul>
                            </div>
                        </div>
                        </p>

                        <div class="container">
                            <form method="POST" action="" enctype="multipart/form-data">
                                <!---- first registration page-->
                                <div class="modal fade" id="perdetail" aria-hidden="true" aria-labelledby="perdetail" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="perdetail">Personal Details</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body ">
                                                <div class="container ">

                                                    <div class="row g-3 mb-3">
                                                        <div class="col-sm-2">
                                                            <label for="mr-mrs-ms" class="form-label">Mr/Mrs/Miss</label>
                                                            <select class="form-select" name="mr-mrs-ms" id="autoSizingSelect">
                                                                <option value=""></option>
                                                                <option value="mr">Mr.</option>
                                                                <option value="mrs">Mrs.</option>
                                                                <option value="miss">Miss.</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <label for="fname" class="form-label">First Name :</label>
                                                            <input type="text" class="form-control" name="fname" placeholder="First name" id="fname" aria-label="First name">
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <label for="sname" class="form-label">Second Name :</label>
                                                            <input type="text" class="form-control" name="sname" placeholder="Last name" id="sname" aria-label="Last name">
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 mb-3">
                                                        <div class="col">
                                                            <label for="gender" class="form-label">Gender :</label>
                                                            <select class="form-select" name="gender" id="gender">
                                                                <option value="" selected></option>
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>

                                                            </select>
                                                        </div>
                                                        <div class="col">
                                                            <label for="age" class="form-label">Age :</label>
                                                            <input type="number" class="form-control" name="age" placeholder="Age" id="" aria-label="Contact Number">
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 mb-3">
                                                        <div class="col">
                                                            <label for="cnumber" class="form-label">Contact Number :</label>
                                                            <input type="number" class="form-control" name="cnumber" placeholder="Contact Number" id="cnumber" aria-label="Contact Number">
                                                        </div>
                                                        <div class="col">
                                                            <label for="enumber" class="form-label">Emergency Contact Number :</label>
                                                            <input type="number" class="form-control" id="enumber" name="enumber" placeholder="Emergency Contact Number" aria-label="Emergency Contact Number">
                                                        </div>
                                                        <div class="col">
                                                            <label for="email1" class="form-label">Email Address :</label>
                                                            <input type="email" class="form-control" name="email" placeholder="Email Address" id="email1" aria-label="Email">
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 mb-3">
                                                        <label for="addres">Address :</label>
                                                        <textarea class="form-control" placeholder="Enter Your Address " name="address" id="addres" name="addres" style="height: 60px; "></textarea>
                                                    </div>
                                                    <div class="row g-3 mb-3">
                                                        <label for="memtype">Membership type :</label>
                                                        <select class="form-select" id="memtype" name="memtype">
                                                            <option value=""></option>
                                                            <option value="bronze">Bronze Membership ( 1 month ) </option>
                                                            <option value="silver">Silver Membership ( 3 month ) </option>
                                                            <option value="gold">Gold Membership ( 6 month ) </option>
                                                            <option value="platinum">Platinum Membership ( 12 month ) </option>
                                                        </select>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="container">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button class="btn btn-primary" data-bs-target="#meddetail" data-bs-toggle="modal">Next</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!---- second registration page-->
                                <div class="modal fade" id="meddetail" aria-hidden="true" aria-labelledby="meddetail" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="meddetail">Medical Details</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container">
                                                    <div class="row g-3 mb-3">
                                                        <div class="col-sm">
                                                            <label for="height" class="form-label">Height :</label>
                                                            <input type="number" class="form-control" name="height" id="height" placeholder="Height">
                                                        </div>
                                                        <div class="col-sm">
                                                            <label for="weight" class="form-label">Weight :</label>
                                                            <input type="number" class="form-control" name="weight" id="weight" placeholder="Weight">
                                                        </div>
                                                    </div>

                                                    <div class="row g-3 mb-3">
                                                        <label for="hproblem" class="form-label">Do you have any health problem ?</label>
                                                        <input type="text" class="form-control" id="hproblem" name="hproblem" placeholder="Health problem">
                                                    </div>
                                                    <div class="row g-3 mb-3">
                                                        <div class="col">
                                                            <label for="injury" class="form-label">Do you have any injuries ? </label>
                                                            <select class="form-select" id="injury" name="injury">
                                                                <option value=""></option>
                                                                <option value="00">none</option>
                                                                <option value="0">Knee Injury</option>
                                                                <option value="1">Muscle pull and strain</option>
                                                                <option value="2">Sprained ankle</option>
                                                                <option value="3">Shoulder injury</option>
                                                                <option value="4">Lowerback injury</option>
                                                                <option value="5">Wrist sprain or dislocation</option>
                                                                <option value="6">Other</option>
                                                            </select>
                                                        </div>
                                                        <div class="col">
                                                            <label for="smoke" class="form-label">Do you Smoke ? </label>
                                                            <select class="form-select" id="smoke" name="smoke">
                                                                <option value=""></option>
                                                                <option value="yes">Yes</option>
                                                                <option value="no">No</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br>

                                                    <div class="row mb-3">
                                                        <div class="col-sm align-items-center">

                                                            <div class="form-check  ">
                                                                <div>
                                                                    <input class="form-check-input" type="checkbox" id="strue" name="strue1" required>
                                                                    <label class="form-check-label" for="strue1">
                                                                        I here by declare that the above information is correct upto my
                                                                        knowledge.
                                                                    </label>
                                                                    <div class="invalid-feedback">
                                                                        You must agree before submitting.
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div>
                                                                    <input class="form-check-input" type="checkbox" id="strue" name="strue2" required>
                                                                    <label class="form-check-label" for="strue2">
                                                                        Open gym memberships do not expire and are non-transferable. You may
                                                                        lose
                                                                        your
                                                                        membership if you
                                                                        allow others to use your card.
                                                                    </label>
                                                                    <div class="invalid-feedback">
                                                                        You must agree before submitting.
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div>
                                                                    <input class="form-check-input" type="checkbox" id="strue" name="strue3" required>
                                                                    <label class="form-check-label" for="strue3">
                                                                        Participants <strong>MUST CHECK IN AND SHOW THEIR MEMBERSHIP CARD EACH
                                                                            VISIT.</strong>
                                                                    </label>
                                                                    <div class="invalid-feedback">
                                                                        You must agree before submitting.
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div>
                                                                    <input class="form-check-input" type="checkbox" id="strue" name="strue4" required>
                                                                    <label class="form-check-label" for="strue4">
                                                                        Rubber soled athletic shoes (no cleats) and clothing (including shirts)
                                                                        must
                                                                        be worn
                                                                        at all times
                                                                    </label>
                                                                    <div class="invalid-feedback">
                                                                        You must agree before submitting.
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div>
                                                                    <input class="form-check-input" type="checkbox" id="strue" name="strue5" required>
                                                                    <label class="form-check-label" for="strue5">
                                                                        Absolutely NO DUNKING or HANGING ON THE RIM. Repeat offenses could
                                                                        result in
                                                                        suspension or permanent loss of privileges.
                                                                    </label>
                                                                    <div class="invalid-feedback">
                                                                        You must agree before submitting.
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="container">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button class="btn btn-success" for="submit" name="submit" data-bs-target="">Submit</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <a class=" one" data-bs-toggle="modal" href="#perdetail" role="button">Register Now</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
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

if (isset($_POST['submit'])) {
    $mr_mrs_ms = $_POST['mr-mrs-ms'];
    $fname = $_POST['fname'];
    $sname = $_POST['sname'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $cnumber = $_POST['cnumber'];
    $enumber = $_POST['enumber'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $memtype = $_POST['memtype'];


    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $health = $_POST['hproblem'];
    $injury = $_POST['injury'];
    $smoke = $_POST['smoke'];




    $first = "INSERT INTO `personal_detail`(`mr_ms_mrs`, `first_name`, `second_name`, `gender`, `age`, `contact_number`, `emergency_number`, `email`, `address`, `membership_type`) 
        VALUES ('$mr_mrs_ms','$fname','$sname','$gender','$age','$cnumber','$enumber','$email','$address','$memtype')";
    if ($conn->query($first)) {
        $sql2 = "SELECT id FROM personal_detail ORDER BY id DESC LIMIT 1";
        $resultset = $conn->query($sql2);

        $row = $resultset->fetch_assoc();
        $id = $row['id'];
        $sql1 = "INSERT INTO `medical_detail`(`personal_detail_id`, `height`, `weight`, `health_problem`, `injury`, `smoke`) 
                VALUES ('$id','$height','$weight','$health','$injury','$smoke')";
        //print_r($sql1);
        if ($conn->query($sql1)) {
            echo "<script>alert('Your has been saved successfully')</script>";
        }
    } else {
        echo "Sorry, there was an error in saving your data";
    }
}
?>