<?php

namespace App\View\Components\admin\kependudukan;

use App\Models\KartuKeluargaModel;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ModalEditNkk extends Component
{
     private $idKk;
    public function __construct($idKk)
    {
        $this->idKk = $idKk;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $usr = KartuKeluargaModel::find($this->idKk);
        $rt = KartuKeluargaModel::select('rt')->distinct()->get();
        return view('components..admin.kependudukan.modal-edit-nkk', compact('usr', 'rt'));
    }
}
