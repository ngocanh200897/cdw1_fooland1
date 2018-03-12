<?php 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class ExampleController extends Controller{

    public function index(){
     $subject = '1,4,3,5,7,6,2,8,1,4,3,2';
        $pattern = '/.*/';
        if (preg_match_all($pattern, $subject,$matches)>0) {
            echo 'trùng khớp';
        } else {
            echo 'Không trùng khớp';
        }

        echo "<pre>";
        print_r($matches);
        echo "</pre>";
    }
}