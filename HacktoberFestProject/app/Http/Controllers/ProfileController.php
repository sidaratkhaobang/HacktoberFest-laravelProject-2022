<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        return view('profiles.index', []);
    }

    public function create() {
        $title = 'เพิ่มข้อมูลโปรไฟล์ผู้ใช้งาน';
        return view('profiles.form', [
            'title' => $title,
            'value' => '',
        ]);
    }
}
