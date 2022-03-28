<?php

namespace App\Http\Controllers;
use App\Models\User;
use Yajra\Datatables\Datatables;
use App\DataTables\UsersDataTable;
use App\Http\Requests;

class UsersController extends Controller
{
    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('index');
    }
    public function users()
    {
        return Datatables::of(User::query())->make(true);
    }
    public function getMultiFilterSelect()
    {
        return view('datatables.eloquent.multi-filter-select');
    }

    public function getMultiFilterSelectData()
    {
        $users = User::select(['id', 'name', 'email', 'created_at', 'updated_at']);

        return Datatables::of($users)->make(true);
    }
    
}
