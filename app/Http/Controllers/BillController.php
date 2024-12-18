<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use Illuminate\Http\Request;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bills = Bill::get();

         return view ('bills.preview',compact('bills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return create view inside bills folder
        return view('bills.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        // $data = $request->validate([
        // dd($request);

        // $request->validate([
        //     'company_name'=>'required',
        //     'company_location'=>'required',
        //     'contact'=>'required|numeric',
        //     'product_name'=>'required',
        //     'product_price'=>'required',
        //     'product_discount'=>'required',

        // ]);

    //     $newbills = Bill::create($data);


    //     return redirect(route('bill.index'));
    // }


        // $newbills = Bill::create($data);
        Bill::create($request->all());
        return redirect()->route('bills.index');
        // return view('bills.preview');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bill $bill)
    {
        $bill->delete();
        return redirect()->route('bills.index');

    }

    public function billcalculation(string $id)
    {
        Bill::get($id);
    }
}



// public function create()
//     {


//         return view('bills.create');
//     }




//     public function store(Request $request)
//     {

//         $data = $request->validate([
//             'name' => 'required ',
//             'location' => 'required ',
//             'contact' => 'required |numeric',
//             'productname' => 'required',
//             'price' => 'required',
//             'discount' => 'required'
//         ]);



//         $newbills = Bill::create($data);


//         return redirect(route('bill.index'));
//     }
