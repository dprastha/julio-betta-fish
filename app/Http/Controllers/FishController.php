<?php

namespace App\Http\Controllers;

use App\Models\Fish;
use Illuminate\Http\Request;
use App\Http\Requests\FishRequest;
use Illuminate\Support\Str;


class FishController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fish = Fish::all();

        return view('pages.fish.index')->with([
            'fish' => $fish
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.fish.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FishRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama_ikan);
        $data['foto'] = $request->file('foto')->store(
            'assets/fish',
            'public'
        );

        Fish::create($data);
        return redirect()->route('fish.index');
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
        $fish = Fish::findOrFail($id);
        $data['slug'] = Str::slug($request->nama_ikan);
        $data['foto'] = $request->file('foto')->store(
            'assets/fish',
            'public'
        );

        return view('pages.fish.edit')->with([
            'fish' => $fish
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FishRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama_ikan);
        $data['foto'] = $request->file('foto')->store(
            'assets/fish',
            'public'
        );

        $fish = Fish::findOrFail($id);
        $fish->update($data);

        return redirect()->route('fish.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fish = Fish::findOrFail($id);
        $fish->delete();

        return redirect()->route('fish.index');
    }
}
