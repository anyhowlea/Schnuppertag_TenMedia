<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Job;
use Illuminate\Http\Request;
Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Company;
use App\Models\Category;


class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $jobs = Job::all();
        return view('jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    use AuthorizesRequests; // Trait verwenden
    public function create()
    {
         $this->authorize('create', Job::class); // Berechtigungsprüfung

    // Firmen und Kategorien abrufen
    $companies = Company::all();
    $categories = Category::all();

    // View mit den Daten für Firmen und Kategorien laden
    return view('jobs.create', compact('companies', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobRequest $request)
    {
          Job::create($request->validated());
        return redirect()->route('jobs.index')->with('success', 'Job erfolgreich erstellt.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        return view('jobs.show', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        $this->authorize('update', $job); // Check, ob der User den Job bearbeiten darf
        return view('jobs.edit', compact('job'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        $this->authorize('update', $job); // Check, ob der User den Job bearbeiten darf
        $job->update($request->validated()); // Nur validierte Daten verwenden
        return redirect()->route('jobs.index')->with('success', 'Job erfolgreich aktualisiert.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
         $this->authorize('delete', $job); // Check, ob der User den Job löschen darf
        $job->delete();
        return redirect()->route('jobs.index')->with('success', 'Job erfolgreich gelöscht.');
    }
}
