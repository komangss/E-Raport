<?php

class Controller {
    public function view($view, $data = []){
        require_once '../app/views/'. $view .'.php';
    }
    public function model($model){
        require_once '../app/models/'. $model .'.php';
        // karena dia class, kita harus instansiasi dulu. jadi jika method ini dipanggil sudah langsung ter-instansiasi
        return new $model;
    }
}