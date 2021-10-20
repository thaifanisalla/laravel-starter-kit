<?php

namespace App\Actions\App;

use App\Actions\BaseAction;
use Lorisleiva\Actions\Concerns\AsAction;

/**
 * @property string merchant example "1234509876"
 * @property string created_at example "Wed Jun 30 2021 14:32:33 GMT+0300"
 * @property string event example "app.uninstalled"
 * @property array data @see https://docs.salla.dev/docs/merchent/ZG9jOjIzMjE3MjQ0-app-events#app-uninstall
 */
class Uninstalled extends BaseAction
{
    use AsAction;

    public function handle()
    {
        // you can do whatever you want
    }
}
