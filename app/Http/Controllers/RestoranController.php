<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Restoran;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Response;

class RestoranController extends Controller
{
    public function createRestoMenu(Request $request){
        $resto      = new Restoran();

        $pesan = [
            'nama_resto.required'    => ['Nama Resto Wajib'],
            'alamat.required'        => ['Alamat Wajib'],
            'telp.required'          => ['Telp. Wajib'],
            'jam_buka.required'      => ['Jam Buka Wajib'],
        ];

        $request->validate([
            'nama_resto'    => ['required'],
            'alamat'        => ['required'],
            'telp'          => ['required'],
            'jam_buka'      => ['required'],
        ],$pesan);

        $resto->nama_resto  = $request->nama_resto;
        $resto->alamat      = $request->alamat;
        $resto->telp        = $request->telp;
        $resto->jam_buka    = $request->jam_buka;
        $resto->rating      = $request->rating;
        $resto->save();

        foreach($request->list_menu as $value){
            $menu = array(
                'resto_id'     => $resto->id,
                'nama_menu'    => $value['nama_menu'],
                'harga'        => $value['harga'],
                'kategori'     => $value['kategori'],
            );

            Menu::create($menu);            
        }

        $data = Menu::where('resto_id', $resto->id)->get();

        return response()->json([
            'status'    => 1,
            'pesan' => 'Berhasil ditambahkan',
            'resto' => $resto,
            'result' => $data,
        ], Response::HTTP_OK);
    }

    public function getRestoMenu($id){

        $resto = Restoran::where('id', $id)->first();
        if(!$resto){
            return $this->responError(0,"Menu Resto Tidak Ada !");
        }

        $menu = Menu::where('resto_id', $resto->id)->get();
        
        // $resto = Restoran::where('menu_id',$data->id)->get();
    
        return response()->json([
            'status'    => 1,
            'pesan' => 'Berhasil ditambahkan',
            'resto' => $resto,
            'menu' => $menu,
        ], Response::HTTP_OK);
    }

    public function getAllMenu(){

        $menu = Menu::all();

        return response()->json([
            'status' => 1,
            'pesan'  => "Berhasil mendapatkan semua menu",
            'result' => $menu
        ],Response::HTTP_NOT_FOUND);

    }

    public function responError($sts, $msg){
        
        return response()->json([
            'status' => $sts,
            'pesan'  => $msg
        ],Response::HTTP_NOT_FOUND);
    }

    
}
