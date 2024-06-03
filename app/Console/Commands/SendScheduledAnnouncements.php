<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\PengumumanModel;
use App\Services\TelegramService;
use Carbon\Carbon;

class SendScheduledAnnouncements extends Command
{
     protected $signature = 'announcement:send';
    protected $description = 'Send scheduled announcements';
    protected $telegramService;

    public function __construct(TelegramService $telegramService)
    {
        parent::__construct();
        $this->telegramService = $telegramService;
    }

    public function handle()
    {
        $now = Carbon::now()->startOfDay();
        $sevenDayFromNow = Carbon::now()->copy()->addDays(7);

        $announcements = PengumumanModel::whereBetween('mulai_tanggal', [$now, $sevenDayFromNow])
            ->whereNull('sent_at')
            ->get();

        foreach ($announcements as $announcement) {
            $message = $this->formatMessage($announcement);
            $this->telegramService->sendMessage($message);

            $announcement->update([
                'sent_at' => $now
            ]);
        }

        return 0;
    }

    private function formatMessage(PengumumanModel $announcement)
    {
        $message = "<b>". $announcement->judul . "</b>\n\n";
        if($announcement->kegiatan_tipe != null){
        $message .= "Kategori: $announcement->kegiatan_tipe\n";
        }
        if($announcement->mulai_tanggal != null) {
            $message .= "Mulai tanggal: $announcement->mulai_tanggal\n";
        }
        if($announcement->akhir_tanggal != null){
            $message .= "Selesai tanggal: $announcement->akhir_tanggal\n";
        }
        if($announcement->mulai_waktu != null){
            $message .= "Mulai waktu: $announcement->mulai_waktu\n";
        }
        if($announcement->akhir_waktu != null){
            $message .= "Selesai waktu: $announcement->akhir_waktu\n";
        }
        if($announcement->iuran != null){
            $message .= "Iuran: $announcement->iuran\n";
        }
        if($announcement->lokasi != null){
            $message .= "Lokasi: $announcement->lokasi\n";
        }
        $message .= "$announcement->konten\n";

        return $message;
    }
}
