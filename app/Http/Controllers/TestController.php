<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        dd('test');

        // Eloquent（エロクアント）
        // 全件取得
        $values = Test::all();

        $count = Test::count();

        $first = Test::findOrFail(1);

        $whereBBB = Test::where('text', '=', 'bbb')->get();

        // クエリビルダ
        // コレクション型
        $queryBuilder = DB::table('tests')->where('text', '=', 'bbb')
        ->select('id', 'text')
        ->get();

        // dd…中身を見る
        dd($values, $count, $first, $whereBBB, $queryBuilder);

        // view…laravelのヘルパ関数
        return view('tests.test', compact('values'));
    }
}
