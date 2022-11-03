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
                'nama_pegawai' => 'Ariq',
                'tanggal_lahir' => '2001-08-29',
                'jabatan' => 'Manager',
                'divisi' => 'IT',
                'Keuangan' => 'Null',
                'Marketing' => 'Null',
                'Produksi' => 'Null',
                'Gudang' => 'Null',
                'Delivery' => 'Null',
                'tanggal_masuk' => '2017-09-02',
                'cuti' =>  '0',
                'Aktif' => '1',
                'PHK' => '0',
                'Mengundurkan_Diri' => '0',
            ],

            [
                'nama_pegawai' => 'Lenon',
                'tanggal_lahir' => '2001-01-28',
                'jabatan' => 'Staff',
                'divisi' => 'IT',
                'Keuangan' => 'Null',
                'Marketing' => 'Null',
                'Produksi' => 'Null',
                'Gudang' => 'Null',
                'Delivery' => 'Null',
                'tanggal_masuk' => '2020-10-05',
                'cuti' =>  '0',
                'Aktif' => '1',
                'PHK' => '0',
                'Mengundurkan_Diri' => '0',
            ],

            [
                'nama_pegawai' => 'Kevin',
                'tanggal_lahir' => '2002-09-26',
                'jabatan' => 'Staff Manager',
                'divisi' => 'IT',
                'Keuangan' => 'Null',
                'Marketing' => 'Null',
                'Produksi' => 'Null',
                'Gudang' => 'Null',
                'Delivery' => 'Null',
                'tanggal_masuk' => '2017-09-02',
                'cuti' =>  '0',
                'Aktif' => '1',
                'PHK' => '0',
                'Mengundurkan_Diri' => '0',
            ],
            [
                'nama_pegawai' => 'Joshua',
                'tanggal_lahir' => '2001-01-28',
                'jabatan' => 'Staff',
                'divisi' => 'IT',
                'Keuangan' => 'Null',
                'Marketing' => 'Null',
                'Produksi' => 'Null',
                'Gudang' => 'Null',
                'Delivery' => 'Null',
                'tanggal_masuk' => '2020-10-05',
                'cuti' =>  '0',
                'Aktif' => '1',
                'PHK' => '0',
                'Mengundurkan_Diri' => '0',
            ],

            [
                'nama_pegawai' => 'Fierest',
                'tanggal_lahir' => '2001-08-29',
                'jabatan' => 'Staff',
                'divisi' => 'IT',
                'Keuangan' => 'Null',
                'Marketing' => 'Null',
                'Produksi' => 'Null',
                'Gudang' => 'Null',
                'Delivery' => 'Null',
                'tanggal_masuk' => '2020-09-02',
                'cuti' =>  '0',
                'Aktif' => '1',
                'PHK' => '0',
                'Mengundurkan_Diri' => '0',
            ],

            [
                'nama_pegawai' => 'Bob',
                'tanggal_lahir' => '2001-08-24',
                'jabatan' => 'Staff',
                'divisi' => 'IT',
                'Keuangan' => 'Null',
                'Marketing' => 'Null',
                'Produksi' => 'Null',
                'Gudang' => 'Null',
                'Delivery' => 'Null',
                'tanggal_masuk' => '2017-10-05',
                'cuti' =>  '0',
                'Aktif' => '1',
                'PHK' => '0',
                'Mengundurkan_Diri' => '0',
            ],

            [
                'nama_pegawai' => 'Steve',
                'tanggal_lahir' => '2001-03-05',
                'jabatan' => 'Staff',
                'divisi' => 'IT',
                'Keuangan' => 'Null',
                'Marketing' => 'Null',
                'Produksi' => 'Null',
                'Gudang' => 'Null',
                'Delivery' => 'Null',
                'tanggal_masuk' => '2020-5-10',
                'cuti' =>  '0',
                'Aktif' => '1',
                'PHK' => '0',
                'Mengundurkan_Diri' => '0',
            ],

            [
                'nama_pegawai' => 'Jason',
                'tanggal_lahir' => '2001-12-20',
                'jabatan' => 'staff',
                'divisi' => 'IT',
                'Keuangan' => 'Null',
                'Marketing' => 'Null',
                'Produksi' => 'Null',
                'Gudang' => 'Null',
                'Delivery' => 'Null',
                'tanggal_masuk' => '2017-09-02',
                'cuti' =>  '0',
                'Aktif' => '1',
                'PHK' => '0',
                'Mengundurkan_Diri' => '0',
            ],
            [
                'nama_pegawai' => 'Riku',
                'tanggal_lahir' => '2002-03-23',
                'jabatan' => 'Manager',
                'divisi' => 'IT',
                'Keuangan' => 'Null',
                'Marketing' => 'Null',
                'Produksi' => 'Null',
                'Gudang' => 'Null',
                'Delivery' => 'Null',
                'tanggal_masuk' => '2019-09-02',
                'cuti' =>  '0',
                'Aktif' => '1',
                'PHK' => '0',
                'Mengundurkan_Diri' => '0',
            ],

            [
                'nama_pegawai' => 'Marshal',
                'tanggal_lahir' => '2002-03-12',
                'jabatan' => 'Staff',
                'divisi' => 'IT',
                'Keuangan' => 'Null',
                'Marketing' => 'Null',
                'Produksi' => 'Null',
                'Gudang' => 'Null',
                'Delivery' => 'Null',
                'tanggal_masuk' => '2019-10-05',
                'cuti' =>  '0',
                'Aktif' => '1',
                'PHK' => '0',
                'Mengundurkan_Diri' => '0',
            ],

            [
                'nama_pegawai' => 'Steven',
                'tanggal_lahir' => '2002-09-26',
                'jabatan' => 'Staff Manager',
                'divisi' => 'IT',
                'Keuangan' => 'Null',
                'Marketing' => 'Null',
                'Produksi' => 'Null',
                'Gudang' => 'Null',
                'Delivery' => 'Null',
                'tanggal_masuk' => '2019-09-02',
                'cuti' =>  '0',
                'Aktif' => '1',
                'PHK' => '0',
                'Mengundurkan_Diri' => '0',
            ],
            [
                'nama_pegawai' => 'Angela',
                'tanggal_lahir' => '2001-01-28',
                'jabatan' => 'Staff',
                'divisi' => 'IT',
                'Keuangan' => 'Null',
                'Marketing' => 'Null',
                'Produksi' => 'Null',
                'Gudang' => 'Null',
                'Delivery' => 'Null',
                'tanggal_masuk' => '2019-05-05',
                'cuti' =>  '0',
                'Aktif' => '1',
                'PHK' => '0',
                'Mengundurkan_Diri' => '0',
            ],

            [
                'nama_pegawai' => 'Markus',
                'tanggal_lahir' => '2001-04-21',
                'jabatan' => 'Staff',
                'divisi' => 'IT',
                'Keuangan' => 'Null',
                'Marketing' => 'Null',
                'Produksi' => 'Null',
                'Gudang' => 'Null',
                'Delivery' => 'Null',
                'tanggal_masuk' => '2019-07-09',
                'cuti' =>  '0',
                'Aktif' => '1',
                'PHK' => '0',
                'Mengundurkan_Diri' => '0',
            ],

            [
                'nama_pegawai' => 'Fiery',
                'tanggal_lahir' => '2001-05-22',
                'jabatan' => 'Staff',
                'divisi' => 'IT',
                'Keuangan' => 'Null',
                'Marketing' => 'Null',
                'Produksi' => 'Null',
                'Gudang' => 'Null',
                'Delivery' => 'Null',
                'tanggal_masuk' => '2019-08-01',
                'cuti' =>  '0',
                'Aktif' => '1',
                'PHK' => '0',
                'Mengundurkan_Diri' => '0',
            ],

            [
                'nama_pegawai' => 'John',
                'tanggal_lahir' => '2001-03-05',
                'jabatan' => 'Staff',
                'divisi' => 'IT',
                'Keuangan' => 'Null',
                'Marketing' => 'Null',
                'Produksi' => 'Null',
                'Gudang' => 'Null',
                'Delivery' => 'Null',
                'tanggal_masuk' => '2019-5-10',
                'cuti' =>  '0',
                'Aktif' => '1',
                'PHK' => '0',
                'Mengundurkan_Diri' => '0',
            ],

            [
                'nama_pegawai' => 'Jidar',
                'tanggal_lahir' => '2001-12-20',
                'jabatan' => 'staff',
                'divisi' => 'IT',
                'Keuangan' => 'Null',
                'Marketing' => 'Null',
                'Produksi' => 'Null',
                'Gudang' => 'Null',
                'Delivery' => 'Null',
                'tanggal_masuk' => '2019-09-02',
                'cuti' =>  '0',
                'Aktif' => '1',
                'PHK' => '0',
                'Mengundurkan_Diri' => '0',
            ],
            [
                'nama_pegawai' => 'Migar',
                'tanggal_lahir' => '2003-10-26',
                'jabatan' => 'Staff Manager',
                'divisi' => 'IT',
                'Keuangan' => 'Null',
                'Marketing' => 'Null',
                'Produksi' => 'Null',
                'Gudang' => 'Null',
                'Delivery' => 'Null',
                'tanggal_masuk' => '2020-09-02',
                'cuti' =>  '0',
                'Aktif' => '1',
                'PHK' => '0',
                'Mengundurkan_Diri' => '0',
            ],
            [
                'nama_pegawai' => 'Eric',
                'tanggal_lahir' => '2002-02-02',
                'jabatan' => 'Staff',
                'divisi' => 'IT',
                'Keuangan' => 'Null',
                'Marketing' => 'Null',
                'Produksi' => 'Null',
                'Gudang' => 'Null',
                'Delivery' => 'Null',
                'tanggal_masuk' => '2017-10-05',
                'cuti' =>  '0',
                'Aktif' => '1',
                'PHK' => '0',
                'Mengundurkan_Diri' => '0',
            ],

            [
                'nama_pegawai' => 'Fierest',
                'tanggal_lahir' => '2002-03-04',
                'jabatan' => 'Staff',
                'divisi' => 'IT',
                'Keuangan' => 'Null',
                'Marketing' => 'Null',
                'Produksi' => 'Null',
                'Gudang' => 'Null',
                'Delivery' => 'Null',
                'tanggal_masuk' => '2019-04-03',
                'cuti' =>  '0',
                'Aktif' => '1',
                'PHK' => '0',
                'Mengundurkan_Diri' => '0',
            ],

            [
                'nama_pegawai' => 'Mikael',
                'tanggal_lahir' => '2002-05-19',
                'jabatan' => 'Staff',
                'divisi' => 'IT',
                'Keuangan' => 'Null',
                'Marketing' => 'Null',
                'Produksi' => 'Null',
                'Gudang' => 'Null',
                'Delivery' => 'Null',
                'tanggal_masuk' => '2020-10-05',
                'cuti' =>  '0',
                'Aktif' => '1',
                'PHK' => '0',
                'Mengundurkan_Diri' => '0',
            ],

            [
                'nama_pegawai' => 'Stain',
                'tanggal_lahir' => '2003-02-01',
                'jabatan' => 'Staff',
                'divisi' => 'IT',
                'Keuangan' => 'Null',
                'Marketing' => 'Null',
                'Produksi' => 'Null',
                'Gudang' => 'Null',
                'Delivery' => 'Null',
                'tanggal_masuk' => '2020-5-10',
                'cuti' =>  '0',
                'Aktif' => '1',
                'PHK' => '0',
                'Mengundurkan_Diri' => '0',
            ],

            [
                'nama_pegawai' => 'Jason',
                'tanggal_lahir' => '2001-12-20',
                'jabatan' => 'staff',
                'divisi' => 'IT',
                'Keuangan' => 'Null',
                'Marketing' => 'Null',
                'Produksi' => 'Null',
                'Gudang' => 'Null',
                'Delivery' => 'Null',
                'tanggal_masuk' => '2017-09-02',
                'cuti' =>  '0',
                'Aktif' => '1',
                'PHK' => '0',
                'Mengundurkan_Diri' => '0',
            ],
            [
                'nama_pegawai' => 'Riku',
                'tanggal_lahir' => '2002-03-23',
                'jabatan' => 'Manager',
                'divisi' => 'IT',
                'Keuangan' => 'Null',
                'Marketing' => 'Null',
                'Produksi' => 'Null',
                'Gudang' => 'Null',
                'Delivery' => 'Null',
                'tanggal_masuk' => '2019-09-02',
                'cuti' =>  '0',
                'Aktif' => '1',
                'PHK' => '0',
                'Mengundurkan_Diri' => '0',
            ],

            [
                'nama_pegawai' => 'Marshal',
                'tanggal_lahir' => '2002-03-12',
                'jabatan' => 'Staff',
                'divisi' => 'IT',
                'Keuangan' => 'Null',
                'Marketing' => 'Null',
                'Produksi' => 'Null',
                'Gudang' => 'Null',
                'Delivery' => 'Null',
                'tanggal_masuk' => '2017-10-05',
                'cuti' =>  '0',
                'Aktif' => '1',
                'PHK' => '0',
                'Mengundurkan_Diri' => '0',
            ],

            [
                'nama_pegawai' => 'Steven',
                'tanggal_lahir' => '2002-09-26',
                'jabatan' => 'Staff Manager',
                'divisi' => 'IT',
                'Keuangan' => 'Null',
                'Marketing' => 'Null',
                'Produksi' => 'Null',
                'Gudang' => 'Null',
                'Delivery' => 'Null',
                'tanggal_masuk' => '2017-09-02',
                'cuti' =>  '0',
                'Aktif' => '1',
                'PHK' => '0',
                'Mengundurkan_Diri' => '0',
            ],
            [
                'nama_pegawai' => 'Angela',
                'tanggal_lahir' => '2001-01-28',
                'jabatan' => 'Staff',
                'divisi' => 'IT',
                'Keuangan' => 'Null',
                'Marketing' => 'Null',
                'Produksi' => 'Null',
                'Gudang' => 'Null',
                'Delivery' => 'Null',
                'tanggal_masuk' => '2019-05-05',
                'cuti' =>  '0',
                'Aktif' => '1',
                'PHK' => '0',
                'Mengundurkan_Diri' => '0',
            ],

            [
                'nama_pegawai' => 'Markus',
                'tanggal_lahir' => '2001-04-21',
                'jabatan' => 'Staff',
                'divisi' => 'IT',
                'Keuangan' => 'Null',
                'Marketing' => 'Null',
                'Produksi' => 'Null',
                'Gudang' => 'Null',
                'Delivery' => 'Null',
                'tanggal_masuk' => '2017-07-09',
                'cuti' =>  '0',
                'Aktif' => '1',
                'PHK' => '0',
                'Mengundurkan_Diri' => '0',
            ],

            [
                'nama_pegawai' => 'Fiery',
                'tanggal_lahir' => '2001-05-22',
                'jabatan' => 'Staff',
                'divisi' => 'IT',
                'Keuangan' => 'Null',
                'Marketing' => 'Null',
                'Produksi' => 'Null',
                'Gudang' => 'Null',
                'Delivery' => 'Null',
                'tanggal_masuk' => '2019-08-01',
                'cuti' =>  '0',
                'Aktif' => '1',
                'PHK' => '0',
                'Mengundurkan_Diri' => '0',
            ],

            [
                'nama_pegawai' => 'Jack',
                'tanggal_lahir' => '2003-05-15',
                'jabatan' => 'Staff',
                'divisi' => 'IT',
                'Keuangan' => 'Null',
                'Marketing' => 'Null',
                'Produksi' => 'Null',
                'Gudang' => 'Null',
                'Delivery' => 'Null',
                'tanggal_masuk' => '2017-5-10',
                'cuti' =>  '0',
                'Aktif' => '1',
                'PHK' => '0',
                'Mengundurkan_Diri' => '0',
            ],

            [
                'nama_pegawai' => 'JoshSon',
                'tanggal_lahir' => '2003-05-14',
                'jabatan' => 'staff',
                'divisi' => 'IT',
                'Keuangan' => 'Null',
                'Marketing' => 'Null',
                'Produksi' => 'Null',
                'Gudang' => 'Null',
                'Delivery' => 'Null',
                'tanggal_masuk' => '2019-09-02',
                'cuti' =>  '0',
                'Aktif' => '1',
                'PHK' => '0',
                'Mengundurkan_Diri' => '0',
            ],

        ]);
    }

    public function select()
    {
        // $result = DB::select("SELECT * FROM books");
        // $result = DB::table('employees')->first();
        $result = DB::table('employees')->select('nama_pegawai','tanggal_masuk')->get();
        return view('Employees', ['employees' => $result]);
    }

    public function update()
    {
        // ...
        $result = DB::table('employees')->where('nama_pegawai', 'Ariq')
            ->update(
                [
                    'Mengundurkan_Diri' => '0',
                    'Aktif' => '1',
                    'Cuti' => '0',
                    'PHK' => '0'

                ]
            );
        dump($result);

        $result = DB::table('employees')->where('nama_pegawai', 'Lenon')
            ->update(
                [
                    'Mengundurkan_Diri' => '0',
                    'Aktif' => '1',
                    'Cuti' => '0',
                    'PHK' => '0'

                ]
            );
        dump($result);
    }

    public function delete()
    {
        // ...
        $result = DB::table('employees')->where('nama_pegawai', '=', 'Lenon')->delete();
        dump($result);
    }

    public function index()
    {
        $result = DB::table("employees")->get();
        // return view('Employees', ['employees' => $result]);
        return view('Employees', compact('result'));
    }
}
