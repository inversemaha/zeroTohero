<?php

namespace Database\Seeders\Traits;

use Illuminate\Support\Facades\DB;

trait DisableForeginKeys
{
     protected function disableForeginKeys()
     {

         DB::statement('SET FOREIGN_KEY_CHECKS=0;');
     }

     protected function enableForeginKeys()
     {
         DB::statement('SET FOREIGN_KEY_CHECKS=1;');

     }

}
