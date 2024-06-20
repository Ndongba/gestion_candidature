<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Candidature;

class CandidatureStatusUpdated extends Notification
{
    use Queueable;

    protected $candidature;

    public function __construct(Candidature $candidature)
    {
        $this->candidature = $candidature;
    }

    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Mise à jour de l\'état de votre candidature')
            ->greeting('Bonjour ' . $notifiable->prenom . ' ' . $notifiable->nom . ',')
            ->line("L'état de votre candidature a été mis à jour à : {$this->candidature->etat}")
            ->action('Voir la candidature', url('/candidatures'))
            ->line('Merci d\'utiliser notre application!');
    }

    public function toArray($notifiable)
    {
        return [
            'message' => "L'état de votre candidature a été mis à jour à : {$this->candidature->etat}",
            'candidature_id' => $this->candidature->id,
        ];
    }
}
