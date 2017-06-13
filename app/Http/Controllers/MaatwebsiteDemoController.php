<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use App\Model_items;
use App\Http\Requests;
use DB;
use PDF;
use App\Infogempa;
use Excel;

class MaatwebsiteDemoController extends Controller
{
	/**
     * Return View file
     *
     * @var array
     * Ambil view file importExport
     */
	public function importExport()
	{
		return view('importExport');
	}


	public function pdfview(Request $request)
    {
        $items = DB::table("infogempas")->get();
        view()->share('infogempas',$items);
        if($request->has('download')){
            $pdf = PDF::loadView('pdfview');
            return $pdf->download('pdfview.pdf');
        }
        return view('pdfview');
    }

	/**
     * File Export Code
     *
     * @var array
     * Download data dari database ke Excel (.xls, .xlsx, .csv)
     */
	public function downloadExcel(Request $request, $type)
	{
		$data = Infogempa::get()->toArray();
		return Excel::create('SIBMKG', function($excel) use ($data) {
			$excel->sheet('mySheet', function($sheet) use ($data)
	        {
				$sheet->fromArray($data);
	        });
		})->download($type);
	}

	/**
     * Import file into database Code
     *
     * @var array
     * Pecah sheets dari excel untuk kemudian dimasukkan kedalam Database
     */
	public function importExcel(Request $request)
	{
		if($request->hasFile('import_file')){
			$path = $request->file('import_file')->getRealPath();
			$data = Excel::load($path, function($reader) {})->get();

			// Jika data tidak kosong maka pecah data
			if(!empty($data) && $data->count()){
				foreach ($data->toArray() as $key => $value) {
				$insert[] = [
							'NO' => $value['no'],
							'TANGGAL' => $value['tanggal'],
							'WAKTU' => $value['waktu'],
							'LINTANG' => $value['lintang'], 
							'BUJUR' => $value['bujur'], 
							'KEDALAMAN' => $value['kedalaman'],
							'MAG' => $value['mag'],
							'MLV' => $value['mlv'],
							'Y' => $value['y'],
							'X' => $value['x'],
							'Z' => $value['z'],
							'KETERANGAN' => $value['keterangan'],
							];
				}
				if(!empty($insert)){
					Infogempa::insert($insert);
					return back()->with('success','Data berhasil ditambahkan.');
				}
			}
		}
		return back()->with('error','Gagal menambahkan data.');
	}
}