<?php

namespace Merchants;

use Citmatel\Sales\Admin\Merchants\Gateway;
use Citmatel\Sales\Admin\Merchants\Merchant;
use CompraDeTodo\Seeder;

class MerchantSeeder extends Seeder
{
    public $tables = [
        'merchants',
        'gateways'
    ];

    /**
     *
     */
    public function run()
    {
        $this->initPrerequisites();

        Gateway::create(['name' => 'pasared', 'type' => 'pasared']);
        Gateway::create(['name' => 'effective', 'type' => 'effective']);

        Merchant::create(['name' => 'pasared', 'type' => 'pasared', 'code' => '01', 'fee' => 2, 'gateway_id' => 1]);
        Merchant::create(['name' => 'effective', 'type' => 'effective', 'code' => '02', 'fee' => 0, 'gateway_id' => 2]);


        $this->resetPrerequisites();
    }
}