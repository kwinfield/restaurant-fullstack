<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Member;

class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $members = Member::paginate(10);
        return view('admin/members/all', [
            'members' => $members
        ]);
    }
    public function create(){
        return view('members/create');
    }
    public function store(){
        request()->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string'],
            'email' => ['string'],
            'phone_number' => ['string']
        ]);
        $member = new Member();
        $member->fname = request('fname');
        $member->lname = request('lname');
        $member->email = request('email');
        $member->phone_number = request('phone_number');
        $member->save();


        return redirect('/offers');
    }
    public function edit($id){
        $member = Member::find($id);
        return view('admin/members/edit', [
            'member' => $member,
        ]);
    }

    public function update($id){
        request()->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string'],
            'email' => ['string'],
            'phone_number' => ['string']
        ]);

        $member = Member::find($id);
        $member->fname = request('fname');
        $member->lname = request('lname');
        $member->email = request('email');
        $member->phone_number = request('phone_number');
        $member->save();

        return redirect('/admin/members');
        
    }
    public function delete($id){
        $member = Member::find($id);
        $member->delete();
        return redirect('/admin/members');
    }
}
