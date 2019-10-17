<?php

namespace App\Models;

class CustomResponse
{
    public function getFields() : array
    {
        return [
            'success'    => null,
            'message'    => [],
            'httpCode'   => null,
            'count'      => 0,
            'error'      => [],
            'details'    => [],
            'data'       => []
        ];
    }

    public function tratativeSucess($success = null, $message = [], $httpCode = null, $error = [], $details = null, $data = []){

        $fields = $this->getFields();

        $fields['success'] = $success;
        $fields['message'] = $message;
        $fields['httpCode'] = $httpCode;
        $fields['error'] = $error;
        $fields['data'] = $data;
        $fields['details'] = $details;
        $fields['count'] = count($fields['data']);

        return $fields;

    }

    public function trativeError($success = null, $message = [], $httpCode = null, $error = [], $details = null, $data = []){

        $fields = $this->getFields();

        $fields['success'] = $success;
        $fields['message'] = $message;
        $fields['httpCode'] = $httpCode;
        $fields['error'] = $error;
        $fields['data'] = $data;
        $fields['details'] = $details;
        $fields['count'] = count($fields['data']);

        return $fields;

    }
}