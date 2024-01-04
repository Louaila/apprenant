
<?php
if (!function_exists('databaseIncluded')) {
    include("Database.php"); // Assurez-vous que le chemin du fichier est correct
}


class CoursManager {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    // CRUD pour les cours

    public function createCours($intitule) {
        $conn = $this->db->connect();

        // Utilisation de requêtes préparées pour éviter les attaques par injection SQL
        $stmt = $conn->prepare("INSERT INTO COURS (cours_intitule) VALUES (?)");
        $stmt->bind_param("s", $intitule);

        $success = $stmt->execute();

        $stmt->close();
        $conn->close();

        return $success;
    }

    public function readCours() {
        $conn = $this->db->connect();

        $query = "SELECT * FROM COURS";
        $result = $conn->query($query);

        $cours = array();

        while ($row = $result->fetch_assoc()) {
            $cours[] = $row;
        }

        $conn->close();

        return $cours;
    }

    public function updateCours($id, $intitule) {
        $conn = $this->db->connect();

        // Utilisation de requêtes préparées pour éviter les attaques par injection SQL
        $stmt = $conn->prepare("UPDATE COURS SET cours_intitule = ? WHERE cours_id = ?");
        $stmt->bind_param("si", $intitule, $id);

        $success = $stmt->execute();

        $stmt->close();
        $conn->close();

        return $success;
    }

    public function deleteCours($id) {
        $conn = $this->db->connect();

        // Utilisation de requêtes préparées pour éviter les attaques par injection SQL
        $stmt = $conn->prepare("DELETE FROM COURS WHERE cours_id = ?");
        $stmt->bind_param("i", $id);

        $success = $stmt->execute();

        $stmt->close();
        $conn->close();

        return $success;
    }
}
?>
