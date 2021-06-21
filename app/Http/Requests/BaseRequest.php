<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BaseRequest extends FormRequest
{
    /**
     * expects json from every request
     *
     * @return bool
     */
    public function expectsJson()
    {
        return true;
    }

    /**
     * expects json from every request
     *
     * @return boolean
     */
    public function wantsJson()
    {
        return true;
    }
}
