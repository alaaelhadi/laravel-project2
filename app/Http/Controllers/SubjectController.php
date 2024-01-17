<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Teacher;
use App\Traits\Common;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class SubjectController extends Controller
{
    use Common;

    public function sub()
    {
        $subjects = Subject::latest()->take(6)->get();
        return view('classes', compact('subjects'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::get();
        return view('subjectsList', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teachers = Teacher::get();
        return view('addSubject', compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = $this->messages();

        //form data validation
        $data = $request->validate([
            'class_subject' => 'required|string',
            'min_age' => 'required|decimal:0,2',
            'max_age' => 'required|decimal:0,2',
            'start_time' => 'required',
            'end_time' => 'required',
            'price' => 'required|decimal:0,2',
            'capacity' => 'required|decimal:0,2',
            'teacher_id' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
        ], $messages);

        //add image
        $filename = $this->uploadfile($request->image, 'assets/images');
        $data['image'] = $filename;

        Subject::create($data);
        return redirect('admin/subjectsList');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $subject = Subject::findOrFail($id);
        $teachers = Teacher::get();
        return view('updateSubject', compact('subject', 'teachers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = $this->messages();

        //form data validation
        $data = $request->validate([
            'class_subject' => 'required|string',
            'min_age' => 'required|decimal:0,2',
            'max_age' => 'required|decimal:0,2',
            'start_time' => 'required',
            'end_time' => 'required',
            'price' => 'required|decimal:0,2',
            'capacity' => 'required|decimal:0,2',
            'teacher_id' => 'required',
            'image' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
        ], $messages);

        //update image
        if($request->hasFile('image')){
            $filename = $this->uploadfile($request->image, 'assets/images');
            $data['image'] = $filename;
        }
        

        Subject::where('id', $id)->update($data);
        return redirect('admin/subjectsList');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Subject::where('id', $id)->delete();
        return redirect('admin/subjectsList');
    }

    public function trashed()
    {
        $subjects = Subject::onlyTrashed()->get();
        return view('trashedSubject', compact('subjects'));
    }

    public function restore(string $id): RedirectResponse
    {
        Subject::where('id', $id)->restore();
        return redirect('admin/subjectsList');
    }

    public function finalDelete(string $id): RedirectResponse
    {
        Subject::where('id', $id)->forceDelete();
        return redirect('admin/trashedSubject');
    }

    public function messages(){
        return [
        'class_subject.required' => 'Subject name is required',
        'class_subject.string' => 'Subject name must be string',
        'min_age.required' => 'Minimum age is required',
        'max_age.required' => 'Maximum age is required',
        'start_time.required' => 'Start time is required',
        'end_time.required' => 'End time is required',
        'price.required' => 'Price is required',
        'capacity.required' => 'Capacitiy is required',
        'teacher_id.required' => 'Teacher name should be selected',
        'image.required' => 'Image is required',
        'image.mimes' => 'Image must be png, jpg, jpeg, webp'
      ];
    }
}
