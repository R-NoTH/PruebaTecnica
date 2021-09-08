<?php

namespace App\Http\Controllers;

use App\Exports\PagosExport;
use App\Imports\ClientesImport;
use App\Imports\ClientessImport;
use App\Imports\PagosImport;
use App\Imports\UpdatePagosImport;
use App\Models\Base_cliente;
use App\Models\Base_pago;
use App\Models\Cliente;
use App\Models\Registro_actualizacione;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function importForm()
    {
        //obtengo el ultimo registro del modelo Registro_actualizacione
        $updateImports = Registro_actualizacione::orderBy('id', 'desc')->first();
        return view('importExcel.index', compact('updateImports'));
    }
    public function importCliente(Request $request)
    {
        $file = $request->file;
        $importClientes = new ClientesImport;

        Excel::import($importClientes, $file);

        return view('importExcel.index', ['numRows' => $importClientes->getRowCount()]);
    }
    public function importPago(Request $request)
    {
        $file = $request->file;
        $import = new PagosImport;

        Excel::import($import, $file);

        return view('importExcel.index', ['numRows' => $import->getRowCount()]);
    }
    public function updatePago(Request $request)
    {
        $file = $request->file;
        $update = new UpdatePagosImport;

        Excel::import($update, $file);
        $date = Carbon::now()->toDateTimeString();
        Registro_actualizacione::create([
            'registroActualizacion' => $date,
        ]);

        return view('importExcel.index');
    }
    public function export()
    {
        $db = new Base_cliente();
        $arrayConsulta = $db->consultaIdRepetidos();
        foreach ($arrayConsulta as  $value) {
            dd($value->dni);
        }
        $pagosExport = new PagosExport;

        return Excel::download($pagosExport, 'PagosExport.xlsx');
    }
    public function frecuanciaBaseCliente()
    {
        $db = new Base_cliente();
        $arrayConsulta = $db->consultaIdRepetidos();
        asort($arrayConsulta);

        return view('showData.showFrecuencia', compact('arrayConsulta'));
    }
}
