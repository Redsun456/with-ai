<?php

namespace App\Http\Controllers;

use App\Models\ParentInfo;
use Illuminate\Http\Request;

class ParentInfoController extends Controller
{
    public function index()
    {
        $parentInfos = ParentInfo::all();
        return view('parent_infos.index', compact('parentInfos'));
    }

    public function create()
    {
        return view('parent_infos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'father_name' => 'required|string|max:255',
            'father_birthday' => 'required|date',
            'father_occupation' => 'required|string|max:255',
            'father_salary' => 'required|numeric',
            'father_address' => 'required|string|max:255',
            'father_contact_number' => 'required|string|max:20',

            'mother_name' => 'required|string|max:255',
            'mother_birthday' => 'required|date',
            'mother_occupation' => 'required|string|max:255',
            'mother_salary' => 'required|numeric',
            'mother_address' => 'required|string|max:255',
            'mother_contact_number' => 'required|string|max:20',
        ]);

        ParentInfo::create($request->all());

        return redirect()->route('parent_infos.index')->with('success', 'Parent information saved successfully.');
    }

    public function edit(ParentInfo $parentInfo)
    {
        return view('parent_infos.edit', compact('parentInfo'));
    }

    public function update(Request $request, ParentInfo $parentInfo)
    {
        $request->validate([
            'father_name' => 'required|string|max:255',
            'father_birthday' => 'required|date',
            'father_occupation' => 'required|string|max:255',
            'father_salary' => 'required|numeric',
            'father_address' => 'required|string|max:255',
            'father_contact_number' => 'required|string|max:20',

            'mother_name' => 'required|string|max:255',
            'mother_birthday' => 'required|date',
            'mother_occupation' => 'required|string|max:255',
            'mother_salary' => 'required|numeric',
            'mother_address' => 'required|string|max:255',
            'mother_contact_number' => 'required|string|max:20',
        ]);

        $parentInfo->update($request->all());

        return redirect()->route('parent_infos.index')->with('success', 'Parent information updated successfully.');
    }

    public function destroy(ParentInfo $parentInfo)
    {
        $parentInfo->delete();
        return redirect()->route('parent_infos.index')->with('success', 'Parent information deleted successfully.');
    }
}
