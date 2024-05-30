<?php

namespace App\View\Components\admin\kependudukan;

use App\Models\KartuKeluargaModel;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ModalTambahPenduduk extends Component
{
    public $modalTambah;
    public function __construct($modalTambah = false)
    {
        $this->modalTambah = $modalTambah;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $kartuKeluarga = KartuKeluargaModel::all();
        return view('components..admin.kependudukan.modal-tambah-penduduk', compact('kartuKeluarga'));
    }
}
