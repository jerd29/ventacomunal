<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ConsejoComunal;
use Yajra\DataTables\DataTables;

class ConsejoComunalController extends Controller
{


    public function index()
    {
        return view('consejocomunal.index');
    }

    public function getConsejoComunal(Request $request)
    {
        if ($request->ajax()) {
            $data = ConsejoComunal::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-warning btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
}