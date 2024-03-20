<?php
class App {
  public function __construct() {
    
    $url = $this->parseURL();
    var_dump($url);
  }

  public function parseURL() {
    if (isset($_GET['url'])) {
      // Ambil Value dari URL
      $url = $_GET['url'];

      // Buang tanda / di akhir URL
      $url = rtrim($url, '/');

      // Filter URL dari karakter aneh
      $url = filter_var($url, FILTER_SANITIZE_URL);
      
      // Pecah URL berdasarkan tanda / sebagai pemisah
      $url = explode('/', $url);

      return $url;
    }
  }
}