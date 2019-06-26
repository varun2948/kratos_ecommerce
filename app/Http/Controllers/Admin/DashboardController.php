<?php
namespace App\Http\Controllers\Admin; // namespace call to this folder

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\View; 

class DashboardController extends Controller
{
   public function index()
   {
   		// $data =[];
   		// $date = \Carbon\Carbon::now();
        // $data['totafacts'] =Facts::select('id')->count();
        // $data['totapoll'] =PublicPoll::select('id')->count();
        // $data['totalsurvey'] =Survey::select('id')->count();
        // $data['totaluser'] =Auth::user('id')->count();

        //dd($data['totaluser']);
        $data= [];
   		return View::make('admin.dashboard.index');

   }
}