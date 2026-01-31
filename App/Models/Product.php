<<<<<<< HEAD
<?php
namespace App\Models;

use PDO;

class Product extends BaseModel
{
    public function all()
    {
        $sql = "SELECT * FROM students";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id)
    {
        $sql = "SELECT * FROM students WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function deleteById($id)
    {
        $sql = "DELETE FROM students WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }

    public function insert($data)
    {
        $sql = "INSERT INTO students (fullname, student_code, email)
                VALUES (:fullname, :student_code, :email)";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ':fullname' => $data['fullname'],
            ':student_code' => $data['student_code'],
            ':email' => $data['email']
        ]);
    }
    public function update($id, $data)
    {
        $sql = "UPDATE students 
                SET fullname = :fullname,
                    student_code = :student_code,
                    email = :email
                WHERE id = :id";

        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':fullname' => $data['fullname'],
            ':student_code' => $data['student_code'],
            ':email' => $data['email'],
            ':id' => $id
        ]);
    }

}
=======
<?php
namespace App\Models;

class Product extends BaseModel {

    public function getAllProducts() {
        $sql = "SELECT * FROM students";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
>>>>>>> f2d9616775d0f280c25faf26ecd4eecc080c1551
