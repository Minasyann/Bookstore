<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = Customer::get();


        return view('dash.customers.index', ['customers' => $customer]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dash.customers.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'name' => $request['name'],
            'birth_date' => $request['birth_date'],
            'email' => $request['email'],
            'address' => $request['address'],
            'phone' => $request['phone'],
            'passport_num' => $request['passport_num']
        ];

        if($store = Customer::create($data)) {
            return redirect()->route("customers.index")->with('success', 'List created successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return view("dash.customers.show", ["customer" => $customer]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {

//        return $customer;

//        $one_customer = Customer::get()->where('customers.id','=', $customer['id']);
//        return view('dash.customers.edit', ['one_customer' => $one_customer]);

        return view("dash.customers.edit", ["customer" => $customer]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $data = [
            'name' => $request['name'],
            'birth_date' => $request['birth_date'],
            'email' => $request['email'],
            'address' => $request['address'],
            'phone' => $request['phone'],
            'passport_num' => $request['passport_num']
        ];

        $update  = $customer->update($data);
        if($update) {
            return redirect()->route('customers.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $delete =  $customer->delete();
        if($delete) {
            return redirect()->route('customers.index');
        }
    }
}
