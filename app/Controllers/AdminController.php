<?php

namespace App\Controllers;

class AdminController extends BaseController
{
    public function dashboard()
    {
        $db = \Config\Database::connect();

        // Query builder untuk mengambil data lomba yang menunggu persetujuan
        $approvalCompetitions = $db->table('lomba')
            ->where('status', 0)
            ->get()
            ->getResultArray();

        // Query builder untuk mengambil data lomba yang telah disetujui
        $updateCompetitions = $db->table('lomba')
            ->where('status', 1)
            ->get()
            ->getResultArray();

        // Query builder untuk mengambil data tim lomba yang menunggu persetujuan
        $approvalTeams = $db->table('tim_lomba')
            ->select('tim_lomba.*, lomba.nama_lomba, lomba.tenggat_pendaftaran')
            ->join('lomba', 'tim_lomba.lomba_id = lomba.lomba_id')
            ->where('tim_lomba.status', 0)
            ->get()
            ->getResultArray();

        return view('admin/dashboard', [
            'approvalCompetitions' => $approvalCompetitions,
            'updateCompetitions' => $updateCompetitions,
            'approvalTeams' => $approvalTeams,
        ]);
    }
}
