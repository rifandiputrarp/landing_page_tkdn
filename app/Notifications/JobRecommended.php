<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class JobRecommended extends Notification implements ShouldQueue
{
    use Queueable;

    protected $jobPost;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($jobPost)
    {
        $this->jobPost = $jobPost;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Rekomendasi Lowongan dari Pusat Karir AMIKOM Purwokerto')
            ->line('Rekomendasi Lowongan')
            ->line("**{$this->jobPost->title}**")
            ->line($this->jobPost->company->name)
            ->line($this->jobPost->description)
            ->action('Lihat Lowongan', route('job-posts.show', $this->jobPost->id));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
