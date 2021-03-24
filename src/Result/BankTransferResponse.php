<?php


namespace Opay\Result;


class BankTransferResponse extends Response
{
    static function parseData(?\stdClass $s): BankTransferResponseData
    {
        return BankTransferResponseData::cast(new BankTransferResponseData(), $s);
    }

    /**
     * @return BankTransferResponseData
     */
    public function getData(): BankTransferResponseData
    {
        return $this->data;
    }
}