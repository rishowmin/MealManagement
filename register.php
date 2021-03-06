<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="stylesheet" href="assets/vendors/css/bootstrap.min.css" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="assets/css/authentication-styles.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<div class="main-body">
    <section class="login-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card register-card-style">
                        <form class="modal-content animate login-form" action="/action_page.php" method="post">
                            <div class="m-3">
                                <div class="login-stratup text-center">
                                    <img src="./assets/images/logo-2.png" alt="logo" class="login-logo">
                                    <h2 class="mt-3 mb-3">Register</h2>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                    <input type="text" class="form-control" placeholder="First Name" required>
                                    <input type="text" class="form-control" placeholder="Last Name" required>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-briefcase"></i></span>
                                    <select name="designation" class="form-control custom-select">
                                        <option selected disabled>Select Designation</option>
                                        <option value="hr_manager" required>HR Manager</option>
                                        <option value="hr_admin">HR Admin</option>
                                        <option value="project_manager">Project Manager</option>
                                        <option value="senior_software_enginner">Senior Software Enginner</option>
                                        <option value="software_enginner">Software Enginner</option>
                                        <option value="junior_software_enginner">Junior Software Enginner</option>
                                    </select>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                                    <input type="text" class="form-control" placeholder="Username" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text input-group-text-secondary"><b>@simplexhub.com</b></span>
                                    </div>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-unlock"></i></span>
                                    <input type="password" class="form-control" placeholder="Password" required>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                    <input type="password" class="form-control" placeholder="Confirm Password" required>
                                </div>

                                <div class="text-center">
                                    <button class="btn btn-success login-btn" type="submit">Register</button>
                                </div>

                                <div class="dont-have-account mt-3">
                                    <p>Have an account? Go to <a href="login.html">login</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

</body>
</html>