<?php

namespace App\Http\Controllers;

use App\Exports\PagosExport;
use App\Imports\ClientesImport;
use App\Imports\ClientessImport;
use App\Imports\PagosImport;
use App\Imports\UpdatePagosImport;
use App\Models\Base_pago;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function importForm()
    {
        return view('importExcel.index');
    }
    public function importCliente(Request $request)
    {
        // $file = request()->file;
        // $import = new ClientesImport();
        // Excel::import($import, $file);
        // return view('importExcel.index', ['numRows' => $import->getRowCount()]);
        $file = $request->file;
        Excel::import(new ClientesImport, $file);
        return "La importacion de Clientes a sido satisfactoria";
    }
    public function importPago(Request $request)
    {
        $file = $request->file;
        $import = new PagosImport;
        Excel::import($import, $file);
        return view('importExcel.index', ['numRows' => $import->getRowCount()]);

        // return "La importacion de Pagos a sido satisfactoria";
    }
    public function updatePago(Request $request)
    {

        $file = $request->file;

        Excel::import(new UpdatePagosImport, $file);
        return "La importacion de Pagos a sido satisfactoria";
    }
    public function export()
    {
        return Excel::download(new PagosExport, 'PagosExport.xlsx');
    }
}
