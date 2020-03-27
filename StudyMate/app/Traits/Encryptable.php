<?php

namespace App\Traits;

use \Crypt;

//Custom Trait that handels the encrypting and dycripting of model properties.
trait Encryptable
{
    public function getAttribute($key)
    {
        $value = parent::getAttribute($key);
        if ($value == null){
            return null;
        }

        if (in_array($key, $this->encryptable)) {
            $value = Crypt::decrypt($value);
            return $value;
        }
        return $value;
    }

    public function setAttribute($key, $value)
    {
        if (in_array($key, $this->encryptable)) {
            $value = Crypt::encrypt($value);
        }

        return parent::setAttribute($key, $value);
    }
}