<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class TypeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'typetitle'   => 'required | unique:types,typetitle',
            'typelit_msg' => 'required | numeric',
            'msg'         => 'required'
        ];
    }

    public function messages()
    {
        return [
            'typetitle.required'   => 'هذا الخقل مطلوب كتابته',
            'typetitle.unique'     => 'هذا العنوان تم كتابته من قبل',
            'typelit_msg.required' => 'هذا الخقل مطلوب كتابته',
            'msg.required'         => 'هذا الخقل مطلوب كتابته'
        ];
    }
}
