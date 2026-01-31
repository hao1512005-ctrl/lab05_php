<?php
namespace App\Models;

class Product extends BaseModel
{
    public function all()
    {
        return $this->pdo
            ->query("SELECT * FROM students")
            ->fetchAll();
    }

    public function find($id)
    {
        $id = (int)$id;
        $stmt = $this->pdo->prepare("SELECT * FROM students WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function insert($data)
    {
        $stmt = $this->pdo->prepare(
            "INSERT INTO students (fullname, student_code, email)
             VALUES (?, ?, ?)"
        );
        return $stmt->execute([
            $data['fullname'],
            $data['student_code'],
            $data['email']
        ]);
    }

    public function update($id, $data)
    {
        $id = (int)$id;
        $stmt = $this->pdo->prepare(
            "UPDATE students
             SET fullname = ?, student_code = ?, email = ?
             WHERE id = ?"
        );
        return $stmt->execute([
            $data['fullname'],
            $data['student_code'],
            $data['email'],
            $id
        ]);
    }

    public function deleteById($id)
    {
        $id = (int)$id;
        $stmt = $this->pdo->prepare("DELETE FROM students WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
