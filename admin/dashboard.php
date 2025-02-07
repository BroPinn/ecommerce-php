<?php
session_start();
include('../config.php');

// Check session
if (!isset($_SESSION['adminID'])) {
    header("Location: index.php");
    exit();
}

$adminID = $_SESSION['adminID'];

// Use prepared statement with correct column names
$stmt = $conn->prepare("SELECT * FROM tbl_admin WHERE adminID = ?");
$stmt->bind_param("i", $adminID);
$stmt->execute();
$result = $stmt->get_result();

$admin = $result->fetch_assoc();

if (!$admin) {
    session_destroy();
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include("./includes/head.php");?>

<body>
    <div class="wrapper">
        <?php include("./includes/sidebar.php"); ?>
        <div class="main-panel">
            <?php include("./includes/header.php"); ?>
            <div class="container">
                <div class="page-inner">
                    <div
                        class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                        <div>
                            <h3 class="fw-bold mb-3">Dashboard</h3>
                            <h6 class="op-7 mb-2">Admin Dashboard</h6>
                        </div>
                        <div class="ms-md-auto py-2 py-md-0">
                            <a href="#" class="btn btn-label-info btn-round me-2">Manage</a>
                            <a href="#" class="btn btn-primary btn-round">Add Customer</a>
                        </div>
                    </div>
                    <?php include('./includes/userdata.php'); ?>
                    <?php include('./includes/statistics.php'); ?>
                    <?php include('./includes/userlocation.php'); ?>
                    <?php include('./includes/customers.php'); ?>
                </div>
            </div>
            <?php include('./includes/footer.php'); ?>