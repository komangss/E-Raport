<?php

namespace Core;

class App {
    protected $controller = 'Home';
    protected $method = 'Index';
    protected $params = [];
    
    public function __construct(){
        $url = $this->parseURL();
        // kita cek dulu. ada gak sebuah file didalam folder controller yg namanya sesuai dengan nama yg kita tulis disini
        if ( file_exists('app/controllers/' . $url[0] . '.php') ) {
            $this->controller = $url [0];
            // kita hilangkan controllernya dari elemen arraynya // ini buat nanti supaya kita bisa ambil urlnya
            unset($url[0]); // supaya nanti kita ambil parameternya // jadi nanti saat di vardump array foldernya ilang
            
        }
        // kita sudah tau ya controllernya apa. sekarang kita panggil controllernya
        require_once 'app/controllers/'. $this->controller. '.php';
        $this->controller = new $this->controller;
        // method
        if (isset($url[1])) {
            // kita cek ada ga methodnya
            if (method_exists($this->controller,$url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        // params // kelola parameternya
        if (!empty($url)){
            // ambil datanya
            $this->params = array_values($url);
            // var_dump($url);
        }

        // jalankan controller & method, serta kirimkan params jika ada
        call_user_func_array([$this->controller,$this->method],$this->params);

    }

    public function parseURL(){
        if (isset($_GET['url'])) {
            // kita akan bersihkan url nya supaya gaada / diakhirnya
            $url = rtrim($_GET['url'], '/');
            // kita bersihin urlnya dari karakter karakter aneh
            $url = filter_var($url,FILTER_SANITIZE_URL);
            // ubah urlnya jadi elemen array
            $url = explode('/', $url);
            return $url;
            

        }

    }
}

