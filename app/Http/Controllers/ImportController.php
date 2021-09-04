<?php

namespace App\Http\Controllers;

use App\Imports\ClientesImport;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function importForm()
    {
        return view('importExcel.index');
    }
    public function import(Request $request)
    {
        $file = request()->file;
        $import = new ClientesImport();
        Excel::import($import, $file);
        return view('importExcel.index', ['numRows' => $import->getRowCount()]);
        // Excel::import(new ClientesImport, $request->file);
        // return "record are umported successfully";
    }
}
