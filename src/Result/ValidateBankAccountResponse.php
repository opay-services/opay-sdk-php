<?php


namespace Opay\Result;


class ValidateBankAccountResponse extends Response
{
    static function parseData(?\stdClass $s): ValidateBankAccountResponseData
    {
        return ValidateBankAccountResponseData::cast(new ValidateBankAccountResponseData(), $s);
    }

    /**
     * @return ValidateBankAccountResponseData
     */
    public function getData(): ValidateBankAccountResponseData
    {
        return $this->data;
    }
}