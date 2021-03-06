<?php

namespace Saritasa\Laravel\Controllers\Responses;

use Saritasa\Transformers\DtoModel;

class SuccessMessage extends DtoModel
{
    /**
     * Message text
     *
     * @var string
     */
    protected $message;

    public function __construct(string $message)
    {
        parent::__construct(['message' => $message]);
    }
}
