<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
 {
    public function index()
    {
        return "This is the student list page"();
    }
 
    public function show(string $id)
    {
        return "Display the student with ID: {$id}";
    }

    public function create()
    {
        return "This is the add student page"();
    }

    public function edit(string $id)
    {
        return "This is the edit student page for student ID: {$id}";
    }

    public function store()
    {
        return "Adding a new student";
    }

    public function update(string $id)
    {
        return "Updating the student with ID: {$id}";
    }

    public function destroy(string $id)
    {
        return "Deleting the student with ID: {$id}";
    }
 }

