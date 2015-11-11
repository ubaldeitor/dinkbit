<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ClientsRequest extends Request
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return ['name'=>'required | alpha_spaces',
                'lastname'=>'required | alpha_spaces',
                'phone'=>'required | digits_between:10,13',
                'email'=>'required | email',
                'subject'=>'required | integer',
                'enterprise'=>'required | alpha_spaces',
                'ofPhone'=>'required | digits_between:10,13',
                'mensaje'=>'required | alpha_spaces',
                
            //
        ];
    }
}
