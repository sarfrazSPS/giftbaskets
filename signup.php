<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lancaster Dutch Gift Baskets Online | PA Dutch Baskets</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include($root_path . "includes/header-links.php"); ?>
</head>
<style>
    .login-input .form-group label {
        font-weight: 600;
    }

    .login-input .form-group .form-control {
        background: #f3f3f9;
        border-radius: 0.2rem;
        border: 1px solid #7571f9;
        color: #7A88A1;
        padding-left: 1rem;
        ;
    }
</style>

<body>
    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0" style="box-shadow: rgba(0, 0, 0, 0.2) 0px 20px 30px;">
                            <div class="card-body pt-5">
                                <a class="text-center" href="#">
                                    <h4>Business Networking </h4>
                                </a>
                                <div class="p-3 text-center">
                                    <p>WIN A FREE Gift Basket courtesy of Business Networking group. PA Dutch Baskets will send the winner the gift basket below to anyone of your choice for any occasion you choose.</p>
                                    <p class="mb-0">
                                        Simply complete your information to be entered into our free giveaway. We will select the winner on ____ at _____ within the group. We will also message the winner. Good Luck!
                                    </p>
                                </div>
                                <form class="mb-5 login-input" action="save.php" method="post">
                                    <div class="form-group mb-2">
                                        <label class="mb-2">First Name</label>
                                        <input type="text" class="form-control" placeholder="First Name" name="txt_f_name" value="" required>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label class="mb-2">last Name</label>
                                        <input type="text" class="form-control" placeholder="last Name" name="txt_l_name" value="" required>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label class="mb-2">Email</label>
                                        <input type="email" class="form-control" placeholder="Email" name="txt_email" value="" required>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label class="mb-2">Phone Number</label>
                                        <input type="number" class="form-control" placeholder="Phone Number" name="txt_phone" value="" required>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label class="mb-2">Password</label>
                                        <input type="password" class="form-control" placeholder="Password" name="txt_password" value="" required>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label class="mb-2">Confirm Password</label>
                                        <input type="password" class="form-control" placeholder="Confirm Password" name="txt_c_password" value="" required>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary brcf-btn mt-3 ms-0 w-100">Create Account</button>
                                </form>
                                <p class="mt-5 login-form__footer">Have account <a href="index.php" class="text-primary">LogIn </a> now</p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= $app_path ?>assets/js/jquery-3.7.1.slim.js"></script>
    <script src="<?= $app_path ?>assets/js/bootstrap/bootstrap.bundle.js"></script>
</body>

</html>