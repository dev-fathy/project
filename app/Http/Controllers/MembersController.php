<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Members;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Http\Requests\ValidateMemberRequest;

class MembersController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $members = Members::orderBy('id', 'asc')->get();

        return view('member.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
        return view('member.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidateMemberRequest $request) {
//dd($request->all());
        $validatedData = $request->validated();
        
        
        if ($request->role_id == '1') {
            $role = Role::create(['name' => 'admin']);
            $permission = Permission::create(['name' => 'full-access']);
            $member = Members::create($request->all());
            $member_id = Members::find($member->id);
            $member_id->assignRole($role);
            $role->givePermissionTo($permission);
        } elseif ($request->role_id == '2') {
            $role = Role::firstOrCreate(['name' => 'user']);
            $permission = Permission::create(['name' => 'sales page']);
            $member = Members::create($request->all());
            $member_id = Members::find($member->id);
            $member_id->assignRole($role);

            $role->givePermissionTo($permission);
        } elseif ($request->role_id == '3') {
            $role = Role::create(['name' => 'back-office']);
            $permission = Permission::create(['name' => 'configuration & setting']);
            
            $member = Members::create($request->all());
            $member_id = Members::find($member->id);
            $member_id->assignRole(['back-office']);
            $role->givePermissionTo($permission);
        }
               
        session()->flash('success', 'Created Successfuly');
        return redirect('members');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
       $deletedMember = Members::find($id);

        $deletedMember->delete();

        return redirect('members')->with('success', 'Deleted Successfuly');
    }

}
