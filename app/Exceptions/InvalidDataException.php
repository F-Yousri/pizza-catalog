<?php


namespace App\Exceptions;


use Exception;
use Illuminate\Support\Facades\Log;

class InvalidDataException extends Exception
{
    /**
     * Report the exception.
     *
     * @return void
     */
    public function report()
    {
        Log::error("InvalidDataException while trying to create a resource");
    }

    /**
     * Render the exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request
     * @param mixed $request
     *
     * @return \Illuminate\Http\Response
     */
    public function render()
    {
        return view('exception.invalid_data');
    }
}