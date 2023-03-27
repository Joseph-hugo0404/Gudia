<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreMemberRequest;
use App\Http\Resources\MemberResource;
use App\Models\Member;
use App\Models\Company;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index() {

        $members = Member::orderBy('id')
            ->with('company')
            ->get();

        return inertia('Members/Index', compact('members'));
    }
    public function create()
    {
        $members = Company::orderBy('id','desc')->get();
        return inertia('Members/Create', compact('members'));
    }

    public function store(StoreMemberRequest $request)
    {
        Member::create($request->validated());

        return redirect()->route('members.index')
            ->with('message', 'Member created successfully');
    }

    public function edit(Member $member)
    {
        $members = Member::orderBy('id')
            ->with('company')
            ->get();
        return inertia('Members/Edit', compact('member'));
    }

    public function update(Member $member, StoreMemberRequest $request)
    {
        $member->update($request->validated());

        return redirect()->route('members.index')
            ->with('message', 'Member updated successfully');
    }

    public function destroy(Member $member)
    {
        $member->delete();

        return redirect()->route('members.index')
            ->with('message', 'Member deleted successfully');
    }
}
