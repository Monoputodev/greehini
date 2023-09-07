<?php

namespace App\Http\Controllers;

use App\Models\Querry;
use Illuminate\Http\Request;

class QuerryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $queries = Querry::all();

        return view('admin.pages.querry.index', compact('queries'));
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
//  dd($request->all());
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'product_id' => 'required|string|max:255',
            'quantity' => 'nullable|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:20',
            'comment' => 'nullable|string',

        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = $file->getClientOriginalName(); // Get the original file name

            // Save the file to the specified folder (uploads/attachment)
            $file->move(base_path('/uploads/clients/attachment'), $filename);

            // You can save the filename to the database if needed
            $data['file'] = $filename;
        }
        // dd($data);
        Querry::create($data);

        return redirect()
            ->back()
            ->with('success', 'Your query has been submitted successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Querry  $querry
     * @return \Illuminate\Http\Response
     */
    public function show(Querry $querry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Querry  $querry
     * @return \Illuminate\Http\Response
     */
    public function edit(Querry $querry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Querry  $querry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Querry $querry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Querry  $querry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Querry $querry)
    {
        //
    }
}
