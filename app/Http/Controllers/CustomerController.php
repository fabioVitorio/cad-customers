<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
        $customers = Customer::paginate(10);
        return view('customers.index', compact('customers'));
    }

    
    public function create()
    {
        return view('customers.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email',
            'status' => 'required|in:ACTIVE,ARCHIVED'
        ]);

        Customer::create($request->all());

        return redirect()->route('customers.index')->with('success', 'Cliente cadastrado com sucesso!');
    }

    
    public function show(Customer $customer)
    {
        return view('customers.show', compact('customer'));
    }

    
    public function edit(Customer $customer)
    {
        return view('customers.edit', compact('customer'));
    }

    
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email,' . $customer->id,
            'status' => 'required|in:ACTIVE,ARCHIVED'
        ]);

        $customer->update($request->all());

        return redirect()->route('customers.index')->with('success', 'Cliente atualizado!');
    }

    
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customers.index')->with('success', 'Cliente removido!');
    }
}
