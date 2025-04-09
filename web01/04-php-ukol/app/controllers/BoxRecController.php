<?php
require_once '../models/Database.php';
require_once '../models/BoxRec.php';

class BoxRecController {
    private $db;
    private $boxrecModel;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->boxrecModel = new BoxRecs($this->db);
    }

    public function createBoxRec() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $surname = htmlspecialchars($_POST['surname']);
            $birthday = htmlspecialchars($_POST['birthday']);
            $gender = htmlspecialchars($_POST['gender']);
            $division = htmlspecialchars($_POST['division']);
            $wins = intval($_POST['wins']);
            $losses = intval($_POST['losses']);
            $ties = intval($_POST['ties']);

            
            $imagePaths = [];
            if (!empty($_FILES['images']['name'][0])) {
                $uploadDir = '../public/images/';
                foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
                    $filename = basename($_FILES['images']['name'][$key]);
                    $targetPath = $uploadDir . $filename;

                    if (move_uploaded_file($tmp_name, $targetPath)) {
                        $imagePaths[] = '/public/images/' . $filename; 
                    }
                }
            }


            if ($this->boxrecModel->create($name, $surname, $birthday, $gender, $division, $wins, $losses, $ties, $imagePaths)) {
                header("Location: ../controllers/boxrec_list.php");
                exit();
            } else {
                echo "Chyba při ukládání údajů.";
            }
        }
    }

    public function listBoxRec() {
        $boxrec = $this->boxrecModel->getAll();
        include '../views/records/boxrec_list.php';
    }
}

// Volání metody při odeslání formuláře
$controller = new BoxRecController();
$controller->createBoxRec();