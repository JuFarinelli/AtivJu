<?phprequire __DIR__ . '/../vendor/autoload.php';
use App\Models\Database;use App\Controllers\ProdutoController;
$db = (new Database())->getConnection();$produtoController = new ProdutoController($db);$produtoController->gerarRelatorioPDF();