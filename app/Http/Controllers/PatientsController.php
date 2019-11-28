<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientsController extends Controller
{
	public function index()
	{
        //$patients = Post::orderBy('lastName', 'asc')->paginate(10);//shows 10 patients per page
		return view('patients.index');

	}

    public function create()
    {
    	return view('patients.createpatient');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'lastName' => 'required',
    		'firstName' => 'required',
    		'middleName' => 'required'
    	]);

        $post = new Post;
        $post->lastName = $request->input('lastName');
        $post->firstName = $request->input('firstName');
        $post->middleName = $request->input('middleName');
        $post->save();

        return redirect('/patients')->with('success', 'Patient Created'); 
    }
}
 