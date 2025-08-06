<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurrentDateController extends Controller
{
    public function showCurrentDate()
    {
        $current_date = date('n月j日'); // 例: 8月6日
        return view('current-date', compact('current_date'));
    }
}
