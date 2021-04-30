<?php

namespace App\Http\Controllers;
use App\Models\Type;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class TypeController extends Controller
{
   public function ShowTypes() {
        return Type::get();
    }



    public function addtype(Request $request) {

        $rules = [
            'typetitle'   => 'required | unique:types,typetitle',
            'typelit_msg' => 'required | numeric',
            'msg'         => 'required'
        ];

        $errmsg = [
            'typetitle.required'   => 'هذا الخقل مطلوب كتابته',
            'typetitle.unique'     => 'هذا العنوان تم كتابته من قبل',
            'typelit_msg.required' => 'هذا الخقل مطلوب كتابته',
            'msg.required'         => 'هذا الخقل مطلوب كتابته'
        ];

            $validator = Validator::make($request->all() , $rules , $errmsg);

            if ($validator -> fails()) {
                return redirect()->back()->withErrors($validator)->withInputs($request->all());
            }

        Type::create([
            'typetitle'   => $request -> typetitle,
            'typelit_msg' => $request -> typelit_msg,
            'msg'         => $request -> msg
        ]);


        // Alert::success('Done' , 'Types is Saved Successfully');

          return redirect()->back()->with(['success' => 'تم تخزين المعلومات بنجاح']);
            
        
    }
}
