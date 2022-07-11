<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\user\Device;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.dashboard.devices.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.dashboard.devices.create');
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
            'icone' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'required|string',
            'short_description' => 'required|string',
        ]);

        // storing this image
        $imageName = time().'.'.$request->picture->getClientOriginalExtension();
        $request->picture->move(public_path('devices'), $imageName);

        // storing this image
        $iconeName = time().'.'.$request->icone->getClientOriginalExtension();
        $request->icone->move(public_path('icones'), $iconeName);

        $validatedData['picture'] = $imageName;
        $validatedData['icone'] = $imageName;

        $user = Auth::user();

        $user->devices()->create($validatedData);

        return redirect()->route('user.device.store')->with('success', 'Device created successfully');

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
