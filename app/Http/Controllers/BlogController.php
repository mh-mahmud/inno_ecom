<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Blog;
use App\Models\BloggerCategory;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Services\BlogService;

class BlogController extends Controller {

    protected $blog_service;

    public function __construct(BlogService $blog_service)
    {
        $this->blog_service = $blog_service;
    }

    public function index()
    {
        $blogs = $this->blog_service->getAllBlog();
        return view('blogs.index', compact('blogs'));
    }

    public function create()
    {
        $parents = BloggerCategory::whereNull('parent_id')->pluck('category_name', 'id');
        return view('blogs.create', compact('parents'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'blog_name' => 'required|string|max:191',
            'blog_category_id' => 'required',
            'blog_description' => 'nullable|string',
            'blog_image' => 'image|mimes:avif,jpeg,png,jpg,gif,webp|max:2048',
        ]);
        $this->blog_service->createBlog($request);

        return redirect()->route('blog-list')->with('success', 'Blog created successfully.');
    }

    public function show($id)
    {
        $blog = $this->blog_service->get_blog_details($id);
        return view('blogs.show', compact('blog'));
    }

    public function edit($id)
    {
        $blog = $this->blog_service->get_blog_details($id);
        $parents = Blog::whereNull('blog_category_id')->pluck('blog_name', 'id');
        return view('blogs.edit', compact('blog', 'parents'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'blog_name' => 'required|string|max:191',
            'blog_category_id' => 'required',
            'blog_description' => 'nullable|string',
            'blog_image' => 'image|mimes:avif,jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $this->blog_service->update_blog($request, $id);
        return redirect()->route('blog-list')->with('success', 'Blog updated successfully.');
    }

    public function search(Request $request)
    {
        $searchTerm = trim($request->input('search'));
        $formName = LeadsForm::whereNull('blog_category_id')->pluck('form_name', 'form_id');


        if (empty($searchTerm)) {
            return redirect()->route('leadsform-index')->with('error', 'Search Field cannot be blank.');
        }

        $request->validate([
            'search' => 'required|string',
        ]);

        $leadsForms = $this->blog_service->searchLeadForm($request);
        $totalLeadsCounts = $this->getTotalLeadsCountsForForms($leadsForms);
        return view('blogs.index', compact('leadsForms', 'formName', 'totalLeadsCounts'));
    }


    public function destroy($id)
    {
        $this->blog_service->delete_blog($id);
        return redirect()->route('blog-list')->with('success', 'Blog deleted successfully.');
    }

    public function updateBlogImage($id)
    {
        $blog = Blog::findOrFail($id);
        if ($blog->blog_image) {
            // path to the image file
            $imagePath =getcwd().'/uploads/blogs/'.$blog->blog_image;
            // delete the file if it exists
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            //Update the blog record to remove the profile image
            $blog->blog_image = null;
            $blog->save();
    
            return response()->json(['success' => true]);
        }
    
        return response()->json(['success' => false, 'message' => 'No blog image found']);
    }

}
