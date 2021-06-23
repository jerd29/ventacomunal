<?php

namespace App\Http\Controllers;

use App\Cambio;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class CambioController extends Controller
{
    public function index()
    {
        return view('cambio.index');
    }

    public function getCambio(Request $request)
    {
        if ($request->ajax()) {
            $data = Cambio::latest()->get();
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
