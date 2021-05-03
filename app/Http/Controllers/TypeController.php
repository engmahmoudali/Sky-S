<?php

namespace App\Http\Controllers;

use App\Http\Requests\TypeRequest;
use App\Models\Type;
use App\Traites\Up_photos;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class TypeController extends Controller
{
   public function ShowTypes() {
        return Type::get();
    }


    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }


    public function addtype(TypeRequest $request) {

        
        $file_name = upload_ph ( $request -> photo , 'images/types');

        Type::create([
            'typetitle'   => $request -> typetitle,
            'typelit_msg' => $request -> typelit_msg,
            'msg'         => $request -> msg
        ]);


        // Alert::success('Done' , 'Types is Saved Successfully');

          return redirect()->back()->with(['success' => 'تم تخزين المعلومات بنجاح']);
            
    }
}
