<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use NumberFormatter;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::directive('rupiah', function ($amount) {
            return "<?php
                \$amount = floatval(preg_replace('/[^-0-9\.]/', '', $amount));
                \$formatter = new NumberFormatter('id-ID', NumberFormatter::CURRENCY);
                echo \$formatter->formatCurrency(\$amount, 'IDR');
            ?>";
        });
    }


}
