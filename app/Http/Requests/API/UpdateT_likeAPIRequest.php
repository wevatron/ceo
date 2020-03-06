<?php

namespace App\Http\Requests\API;

use App\Models\T_like;
use InfyOm\Generator\Request\APIRequest;

class UpdateT_likeAPIRequest extends APIRequest
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
        $rules = T_like::$rules;
        
        return $rules;
    }
}
