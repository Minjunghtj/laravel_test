<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Test; // Modelと繋ぐ

use Illuminate\Support\Facades\DB;


class TestController extends Controller
{
    public function index()
    {
        $values = Test::all(); //Test->Model名

        $tests = DB::table('tests')
        ->select('id')
        ->get();

        dd($tests);
        // die+var_dumpコマンド, 処理を止めて変数の中身を表示する

        return view('tests.test',compact('values'));
        //compact関数→ 変数を渡すことができる
    }
}
