<?php
class Sewa_model extends CI_Model{
    public $tanggal_mulai, $tanggal_akhir, $tujuan, $noktp, $users_id, $mobil_id;

    public function getAll(){
        // menampilkan seluruh data yang ada di table menggunakan query builder
        $query = $this->db->get('sewa');
        return $query->result();
    }
    public function getById($id){
        // menampilkan data berdasarkan id
        $query = $this->db->get_where('sewa', ['id' => $id]);
        return $query->row();
    }
    public function simpan($data){
        $sql = "INSERT INTO sewa (tanggal_mulai,tanggal_akhir,tujuan,noktp,users_id,mobil_id) VALUES (?,?,?,?,?,?)";

        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }
    public function update($data){
        $sql = "UPDATE sewa SET tanggal_mulai=?,tanggal_akhir=?,tujuan=?,noktp=?,users_id=?,mobil_id=? WHERE id=?";
        $this->db->query($sql,$data);
    }
    public function delete($data){
        // hapus data
        $sql = "DELETE FROM sewa WHERE id=?";
        $this->db->query($sql,$data);
    }
}
?>