<?php

namespace App\Http\Controllers;

use App\Models\Phonebook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use DB;

class PhonebookController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phonebooks = Phonebook::orderBy('id')->paginate(10);
        // $name = Phonebook::select("id", DB::raw("CONCAT(firstname, ' ', lastname) as fullname"))->get();
        // dd($phonebook);

        return view('index', compact('phonebooks'));
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {

        return view('create');
    }





    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'number' => 'required | numeric | digits:10',
        ]);

        Phonebook::create($request->post());

        return redirect()->route('views.index')->with('success', 'Phone Address has been created successfully.');
    }




    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Phonebook $phonebook)
    {
        return view('views.show', compact('phonebook'));
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($phonebook)
    {
        // dd($phonebook);
        $phonebook = Phonebook::find($phonebook);

        return view('edit', compact('phonebook'));
    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $phonebook)
    {
        $phonebook = Phonebook::find($phonebook);

        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'number' => 'required | numeric | digits:10',
        ]);

        $phonebook->fill($request->post())->save();

        return redirect()->route('views.index')->with('success', 'Phonebook address Has Been updated successfully');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($phonebook)
    {
        $phonebook = Phonebook::find($phonebook);

        $phonebook->delete();

        return redirect()->route('views.index')->with('success', 'Phonebook Address has been deleted successfully');
    }
}
