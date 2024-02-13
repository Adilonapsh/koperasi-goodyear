<?php

namespace App\Livewire;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class UploadHarianLayouts extends Component
{
    use WithFileUploads;
    use LivewireAlert;

    public $file_upload;

    public function handleUploads()
    {
        $this->alert('success', 'Success');
    }

    public function render()
    {
        return view('livewire.upload-harian-layouts');
    }
}
