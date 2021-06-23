<?php

namespace App\Http\Controllers;

use App\Venta;
use Yajra\DataTables\DataTables;

use Illuminate\Http\Request;

class VentaController extends Controller
{

    public function index()
    {
        return view('venta.list');
    }


    public function getVenta(Request $request)
    {
        if ($request->ajax()) {
            $data = Venta::with('combo');
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
