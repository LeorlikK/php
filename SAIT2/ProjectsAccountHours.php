<?php

namespace App\Services\Projects;

use Illuminate\Support\Facades\Log;

class ProjectsAccountHours implements ProjectsAccountDistribution
{

    public function countAccountByTime($unit, $percent, $totalAccounts, $projectAccounts)
    {
        $accountsNeededInThisHour = floor($percent/100*$totalAccounts);
        Log::channel('stack')->info('Hours: '.$accountsNeededInThisHour,
        ['Total: ' . $totalAccounts, 'Percent: ' . $percent]
        );

//        $accountsInThisHour = $this->filterByNeededUnit($unit, $projectAccounts);
//
//        if ($accountsNeededInThisHour >= $accountsInThisHour) return true;
//        else return $accountsNeededInThisHour;
    }

    public function filterByNeededUnit($unit, $projectAccounts)
    {
        return $projectAccounts->filter(function ($account) use($unit){
            if ($account->next_post_at){
                return $account->next_post_at->format('Y:m:d') == today()->addDays($unit)->format('Y:m:d');
            }else return null;
        });
    }
}
