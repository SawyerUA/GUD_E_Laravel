<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('telegram', function(){
    /** @var \DefStudio\Telegraph\Models\TelegraphBot $telegraphBot */
    $telegraphBot = \DefStudio\Telegraph\Models\TelegraphBot::find(1);

    dd($telegraphBot->registerCommands([
        'start' => 'вітання від бота',
        'help' => 'всі команди',
        'site' => 'посилання на сайт',
        'units' => 'показує всіх юнітів',
        'fractions' => 'показує всі фракції',
        'components' => 'показує всі компоненти',
        'dice' => 'кудаю кубик',
    ])->send());
});
