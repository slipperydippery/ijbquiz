<?php

namespace App\Http\Controllers;

use App\Measure;
use App\Answeroption;
use Illuminate\Http\Request;

class ApiMeasureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $measure = Measure::create([
            'name' => $request['measure']['name'],
            'description' => $request['measure']['description'],
            'link' => $request['measure']['link'],
            'code' => 'code'
        ]);
        foreach ($request['measure']['answeroptions'] as $answeroption) {
            $answeroption = Answeroption::find($answeroption['id']);
            $answeroption->measures()->save($measure);
        }
        return $measure;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  Measure $measure
     * @return \Illuminate\Http\Response
     */
    public function show(Measure $measure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  Measure $measure
     * @return \Illuminate\Http\Response
     */
    public function edit(Measure $measure)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  Measure $measure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Measure $measure)
    {
        $measure->name = $request['measure']['name'];
        $measure->description = $request['measure']['description'];
        $measure->link = $request['measure']['link'];
        $measure->code = 'code';
        $measure->save();

        $measure->answeroptions()->detach();

        foreach ($request['measure']['answeroptions'] as $answeroption) {
            $answeroption = Answeroption::find($answeroption['id']);
            $answeroption->measures()->save($measure);
        }
        return $measure;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  Measure $measure
     * @return \Illuminate\Http\Response
     */
    public function destroy(Measure $measure)
    {
        $measure->delete();
    }
}
