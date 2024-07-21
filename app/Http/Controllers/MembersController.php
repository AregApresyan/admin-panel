<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MembersController extends Controller
{
    public function index()
    {
        $members = Member::all();

        return view("members.index", compact("members"));
    }

    public function create()
    {
        return view("members.create");
    }
    public function store(Request $request)
    {

    }
    public function edit($id)
    {
    return view("members.edit");
    }
    public function update(Request $request, $id)
    {

    }
    public function destroy($id)
    {

    }

}
