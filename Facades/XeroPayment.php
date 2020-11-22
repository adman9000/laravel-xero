<?php
namespace adman_9000\LaravelXero\Facades;

use Illuminate\Support\Facades\Facade;

class XeroPayment extends Facade
{
    protected static function getFacadeAccessor() { return 'XeroPayment'; }
}
