<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index()
    {
        $addresses = Address::where('user_id', \Auth::user() ? \Auth::user()->id : 0)->get();
        return view('address.index', ['addresses' => $addresses]);
    }

    public function create()
    {
        return view('address.create');
    }

    public function show(Address $address)
    {
        return view('address/show', ['address' => $address]);
    }

    public function update(Request $request, Address $address)
    {

        //Save database data
//        $director_name = $request->input('name');
//
//        //create new director method
//        $director->name = $director_name;
//        $director->updated_at = now();
//        $director->save();
//
//        //return redirect()->route('directors.index');
//        //redirect to the actor list
//        return redirect()->route('directors.show', ['director' => $director->id]);
    }

    public function registerAddress(Request $request)
    {
        $this->validate($request, [
            'zip-code'     =>   'required|string|max:9',
            'address'      =>   'required|string|min:1',
            'number'       =>   'required|int|min:1',
            'neighborhood' =>   'required|string|min:1',
            'city'         =>   'required|string|min:1',
            'state'        =>   'required|string|max:2',
        ]);

        $user = $request->user();
        $fields = $request->all();

        $address               = new Address();
        $address->user_id      = $user->id;
        $address->zip_code     = $fields['zip-code'];
        $address->address      = $fields['address'];
        $address->number       = $fields['number'];
        $address->complement   = $fields['complement'];
        $address->neighborhood = $fields['neighborhood'];
        $address->city         = $fields['city'];
        $address->state        = $fields['state'];

        $address->save();

        return redirect()->route('address.index')->with('status', 'Endereço Cadastrado com sucesso !');

    }
}