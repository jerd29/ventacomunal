<?php

namespace App\Http\Controllers;

use App\Combo;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class ComboController extends Controller
{
    public function index()
    {
        return view('combo.index');
    }

    public function getCombo(Request $request)
    {
        if ($request->ajax()) {
            $data = Combo::with('jornada');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '
                    <a href="javascript:void(0)" class="edit btn btn-warning btn-sm">Edit</a> 
                    <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
}
