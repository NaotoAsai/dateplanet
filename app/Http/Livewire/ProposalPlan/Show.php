<?php

namespace App\Http\Livewire\ProposalPlan;

use App\Models\ProposalPlan;
use Livewire\Component;

class Show extends Component
{
    public $proposalPlan;

    public $modal;

    public function mount(ProposalPlan $proposalPlan)
    {
        $this->proposalPlan = $proposalPlan;
    }

    public function render()
    {
        return view('livewire.proposal-plan.show')->layout('layouts.app', ['header' => '提案プラン詳細']);
    }
}
