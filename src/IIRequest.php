<?php

namespace Immersioninteractive\GenericRequest;

use IIResponse;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class IIRequest extends FormRequest
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

    protected function failedValidation(Validator $validator)
    {        
        foreach($validator->errors()->toArray() as $error){            
            IIResponse::set_errors($error[0]);
        }
        
        IIResponse::set_status_code('BAD REQUEST');
        throw new HttpResponseException(IIResponse::response());
    }
}