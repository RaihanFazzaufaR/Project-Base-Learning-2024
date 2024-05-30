<?php

namespace App\View\Components\admin\kependudukan;

use App\Models\PendudukModel;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ModalDetailPenduduk extends Component
{
    public $idPenduduk;
    private $idUsr;
    public function __construct($idPenduduk, $idUsr)
    {
        $this->idPenduduk = $idPenduduk;
        $this->idUsr = $idUsr;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $usr = PendudukModel::find($this->idUsr);
        return view('components..admin.kependudukan.modal-detail-penduduk', compact('usr'));
    }
}
