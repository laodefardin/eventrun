<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EventsController extends Controller
{
    public function home()
    {
        $events = Events::all();
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
        
    }
    
}
