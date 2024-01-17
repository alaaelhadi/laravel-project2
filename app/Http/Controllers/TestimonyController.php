<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Testimonial;
use App\Traits\Common;
use Illuminate\Support\Facades\Redirect;

class TestimonyController extends Controller
{
    use Common;

    public function testi()
    {
        $testimonials = Testimonial::latest()->take(4)->get();
        return view('testimonial', compact('testimonials'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::get();
        return view('testimonialsList', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addTestimonial');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = $this->messages();

        //form data validation
        $data = $request->validate([
            'name' => 'required|string',
            'position' => 'required|string',
            'testimony' => 'required|string|max:200',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
        ], $messages);

        //Add image
        $filename = $this->uploadfile($request->image, 'assets/images');
        $data['image'] = $filename;

        Testimonial::create($data);
        return redirect('admin/testimonialsList');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('showTestimonial', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('updateTestimonial', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = $this->messages();

        //form data validation
        $data = $request->validate([
            'name' => 'required|string',
            'position' => 'required|string',
            'testimony' => 'required|string|max:200',
            'image' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
        ], $messages);

        //Update image
        if($request->hasFile('image')){
            $filename = $this->uploadfile($request->image, 'assets/images');
            $data['image'] = $filename;
        }
        
        Testimonial::where('id', $id)->update($data);
        return redirect('admin/testimonialsList');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Testimonial::where('id', $id)->delete();
        return redirect('admin/testimonialsList');
    }

    public function trashed()
    {
        $testimonials = Testimonial::onlyTrashed()->get();
        return view('trashedTestimonial', compact('testimonials'));
    }

    public function restore(string $id): RedirectResponse
    {
        Testimonial::where('id', $id)->restore();
        return redirect('admin/testimonialsList');
    }

    public function finalDelete(string $id): RedirectResponse
    {
        Testimonial::where('id', $id)->forceDelete();
        return redirect('admin/trashedTestimonial');
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is required',
            'name.string' => 'Testimonial name must be string',
            'position.required' => 'Position is required',
            'testimony.required' => 'Testimony is required',
            'image.required' => 'Image is required',
            'image.mimes' => 'Image must be png, jpg, jpeg, webp'
        ];
    }
}
