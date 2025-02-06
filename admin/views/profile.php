<?php
session_start();
include('../../config.php');

// Check if user is logged in
if (!isset($_SESSION['adminID'])) {
    header("Location: ../../index.php");
    exit();
}

$adminID = $_SESSION['adminID'];

// Fetch initial admin data
$stmt = $conn->prepare("SELECT username, gmail, img FROM tbl_admin WHERE adminID = ?");
$stmt->bind_param("i", $adminID);
$stmt->execute();
$result = $stmt->get_result();
$admin = $result->fetch_assoc();
$username = htmlspecialchars($admin['username']);
$email = htmlspecialchars($admin['gmail']);
$profileImage = !empty($admin['img'])
    ? 'data:image/jpeg;base64,' . base64_encode($admin['img'])
    : 'https://via.placeholder.com/150';

// Handle profile update
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $newUsername = $_POST['username'] ?? $username;
    $newEmail = $_POST['email'] ?? $email;

    // Profile image upload handling
    if (!empty($_FILES['profile_image']['name'])) {
        $imgContent = file_get_contents($_FILES['profile_image']['tmp_name']);
        $updateStmt = $conn->prepare("UPDATE tbl_admin SET username = ?, gmail = ?, img = ? WHERE adminID = ?");
        $updateStmt->bind_param("sssi", $newUsername, $newEmail, $imgContent, $adminID);
    } else {
        $updateStmt = $conn->prepare("UPDATE tbl_admin SET username = ?, gmail = ? WHERE adminID = ?");
        $updateStmt->bind_param("ssi", $newUsername, $newEmail, $adminID);
    }

    if ($updateStmt->execute()) {
        $successMessage = "Profile updated successfully!";
    } else {
        $errorMessage = "Error updating profile: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center bg-primary text-white">
                        <h3>Admin Profile</h3>
                    </div>
                    <div class="card-body">
                        <?php if (isset($successMessage)): ?>
                            <div class="alert alert-success"><?= $successMessage ?></div>
                        <?php endif; ?>
                        <?php if (isset($errorMessage)): ?>
                            <div class="alert alert-danger"><?= $errorMessage ?></div>
                        <?php endif; ?>

                        <form method="POST" enctype="multipart/form-data">
                            <div class="text-center mb-4">
                                <img src="<?= $profileImage ?>"
                                    class="rounded-circle mb-3"
                                    alt="Profile Picture"
                                    style="width: 150px; height: 150px; object-fit: cover;">
                                <input type="file"
                                    name="profile_image"
                                    class="form-control"
                                    accept="image/*">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text"
                                    name="username"
                                    class="form-control"
                                    value="<?= $username ?>"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email"
                                    name="email"
                                    class="form-control"
                                    value="<?= $email ?>"
                                    required>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Update Profile</button>
                                <a href="../dashboard.php" class="btn btn-secondary">Back to Dashboard</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>