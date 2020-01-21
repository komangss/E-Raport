<?php
// pakai nama user_model supaya tidak bentrokan dengan siapa tau buat class user di controller 
class User_model {
    private $nama = 'Antonio';
    
    public function getUser()
    {
        return $this->nama;    
    }
}
