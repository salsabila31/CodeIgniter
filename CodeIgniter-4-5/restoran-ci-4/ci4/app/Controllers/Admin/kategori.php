<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class kategori extends BaseController
{
    public function index()
    {
        //return view('welcome_message');
        echo "<h1>Belajar ci4</h1>";
    }
    public function select()
    {
        echo "<h1>menampilkan semua data</h1>";
    }
    public function selectWhere($id = null)
    {
        echo "<h1>menampilkan data yang dipilih $id</h1>";
    }
    public function formInsert()
    {
        echo "menampilkan form insert";
    }
    public function formUpdate()
    {
        echo "menampilkan form update";
    }
    public function update($id = null)
    {
        echo "proses update data $id";
    }
    public function delete($id = null)
    {
        echo "proses delete data";
    }
}
