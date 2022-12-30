<?php

namespace Bookcatalog;

class BookService
{
    /**
     * @soap
     * @param Bookcatalog\Transfer $info_data
     * @return string
     */
    public function money_convert($info_data)
    {
        $sourceCurrency_base = $this->get_Data($info_data->sourceCurrency);

        $targetCurrency_base = $this->get_Data($info_data->targetCurrency);

        $calculation = ($info_data->amountInSourceCurrency/$sourceCurrency_base)*$targetCurrency_base;

        return $calculation;
    }

    function get_Data($data)
    {
        $data_json = file_get_contents('data.json');

        $decode_file = json_decode($data_json, true);

        $currency_data = $decode_file['money'];

        foreach ($currency_data as $value)
        {
            $target_money = $value['target_currency'];

            $money_value = $value['value'];

            if($target_money == $data)
            {
                return $money_value;
            }
        }
    }
}

