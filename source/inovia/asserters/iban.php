<?php

namespace inovia\asserters;

use mageekguy\atoum;

class iban extends atoum\asserters\string
{
    public function isValid($failMessage = null)
    {
        return $this->match('/[a-zA-Z]{2}[0-9]{2}[a-zA-Z0-9]{4}[0-9]{7}([a-zA-Z0-9]?){0,16}/', $failMessage ?: $this->_('%s is not a valid iban', $this));
    }
}
