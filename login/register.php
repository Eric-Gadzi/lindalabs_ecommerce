<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/login.css">

    <title>Hello, world!</title>
</head>

<body>

    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="../images/Customer/logo.jpg" style="width: 185px; height: 100px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">Register</h4>
                                    </div>
                                    

                                    <form action="registerprocess.php" method="POST">
                                    <div class="form-outline mb-4">
                                            <label class="form-label" for="formName">Full Name</label>
                                            <input type="text" id="formEmail" name="fullname" class="form-control" placeholder="full name" />
                                        </div>
                                        

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="formEmail">Email</label>
                                            <input type="email" id="formEmail" name="email" class="form-control" placeholder="Email address" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="formPassword">Password</label>
                                            <input type="password" id="formPassword" name="password" class="form-control" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="formCountry">Country</label>
                                            <input type="country" id="formCountry" name="country" class="form-control" placeholder="Country" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="formCity">City</label>
                                            <input type="text" id="formCity" name="city" class="form-control" placeholder="City" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="formContact">Contact Number</label>
                                            <input type="text" id="formContact" name="contact" class="form-control" placeholder="Contact" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="formImage">Image</label>
                                            <input type="file" id="formImage" class="form-control" placeholder="Image" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="formRoles">User Role</label>
                                            <select id="formRoles" name="uRoles">
                                            <option value="1">Administrator</option>
                                            <option value="2">Customer</option>
                                            </select>
                
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                        <input type="submit" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" class="form-control" name= "submit" value="Register" />
                                            
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">Already have an account?</p>
                                            <a href="login.php" class="btn btn-primary">Login</a>
                                        </div>

                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>