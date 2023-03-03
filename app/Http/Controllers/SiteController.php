<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Site::all();
        return view('pages.sites.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.sites.form', ['data' => []]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Site::create($request->only('title', 'domain'));
        return redirect('/sites');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Site::find($id);
        return view('pages.sites.form', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Site::find($id);
        return view('pages.sites.form', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Site::find($id)->update($request->only('title', 'domain'));
        return redirect('/sites');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Site::find($id)->delete();
        return redirect('/sites');
    }
}
