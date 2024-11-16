<?phpnamespace App\Models;
class Produto{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }
    public function getAll()
    {
        $query = "SELECT * FROM produtos";
        $stmt = $this->db->query($query);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}