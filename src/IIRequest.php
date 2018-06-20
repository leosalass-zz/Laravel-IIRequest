<?php

namespace Immersioninteractive\GenericRequest;

use Illuminate\Foundation\Http\FormRequest;
use IIResponse;

class IIRequest extends FormRequest{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    protected function failedValidation(Validator $validator)
    {
        foreach($validator->errors()->toArray() as $error){            
            IIResponse::set_errors($error[0]);
        }
        
        throw new HttpResponseException(IIResponse::response('BAD REQUEST'));
    }
}