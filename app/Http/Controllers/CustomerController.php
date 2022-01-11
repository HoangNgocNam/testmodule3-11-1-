<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRequest;
use App\Http\Requests\UpdateRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customers.list',compact('customers'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(CreateRequest $request)
    {
        $customer = new Customer();
        $customer->id = $request->id;
        $customer->group = $request->group;
        $customer->name = $request->name;
        $customer->birthday = $request->birthday;
        $customer->gender = $request->gender;
        $customer->phone = $request->phone;
        $customer->card = $request->card;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->save();
        return redirect()->route('customers.index');
    }

    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.update', compact('customer'));
    }

    public function update(UpdateRequest $request,$id)
    {
        $customer = Customer::findOrFail($id);
        $customer->id = $request->id;
        $customer->group = $request->group;
        $customer->name = $request->name;
        $customer->birthday = $request->birthday;
        $customer->gender = $request->gender;
        $customer->phone = $request->phone;
        $customer->card = $request->card;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->save();
        return redirect()->route('customers.index');
    }

    public function delete($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect()->route('customers.index');
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $customers = Customer::where('name','like','%'.$search.'%')->get();
        return view('customers.list', compact('customers'));
    }
}
