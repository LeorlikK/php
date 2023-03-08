<?php

namespace App\Services\Projects;

use App\Models\ProjectAccount;
use Illuminate\Support\Facades\Log;

class ProjectAccountService
{
    public \Illuminate\Database\Eloquent\Collection $projectAccounts;
    public int $totalAccounts;
    public array $days;
    public array $hours;

    public function __construct(readonly ProjectsAccountDistribution  $distributionDays,
    readonly ProjectsAccountDistribution $distributionHours)
    {}

    public function getActiveProjectAccounts():void
    {
        $this->projectAccounts = ProjectAccount::where('is_active', true)->get();
    }

    public function getTotalCountAccount():void
    {
        $this->totalAccounts = $this->projectAccounts->count();
    }

    public function getDays():void
    {
        $this->days = [
            1 => 55,
            2 => 10,
            3 => 5,
            4 => 15,
            5 => 0,
            6 => 15,
            7 => 0,
        ];
    }

    public function getHours():void
    {
        $this->hours = [
            1 => 30,
            2 => 20,
            3 => 15,
            4 => 5,
            5 => 30,
            6 => 0,
            7 => 0,
            8 => 0,
            9 => 0,
            10 => 0,
            11 => 0,
            12 => 0,
            13=> 0,
            14 => 0,
            15 => 0,
            16 => 0,
            17 => 0,
            18 => 0,
            19 => 0,
            20 => 0,
            21 => 0,
            22 => 0,
            23 => 0,
            0 => 0,
        ];
    }

    public function distributionAccounts()
    {
        foreach ($this->days as $day => $percent){
            if (!$accountsAndCountInThisDay = $this->distributionDays->countAccountByTime($day, $percent, $this->totalAccounts, $this->projectAccounts)){
                continue;
            }

            foreach ($this->hours as $hour => $percentage){
                if ($this->distributionHours->countAccountByTime($hour, $percentage, $accountsAndCountInThisDay[1], $this->projectAccounts)){
                    continue;
                }
            }



        }
    }
}





$projectsAccountDays = new ProjectAccountService(new ProjectsAccountDays(), new ProjectsAccountHours());
$projectsAccountDays->getDays();
$projectsAccountDays->getHours();
$projectsAccountDays->getActiveProjectAccounts();
$projectsAccountDays->getTotalCountAccount();
$projectsAccountDays->distributionAccounts();
echo 'end';
