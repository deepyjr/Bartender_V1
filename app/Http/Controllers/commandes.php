<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Commandes as commandesbdd;
use DB;

class commandes extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detailsCommandes = DB::table('commandes')
        ->join('boissons', 'commandes.boisson_id', '=', 'boissons.id')
        ->select('commandes.etat', 'boissons.nom', 'boissons.img_path', 'boissons.description')
        ->orderBy('commandes.date_commande', 'ASC')
        ->get();
        return view('currentOrders.currentOrders', compact('detailsCommandes'));   
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
        
        //newCommand  = request au format json
        $newCommand = $request->all();
        DB::table('commandes')->insert([
            'boisson_id' => $newCommand['boisson_id'],
            'user_id' => '1', 
            'etat' => 'En attente' 
            ]);

        return redirect()->route('commandes.index');

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
