<?php

namespace App\View\Components;

use App\Models\JadwalModel;
use App\Models\PendudukModel;
use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class navbar extends Component
{
    public $menu;
    public function __construct($menu)
    {
        $this->menu = $menu;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $messages = $this->messages();
        return view('components.navbar', compact('messages'));
    }

    private function messages()
    {
        $today = Carbon::today()->toDateString();
        // $data = PendudukModel::with(['jadwal', 'umkm'])->whereDate('updated_at', $today)->get();
        $data = PendudukModel::whereDate('updated_at', $today)->get();
        // dd($data);
        foreach ($data as  $value) {
            $value->updated_at = Carbon::parse($value->updated_at);
            $value->diffTime = $value->updated_at->diffInHours(Carbon::now());
        }
        return $data;
    }
}
