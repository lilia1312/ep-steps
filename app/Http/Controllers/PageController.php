<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
class PageController extends Controller
{
    public function index(): Response
    {
        $pages = Page::all();
        return Inertia::render('Pages/Index', ['pages' => $pages]);
    }

    public function create(): Response
    {
        return Inertia::render('Pages/Create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        Page::create($validatedData);

        return redirect()->route('pages.index');
    }
}