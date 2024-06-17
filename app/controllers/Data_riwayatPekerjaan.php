<?php 

class Data_riwayatPekerjaan extends Controller{

    public function index() {

        $data['judul'] = 'Data Riwayat Pekerjaan';
        $this->view('template/header', $data);
        $this->view('data_riwayat_pekerjaan/index');
        $this->view('template/footer');
    }



    public function read_saved_rp(){
        if( $this->model('Calon_Pensiunan')->input_riwayatPekerjaan($_POST) > 0){
            Flasher::setFlash('berhasil!', 'ditambahkan', 'success');
            header('Location:'. BASEURL . '/dashboard_calonpensiun');
            exit;
        }else{
            Flasher::setFlash('gagal!', 'ditambahkan', 'danger');
            header('Location:'. BASEURL . '/dashboard_calonpensiun');
            exit;
        }
    }

}