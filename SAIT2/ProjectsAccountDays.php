<?php

namespace App\Services\Projects;

use App\Models\ProjectAccount;
use Illuminate\Support\Facades\Log;
use Ramsey\Collection\Collection;

class ProjectsAccountDays implements ProjectsAccountDistribution
{

//    public \Illuminate\Database\Eloquent\Collection $projectAccounts;
//    public int $totalAccounts;

//    public function getActiveProjectAccounts():\Illuminate\Database\Eloquent\Collection
//    {
////        $this->projectAccounts = ProjectAccount::where('is_active', true)->get();
//        return ProjectAccount::where('is_active', true)->get();
//    }

//    public function getTotalCountAccount():void
//    {
//        $this->totalAccounts = $this->projectAccounts->count();
//    }

    public function countAccountByTime($unit, $percent, $totalAccounts, $projectAccounts)
    {
        $accountsNeededInThisDay = floor($percent/100*$totalAccounts);
        $accountsInThisDay = $this->filterByNeededUnit($unit, $projectAccounts);
        $countAccountsInThisDay = $accountsInThisDay->count();

        if ($countAccountsInThisDay >= $accountsNeededInThisDay) return null;

    else{
        Log::channel('stack')->info('Day: ', ['Need: ' . $accountsNeededInThisDay,
        'Have: ' . $countAccountsInThisDay,
        ]);
        return [$accountsInThisDay, $accountsNeededInThisDay];
    }
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
