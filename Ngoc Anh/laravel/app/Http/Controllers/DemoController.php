<?php 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class DemoController extends Controller
{
	public function index()
	{
		return view('API-Demo/index');
	}
	public function loaddata()
	{
		$html = file_get_contents('http://el.tdc.edu.vn/');
		$pattern = '/<h4>(.*?)<\/h4>/';

		preg_match_all( $pattern, $html, $data);

		return view('API-Demo/index',['data'=>$data[0]]);
	}
}
