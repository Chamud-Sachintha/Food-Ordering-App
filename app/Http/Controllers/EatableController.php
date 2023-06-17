<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eatable;

class EatableController extends Controller
{
    public function showManageEatablePage() {

        $alleatableDetails = Eatable::where(['status' => 1])->get();
        return view('admin_panel.Eatable')->with(['eatables' => $allEatableDetails]);
    }

    public function addNewEatable(Request $eatableDetails) {

        $this->validate($eatableDetails, [
            'eatableName' => 'required', 'eatableImage' => 'required|image',
            'description' => 'required'
        ]);

        $imageName = time().'.'.$eatableDetails->eatableImage->extension();

        $newCaategory = Eatable::create([
            'eatableName' => $eatableDetails->eatableName,
            'eatableImage' => $imageName,
            'description' => $eatableDetails->description,
            'status' => $eatableDetails->status
        ]);

        if ($newEaatable->id != null) {
            $eatableDetails->eatableImage->move(public_path('images'), $imageName);

            return redirect()->back()->with(['msg' => 'New Eatable Created Successfully.']);
        }
        
    }

    public function updateSelectedEatable() {
    }
    public function deleteSelectedEatable() {
        
    }
    
}
