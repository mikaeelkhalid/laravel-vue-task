<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\PostalCodeConflictValidator;
// use Illuminate\Support\Facades\Validator;


class PostalCodeConflictValidatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostalCodeConflictValidator  $postalCodeConflictValidator
     * @return \Illuminate\Http\Response
     */
    public function show(PostalCodeConflictValidator $postalCodeConflictValidator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostalCodeConflictValidator  $postalCodeConflictValidator
     * @return \Illuminate\Http\Response
     */
    public function edit(PostalCodeConflictValidator $postalCodeConflictValidator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PostalCodeConflictValidator  $postalCodeConflictValidator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostalCodeConflictValidator $postalCodeConflictValidator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostalCodeConflictValidator  $postalCodeConflictValidator
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostalCodeConflictValidator $postalCodeConflictValidator)
    {
        //
    }
}
