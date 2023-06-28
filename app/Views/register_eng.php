<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Landing Page Smart English">
    <meta name="author" content="Kelompok 4 C2 2020">
    <title>Smart English Jatiuwung - Landing Page</title>
    <link rel="icon" href="pics/Logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/styleReg.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter&family=Poppins&display=swap');
    </style>
</head>
<header class="container-fluid bg-white sticky-top shadow shadow-offset-down-md py-1" id="nav">
    <div class="container-fluid px-5 d-flex flex-wrap align-items-center justify-content-center justify-content-md-between" id="header">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <img class="bi me-md-3 me-1" width="81" src="pics/Logo.png">
            <h3 style="color: #06B6D4;">Smart English</h3>
        </a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 fw-bold">
            <li><a href="/" class="nav-link px-md-4 link-dark">Home</a></li>
            <li><a href="/programs" class="nav-link px-md-4 link-dark">Program</a></li>
            <li><a href="/article" class="nav-link px-md-4 link-dark">Article</a></li>
            <li><a href="/contact" class="nav-link px-md-4 link-dark">Contact</a></li>
            <li><a href="/about" class="nav-link px-md-4 link-dark">About</a></li>
        </ul>

        <div class="col-md-3 col-0"></div>
    </div>
</header>

<body class="bg-light">
    <div class="container-fluid mt-3">
        <div class="d-flex align-items-center float-end">
            <select class="form-select bg-light border-0" aria-label="Default select example">
                <option value="Indonesia">Indonesia</option>
                <option value="English" selected>English</option>
            </select>
        </div>
    </div>

    <section class="container-fluid py-5">
        <div class="container-md bg-white" id="bgReg">
            <div class="row text-center py-3" id="navReg">
                <div class="col-6">
                    <ul class="nav justify-content-center">
                        <li>
                            <a href="/login" class="nav-link link-dark text-muted">
                                Login
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <ul class="nav justify-content-center">
                        <li>
                            <a href="/register" class="nav-link" style="color: #06B6D4;">
                                Register
                            </a>
                            <div id="activeNav">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="container-md px-md-5 px-3 py-md-4 py-3" id="formReg">
                <h2 class="text-center pb-md-3 pb-0 mb-4 mb-md-5">Hello! Let's join us!</h2>
                <form class="container col-md-8 col-12">
                    <section class="my-5">
                        <h3 class="text-center pb-4">Account Data</h3>
                        <div class="mb-4">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" placeholder="Email" id="email" aria-describedby="email">
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Password" id="password">
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Re-enter Password</label>
                            <input type="password" class="form-control" placeholder="Password" id="Repassword">
                        </div>
                    </section>

                    <section class="my-5">
                        <h3 class="text-center pb-4">Personal Data</h3>
                        <div class="mb-4">
                            <div class="row">
                                <div class="col-6">
                                    <label for="fname" class="form-label">First Name</label>
                                    <input type="text" class="form-control" placeholder="First Name" id="fname" aria-describedby="First Name">
                                </div>
                                <div class="col-6">
                                    <label for="lname" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" placeholder="Last Name" id="lname" aria-describedby="Last Name">
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="row">
                                <div class="col-8">
                                    <label for="eduStages" class="form-label">Educational Stages</label>
                                    <select class="form-select" aria-label="Educational Select" id="eduStages">
                                        <option value="no" selected>No Educational Background</option>
                                        <option value="elementary">Elementary School</option>
                                        <option value="junior">Junior High School</option>
                                        <option value="senior">Senior High School</option>
                                        <option value="college">College</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <label for="eduGrades" class="form-label">Grade</label>
                                    <select class="form-select" aria-label="Grade" id="eduGrades">
                                        <option value="" disabled selected>Please select a stage</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="school" class="form-label">School Name</label>
                            <input type="text" class="form-control" placeholder="School Name" id="school">
                        </div>
                        <div class="mb-4">
                            <div class="row">
                                <div class="col-6">
                                    <label for="birthPlace" class="form-label">Birth Place</label>
                                    <input type="text" class="form-control" placeholder="Birth Place" id="birthPlace" aria-describedby="Birth Place">
                                </div>
                                <div class="col-6">
                                    <label for="birthDate" class="form-label">Birth Date</label>
                                    <input type="date" class="form-control" placeholder="Birth Date" id="birthDate" aria-describedby="Birth Date">
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="parentJob" class="form-label">Parent's Job</label>
                            <select class="form-select" aria-label="Parent's Job" id="parentJob">
                                <option value="Belum Bekerja" selected>Unemployed</option>
                                <option value="PNS">Government Officials</option>
                                <option value="TNIPOLRI">Military/Police Officer</option>
                                <option value="Swasta">Private Employee</option>
                                <option value="Petani">Farmer</option>
                                <option value="Nelayan">Fisherman</option>
                                <option value="Pedagang">Merchant</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="domisili" class="form-check-label mb-2">Domisili</label>
                            <div class="row">
                                <div class="col-6">
                                    <input class="form-check-input" type="radio" name="domisili" value="local" id="domisiliLocal">
                                    <label class="form-check-label" for="domisiliLocal">
                                        Local
                                    </label>
                                </div>
                                <div class="col-6">
                                    <input class="form-check-input" type="radio" name="domisili" value="international" id="domisiliInternational">
                                    <label class="form-check-label" for="domisiliInternational">
                                        International
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="province" class="form-label">Province</label>
                            <select class="form-select" aria-label="province" id="province">
                                <option value="jakarta" selected>Jakarta</option>
                                <option value="java">Java</option>
                                <option value="sumatra">Sumatra</option>
                                <option value="kalimantan">Kalimantan</option>
                                <option value="sulawesi">Sulawesi</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="city" class="form-label">City</label>
                            <select class="form-select" aria-label="City" id="city">
                                <option value="" disabled selected>Please select a province</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" placeholder="Address" id="address">
                        </div>
                        <div class="mb-4">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" placeholder="phone" id="phone">
                        </div>
                    </section>

                    <section class="mt-5">
                        <h3 class="text-center pt-5 my-5">Program Selected</h3>
                        <div class="mb-4">
                            <div class="row">
                                <div class="col-6">
                                    <label for="program" class="form-label">Program</label>
                                    <select class="form-select" aria-label="program" id="program">
                                        <option value="English Only" selected>English Only</option>
                                        <option value="English and Mathematics">English and Mathematics</option>
                                        <option value="Cram School">Cram School</option>
                                        <option value="TOEFL Preparation">TOEFL Preparation</option>
                                        <option value="TOEIC Preparation">TOEIC Preparation</option>
                                        <option value="IELTS Preparation">IELTS Preparation</option>
                                        <option value="In-company Training">In-company Training</option>
                                        <option value="English Conversation Training">English Conversation Training</option>
                                        <option value="Private Class">Private Class</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label for="schedule" class="form-label">Schedule</label>
                                    <select class="form-select" aria-label="Schedule" id="schedule">
                                        <option value="" disabled selected>Please select a program</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="true" id="checkAgreement">
                            <label class="form-check-label" for="checkAgreement">
                                <p id="agreeTerms">I have read and agree with <a href="/" style="color:#06B6D4;" class="text-decoration-none">Terms of Service</a> and our <a href="/" style="color:#06B6D4;" class="text-decoration-none">Privacy Policy</a></p>
                            </label>
                        </div>
                    </section>
                    <button type="submit" class="btn btn-primary col-12 mt-3 py-2" style="background-color: #06B6D4; border: none;">Register</button>
                </form>
            </div>
        </div>
    </section>

    <!-- JQUERY SCRIPT -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <script src="js/reg.js"></script>
</body>

</html>