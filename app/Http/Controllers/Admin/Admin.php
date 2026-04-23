<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Admin extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
    public function students()
    {
        return view('admin.students');
    }
    public function books()
    {
        return view('admin.books');
    }
    public function issueBooks()
    {
        return view('admin.issue-books');
    }
    public function returnBooks()
    {
        return view('admin.return-books');
    }
    public function fine()
    {
        return view('admin.fine');
    }
}
