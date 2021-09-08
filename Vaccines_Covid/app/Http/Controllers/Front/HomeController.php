<?php


namespace App\Http\Controllers\Front;


use App\Http\Controllers\Controller;
use App\Models\Covid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function store(Request $request){
        $request ->validate([
           'id_card'=>'required',
            'name'=>'required',
            'date_year'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'allergy_history'=>'required',
        ]);
        Covid::create($request->all());
        return redirect()->route('index')
        ->with('success','Bạn đăng kí thành công!');
    }

    public function getDashboard()
    {
        $userss = Covid::all();
        return view('index', compact('userss'));
    }

    public function search(Request $request){
        $search = $request ->get('search');
        $userss = DB::table('users')->where('name','like','%'.$search.'%')->paginate(10);

        return view('index',compact('userss'));
    }
}
