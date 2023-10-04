<?php

class Product {
	private $id;
	private $name;
	private $price;

	public function __construct($id, $name, $price) {
		$this->id = $id;
		$this->name = $name;
		$this->price = $price;
	}

	private function getFormattedPrice() {
		$price = $this->price;
		$formattedPrice = number_format($price, 2);
		return "$".$formattedPrice;
	}

	public function showDetails() {
		echo "Product Details: \n";
		echo "- ID: " . $this->id . "\n";
		echo "- Name: " . $this->name . "\n";
		echo "- Price: " . $this->getFormattedPrice() . "\n";
		echo "\n";

	}

}

// Test the Product class

$tShirt = new Product(1, 'T-shirt', 19.9887);
$tShirt->showDetails();

$iPhone = new Product(2, 'iPhone 15 Pro', 999.9865);
$iPhone->showDetails();

$macbook = new Product(3, 'Macbook Pro (13-inch, M1, 2020)', 1499.9855);
$macbook->showDetails();