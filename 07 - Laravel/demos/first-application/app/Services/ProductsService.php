<?php

namespace App\Services;

class ProductsService {
    private array $products = [
        ['id' => '1', 'name' => 'chaussette', 'description' => 'confort absolu', 'price' => 12.5],
        ['id' => '2', 'name' => 'slip', 'description' => 'rend plus intelligent', 'price' => 15.5],
        ['id' => '3', 'name' => 't-shirt', 'description' => 'simple, mais efficace', 'price' => 20],
        ['id' => '4', 'name' => 'pantalon', 'description' => 'chaud', 'price' => 30],
    ];


    public function getProducts() : array {
        return $this->products;
    }

    public function addProduct(array $product) : void {
        $this->products[] = ['id' => strval(count($this->products) + 1), ...$product];
    }

}