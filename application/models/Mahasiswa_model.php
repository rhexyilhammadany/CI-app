<?php

class Mahasiswa_model extends CI_Model
{
    public function getAllMahasiswa()
    {
        return $this->db->get_where('mahasiswa')->result_array();
    }

    public function tambahDataMahasiswa()
    {
        $data = [
            "nama" => htmlspecialchars($_POST['nama'], true),
            "nrp" => htmlspecialchars($_POST['nrp'], true),
            "email" => htmlspecialchars($_POST['email'], true),
            "jurusan" => htmlspecialchars($_POST['jurusan'], true),
        ];
        $this->db->insert('mahasiswa', $data);
    }

    public function hapusDataMahasiswa($id)
    {
        $this->db->delete('mahasiswa', ['id' => $id]);
    }

    public function getMahasiswaById($id)
    {
        return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
    }

    public function ubahDataMahasiswa($id)
    {
        $data = [
            "nama" => htmlspecialchars($_POST['nama'], true),
            "nrp" => htmlspecialchars($_POST['nrp'], true),
            "email" => htmlspecialchars($_POST['email'], true),
            "jurusan" => htmlspecialchars($_POST['jurusan'], true),
        ];
        $this->db->update('mahasiswa', $data, ['id' => $id]);
    }

    public function cariDataMahasiswa()
    {
        $keyword = $this->input->post('keyword');
        $this->db->like('nama', $keyword);
        $this->db->or_like('nrp', $keyword);
        $this->db->or_like('email', $keyword);
        $this->db->or_like('jurusan', $keyword);
        return $this->db->get('mahasiswa')->result_array();
    }
}
