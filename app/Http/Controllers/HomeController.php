<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use App\Model_items;
use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use PDF;

class HomeController extends Controller {

	public function index()
	{
		$data  = Model_items::paginate(10);
    	   return View::make('index')->with('dataList', $data);
	}

	public function tambahData()
	{
		return view('importExport');
	}

	
}