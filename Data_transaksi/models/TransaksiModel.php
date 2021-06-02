<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class TransaksiModel extends CI_Model
{
    public function dataTrans()
    {
        return $this->db->get('tb_transaksi')->result();
    }
    public function cari($katakunci)
    {
        $this->db->where('id', $katakunci);
        $this->db->or_where('nama_user', $katakunci);
        $this->db->or_where('nama_produk', $katakunci);
        $this->db->or_where('alamat', $katakunci);
        $this->db->or_where('status', $katakunci);
        $this->db->or_where('kurir', $katakunci);

        $result = $this->db->get('tb_transaksi')->result();

        return $result;
    }
}
