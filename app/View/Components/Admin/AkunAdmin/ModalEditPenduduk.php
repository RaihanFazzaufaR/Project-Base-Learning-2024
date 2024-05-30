<?php

namespace App\View\Components\admin\kependudukan;

use App\Models\KartuKeluargaModel;
use App\Models\PendudukModel;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ModalEditPenduduk extends Component
{
    private $idUsr;
    public function __construct($idUsr)
    {
        $this->idUsr = $idUsr;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $usr = PendudukModel::find($this->idUsr);
        $kartuKeluarga = KartuKeluargaModel::all();
        return view('components..admin.kependudukan.modal-edit-penduduk', compact('usr', 'kartuKeluarga'));
    }
}
