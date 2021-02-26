<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWsl_infoRequest;
use App\Http\Requests\UpdateWsl_infoRequest;
use App\Models\wsl_info;
use Illuminate\Http\Request;

class WslInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wsl_infos = wsl_info::all();

        return view('wsl-info.index', compact('wsl_infos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wsl-info.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWsl_infoRequest $request)
    {
        wsl_info::create($request->validated());

        return redirect()->route('wsl-infos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\wsl_info  $wsl_info
     * @return \Illuminate\Http\Response
     */
    public function show(wsl_info $wsl_info)
    {
        return view('wsl-info.show', compact('wsl_info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\wsl_info  $wsl_info
     * @return \Illuminate\Http\Response
     */
    public function edit(wsl_info $wsl_info)
    {
        return view('wsl-info.edit', compact('wsl_info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\wsl_info  $wsl_info
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWsl_infoRequest $request, wsl_info $wsl_info)
    {

        $wsl_info->update($request->validated());

        return redirect()->route('wsl-infos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\wsl_info  $wsl_info
     * @return \Illuminate\Http\Response
     */
    public function destroy(wsl_info $wsl_info)
    {
        $wsl_info->delete();

        return redirect()->route('wsl-infos.index');
    }
}
