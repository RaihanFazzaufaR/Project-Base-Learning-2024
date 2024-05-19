<?php

namespace App\View\Components\admin\kependudukan;

use App\Models\KartuKeluargaModel;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ModalDetailNkk extends Component
{
    private $id;
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $usr = KartuKeluargaModel::find($this->id);
        return view('components..admin.kependudukan.modal-detail-nkk', compact('usr'));
    }
}
