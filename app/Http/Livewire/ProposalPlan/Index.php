<?php

namespace App\Http\Livewire\ProposalPlan;

use App\Models\ProposalPlan;
use Livewire\Component;

class Index extends Component
{
    public $proposalPlans;

    public function render()
    {
        $this->proposalPlans = ProposalPlan::all();

        return view('livewire.proposal-plan.index')->layout('layouts.app', ['header' => '提案プラン一覧']);
    }
}
