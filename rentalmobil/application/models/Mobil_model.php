<?php
class Mobil_model extends CI_Model{
    // Membuat property atau variabel
    public $id, $nopol, $warna, $biaya_sewa, $deskripsi, $cc, $tahun, $merk_id;

    public function getAll(){
        // Menampilkan seluruh data yang ada di tabel mahasiswa menggunakan query builder
        $query = $this->db->get('mobil');
        return $query->result();
    }

    public function getById($id){
        // Menampilkan data berdasarkan id
        $query = $this->db->get_where('mobil', ['id'=> $id]);
        return $query->row();
    }

    public function simpan($data){
        $sql = "INSERT INTO mobil (nopol, warna, biaya_sewa, deskripsi, cc, tahun, merk_id) VALUES (?,?,?,?,?,?,?)";
        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getByID($insert_id);
    }

    public function update($data){
        $sql = "UPDATE mobil SET nopol=?, warna=?, biaya_sewa=?, deskripsi=?, cc=?, tahun=?, merk_id=? WHERE id=?";
        $this->db->query($sql, $data);
    }

    public function delete($data){
        // hapus data
        $sql = "DELETE FROM mobil WHERE id=?";
        $this->db->query($sql,$data);
    }
}
?>