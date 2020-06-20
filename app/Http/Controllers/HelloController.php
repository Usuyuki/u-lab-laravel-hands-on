<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        return 'hello Controller';
    }

    public function varIndex()
    {
        $number = 5;
        $result = $number ** $number; // 5の5乗

        \Log::debug('5の5乗');
        \Log::debug($result); // 3125

        $result = $result ** $number; // 5の5乗の5乗

        \Log::debug('5の5乗の5乗');
        \Log::debug($result); // 3125 ** 5

        return $result;
    }

    public function strImplode()
    {
        $str1 = 'hello';
        $str2 = 'world';

        // $str1 .= $str2; // 'helloworld'

        // 文字列結合 1
        $implode = $str1 . ' ' . $str2 ; // hello world

        \Log::debug($implode);

        // 文字列結合 2
        // $implode = "{$str1} ああ {$str2}";

        return $implode;
    }


    public function arr2()
    {
        // $arr = [
        //     ['abc', 'edf'],
        //     ['ghi', 'jkl']
        // ];

        // object
        $arr = [
            "data" => ['abc', 'edf'],
            "meta" => ['ghi', 'jkl']
        ];

        // $data = $arr["data"]; // dataだけを取り出す

        return $arr;
    }

    public function foreachFunc()
    {
        $arr = [
            ['abc', 'edf'],
            ['ghi', 'jkl']
        ];

        $str = '';
        foreach ($arr as $value) { // $value = ['abc', 'edf'] 1行目
            $str .= $value[0];
            $str .= $value[1];
            $str .= ' ';
        }

        // TODO: abcedf ghijkl
        return $str;
    }

    public function foreachObjFunc()
    {
        // object
        $arr = [
            "data" => ['abc', 'edf'],
            "meta" => ['ghi', 'jkl']
        ];

        foreach ($arr as $key => $value) {
            // $key = "data"
            // $value = ['abc', 'edf']
            \Log::debug($key);
            \Log::debug($value);
        }

        return "ok";
    }

    public function exampleArr()
    {
        // 配列のkey名と値を表現する方法。
        $arr = [
            "キー名1" => "値1",
            "キー名2" => "値2",
            "キー名3" => "値3"
        ];

        // 比較演算子
        if ($num1 <= $num2) {

        } else if ($num1 >= $num2) {

        }
    }

    public function arrLast()
    {
        $arr = [1, 2, 4, 7, 9]; // 1次元

        $arr[] = 1000;

        // $arr = [1, 2, 4, 7, 9, 1000]
    }

    public function funcFunc()
    {
        $name = $this->getName();

        return 'My name is ' . $name;
    }

    public function getName()
    {
        return 'Hoge';
    }
}
