<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Http\Resources\ProjectResource;
use App\Models\Project;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Foundation\Application;
use Illuminate\Http\Response;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Application|Response|ResponseFactory
    {
        $projectResource = new ProjectResource(Project::all());
        return response($projectResource);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request): Application|Response|ResponseFactory|bool
    {
        $project = new Project();
        $project->fill($request->all());
        $project->save();
        $projectResource = new ProjectResource($project);
        return response($projectResource, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project): Application|Response|ResponseFactory
    {
        $projectResource = new ProjectResource($project);
        return response($projectResource);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project): Application|Response|ResponseFactory
    {
        $project->update($request->all());
        $projectResource = new ProjectResource($project);
        return response($projectResource);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project): Application|Response|ResponseFactory
    {
        $projectResource = new ProjectResource($project);
        $project->delete();
        return response($projectResource);
    }
}
