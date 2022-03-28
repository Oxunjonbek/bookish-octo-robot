<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Datatables;
use App\Models\User;
use Yajra\Datatables\Datatables;

class DatatablesController extends Controller
{
        public function getIndex()
        {
            return view('datatables.index',[
                'anyData'=>'datatables.data'
            ]);
        }


        public function anyData()
        {
            return Datatables::of(User::query())->make(true);
        }
    }
