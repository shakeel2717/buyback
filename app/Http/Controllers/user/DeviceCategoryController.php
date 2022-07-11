<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeviceCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.dashboard.device.category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.dashboard.device.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'picture' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'icon' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'required|string',
            'short_description' => 'required|string',
        ]);

        // storing this image
        $imageName = time().'.'.$request->picture->getClientOriginalExtension();
        $request->picture->move(public_path('category/devices'), $imageName);

        // storing this image
        $iconName = time().'.'.$request->icon->getClientOriginalExtension();
        $request->icon->move(public_path('category/icons'), $iconName);

        $validatedData['picture'] = $imageName;
        $validatedData['icon'] = $iconName;

        $user = Auth::user();

        $user->deviceCategories()->create($validatedData);

        return redirect()->route('user.device.category.index')->with('success', 'Device Category created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
