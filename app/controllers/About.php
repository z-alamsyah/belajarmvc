<?php

class About {
  public function index() {
    echo "Anda Masuk Masuk Class About dan Method Index";
  }

  public function page($name = 'Andre', $pekerjaan = 'programmer') {
    echo "Halo, nama saya $name, saya adalah seorang $pekerjaan";
  }
}