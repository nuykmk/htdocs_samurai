<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        // return 'Hello, world!';
        // return view('index');
        $name = '侍  太郎';
        $languages = ['HTML', 'CSS', 'JavaScript', 'php'];

        throw new Exception('例外処理が発生しました！');

        // 変数$nameをindex.blade.phpファイルに渡す
        // return view('index', compact('name'));

        // 変数$name、$languagesをindex.blade.phpファイルに渡す
        return view('index', compact('name', 'languages'));
    }
}
