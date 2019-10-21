<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;

class AdminController extends BackendController
{
    public function index()
    {
        $adminData = Admin::orderBy('id', 'DESC')->get();
        $this->data('adminData', $adminData);
        return view($this->pagePath . '.users.show-users', $this->data);
    }

    public function addUser(Request $request)
    {
        if ($request->isMethod('get')) {
            return view($this->pagePath . '.users.add-user', $this->data);
        }

        if ($request->isMethod('post')) {  //form submit garna lagda..
            $this->validate($request, [
                'fullname' => 'required|min:3|max:50',
                'username' => 'required|min:3|max:20|unique:admins,username', //admins bhanne table ko
                'email' => 'required|email|unique:admins,email',
                'password' => 'required|min:3|max:20|confirmed',
            ]);

            $data['fullname'] = $request->fullname;
            $data['username'] = $request->username;
            $data['email'] = $request->email;
            $data['password'] = bcrypt($request->password);


        }

        if (Admin::create($data)) {
            return redirect()->route('users')->with('success', 'User has been added');

        }

    }

    public function deleteUser(Request $request)
    {
        $criteria = $request->criteria;
        $findData = Admin::findOrFail($criteria);
        if ($findData->delete()) {

            return redirect()->back()->with('success', 'User has been deleted');
        }
    }

    public function updateUserStatus(Request $request)
    {
        if ($request->isMethod('get')) {  //get bata aauchha bhane return back
            return redirect()->back();
        }

        if ($request->isMethod('post')) {
            $criteria = $request->criteria;    //criteria bhanne name deko chha hidden method bata aako ho jun chai hamro id ho..
            $admin = Admin::findorFail($criteria);

            if (isset($_POST['admin'])) {
                $admin->user_type = 'user';
            }
            if (isset($_POST['user'])) {
                $admin->user_type = 'admin';
            }

            if ($admin->update()) {
                return redirect()->route('users')->with('success', 'User Type has been updated successfully');
            }
        }

        return false;
    }

    public function editUser(Request $request)
    {
        $criteria = $request->criteria;
        $findData = Admin::findOrFail($criteria);
        $this->data('adminData', $findData);
        return view($this->pagePath . '.users.edit-user', $this->data);

    }

    public function editUserAction(Request $request)
    {
        if ($request->isMethod('get')) {
            return redirect()->back();
        }

        if ($request->isMethod('post')) {
            $criteria = $request->criteria;
            $this->validate($request, [
                'fullname' => 'required|min:3|max:50',
                'username' => 'required|min:3|max:20|', [
                   Rule::unique('admins', 'username')->ignore($criteria)  //yo username ra email unique hunuparchha bhanne rule lai ignore garchha
                ],
                'email' => 'required|email|', [
                   Rule::unique('admins', 'email')->ignore($criteria)
                ]
            ]);

            $data['fullname'] = $request->fullname;
            $data['username'] = $request->username;
            $data['email'] = $request->email;

        }

        if (Admin::where('id', '=', $criteria)->update($data)) {
            return redirect()->route('users')->with('success', 'User Data has been updated');


        }


    }

}
