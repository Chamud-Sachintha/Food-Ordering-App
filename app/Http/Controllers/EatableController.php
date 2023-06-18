<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Eatable;
class EatableController extends Controller
{
    public function showManageEatablePage() {

        $availableCategories = Category::where(['status' => 1])->get();
        $allEatableDetails = DB::table('eatables')->select('eatables.eatableName', 'eatables.eatableImage', 'eatables.description', 'eatables.status', 'eatables.eatablePrice', 'categories.categoryName')
                                                ->join('categories', 'eatables.catId', '=', 'categories.id')
                                                ->where('eatables.status', '=', 1)
                                                ->get();

        return view('admin_panel.Eatables')->with([
            'categories' => $availableCategories,
            'eatables' => $allEatableDetails
        ]);
    }

    public function addNewEatable(Request $eatableDetails) {
        
        $this->validate($eatableDetails, [
            'eatableName' => 'required', 'eatableImage' => 'required | image', 'eatablePrice' => 'required | numeric',
            'eatableDescription' => 'required'
        ]);

        $imageName = time().'.'.$eatableDetails->eatableImage->extension();  

        $eatableDetail = Eatable::create([
            'catId' => $eatableDetails->category,
            'eatableName' => $eatableDetails->eatableName,
            'eatableImage' => $imageName,
            'eatablePrice' => $eatableDetails->eatablePrice,
            'description' => $eatableDetails->eatableDescription,
            'status' => $eatableDetails->status
        ]);

        if ($eatableDetail->id != null) {
            $eatableDetails->eatableImage->move(public_path('images'), $imageName);

            return redirect()->back()->with(['msg' => 'New Eatable Created Successfully.']);
        }
    }

    public function updateEatable() {

    }

    public function deleteEatable() {

    }

    public function updateSelectedEatable() {
    }
    public function deleteSelectedEatable() {
        
    }
    
}
