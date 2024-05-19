<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CustomResetPasswordNotification extends Notification
{
    use Queueable;
    public $token;
    /**
     * Create a new notification instance.
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line('Anda menerima email ini karena kami menerima permintaan reset password untuk akun Anda. Klik tombol di bawah ini untuk merubah password Anda:')
                    ->action('Ubah Password', route('password.reset',['token'=> $this->token, 'email'=> $notifiable->email]))
                    ->line(sprintf('Link reset password akan kedaluwarsa dalam %d menit. Jika Anda tidak merasa melakukan permintaan reset password, abaikan email ini.', config('auth.passwords.'.config('auth.defaults.passwords').'.expire')));
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
