<?php
namespace adman9000\LaravelXero\Facades;

use Illuminate\Support\Facades\Facade;

class XeroPayment extends Facade
{
    protected static function getFacadeAccessor() { return 'XeroPayment'; }
}
