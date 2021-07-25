<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{

    public function myevent(){
        $event =DB::table("event")->get()->all();
        return view('acara.myevent',['event' => $event]);
    }

    //// function view
    public function form_event(){
        return view("acara.addevent");
    }


    public function insert_event(Request $request){

        $request->validate([
            'icon' => 'required',
            'judul_event' => 'required',
            'jenis_event' => 'required',
            'tanggal' => 'required', 'date',
            'waktu' => 'required',
            'lokasi'=>'required',
            'opsi_fee'=>'required',
        ]);

        $event=$request->input();
        // if($request->hasFile('icon')){
        //     $request->file('icon')->move('images/',$request->file('icon')->getClientOriginalName());
        //     $event->icon = $request->file('icon')->getClientOriginalName();
        //     $event->save();
        // }
        DB::table("event")->insert([
            "username"=>$request->session()->get("username"),
            "icon"=>$event["icon"],
            "judul_event"=>$event["judul_event"],
            "jenis_event" => $event ["jenis_event"],
            "tanggal" => $event["tanggal"],
            "waktu"=> $event["waktu"],
            "lokasi"=>$event["lokasi"],
            "opsi_fee"=>$event["opsi_fee"],
            "harga"=>$event["harga"],
            "keterangan"=>$event["keterangan"],
        ]);
        return redirect("/myevent");

    }
    public function form_edit($id){
        $username=DB::table("event")->where("id_event",$id)->first();
        return view("acara.editevent", ["event" => $username]);
    }
    public function update_event(Request $request){
        $event=$request->input();
        DB::table("event")->where("id_event",$event["id_event"])->update([
            "icon"=>$event["icon"],
            "judul_event"=>$event["judul_event"],
            "jenis_event" => $event ["jenis_event"],
            "tanggal" => $event["tanggal"],
            "waktu"=> $event["waktu"],
            "lokasi"=>$event["lokasi"],
            "opsi_fee"=>$event["opsi_fee"],
            "harga"=>$event["harga"],
            "keterangan"=>$event["keterangan"]
        ]);
        return redirect("/myevent");
    }

    public function delete_event(Request $request){
        $id=$request->input("id");
        DB::table("event")->where("id_event",$id)->delete();
        return redirect("/myevent");
    }

    public function list_event(){
        $event = DB::table("event")->get()->all();
        return view("acara.listevent", ["event" => $event]);
    }

    public function detail_event($id){
        $username = DB::table('event')->where("id_event", $id)->first();
        return view("acara.detailevent", ["event" => $username]);
    }

}
