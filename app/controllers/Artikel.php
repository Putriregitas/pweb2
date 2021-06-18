<?php

class Artikel extends Controller{
    public function index()
    {
        $this->view('templates/header2');
        $this->view('artikel/index');
        $this->view('templates/footer');
        
    }
}