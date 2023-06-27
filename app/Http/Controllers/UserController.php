<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Models\TestUser;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return View
     */
    public function index(): View
    {
        $users = TestUser::all();
        return View('backend.show')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     * @return View
     */
    public function create(): View
    {
        return view('backend.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param StoreUserRequest $request
     * @return RedirectResponse
     */
    public function store(StoreUserRequest $request): RedirectResponse
    {
        try {
            $data = $request->validated();
            if ($image = $request->file('image')) {
                $destinationPath = 'images/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $data['image'] = "$profileImage";
            }
            TestUser::create($data);
            return redirect()->route('users')->withSuccess('User Stored Successfully');
        } catch (Exception $ex) {
            return back()->withError('something went wrong');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @return View
     */
    public function edit(TestUser $user): View
    {
        return view('backend.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     * @param UpdateUserRequest $request
     * @return RedirectResponse
     */
    public function update(UpdateUserRequest $request, TestUser $user): RedirectResponse
    {
        try {
            $user->update($request->validated());
            return redirect()->route('users')->withSuccess('User updated Successfully');
        } catch (Exception $ex) {
            return back()->withError('something went wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TestUser $user): RedirectResponse
    {
        try {
            $user->delete();
            return back()->withSuccess('User deleted Successfully');
        } catch (Exception $ex) {
            return back()->withError('something went wrong');
        }
    }
}
