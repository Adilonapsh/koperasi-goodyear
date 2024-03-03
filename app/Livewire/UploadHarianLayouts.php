<?php

namespace App\Livewire;

use App\Imports\UploadHarianImport;
use Exception;
use Illuminate\Database\QueryException;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads as LivewireWithFileUploads;
use Maatwebsite\Excel\Facades\Excel;

class UploadHarianLayouts extends Component
{
    use LivewireWithFileUploads;
    use LivewireAlert;

    public $file_upload;

    public function handleUploads()
    {
        if ($this->file_upload){
            try{
                $excel = Excel::import(new UploadHarianImport, $this->file_upload, null, \Maatwebsite\Excel\Excel::XLSX);
                $this->alert('success', 'Berhasil mengimport data.');
            }catch(QueryException $e){
                dd($e);
                $this->alert('error', 'Terjadi Kesalahan query saat mengimport data.');
            }catch(Exception $e){
                $this->alert('error', 'Pastikan file berformat .XLSX');
            }
        }else{
            $this->alert('error', 'Pastikan file sudah terupload.');
        }
    }

    public function render()
    {
        return view('livewire.upload-harian-layouts');
    }
}
