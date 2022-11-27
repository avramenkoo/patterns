<?php

// Design pattern: Bridge

require_once 'Product.php';
require_once 'Page.php';
require_once 'Renderer.php';

$HtmlRenderer = new HtmlRenderer();
$JsonRenderer = new JsonRenderer();
$XmlRenderer = new XmlRenderer();

$simplePage = new SimplePage($HtmlRenderer, "First blog post", "Hello world!");
$simplePage->render();
$simplePage->setRenderer($XmlRenderer);
$simplePage->render();

$myProduct = new Product(
  2934,
  "iPhone 18",
  "Same specs. Same everything. New model number. Buy now!",
  "iphone-18.jpg"
);
$productPage = new ProductPage($HtmlRenderer, $myProduct);
$productPage->render();
$productPage->setRenderer($JsonRenderer);
$productPage->render();
