<?php

namespace App\Http\Controllers;

use App\Jornada;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;



class JornadaController extends Controller
{
    public function index()
    {
        return view('jornadas.index');
    }

    public function getJornada(Request $request)
    {
        if ($request->ajax()) {
            $data = Jornada::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '
                    <a href="javascript:void(0)" id ="entrar-jornada" class="success btn btn-success btn-sm">Entrar</a> 
                    <a href="javascript:void(0)" class="edit btn btn-warning btn-sm">Edit</a> 
                    <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
}
