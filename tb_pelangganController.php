<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class tb_pelangganController extends Controller
{
    public function index()
    {
    	// mengambil data dari table tb_pelanggan
    	$tb_pelanggan = DB::table('tb_pelanggan')->get();
 
    	// mengirim data tb_pelanggan ke view index
    	return view('index',['tb_pelanggan' => $tb_pelanggan]);
    }
}