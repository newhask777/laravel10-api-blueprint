<?php

namespace App\Modules\Admin\Lead\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            ['title' => 'new','title_ru' => 'New lead'],
            ['title' => 'process','title_ru' => 'In process'],
            ['title' => 'done','title_ru' => 'Completed'],
        ]);
    }
}
