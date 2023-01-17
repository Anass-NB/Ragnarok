<?php

namespace App\Http\Controllers;

use App\Models\Directeur;
use Illuminate\Http\Request;

class DirecteurController extends Controller
{
  function __construct()
  {
    $this->middleware('permission:directeurrs', ['only' => ['index']]);
    $this->middleware('permission:add-directeur', ['only' => ['create', 'store']]);
    $this->middleware('permission:edit-directeur', ['only' => ['edit', 'update']]);
    $this->middleware('permission:delete-directeur', ['only' => ['destroy']]);
  }

  public function index()
  {
    return view("all-directeurs")->with([
      "directeurs" => Directeur::all(),
    ]);
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
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Directeur  $directeur
   * @return \Illuminate\Http\Response
   */
  public function show(Directeur $directeur)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Directeur  $directeur
   * @return \Illuminate\Http\Response
   */
  public function edit(Directeur $directeur)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Directeur  $directeur
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Directeur $directeur)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Directeur  $directeur
   * @return \Illuminate\Http\Response
   */
  public function destroy(Directeur $directeur)
  {
    //
  }
}
