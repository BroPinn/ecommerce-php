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
                        <?php if ($message): ?>
                            <div class="alert alert-<?= $message['type'] ?>">
                                <?= $message['text'] ?>
                            </div>
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
                                    value="<?= htmlspecialchars($admin['username']) ?>"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email"
                                    name="email"
                                    class="form-control"
                                    value="<?= htmlspecialchars($admin['gmail']) ?>"
                                    required>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Update Profile</button>
                                <a href="/admin/dashboard" class="btn btn-secondary">Back to Dashboard</a>
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