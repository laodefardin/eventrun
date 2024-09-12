<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class EventsController extends Controller
{

    public function dashboard()
    {
        // $events = Events::all();
        $events = Events::orderBy('date', 'desc')->paginate(6);
        return view('dashboard', compact('events'));
    }

    public function home()
    {
        // $events = Events::all();
        $events = Events::orderBy('date', 'desc')->get();
        return view('home', compact('events'));
    }

    public function index()
    {
        $events = Events::all();
        return view('events.index', compact('events'));
    }

    public function show($slug)
    {
        // cari event berdasarkan slug
        $event = Events::where('slug', $slug)->firstOrFail();
        return view('events.show', compact('event'));
    }

    public function eventshow($slug)
    {
        // cari event berdasarkan slug
        $event = Events::where('slug', $slug)->firstOrFail();
        return view('events.eventshow', compact('event'));
    }

    public function adminindex()
    {
        $query = Events::query();
        $query->select('events.*');
        $query->orderBy('date');
        $events = $query->get();

        return view('admin.events.index', compact('events'));
    }

    public function store(Request $request)
    {
        $event_name = $request->event_name;
        $category = $request->category;
        $topik = $request->topik;
        $date_event = $request->date;
        $location = $request->location;
        $price = $request->price;
        $price1 = str_replace('.', '', $price);
        $description = $request->description;

        $slug = Str::slug($event_name);

        if($request->hasFile('foto')){
            $foto = $event_name . "." . time() . "." . $request->file('foto')
            ->getClientOriginalExtension();
        }else{
            $foto = "";
        }

        try {
            $data = [
                'name' => $event_name,
                'slug' => $slug,
                'description' => $description,
                'date' => $date_event,
                'location' => $location,
                'categori' => $category,
                'topik' => $topik,
                'price' => $price1,
                'img' => $foto,
            ];
            // dd($data);
            $simpan = DB::table('events')->insert($data);
            if($simpan){
                if($request->hasFile('foto')){
                    $folderPath = "public/upload/events/";
                    $request->file('foto')->storeAs($folderPath, $foto);
                }
                return Redirect::back()->with(['success' => 'Data Berhasil Disimpan']);
            }
        } catch (\Exception $e) {
            return Redirect::back()->with(['warning' => 'Data Gagal Disimpan: '] . 
            $e->getMessage());
        }
    }

    public function delete($id){
        $event = DB::table('events')->where('id', $id)->first();
    if ($event && $event->img) {
        $filePath = Storage::delete('public/upload/events/' . $event->img); // 
    }

    $delete = DB::table('events')->where('id', $id)->delete();
        if($delete){
            return Redirect::back()->with(['success' => 'Data Berhasil Dihapus']);
        }else{
            return Redirect::back()->with(['warning' => 'Data Gagal Dihapus']);
        }
    }

    public function edit(Request $request){
        $id = $request->id;
        $event = DB::table('events')->where('id', $id)->first();
        return view('/admin.events.edit', compact('event'));
    }

    public function update($id, Request $request){
        $id = $request->id;
        $event_name = $request->event_name;
        $category = $request->category;
        $topik = $request->topik;
        $date_event = $request->date;
        $location = $request->location;
        $price = $request->price;
        $price1 = str_replace('.', '', $price);
        $description = $request->description;
        $old_foto = $request->old_foto;

        $slug = Str::slug($event_name);

        if($request->hasFile('foto')){
            $foto = $event_name . "." . time() . "." . $request->file('foto')
            ->getClientOriginalExtension();
        }else{
            $foto = $old_foto;
        }

        try {
            $data = [
                'name' => $event_name,
                'slug' => $slug,
                'description' => $description,
                'date' => $date_event,
                'location' => $location,
                'categori' => $category,
                'topik' => $topik,
                'price' => $price1,
                'img' => $foto,
            ];
        // dd($data);
        $update = DB::table('events')->where('id', $id)->update($data);

        if($update){
            if($request->hasFile('foto')){
                $folderPath = "public/upload/events/";
                $folderPathOld = "public/upload/events/";
                Storage::delete($folderPathOld);
                $request->file('foto')->storeAs($folderPath, $foto);
            }
            return Redirect::back()->with(['success' => 'Data Berhasil DiUpdate']);
        }
    } catch (\Exception $e) {
        return Redirect::back()->with(['warning' => 'Data Gagal DiUpdate']);
    }
}

}
