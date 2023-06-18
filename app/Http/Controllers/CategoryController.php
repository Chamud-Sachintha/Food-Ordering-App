<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function showAddCategoryPage() {

        $allCategoryDetails = Category::where(['status' => 1])->get();
        return view('admin_panel.Category')->with(['categories' => $allCategoryDetails]);
    }

    public function addNewCatgeory(Request $categoryDetails) {

        $this->validate($categoryDetails, [
            'categoryName' => 'required', 'categoryImage' => 'required|image',
            'description' => 'required'
        ]);

        $imageName = time().'.'.$categoryDetails->categoryImage->extension();  

        $newCaategory = Category::create([
            'categoryName' => $categoryDetails->categoryName,
            'categoryImage' => $imageName,
            'description' => $categoryDetails->description,
            'status' => $categoryDetails->status
        ]);

        if ($newCaategory->id != null) {
            $categoryDetails->categoryImage->move(public_path('images'), $imageName);

            return redirect()->back()->with(['msg' => 'New Category Created Successfully.']);
        }
    }

    public function updateSelectedCategory() {

    }

    public function deleteSelectedCategory() {
        
    }
}
