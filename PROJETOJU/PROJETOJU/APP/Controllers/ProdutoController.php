<?phpnamespace App\Controllers;
use App\Models\Produto;use Mpdf\Mpdf;
class ProdutoController{
    private $produtoModel;

    public function __construct($db)
    {
        $this->produtoModel = new Produto($db);
    }
    public function gerarRelatorioPDF()
    {
        $produtos = $this->produtoModel->getAll();

        // Carregar o conteúdo HTML para o relatórioob_start();
        include __DIR__ . '/../views/relatorio_produtos.php';
        $html = ob_get_clean();

        // Geração do PDF com mPDF$mpdf = new Mpdf();
        $mpdf->WriteHTML($html);
        $mpdf->Output('relatorio_produtos.pdf', 'D'); // 'D' para download direto
    }
}