<?php
namespace adman9000\LaravelXero\Facades;

use Illuminate\Support\Facades\Facade;

class XeroInvoice extends Facade
{
    protected static function getFacadeAccessor() { return 'XeroInvoice'; }
}
