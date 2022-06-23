<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class tb_usersController extends Controller
{
    public function index()
    {
    	// mengambil data dari table tb_users
    	$tb_users = DB::table('tb_users')->get();
 
    	// mengirim data tb_users ke view index
    	return view('index',['tb_users' => $tb_users]);
    }
}