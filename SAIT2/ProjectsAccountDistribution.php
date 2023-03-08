<?php

namespace App\Services\Projects;

use Illuminate\Database\Eloquent\Collection;

interface ProjectsAccountDistribution
{
    public function countAccountByTime($unit, $percent, $totalAccounts, $projectAccounts);

    public function filterByNeededUnit($unit, $projectAccounts);

//    public function getActiveProjectAccounts():Collection;
//
//    public function getTotalCountAccount():void;

}
