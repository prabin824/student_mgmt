<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;


class StudentController extends Controller
{
    //
    public function create()
    {
    	# code...
    	return view('student.subject.create');
    }
    public function insertSubject(Request $request)
    {
    	# code...
    	$subject = new Subject;
    	// $subject->name = "Basic Math";
    	// $subject->code = "bm01";
    	// $subject->class= "1";
    	// $subject->author= "Prabin Maharjan";

    	$subject->name = request('name');
    	$subject->code = request('code');
    	$subject->class= request('class');
    	$subject->author= request('author');
    	$subject->save();
    	dd($subject);


    }

    public function retreiveSubject()
    {
    	# code...
    	//$subjects = new Subject;
    	$subjects= Subject::all();

    	return view('student.subject.index',compact('subjects'));
    	
    }
}
