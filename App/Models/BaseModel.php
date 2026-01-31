<<<<<<< HEAD
<?php
namespace App\Models;

use PDO;
use PDOException;

class BaseModel
{
    protected $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO(
                "mysql:host=localhost;dbname=buoi2_php;charset=utf8",
                "root",
                ""
            );
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Lỗi kết nối CSDL");
        }
    }
}
=======
<?php
namespace App\Models;

use PDO;
use PDOException;

class BaseModel {
    protected $conn;

    public function __construct() {
        try {
            $this->conn = new PDO(
                "mysql:host=localhost;dbname=buoi2_php;charset=utf8",
                "root",
                ""
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Hệ thống đang bảo trì, vui lòng quay lại sau");
        }
    }
}
>>>>>>> f2d9616775d0f280c25faf26ecd4eecc080c1551
