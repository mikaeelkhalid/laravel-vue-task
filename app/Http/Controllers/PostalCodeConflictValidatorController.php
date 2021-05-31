<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\PostalCodeConflictValidator;
// use Illuminate\Support\Facades\Validator;


class PostalCodeConflictValidatorController extends Controller
{
  
    public function index()
    {
        $categories = Sale::select('category')->distinct()->get();
        
        return response()->json(['message'=> "categories fetch success", 'status_code'=> 200, "data"=> $categories ]);
    }

    public function getStats()
    {
        $stats = Sale::select('stats')->distinct()->get();
        
        return response()->json(['message'=> "stats fetch success", 'status_code'=> 200, "data"=> $stats ]);
    }

    public function getSales(Request $request)
    {
        // dd($request->category);

        $validation = Validator::make($request->all(), [ 
        
            'category' => 'required'
        
        ]);

        if ($validation->fails())
        {
            return response()->json(["Error"=> $validation->messages()]);
        }
        else {


                $stats = Sale::select('stats')->distinct()->get();

                $stats= json_decode($stats);

                // dd($stats);

                $stats_array = [];

                for ($i = 0; $i < count($stats); $i++){

                    $stats_array[$i] = $stats[$i]->stats;

                }

                $total_cat= $request->category;
            
               // dd($total_cat);

                $data=[];

        foreach($total_cat as $cat){

            foreach($stats_array as $item) {

                $result = Sale::where('stats', $item)->where('category',$cat)->count();
                    
                array_push($data, $result);

                }

            }

            return response()->json(['message'=> "data fetched", 'status_code'=> 200, 'data'=> $data]) ;


        }
    } 

    public function store(Request $request)
    {

    $validation = Validator::make($request->all(), [ 
        'sales_guy_id' => 'required',
        'postal_code' => 'required | min:5 | max:5',
        'stats' => 'required',
        'category' => 'required',
    
    ]);

    if ($validation->fails()){

        return response()->json(["Error"=> $validation->messages()]);

    } else{
 
        // dd(substr($request->postal_code, 0,3));

       $result = Sale::Where('postal_code', 'LIKE', '%'.substr($request->postal_code, 0,3).'%')->get();
  
       // dd($result);
        
       if (count($result)>0){

           return response()->json(['message'=> "Conflict Found With The Following Records", 'status_code'=> 401, 'conflicting_records'=>$result, 'new_records'=>$request->all()]) ;
       
        }
        
        else{

        $data= new Sale();

        $data->sales_guy_id = $request->sales_guy_id;
        $data->postal_code = $request->postal_code;
        $data->stats = $request->stats;
        $data->category = $request->category;

        $data->save();
        return response()->json(['message'=> "Your new Sale data is Succesfully Stored. No conflicts were found", 'status_code'=> 200, 'data'=>$data]) ;
       
    }

  }

}

    
}
