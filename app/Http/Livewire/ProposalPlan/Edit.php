<?php

namespace App\Http\Livewire\ProposalPlan;

use App\Models\ProposalPlan;
use Livewire\Component;

class Edit extends Component
{
    public $proposalPlan;

    protected $rules = [
        'proposalPlan.title' => 'required|string|min:4|max:255',
        'proposalPlan.content' => 'required|string|min:16|max:1024',
        'proposalPlan.price' => 'required|string',
    ];

    public function mount(ProposalPlan $proposalPlan)
    {
        $this->proposalPlan = $proposalPlan;
    }

    // リアルタイムバリデーション
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function update()
    {
        $this->validate();

        $this->proposalPlan->save();

        session()->flash('message', '提案プランを更新しました。');

        return redirect()->route('proposal_plan.index');
    }

    public function render()
    {
        return view('livewire.proposal-plan.edit')->layout('layouts.app', ['header' => '提案プラン編集']);
    }
}
