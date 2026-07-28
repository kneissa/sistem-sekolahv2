<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class teacherController extends Controller
 {
    public function index()
    {
        return "This is the teacher list page"();
    }
 
    public function show(string $id)
    {
        return "Display the teacher with ID: {$id}";
    }

    public function create()
    {
        return "This is the add teacher page"();
    }

    public function edit(string $id)
    {
        return "This is the edit teacher page for teacher ID: {$id}";
    }

    public function store()
    {
        return "Adding a new teacher";
    }

    public function update(string $id)
    {
        return "Updating the teacher with ID: {$id}";
    }

    public function destroy(string $id)
    {
        return "Deleting the teacher with ID: {$id}";
    }
 }
