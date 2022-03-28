<?php
// dd(2323);
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\User;
use Yajra\Datatables\Datatables;
use App\DataTables\UsersDataTable;

class HomeController extends Controller
{
    public function index()
        // UsersDataTable $dataTable)
    {
        // $data = $dataTable->render('users');
        $users = User::all();
        return view('home',compact('users'));
    }
    public function users()
    {
        return Datatables::of(User::query())->make(true);
    }
}