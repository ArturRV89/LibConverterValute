<?php
declare(strict_types=1);

namespace MyLibConverter;

class Exchange
{
    private $url = 'https://www.cbr-xml-daily.ru/daily_json.js';

    public $from;
    public $to;
    public $amount;

    public function __construct($from, $to, $amount)
    {
        $this->from = $from;
        $this->to = $to;
        $this->amount = $amount;
    }

    public function toDecimal()
    {
        return round(
            ($this->getCourseValidated($this->from) * $this->amount) / $this->getCourseValidated($this->to), 2
        );
    }

    private function getCourseValidated($currency)
    {
        $currenciesArr = $this->resource();
        $valuteNames = array_keys($currenciesArr['Valute']);
        return (in_array($currency, $valuteNames)) ? ($currenciesArr['Valute'][$currency]['Value']) : exit('Error: enter actually valute name. ' . 'Unknown: ' . $currency);
    }

    private function resource()
    {
        $json = file_get_contents($this->url);
        $currenciesArr = json_decode($json, true);
        return $currenciesArr;
    }
}