<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class tb_golonganController extends Controller
{
    public function index()
    {
    	// mengambil data dari table tb_golongan
    	$tb_golongan = DB::table('tb_golongan')->get();
 
    	// mengirim data tb_golongan ke view index
    	return view('index',['tb_golongan' => $tb_golongan]);
    }
}