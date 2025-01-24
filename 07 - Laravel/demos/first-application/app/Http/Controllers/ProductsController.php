<?php

namespace App\Http\Controllers;

use App\DTOs\Todo;
use App\Services\ProductsService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function __construct() {}

    // Action de base qui liste l'ensemble des produits
    public function index(): View
    {

        $this->initializeProducts();

        // On retourne une vue avec l'ensemble des produits
        return view('products.index', ['products' => $this->getProducts()]);
    }

    // Action de détail d'un produit
    public function details(string $id): View
    {
        
        $product = $this->getProductById($id);

        if(isset($product)) 
        {
            return view('products.details', compact('product'));
        }

        // Erreur 404 en cas de produit non trouvé
        abort(404);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $product = $request->except(['_token']);
        $this->saveProduct($product);
        return redirect()
            ->route('products.index')
            ->with('message', 'produit ajouté!');
    }


    private function initializeProducts()
    {
        // Check if 'products' already exists in the session
        if (session()->has('products') === false) {
            $defaultProducts = [
                ['id' => '1', 'name' => 'chaussette', 'description' => 'confort absolu', 'price' => 12.5],
                ['id' => '2', 'name' => 'slip', 'description' => 'rend plus intelligent', 'price' => 15.5],
                ['id' => '3', 'name' => 't-shirt', 'description' => 'simple, mais efficace', 'price' => 20],
                ['id' => '4', 'name' => 'pantalon', 'description' => 'chaud', 'price' => 30],
            ];

            // Store the default array in the session
            session()->put('products', $defaultProducts);
        }
    }

    private function getProducts(): array {
        return session()->get('products');
    }

    private function getProductById(string $id):array|null {
        $index = array_search($id, array_column($this->getProducts(), 'id'));

        if ($index !== false) {
            // Récupération du produit et affichage de la vue correspondante
            $product = $this->getProducts()[$index];
            return $product;
        }

        return null;
    }

    private function saveProduct(array $product) {
        $products = $this->getProducts();
        $products[] = ['id' => strval(count($products) + 1), ...$product];
        session()->put('products', $products);
    }
}
