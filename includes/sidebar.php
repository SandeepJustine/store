<div class="row">
	<div class="box box-solid">
	  	<div class="box-header with-border">
	    	<h3 class="box-title"><b>Most Viewed Today</b></h3>
	  	</div>
	  	<div class="box-body">
	  		<ul id="trending">
	  		<?php
	  			$now = date('Y-m-d');
	  			$conn = $pdo->open();

	  			$stmt = $conn->prepare("SELECT * FROM products WHERE date_view=:now ORDER BY counter DESC LIMIT 10");
	  			$stmt->execute(['now'=>$now]);
	  			foreach($stmt as $row){
	  				echo "<li><a href='product.php?product=".$row['slug']."'>".$row['name']."</a></li>";
	  			}

	  			$pdo->close();
	  		?>
	    	<ul>
	  	</div>
	</div>
</div>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Capture and validate the email
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $error = '';
    $success = '';

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email address. Please enter a valid email.";
    } else {
        $conn = $pdo->open();
        try {
            // Check if email already exists
            $stmt = $conn->prepare("SELECT * FROM subscriptions WHERE email = :email");
            $stmt->execute(['email' => $email]);
            if ($stmt->rowCount() > 0) {
                $error = "You are already subscribed!";
            } else {
                // Insert the email into the database
                $stmt = $conn->prepare("INSERT INTO subscriptions (email) VALUES (:email)");
                $stmt->execute(['email' => $email]);
                $success = "Thank you for subscribing! You'll receive updates soon.";
            }
        } catch (PDOException $e) {
            $error = "There was an error processing your subscription: " . $e->getMessage();
        }
        $pdo->close();
    }
}
?>
<div class="row">
    <div class="box box-solid">
        <div class="box-header with-border">
            <h3 class="box-title"><b>Subscribe for news updates</b></h3>
        </div>
        <div class="box-body">
            <p>Get free updates on the latest products and discounts, straight to your inbox.</p>
            <!-- Display success or error messages -->
            <?php if (!empty($error)): ?>
                <div class="alert alert-danger"><?php echo $error; ?></div>
            <?php endif; ?>
            <?php if (!empty($success)): ?>
                <div class="alert alert-success"><?php echo $success; ?></div>
            <?php endif; ?>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <div class="input-group">
                    <input type="text" class="form-control" name="email" placeholder="Enter your email">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-info btn-flat">
                            <i class="fa fa-envelope"></i> Subscribe
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="row">
	<div class='box box-solid'>
	  	<div class='box-header with-border'>
	    	<h3 class='box-title'><b>Follow us on Social Media</b></h3>
	  	</div>
          <div class="box-body">
            <!-- Facebook Link -->
            <a class="btn btn-social-icon btn-facebook" href="https://web.facebook.com/coolenterprisesmw/" target="_blank">
                <i class="fa fa-facebook"></i>
            </a>

            <!-- Twitter Link -->
            <a class="btn btn-social-icon btn-twitter" href="https://x.com/CoolEnterMw" target="_blank">
                <i class="fa fa-twitter"></i>
            </a>

            <!-- Instagram Link -->
            <a class="btn btn-social-icon btn-instagram" href="https://www.instagram.com/yourprofile" target="_blank">
                <i class="fa fa-instagram"></i>
            </a>

            <!-- Google+ Link (Google+ is now shut down, so it's better to remove this one, or you could link to your Google Business Profile if applicable) -->
            <a class="btn btn-social-icon btn-google" href="https://plus.google.com/yourprofile" target="_blank">
                <i class="fa fa-google-plus"></i>
            </a>

            <!-- LinkedIn Link -->
            <a class="btn btn-social-icon btn-linkedin" href="https://mw.linkedin.com/company/cool-enterprises-malawi" target="_blank">
                <i class="fa fa-linkedin"></i>
            </a>
        </div>

	</div>
</div>
