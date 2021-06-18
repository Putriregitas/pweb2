<?php

class Seminar extends Controller{
    public function index()
    {
        $this->view('templates/header2');
        $data['smn'] = $this->model('Seminar_model')->getAllSeminar();
        $this->view('seminar/index', $data);
        // $this->view('templates/footer');
    }

    public function tambah(){
        if($this->model('Seminar_model')->tambahDataSeminar($_POST) > 0){
            header('Location: '. BASEURL . '/seminar');
            exit;
        }
    }
}