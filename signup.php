<?php 
    require "header.php";
?>

<main>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">

                <div class="wrapper-main my-5">

                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title text-center mb-4">Signup</h1>

                            <?php
                            if(isset($_GET['error'])) {
                                if($_GET['error'] == 'emptyfileds'){
                                    echo '<p class="text-danger">Please fill in all fields</p>';
                                }
                                else if($_GET['error'] == 'invalidmailuid') {
                                    echo '<p class="text-danger">Invalid username and email</p>';
                                }
                                else if($_GET['error'] == 'invaliduid') {
                                    echo '<p class="text-danger">Invalid username</p>';
                                }
                                else if($_GET['error'] == 'invalidmail') {
                                    echo '<p class="text-danger">Invalid email</p>';
                                }
                                else if($_GET['error'] == 'passwordcheck') {
                                    echo '<p class="text-danger">Your password do not match</p>';
                                }
                                else if($_GET['error'] == 'usertaken') {
                                    echo '<p class="text-danger">Username already taken</p>';
                                }
                                
                            }
                            ?>

                            <form action="includes/signup.inc.php" method="post">
                                <input type="text" name="uid" class="form-control my-2" placeholder="Username">
                                <input type="text" name="mail" class="form-control my-2" value="" placeholder="Email">
                                <input type="password" name="pwd" class="form-control my-2" placeholder="Password">
                                <input type="password" name="pwd-repeat" class="form-control my-2" placeholder="Repeat Password">
                                <button type="submit" name="signup-submit" class="btn btn-dark">Signup</button>
                            </form>
                        </div>
                    </div>
                    <!--End Card-->

                </div>
            </div>
        </div>
    </div>
</main>

<?php 
    require "footer.php";
?>