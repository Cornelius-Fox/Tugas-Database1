<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Employees extends Controller

{
    public function insert()
    {
        $result = DB::table('employees')->insert([
            [
                'nama_pegawai' => 'Agus',
                'tanggal_lahir' => '1998-06-07',
                'jabatan' => 'Staff',
                'divisi' => 'IT',
                'tanggal_masuk' => '2019-06-07',
                'cuti' =>  '0',
                'Aktif' => '1',
                'PHK' => '0',
                'Mengundurkan_Diri' => 1,
            ],
            [
                'nama_pegawai' => 'Firmansha',
                'tanggal_lahir' => '1998-06-07',
                'jabatan' => 'Staff',
                'divisi' => 'IT',
                'tanggal_masuk' => '2019-06-07',
                'cuti' =>  '0',
                'Aktif' => '1',
                'PHK' => '0',
                'Mengundurkan_Diri' => 1,
            ]
        ]);
    }

    public function select()
    {
        // $result = DB::select("SELECT * FROM books");
        $result = DB::table('employees')->get();
        return view('Employees', ['employees' => $result]);
    }

    public function update()
    {
        // ...
        $result = DB::table('employees')->where('nama_pegawai', 'GeorgeManulang')
            ->update(
                [
                    'Mengundurkan_Diri' => '0',
                    'Aktif' => '1'

                ]
            );
        dump($result);
    }

    public function delete()
    {
        // ...
        $result = DB::table('employees')->where('Cuti', '=', '0')->delete();
        dump($result);
    }

    public function index()
    {
        $result = DB::table("employees")->get();
        $result2 = DB::table("employees")->get();
        // return view('Employees', ['employees' => $result]);
        return view('Employees', compact('result', 'result2'));
    }
}
