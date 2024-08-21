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
                        <?php
                            if(isset($_SESSION['userId'])) {
                                echo '<p class="login-status card-text">You are logged in!</p>';
                            }else {
                                echo '<p class="login-status card-text">You are logged out!</p>';
                            }
                        ?>
                        
                        
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