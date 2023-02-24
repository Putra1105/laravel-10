<?php

namespace App\Http\Controllers;

use App\Models\loginAdmin;
use App\Http\Requests\StoreloginAdminRequest;
use App\Http\Requests\UpdateloginAdminRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LoginAdminController extends Controller
{
    public function validateChapca(Request $request) {
        if (Str::password(4, symbols: false) == $request->input('captcha')) {
            return redirect()->route('welcome');
        } else {
            error_log('Captcha is not correct');
            return redirect()->route('login-admin');
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreloginAdminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(loginAdmin $loginAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(loginAdmin $loginAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateloginAdminRequest $request, loginAdmin $loginAdmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(loginAdmin $loginAdmin)
    {
        //
    }
}
