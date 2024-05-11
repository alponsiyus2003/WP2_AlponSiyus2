<?php
class Model_dlemas extends CI_Model {

    public function simpan_data($nama_siswa, $nis, $kelas, $tanggal_lahir, $tempat_lahir, $alamat, $jenis_kelamin, $agama) {
        // Simpan data siswa ke dalam database atau melakukan operasi lainnya sesuai kebutuhan
        // Contoh: Menyimpan data ke dalam tabel siswa
        $data = array(
            'nama_siswa' => $nama_siswa,
            'nis' => $nis,
            'kelas' => $kelas,
            'tanggal_lahir' => $tanggal_lahir,
            'tempat_lahir' => $tempat_lahir,
            'jenis_kelamin' => $jenis_kelamin,
            'alamat' => $alamat,
            'agama' => $agama
        );

        $this->db->insert('siswa', $data);
    }

}
?>