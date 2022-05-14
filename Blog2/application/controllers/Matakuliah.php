<?php
class Matakuliah extends CI_Controller{
    // membuat method index
    public function index(){
        $this->load->model('Matakuliah_model','mkl1');

        // buat object model 1 dan nilai nya
        $this->mkl1->id=1;
        $this->mkl1->nama='Drs Rusmanto, M.M';
        $this->mkl1->sks='2';
        $this->mkl1->kode='PPK';
        
        $this->load->model('Matakuliah_model','mkl2');

        // buat object model 2 dan nilai nya
        $this->mkl2->id=2;
        $this->mkl2->nama='Pudy Prima, S.T,M.Kom';
        $this->mkl2->sks='4';
        $this->mkl2->kode='BD';
        
       
        $this->load->model('Matakuliah_model','mkl3');

        // buat object model 3 dan nilai nya
        $this->mkl3->id=3;
        $this->mkl3->nama='Yahya Zulkarnain,S.T.';
        $this->mkl3->sks='2';
        $this->mkl3->kode='SP';
        

        // simpan object yang kita buat tadi ke dalam array
        $list_mkl = [$this->mkl1, $this->mkl2, $this->mkl3];
        // Siapkan data untuk di kirim kedalam view, dimana data nya di ambil dari object yang kita simpan ke dalam array
        $data['list_mkl'] = $list_mkl;
        // render data dan kirim data ke dalam view
        $this->load->view('Matakuliah/index', $data);
    }
}