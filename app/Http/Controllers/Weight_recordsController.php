<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Weight_records;

class Weight_recordsController extends Controller
{//frontというクラス名だとトレーニングを選択した際に同名のエラーの可能性あり

    public function front(Weight_records $weight_records)//インポートWeight_recordsをインスタンス化して使用
    {
        return $weight_records->get();//$の中身を戻り値にする。
    }//
}
