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
        return '新增資料';
    }

    public function store()
    {
        return '儲存資料';
    }

    public function show() 
    {
        return '顯示使用者頁面才對';
    }

    public function edit()
    {
        return '編輯使用者資料'; 
    }

    public function update()
    {
        return '編輯完使用者存檔'
    }


}
