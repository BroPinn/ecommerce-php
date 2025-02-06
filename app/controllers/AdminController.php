<?php
namespace App\Controllers;

use App\Models\Admin;

class AdminController {
    private $model;
    private $adminId;

    public function __construct() {
        session_start();
        
        // Check if user is logged in
        if (!isset($_SESSION['adminID'])) {
            header("Location: /login");
            exit();
        }

        $this->model = new Admin();
        $this->adminId = $_SESSION['adminID'];
    }

    public function profile() {
        // Fetch admin data
        $admin = $this->model->getAdminById($this->adminId);
        
        // Prepare profile image
        $profileImage = !empty($admin['img'])
            ? 'data:image/jpeg;base64,'.base64_encode($admin['img'])
            : 'https://via.placeholder.com/150';

        // Handle profile update
        $message = null;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            try {
                $updateData = [
                    'username' => $_POST['username'] ?? null,
                    'email' => $_POST['email'] ?? null
                ];

                // Handle file upload
                if (!empty($_FILES['profile_image']['name'])) {
                    $imgContent = $this->model->handleFileUpload($_FILES['profile_image']);
                    $updateData['img'] = $imgContent;
                }

                // Update profile
                $result = $this->model->updateProfile($this->adminId, array_filter($updateData));

                if ($result) {
                    $message = [
                        'type' => 'success', 
                        'text' => 'Profile updated successfully!'
                    ];
                    
                    // Refresh admin data after update
                    $admin = $this->model->getAdminById($this->adminId);
                } else {
                    $message = [
                        'type' => 'danger', 
                        'text' => 'Failed to update profile.'
                    ];
                }
            } catch (\Exception $e) {
                $message = [
                    'type' => 'danger', 
                    'text' => $e->getMessage()
                ];
            }
        }

        // Render the view
        require_once __DIR__ . '/../views/admin/profile.php';
    }
}