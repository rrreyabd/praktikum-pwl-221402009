<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function show_postingan()
    {
        return view('admin.postingan');
    }

    public function show_arsip()
    {
        return view('admin.arsip');
    }

    public function show_akun()
    {
        return view('admin.akun');
    }

    public function show_task()
    {
        return view('admin.task');
    }

    public function show_peta()
    {
        return view('admin.peta');
    }

    public function show_statistic()
    {
        return view('admin.statistic');
    }

    public function show_time()
    {
        return view('admin.time');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
