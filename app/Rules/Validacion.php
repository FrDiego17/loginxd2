<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use DateTime;

class Validacion implements Rule
{
    private $minDate;

    public function __construct()
    {
        $this->minDate = new DateTime('2024-09-01');
    }

    public function passes($attribute, $value)
    {
        $expirationDate = DateTime::createFromFormat('m/Y', $value);

        if ($expirationDate === false) {
            return false;
        }

        return $expirationDate >= $this->minDate;
    }

    public function message()
    {
        return 'La fecha de expiración debe ser posterior a septiembre de 2024.';
    }
}
