<?php

namespace App\Livewire\Proposals;

use Livewire\Component;
use App\Models\Project;
use App\Models\Proposal;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;

class Create extends Component
{
    public Project $project;

    public bool $modal = false;
    
    #[Validate(['required', 'email'])]
    public string $email = '';

    #[Rule(['required', 'numeric', 'gt:0'])]
    public int $hours = 0;

    public bool $agree = false;

    public function save()
    {
        $this->validate();

        if(!$this->agree) {
            $this->addError('agree', 'Você precisa concordar com os termos de uso.');
            return;
        }

        $proposal = $this->project->proposals()
            ->updateOrCreate(
                ['email' => $this->email],
                ['hours' => $this->hours]
            );
        
        $this->arrangePositions($proposal);

        $this->dispatch('proposal::created');
        $this->modal = false;
    }

    public function arrangePositions(Proposal $proposal)
    {
        $query = DB::select("
            select *, row_number() over (order by hours asc) as NewPosition
            from proposals
            where project_id = :project
        ", ['project' => $proposal->project_id]);
    }

    public function render()
    {
        return view('livewire.proposals.create');
    }
}
