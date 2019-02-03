<?php
/**
 *
 * Author: Abdelali Azhari
 * File:   courses.php
 * 
 * Course: CS602 - Spring-2018
 * AProject
 * 
 * Professor: Suresh Kalathur
 * Facilitator:  Laura Davis
 * 
 */
//
//
//This class is for converting to json and xml
class Products {

	/**
	 * [toJson converts the array of object products to a json and returns it]
	 * @param  [type] $courses [array of object]
	 * @return [type]          [json]
	 */
	
	public static function toArray($products) {
		$array = array();
		foreach((array) $products as $product) {
			$aProduct['ID'] = $product['productID'];
			$aProduct['Name'] = $product['productName'];
			$aProduct['Category'] = $product['categoryName'];
			$aProduct['Brand'] = $product['brandName'];
			$aProduct['Clothing'] = $product['clothingName'];
			$aProduct["Description"] = $product["productDescription"];
			$aProduct['Quantity'] = $product['productQuantity'];
			$aProduct['Price'] = "$".$product['productPrice'];

			$array[] = $aProduct;
			
			}
		
		return  $array;
	}

	/**
	 * [toJson description]
	 * @param  [type] $products [description]
	 * @return [type]           [description]
	 */
	public static function toJson($products) {
		$products = Products::toArray($products);
		$array = array();
		foreach($products as $product) {
			$aProduct= array();

			foreach($product as $key => $value){
				$aProduct['Product'][$key] = $value;
			}
			$array[] = $aProduct;
     }	
		return json_encode($array, JSON_PRETTY_PRINT);
}

	/**
	 * [toXml description]
	 * @param  [type] $products [description]
	 * @return [type]           [description]
	 */
	public static function toXml($products) {
     
		$doc = new DOMDocument('1.0', 'utf-8');
		$doc->preseveWhiteSpace = false;
		$doc->formatOutput = true;

		$products = Products::toArray($products);

		$root = $doc->createElement("Products");
		$doc->appendChild($root);

		// iterate through the array of objects of courses
		foreach ($products as $product) {

			$node = $doc->createElement('product');
			$root->appendChild($node);
			foreach($product as $key => $value) {
				$productID = $doc->createElement($key, $value);
				$node->appendChild($productID);
			}
		}

		return $doc->saveXML();
	
		}
}
?>