<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "This is the major list page";
    }
 
    public function show(string $id)
    {
        return "Display the major with ID: {$id}";
    }

    public function create()
    {
        return "This is the add major page"();
    }

    public function edit(string $id)
    {
        return "This is the edit major page for major ID: {$id}";
    }

    public function store()
    {
        return "Adding a new major";
    }

    public function update(string $id)
    {
        return "Updating the major with ID: {$id}";
    }

    public function destroy(string $id)
    {
        return "Deleting the major with ID: {$id}";
    }
 }
