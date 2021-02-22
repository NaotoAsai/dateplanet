<?php

namespace App\Http\Livewire\ProposalPlan;

use App\Models\MCategory;
use App\Models\MPrefecture;
use App\Models\ProposalPlan;
use Livewire\Component;

class Create extends Component
{
    public $title;
    public $content;
    public $price;
    public $prefectures;
    public $categories;

    public function mount()
    {
        $this->prefectures = MPrefecture::all();
        $this->categories = MCategory::all();
    }

    protected $rules = [
        'title' => 'required|string|min:4|max:255',
        'content' => 'required|string|min:16|max:1024',
        'price' => 'required|string',
    ];

    // リアルタイムバリデーション
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store()
    {
        $this->validate();

        ProposalPlan::create([
            'user_id' => \Auth::id(),
            'title' => $this->title,
            'content' => $this->content,
            'price' => $this->price,
            'city_id' => 1,
            'category_id' => 1,
        ]);

        session()->flash('message', '提案プランを投稿しました。');

        return redirect()->route('proposal_plan.index');
    }

    public function render()
    {
        return view('livewire.proposal-plan.create')->layout('layouts.app', ['header' => '提案プラン作成']);
    }
}
