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
        $customers = Customer::select()->get();

        return view('dash.customers.index', ['customers' => $customers]);
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
            return redirect()->route('customers.index')->with('success', 'Customer created successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        $one_customer = Customer::select()->where('customers.id', '=', $customer['id'])->get();

        $one_customer = json_decode($one_customer, true)[0];
        return view('dash.customers.show', ['one_customer' => $one_customer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        $one_customer = Customer::select()->where('customers.id', '=', $customer['id'])->get();

        $one_customer = json_decode($one_customer, true)[0];
        return view('dash.customers.edit', ['customer' => $one_customer]);



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

        $update = $customer->update($data);
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
        $delete = $customer->delete();
        if ($delete) {
            return redirect()->route('customers.index');
        }
    }
}
