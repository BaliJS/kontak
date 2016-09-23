<?php

namespace Kontak\Http\Controllers;

use Illuminate\Http\Request;
use Kontak\Person;

class PersonController extends Controller
{
    public function index()
    {
        $people = Person::all();
        return view('person.index', compact('people'));
    }

    public function create()
    {
        return view('person.create');
    }

    public function store(Request $request)
    {
        Person::create($request->except(['_token']));

        return redirect()->route('people.index');
    }

    public function destroy($id, Request $request)
    {
        if ($request->ajax()) {
            $person = Person::find($id)->delete();
            return response()->json(compact('person'));
        }
    }
}
