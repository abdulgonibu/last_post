<?php

namespace App\Http\Controllers;

use App\Models\UserGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PHPUnit\TextUI\XmlConfiguration\Group;

class GroupController extends Controller
{
    public function index()
    {
        $this->data['groups'] = UserGroup::all();
        return view('group.group', $this->data);
    }

    public function create()
    {
        return view('group.create');
    }

    public function store(Request $request)
    {


        $formData = $request->all();
        if (UserGroup::create($formData)) {
            Session::flash('message', 'Group Created Successfully');
        }

        return redirect()->to('group');
    }

    public function destroy($id)
    {
        if (UserGroup::find($id)->delete()) {
            Session::flash('message', 'Group Deleted Successfully');
        }

        return redirect()->to('group');
    }
}
