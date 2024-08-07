<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Database;

class DatabaseTest extends Controller
{
    public function index()
    {
        $db = Database::connect();
        if ($db->connect_errno) {
            echo "Failed to connect to MySQL: " . $db->connect_error;
        } else {
            echo "Connected successfully to farmacia_db!";
        }
    }
}
?>