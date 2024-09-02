<?php
class User {
    public static function find($id) {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function all() {
        $conn = Database::getConnection();
        $stmt = $conn->query("SELECT * FROM usuarios");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function create($data) {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha, perfil) VALUES (:nome, :email, :senha, :perfil)");
        $stmt->execute($data);
    }

    public static function update($id, $data) {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("UPDATE usuarios SET nome = :nome, email = :email, perfil = :perfil WHERE id = :id");
        $data['id'] = $id;
        $stmt->execute($data);
    }

    public static function delete($id) {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("DELETE FROM usuarios WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }

    public static function findByEmail($email) {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");
        $stmt->execute(['email' => $email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
