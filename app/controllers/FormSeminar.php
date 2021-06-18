<?php

class FormSeminar extends Controller{
    public function index()
    {
        // $this->view('templates/header2');
        // $data['smn'] = $this->model('Seminar_model')->getAllSeminar();
        $this->view('formSeminar/index');
        // $this->view('templates/footer');
    }
}