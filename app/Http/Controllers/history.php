<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class history extends Controller
{

    private function dateDiff($date1, $date2){
        //On ajoute une heure a $date1 pour etre sur le fuseau horraire francais
        $date1 = $date1 + 60*60;
        $retour = round(abs($date1 - $date2) /60);
        return $retour;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $historys = DB::table('commandes')
        ->join('boissons', 'commandes.boisson_id', '=', 'boissons.id')
        ->select('commandes.etat', 'boissons.nom', 'boissons.img_path', 'boissons.description', 'commandes.date_commande')
        ->where('etat', '=', 'termine')
        ->orderBy('commandes.date_commande', 'desc')
        ->get();

        foreach($historys as $history){
            $date1 = strtotime($history->date_commande);
            $now = strtotime(date('Y-m-d H:i:s'));
            $interval = $this->dateDiff($now, $date1);
            $history->dateDiff = 'Boisson livrée il y a '. $interval . ' minute(s)';
        }

        return view('history.history', ['historys' => $historys]);  
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
