<?php include 'includes/session.php'; ?>

<?php
// Get the category name from the query string
$categoryName = isset($_GET['category']) ? $_GET['category'] : '';

$conn = $pdo->open();

try {
    // Fetch category details based on category name
    $stmt = $conn->prepare("SELECT * FROM category WHERE name = :name");
    $stmt->execute(['name' => $categoryName]);
    $cat = $stmt->fetch();

    if (!$cat) {
        // If no matching category is found
        echo "<h1>Category not found</h1>";
        exit;
    }

    $catid = $cat['id'];
} catch (PDOException $e) {
    echo "There is some problem in connection: " . $e->getMessage();
    exit;
}

$pdo->close();
?>

<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

    <?php include 'includes/navbar.php'; ?>

    <div class="content-wrapper">
        <div class="container">

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-sm-9">
                        <h1 class="page-header"><?php echo htmlspecialchars($categoryName); ?></h1>
                        <?php
                        $conn = $pdo->open();

                        try {
                            $stmt = $conn->prepare("SELECT * FROM products WHERE category_id = :catid");
                            $stmt->execute(['catid' => $catid]);

                            $inc = 0;
                            echo "<div class='row'>";
                            foreach ($stmt as $row) {
                                $image = (!empty($row['photo'])) ? 'images/' . $row['photo'] : 'images/noimage.jpg';
                                echo "
                                    <div class='col-sm-4'>
                                        <div class='box box-solid'>
                                            <div class='box-body prod-body'>
                                                <img src='" . htmlspecialchars($image) . "' width='100%' height='230px' class='thumbnail'>
                                                <h5><a href='product.php?product=" . htmlspecialchars($row['slug']) . "'>" . htmlspecialchars($row['name']) . "</a></h5>
                                            </div>
                                            <div class='box-footer'>
                                                <b>&#36; " . number_format($row['price'], 2) . "</b>
                                            </div>
                                        </div>
                                    </div>
                                ";
                                $inc++;
                                if ($inc % 3 == 0) echo "</div><div class='row'>"; // Start a new row every 3 products
                            }
                            if ($inc % 3 != 0) echo "</div>"; // Close the row if it doesn't fill completely
                        } catch (PDOException $e) {
                            echo "There is some problem in connection: " . $e->getMessage();
                        }

                        $pdo->close();
                        ?>
                    </div>
                    <div class="col-sm-3">
                        <?php include 'includes/sidebar.php'; ?>
                    </div>
                </div>
            </section>

        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>
