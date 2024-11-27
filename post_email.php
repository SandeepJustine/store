<?php include 'includes/session.php'; ?>

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