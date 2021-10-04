<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SaveProjectRequest;
use App\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function __construct(){
      $this->middleware('auth')->except('index','show');
    }
    public function index()
    {
        return view('projects.index', [
          'projects'=>Project::latest()->paginate()
        ]);

    }


    public function show(Project $project){
      return view('projects.show', [
        'project' => $project
      ]);

    }

public function edit(Project $project){


return view('projects.edit',[
  'project'=>$project

]);
}

    public function create(){
      return view('projects.create', [

        'project' => new Project
      ]);

    }



    public function store(SaveProjectRequest $request){

//Funcion para almacenar los projectos



 Project::create($request->validated()); // se  guardan los campos validados

return redirect()->route('projects.index')->with('status','El
proyecto fue creado con éxito');
  //    return redirect()->route('projects.index');
      //Se redireccióna hacia la página de proyectos
    }


    public function update(Project $project, SaveProjectRequest $request){
      $project->update($request->validated());

      return redirect()->route('projects.show',$project)->with('status',
      'El proyecto fue actualizado correctamente');
    }

    public function destroy (Project $project){
      $project->delete();

      return redirect()->route('projects.index')->with('status',
      'El proyecto fue eliminado con éxito');
    }

}
