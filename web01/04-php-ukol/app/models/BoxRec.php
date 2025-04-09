<?php

class BoxRecs {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function create($name, $surname, $birthday, $gender, $division, $wins, $losses, $ties, $images) {
        
        // Dvojtečka označuje pojmenovaný parametr => Místo přímých hodnot se používají placeholdery.
        // PDO je pak nahradí skutečnými hodnotami při volání metody execute().
        // Chrání proti SQL injekci (bezpečnější než přímé vložení hodnot).
        $sql = "INSERT INTO boxrec (name, surname, birthday, gender, division, wins, losses, ties, images) 
                VALUES (:name, :surname, :birthday, :gender, :division, :wins, :losses, :ties, :images)";
        
        $stmt = $this->db->prepare($sql);
        
        return $stmt->execute([
            ':name' => $name,
            ':surname' => $surname,
            ':birthday' => $birthday,
            ':gender' => $gender,
            ':division' => $division,
            ':wins' => $wins,
            ':losses' => $losses,
            ':ties' => $ties,
            ':images' => json_encode($images) // Ukládání obrázků jako JSON
        ]);
    }

    public function getAll() {
        $sql = "SELECT * FROM boxrec ORDER BY created_at DESC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}