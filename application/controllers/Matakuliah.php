<?php 
class Matakuliah extends CI_Controller 
{ 
 
    public function index() 
    { 
 
        $this->load->view('view_form_matakuliah'); 
    } 
 
    public function cetak() 
    { 
        $this->form_validation->set_rules('kode', 'Kode Matakuliah', 
            'required|min_length[3]', [ 
                    'required' => 'Kode Matakuliah Harus diisi', 
                    'min_lenght' => 'Kode terlalu pendek' 
                ]); 
         
        $this->form_validation->set_rules('nama', 'Nama Matakuliah', 
            'required|min_length[3]', [ 
                    'required' => 'Nama Matakuliah Harus diisi', 
                    'min_lenght' => 'Nama matakuliah terlalu pendek' 
                ]); 
        $this->form_validation->set_rules('sks', 'SKS',
            'required', [
                'required' => 'SKS harus diisi'
                ]);
         
        if ($this->form_validation->run() != true) { 
            $this->load->view('view_form_matakuliah');
        } else { 
            $data = [ 
                'kode' => $this->input->post('kode'), 
                'nama' => $this->input->post('nama'), 
                'sks' => $this->input->post('sks') 
        ]; 
 
        $this->load->view('view-data-matakuliah', $data); 
    } 
} 
}