<div class="container">
    <div class="other mt-5">
        <a class="btn btn-warning" href="signup.php">Sign up!</a>

        <?php
        if(isset($_SESSION['userName'])){
            echo '
            <form action="includes/logout.php" method="post">
                <div class="form-group mt-3">
                    <button class="btn btn-danger" type="submit" name="logout-submit">Logout</button>
                </div>
            </form>
            ';
        }
        ?>

    </div>
</div>