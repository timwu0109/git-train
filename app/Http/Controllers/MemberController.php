<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        return "兩條分支同時進行，準備解衝突"; 
    }

    public function create() 
    {
        return '新增資料'ㄤ
    }
}
