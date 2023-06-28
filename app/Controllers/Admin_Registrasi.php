<?php

namespace App\Controllers;

use App\Models\RegistrasiModel;
use TCPDF;

class Admin_Registrasi extends BaseController
{
    public $registrasiModel;

    public function __construct()
    {
        $this->registrasiModel = new RegistrasiModel();
    }

    public function index()
    {
        $registrasi = $this->registrasiModel->findAll();

        $data = [
            'regis' => $registrasi
        ];

        return view('admin/data_registrasi', $data);
    }

    public function detail($id)
    {

        $data = [
            'detail_regis' => $this->registrasiModel->getRegistrasi($id)
        ];

        return view('admin/detail_registrasi', $data);
    }

    public function unduh($id)
    {
        $data = [
            'detail_regis' => $this->registrasiModel->getRegistrasi($id)
        ];

        $html_view = view('admin/detail_registrasi', $data);
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Smart English');
        $pdf->SetTitle('Data Registrasi');
        $pdf->SetSubject('Data Registrasi');

        $pdf->SetPrintHeader(false);
        $pdf->SetPrintFooter(false);

        $pdf->AddPage();
        $pdf->writeHTML($html_view, true, false, true, false, '');
        $this->response->setContentType('application/pdf');
        $pdf->Output('report.pdf', 'I');
    }
}
