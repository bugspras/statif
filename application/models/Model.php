<?php

class Model extends CI_Model{
        

    public function auth($username, $password) 
    {
     try {
        if(($username == 'admin') && ($password == 'admin123.')):
            return 1;
        else:
            return 0;
        endif;
     } catch (Exception $e) {
        return 0;
     }
    }

    public function list_pemohon($id = null) 
    {
     try {
        if($id):
            $this->db->select('*');
            $this->db->from('tb_pemohon');
            $this->db->join('tb_status_permohonan','tb_pemohon.id_status_permohonan = tb_status_permohonan.id_status_permohonan');
            $this->db->where('kd_pemohon',$id);
            return $this->db->get();
        else:
            $this->db->select('*');
            $this->db->from('tb_pemohon');
            $this->db->join('tb_status_permohonan','tb_pemohon.id_status_permohonan = tb_status_permohonan.id_status_permohonan');
            return $this->db->get();
        endif;
     } catch (Exception $e) {
        return 'failed';
     }
    }

    
    public function list_petugas($id = null) 
    {
     try {
        $this->db->select('*');
        $this->db->from('tb_anggota_pengukur');
        $this->db->where('kd_anggota_pengukur',$id);
        return $this->db->get();
     } catch (Exception $e) {
        return 'failed';
     }
    }
    
    public function list_pemohon_not_in($id = null) 
    {
     try {
        return $this->db->query('SELECT * FROM `tb_pemohon` WHERE kd_pemohon not in (SELECT kd_pemohon FROM tb_pengukuran)');
     } catch (Exception $e) {
        return 'failed';
     }
    }

    
    public function list_pengukuran($id = null) 
    {
     try {
        if($id):
            $this->db->select('tb_pemohon.kd_pemohon,tb_pemohon.nama_lengkap_pemohon,tb_pemohon.token,tb_pengukuran.kd_anggota_pengukur,tb_pengukuran.tanggal_pengukuran,tb_pengukuran.waktu_pengukuran,tb_anggota_pengukur.nama_anggota_pengukur');
            $this->db->from('tb_pengukuran');
            $this->db->join('tb_anggota_pengukur','tb_pengukuran.kd_anggota_pengukur = tb_anggota_pengukur.kd_anggota_pengukur');
            $this->db->join('tb_pemohon','tb_pemohon.kd_pemohon = tb_pengukuran.kd_pemohon');
            $this->db->where('tb_pengukuran.kd_pengukuran',$id);
            return $this->db->get();
        else:
            $this->db->select('tb_pemohon.kd_pemohon,tb_pemohon.nama_lengkap_pemohon,tb_pemohon.token,tb_pengukuran.kd_anggota_pengukur,tb_pengukuran.tanggal_pengukuran,tb_pengukuran.waktu_pengukuran,tb_anggota_pengukur.nama_anggota_pengukur');
            $this->db->from('tb_pengukuran');
            $this->db->join('tb_anggota_pengukur','tb_pengukuran.kd_anggota_pengukur = tb_anggota_pengukur.kd_anggota_pengukur');
            $this->db->join('tb_pemohon','tb_pemohon.kd_pemohon = tb_pengukuran.kd_pemohon');
            return $this->db->get();
        endif;
     } catch (Exception $e) {
        return 'failed';
     }
    }

