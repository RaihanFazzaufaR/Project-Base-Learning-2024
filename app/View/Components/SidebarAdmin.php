<?php

namespace App\View\Components;

use App\Models\AduanModel;
use App\Models\JadwalModel;
use App\Models\UmkmModel;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SidebarAdmin extends Component
{
    public $selected;
    public function __construct($selected)
    {
        $this->selected = $selected;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        $UmkmRequest = UmkmModel::where('status', 'diproses')->count();
        $KegiatanRequest = JadwalModel::where('status', 'diproses')->count();
        $AduanRequest = AduanModel::where('status', 'diproses')->count();
        return view('components.sidebar-admin', compact('UmkmRequest', 'KegiatanRequest', 'AduanRequest'));
    }
}
