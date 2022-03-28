<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Datatables;
use App\Models\User;
use Yajra\Datatables\Datatables;

class EloquentController extends Controller
{
    public function index()
    {
        return view('datatables.eloquent.multi-filter-select');
    }

    public function getMultiFilterSelectData()
    {
        $users = User::select(['id', 'name', 'email','age','status','TCKN','created_at', 'updated_at']);

        return Datatables::of($users)->make(true);
    }
}