    public function list_peta($id = null) 
    {
     try {
        if($id):
            $this->db->select('tb_pemohon.*,tb_peta.waktu,tb_peta.file');
            $this->db->from('tb_peta');
            $this->db->join('tb_pemohon','tb_pemohon.kd_pemohon = tb_peta.kd_pemohon');
            $this->db->where('tb_peta.kd_peta',$id);
            return $this->db->get();
        else:
            $this->db->select('tb_pemohon.*,tb_peta.waktu,tb_peta.file');
            $this->db->from('tb_peta');
            $this->db->join('tb_pemohon','tb_pemohon.kd_pemohon = tb_peta.kd_pemohon');
            return $this->db->get();
        endif;
     } catch (Exception $e) {
        return 'failed';
     }
    }
    public function list_peta_not_in() 
    {
     try {
        return $this->db->query("SELECT a.kd_pemohon,a.nama_lengkap_pemohon FROM tb_pemohon a 
        JOIN tb_pengukuran b ON (a.kd_pemohon=b.kd_pemohon) 
        JOIN tb_proses c ON (b.kd_pemohon=c.kd_pemohon) 
        WHERE c.status='proses'
        AND b.kd_pemohon NOT IN (SELECT kd_pemohon FROM tb_peta)");
     } catch (Exception $e) {
        return 'failed';
     }
    }
    public function insert_pemohon($data) 
    {
        try {
            $this->db->insert('tb_pemohon',$data);
            $this->proses(0,$data['kd_pemohon'],'permohonan');
            $broadcast = [
                'kd_broadcast' => $data['kd_pemohon'].rand(9999,99999),
                'nomor' => $data['nomor_telepon'],
                'pesan' => 'terimakasih telah mengajukan permohonan pengukuran bidang tanah di kantor pertanahan kota gorontalo , e_tiket *'.$data['e_tiket'].'*.'
            ];
            $this->insert_broadcast($broadcast);
            echo 'success';
        } catch (Exception $e) {
            echo 'failed';
        }
    }

    public function update_pemohon($data) 
    {
        try {
            $this->db->where('kd_pemohon',$data['kd_pemohon']);
            $this->db->update('tb_pemohon',$data);
            echo 'success';
        } catch (Exception $e) {
            echo 'failed';
        }
    }

    public function delete_pemohon($id) 
    {
        try {
            $this->db->where('kd_pemohon',$data['kd_pemohon']);
            $this->db->delete('tb_pemohon');
            echo 'success';
        } catch (Exception $e) {
            echo 'failed';
        }
    }
    public function count_proses($status = null){
        try{
            if($status):
                return $this->db->get_where('tb_proses',array('status'=>$status));
            else:
                return $this->db->get('tb_proses');
            endif;
        } catch (Exception $e) {
            return '';
        }
    }
    public function insert_pengukuran($data) 
    {
        try {
            $this->db->insert('tb_pengukuran',$data);
            $this->proses(1,$data['kd_pemohon'],'pengukuran');
            $permohon = $this->list_pemohon($data['kd_pemohon'])->row();
            $petugas = $this->list_petugas($data['kd_anggota_pengukur'])->row();
            $status = $this->status_permohonan($permohon->id_status_permohonan)->row();
            // send pemohon
            $broadcast1 = [
                'kd_broadcast' => $data['kd_pengukuran'].rand(9999,99999),
                'nomor' => $permohon->nomor_telepon,
                'pesan' => '*Hotline BPN Kota Gtlo: Surat Tugas Pengukuran*
Permohonan : '.$status->status_permohonan.' 
Pemohon : '.$permohon->nama_lengkap_pemohon.'
No. Berkas : '.$permohon->no_mohon_ukur.'
Nama Petugas Ukur : '.$petugas->nama_anggota_pengukur.'
Nomor Telp Petugas : '.$petugas->nomor_telepon.'
token : *'.$permohon->token.'*
Silahkan saudara segera mengkonfirmasi kepada pemohon melalui Telp/SMS/WhatsApp
                
                
Catatan :
- Jika tidak ada konfirmasi dari pemohon mengenai jadwal pengukuran agar segera berkoordinasi dengan Koordinator Sub Seksi Pengukuran
- Petugas ukur bertanggung jawab penuh atas jangka waktu pelayanan pengukuran sesuai tugas.'
            ];
            $this->insert_broadcast($broadcast1);
            $broadcast2 = [
                'kd_broadcast' => $data['kd_pengukuran'].rand(9999,99999),
                'nomor' => $permohon->nomor_telepon,
                'pesan' => site_url('upload/').$data['file'],
                'type' => 'file'
            ];
            $this->insert_broadcast($broadcast2);
            // send petugas
            $broadcast3 = [
                'kd_broadcast' => $data['kd_pengukuran'].rand(9999,99999),
                'nomor' => $petugas->nomor_telepon,
                'pesan' => '*Hotline BPN Kota Gtlo: Surat Tugas Pengukuran*
Permohonan : '.$status->status_permohonan.' 
Pemohon : '.$permohon->nama_lengkap_pemohon.'
Nomor Telp pemohon : '.$permohon->nomor_telepon.'
No. Berkas : '.$permohon->no_mohon_ukur,
            ];
            $this->insert_broadcast($broadcast3);
            $broadcast4 = [
                'kd_broadcast' => $data['kd_pengukuran'].rand(9999,99999),
                'nomor' => $petugas->nomor_telepon,
                'pesan' => site_url('upload/').$data['file'],
                'type' => 'file'
            ];
            $this->insert_broadcast($broadcast4);
            echo 'success';
        } catch (Exception $e) {
            echo 'failed';
        }
    }
    
    public function insert_peta($data) 
    {
        try {
            $this->db->insert('tb_peta',$data);
            $token = [
                'kd_pemohon' => $data['kd_pemohon'],
            ];
            $this->db->insert('tb_token',$token);
            $this->proses(1,$data['kd_pemohon'],'selesai');
            $permohon = $this->list_pemohon($data['kd_pemohon'])->row();
            $broadcast1 = [
                'kd_broadcast' => 'selesai_'.$data['kd_pemohon'].rand(9999,99999),
                'nomor' => $permohon->nomor_telepon,
                'pesan' => 'Hasil permohonan pengukuran telah selesai, sesuai dengan file pdf yang kami kirimkan. terimakasih atas kerjasamanya salam *skala kantor dinas pertanahan kota gorontalo*.'
            ];
            $this->insert_broadcast($broadcast1);
            $broadcast2 = [
                'kd_broadcast' => 'selesai_'.$data['kd_pemohon'].rand(9999,99999),
                'nomor' => $permohon->nomor_telepon,
                'pesan' => site_url('upload/').$data['file'],
                'type' => 'file'
            ];
            $this->insert_broadcast($broadcast2);
            echo 'success';
        } catch (Exception $e) {
            echo 'failed';
        }
    }
    public function proses($id,$kode,$status){
        try{
            if($id):
                $data = [
                    'status' => $status
                ];
                $this->db->where('kd_pemohon',$kode);
                $this->db->update('tb_proses',$data);
            else:
                $data = [
                    'kd_proses' => 'proses_'.rand(9999,99999).'_'.$status.'_'.$kode,
                    'kd_pemohon' => $kode,
                    'status' => $status
                ];
                $this->db->insert('tb_proses',$data);
            endif;
        } catch (Exception $e) {
        }
    }
    public function cek_proses($kode,$status){
        $this->db->where('status',$status);
        $this->db->where('kd_pemohon',$kode);
        return $this->db->get('tb_proses');
    }
    public function cek_verifikasi($data){
       return $this->cek_e_tiket($data['e_tiket'],$data['token']);
    }
    public function cek_e_tiket($tiket,$token){
        $data = $this->db->get_where('tb_pemohon',array('e_tiket'=>$tiket));
        if($data->num_rows()):
            return $this->cek_token($token);
        else:
            echo 'failed_e_tiket';
        endif;
    }
    public function cek_token($token){
        $data = $this->db->get_where('tb_pemohon',array('token'=>$token));
        if($data->num_rows()):
            $pemohon = $data->row();
            $proses = $this->cek_proses($pemohon->kd_pemohon,'proses');
            if($proses->num_rows()):
                echo 'verifikasi';
            else:
            $this->proses(1,$pemohon->kd_pemohon,'proses');
            $broadcast = [
                'kd_broadcast' => $pemohon->kd_pemohon.rand(9999,99999).$token,
                'nomor' => $pemohon->nomor_telepon,
                'pesan' => '*Hotline BPN Kota Gtlo: Surat Tugas Pengukuran*
terimakasih telah berkerja sama dalam proses pengukuran tanah, tahap selanjutnya proses pembuatan *peta bidang tanah* sesuai dengan hasil pengukuran untuk nomor berkas *'.$pemohon->no_mohon_ukur.'*.'
            ];
            $this->insert_broadcast($broadcast);
                echo 'success';
            endif;
        else:
            echo 'failed_token';
        endif;
    }
    public function insert_broadcast($data){
        $this->db->insert('tb_broadcast',$data);
    }
    public function slider_pengukuran(){
        return $this->db->query("SELECT vph.nama_anggota_pengukur, vph.status, count(vph.no_mohon_ukur) as jml FROM v_list_permohonan vph where vph.lvl in (2) group by vph.nama_anggota_pengukur, vph.status order by count(vph.kd_pemohon) desc;");
    }
    public function status_permohonan($id = null){
        if($id):
            $this->db->select('*');
            $this->db->from('tb_status_permohonan');
            $this->db->where('id_status_permohonan',$id);
            return $this->db->get();
        else:
            $this->db->where_not_in('id_status_permohonan',0);
            return $this->db->get('tb_status_permohonan');
        endif;
    }
    public function list_anggota($id = null){
        try {
            if($id):
                $this->db->select('tb_anggota_pengukur.*,tb_pengukuran.kd_anggota_pengukur as kode');
                $this->db->from('tb_anggota_pengukur');
                $this->db->join('tb_pengukuran','tb_anggota_pengukur.kd_anggota_pengukur = tb_pengukuran.kd_anggota_pengukur','left');
                $this->db->where('tb_anggota_pengukur.kd_anggota_pengukur',$id);
                return $this->db->get();
            else:
                $this->db->select('tb_anggota_pengukur.*,tb_pengukuran.kd_anggota_pengukur as kode');
                $this->db->from('tb_anggota_pengukur');
                $this->db->join('tb_pengukuran','tb_anggota_pengukur.kd_anggota_pengukur = tb_pengukuran.kd_anggota_pengukur','left');
                return $this->db->get();
            endif;
        } catch (Exception $e) {
            echo 'failed';
        }
    }
    public function insert_anggota($data){
        try {
            $this->db->insert('tb_anggota_pengukur',$data);
            echo 'success';
        } catch (Exception $e) {
            echo 'failed';
        }
    }
    public function update_anggota($data) 
    {
        try {
            $this->db->where('kd_anggota_pengukur',$data['kd_anggota_pengukur']);
            $this->db->update('tb_anggota_pengukur',$data);
            echo 'success';
        } catch (Exception $e) {
            echo 'failed';
        }
    }
    public function delete_anggota($id) 
    {
        try {
            $this->db->where('kd_anggota_pengukur',$id);
            $this->db->delete('tb_anggota_pengukur');
            echo 'success';
        } catch (Exception $e) {
            echo 'failed';
        }
    }
    public function table_dashboard(){
        return $this->db->query("SELECT vph.nama_anggota_pengukur, vph.status_permohonan,vph.status FROM v_list_permohonan vph where vph.lvl in (2,4) group by vph.nama_anggota_pengukur, vph.status order by vph.nama_anggota_pengukur, vph.lvl;");
    }
    public function count_jenis_layanan($i){
        $data = $this->db->query("SELECT count(vph.id_status_permohonan) as jml FROM v_list_permohonan vph  WHERE vph.id_status_permohonan='$i' group by vph.id_status_permohonan;")->row();
        if(empty($data)):
            $data = $this->db->query("select 0 as jml")->row();
        endif;
        return $data->jml;
    }
}