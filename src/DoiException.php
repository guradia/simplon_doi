<?php

namespace Simplon\Doi;

/**
 * DoiException
 * @package Simplon\Doi
 * @author  Tino Ehrich (tino@bigpun.me)
 */
class DoiException extends \Exception
{
    /**
     * @var array
     */
    private $errors;

    /**
     * @param int    $code
     * @param string $message
     * @param array  $errors
     */
    public function __construct($code = 0, $message = '', $errors = [])
    {
        $this->code = $code;
        $this->message = $message;
        $this->errors = $errors;
    }

    /**
     * @return array
     */
    public function getErrors()
    {
        return (array)$this->errors;
    }

    /**
     * @return array
     */
    public function getDataArray()
    {
        return [
            'code'    => $this->getCode(),
            'message' => $this->getMessage(),
            'errors'  => $this->getErrors(),
        ];
    }

    /**
     * @return string
     */
    public function getDataJson()
    {
        return json_encode($this->getDataArray());
    }
}