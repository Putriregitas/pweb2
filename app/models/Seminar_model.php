<?php

class Seminar_model{

    private $table = 'seminar';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllSeminar()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function tambahDataSeminar($data){
        $query = "INSERT INTO seminar VALUES ('', :judul, :deskripsi, :tempat, :waktu, :kuota, :gambar)";

        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('tempat', $data['tempat']);
        $this->db->bind('waktu', $data['waktu']);
        $this->db->bind('kuota', $data['kuota']);
        $this->db->bind('gambar', $data['gambar']);

        $this->db->execute();
    }
}

