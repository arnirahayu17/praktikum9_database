<?php

class Bmi extends CI_Controller {
    public function index() {
    // pasien 1
        // load pasien_model
        $this->load->model('pasien_model','pasien1');
        $this->pasien1->id=1;
        $this->pasien1->kode='P01001';
        $this->pasien1->nama='Bayu Sandy';
        $this->pasien1->tmp_lahir='Pekalongan';
        $this->pasien1->tgl_lahir='2000-03-24';
        $this->pasien1->gender='L';
        // load bmi_model
        $this->load->model('bmi_model','bmi1');
        $this->bmi1->tinggi=175;
        $this->bmi1->berat=62.3;
        // load bmipasien_model
        $this->load->model('bmipasien_model','bmipasien1');
        $this->bmipasien1->id=1;
        $this->bmipasien1->tanggal='2021-03-06';
        $this->bmipasien1->pasien= $this->pasien1;
        $this->bmipasien1->bmi= $this->bmi1;

    // pasien 2
        // load pasien_model
        $this->load->model('pasien_model','pasien2');
        $this->pasien2->id=2;
        $this->pasien2->kode='P01002';
        $this->pasien2->nama='Nur Laila';
        $this->pasien2->tmp_lahir='Bogor';
        $this->pasien2->tgl_lahir='2000-12-09';
        $this->pasien2->gender='P';
        // load bmi_model
        $this->load->model('bmi_model','bmi2');
        $this->bmi2->tinggi=152;
        $this->bmi2->berat=40.2;
        // load bmipasien_model
        $this->load->model('bmipasien_model','bmipasien2');
        $this->bmipasien2->id=2;
        $this->bmipasien2->tanggal='2021-04-15';
        $this->bmipasien2->pasien= $this->pasien2;
        $this->bmipasien2->bmi= $this->bmi2; 

    // pasien 3
        // load pasien_model
        $this->load->model('pasien_model','pasien3');
        $this->pasien3->id=3;
        $this->pasien3->kode='P01003';
        $this->pasien3->nama='Rezky Wicaksono';
        $this->pasien3->tmp_lahir='Bogor';
        $this->pasien3->tgl_lahir='1992-12-24';
        $this->pasien3->gender='L';
        // load bmi_model
        $this->load->model('bmi_model','bmi3');
        $this->bmi3->tinggi=169;
        $this->bmi3->berat=60;
        // load bmipasien_model
        $this->load->model('bmipasien_model','bmipasien3');
        $this->bmipasien3->id=3;
        $this->bmipasien3->tanggal='2021-05-10';
        $this->bmipasien3->pasien= $this->pasien3;
        $this->bmipasien3->bmi= $this->bmi3;

    // pasien 4
        // load pasien_model
        $this->load->model('pasien_model','pasien4');
        $this->pasien4->id=3;
        $this->pasien4->kode='P01004';
        $this->pasien4->nama='Abdul Latip';
        $this->pasien4->tmp_lahir='Bogor';
        $this->pasien4->tgl_lahir='1992-05-10';
        $this->pasien4->gender='L';
        // load bmi_model
        $this->load->model('bmi_model','bmi4');
        $this->bmi4->tinggi=175;
        $this->bmi4->berat=85;
        // load bmipasien_model
        $this->load->model('bmipasien_model','bmipasien4');
        $this->bmipasien4->id=4;
        $this->bmipasien4->tanggal='2021-05-18';
        $this->bmipasien4->pasien= $this->pasien4;
        $this->bmipasien4->bmi= $this->bmi4;
 
// pasien 5
        // load pasien_model
        $this->load->model('pasien_model','pasien5');
        $this->pasien5->id=3;
        $this->pasien5->kode='P01005';
        $this->pasien5->nama='Yunita Anggraini';
        $this->pasien5->tmp_lahir='jakarta';
        $this->pasien5->tgl_lahir='1998-02-18';
        $this->pasien5->gender='p';
        // load bmi_model
        $this->load->model('bmi_model','bmi5');
        $this->bmi5->tinggi=158;
        $this->bmi5->berat=51.4;
        // load bmipasien_model
        $this->load->model('bmipasien_model','bmipasien5');
        $this->bmipasien5->id=5;
        $this->bmipasien5->tanggal='2021-05-20';
        $this->bmipasien5->pasien= $this->pasien5;
        $this->bmipasien5->bmi= $this->bmi5;

        $list_pasien = [$this->pasien1, $this->pasien2, $this->pasien3, $this->pasien4, $this->pasien5];
        $list_bmi = [$this->bmi1, $this->bmi2, $this->bmi3, $this->bmi4, $this->bmi5];
        $list_bmipasien = [$this->bmipasien1, $this->bmipasien2, $this->bmipasien3, $this->bmipasien4, $this->bmipasien5];
        $data['list_pasien'] = $list_pasien;
        $data['list_bmi'] = $list_bmi;
        $data['list_bmipasien'] = $list_bmipasien;

        $this->load->view('layouts/header');
        $this->load->view('bmi/index', $data);
        $this->load->view('layouts/footer');
    }

    public function list() {
        $this->load->model('pasien_model');
        $patiens = $this->pasien_model->getAll();

        $data['patiens'] = $patiens;
        $this->load->view('layouts/header');
        $this->load->view('bmi/list', $data);
        $this->load->view('layouts/footer');
    }

    public function detail($id) {
        $this->load->model('pasien_model');
        $patien = $this->pasien_model->getById($id);

        if ($patien == NULL) {
            echo "Datanye Kaga Ade";
        }
        else {
            $data['patien'] = $patien;
            $this->load->view('layouts/header');
            $this->load->view('bmi/detail', $data);
            $this->load->view('layouts/footer');
        }
    }
}
?>