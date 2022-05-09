<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Apartment;
use App\Models\IpAddress;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //controllo se nella query ci sono le selezioni

        $room = $request->query('room') ?? null;
        $bed = $request->query('bed') ?? null;

        $query = Apartment::where('visible', 1);

        if ($room && !$bed) $query->where('room', '>=', +$room);
        else if ($bed && !$room) $query->where('bed', '>=', +$bed);
        else if ($room && $bed) $query->where([
            ['room', '>=', +$room], ['bed', '>=', +$bed]
        ]);

        $apartments = $query->with('position')->with('packs')->get();

        if (!$apartments) return response('NOT FOUND', 404);

        return response()->json($apartments);
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
    public function show(Request $request, $id)
    {
        //controllo se nella query ci sono le selezioni
         $ip_address = $request->ip();

         $result_ip = IpAddress::where('ip','=',$ip_address)->where('apartment_id','=',$id)->first();
        
         if($result_ip == null || Carbon::parse($result_ip['created_at'])->addHours(24) < Carbon::Now()){

            $new_ip =  new IpAddress();
            $new_ip->ip = $ip_address;
            $new_ip->apartment_id = $id;
            $new_ip->save(); 
         }

        $query = Apartment::where('id', $id)->with('position')->with('packs')->first();

        if (!$query) return response('NOT FOUND', 404);

        return response()->json($query);
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
