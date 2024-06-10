<?php

namespace App\View\Components\admin\kependudukan;

use App\Models\KartuKeluargaModel;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ModalTambahPenduduk extends Component
{
    public function __construct()
    {
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $rt = KartuKeluargaModel::select('rt')->distinct()->get();
        return view('components..admin.kependudukan.modal-tambah-penduduk', compact('rt'));
    }
}
