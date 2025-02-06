<?php
namespace App\Models;

use Config\Database;

class Admin {
    private $conn;
    private $table = 'tbl_admin';

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAdminById($adminId) {
        $query = "SELECT adminID, username, gmail, img FROM {$this->table} WHERE adminID = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $adminId);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function updateProfile($adminId, $data) {
        $updateFields = [];
        $paramTypes = '';
        $paramValues = [];

        if (isset($data['username'])) {
            $updateFields[] = "username = ?";
            $paramTypes .= 's';
            $paramValues[] = $data['username'];
        }

        if (isset($data['email'])) {
            $updateFields[] = "gmail = ?";
            $paramTypes .= 's';
            $paramValues[] = $data['email'];
        }

        if (isset($data['img'])) {
            $updateFields[] = "img = ?";
            $paramTypes .= 's';
            $paramValues[] = $data['img'];
        }

        if (empty($updateFields)) {
            return false;
        }

        $paramTypes .= 'i';
        $paramValues[] = $adminId;

        $query = "UPDATE {$this->table} SET " . implode(', ', $updateFields) . " WHERE adminID = ?";
        
        $stmt = $this->conn->prepare($query);
        
        // Dynamically bind parameters
        $bindParams = [&$paramTypes];
        foreach ($paramValues as &$value) {
            $bindParams[] = &$value;
        }
        call_user_func_array([$stmt, 'bind_param'], $bindParams);

        return $stmt->execute();
    }

    public function handleFileUpload($file, $maxSize = 5000000) {
        if (empty($file['name'])) return null;

        $fileSize = $file['size'];
        $fileType = $file['type'];
        $tmpName = $file['tmp_name'];

        // Validate file size
        if ($fileSize > $maxSize) {
            throw new \Exception("File is too large. Maximum size is " . ($maxSize / 1000000) . "MB");
        }

        // Validate file type
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        if (!in_array($fileType, $allowedTypes)) {
            throw new \Exception("Invalid file type. Only JPG, PNG, and GIF are allowed.");
        }

        return file_get_contents($tmpName);
    }
}