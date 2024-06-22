<?php
namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Candidature;
use App\Models\Formation;
use App\Models\User;

class CandidatureStatusUpdated extends Notification
{
    use Queueable;

    protected $candidature;
    protected $formation;

    public function __construct(Candidature $candidature)
    {
        $this->candidature = $candidature;
        $this->formation = Formation::find($candidature->formation_id);
    }

    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    public function toMail($notifiable)
    {
        $personnelEmails = User::where('role', 'personnel')->pluck('email')->toArray();

        $mailMessage = (new MailMessage)
            ->subject('Mise à jour de l\'état de votre candidature')
            ->greeting('Bonjour ' . $notifiable->prenom . ' ' . $notifiable->nom . ',')
            ->line("L'état de votre candidature à la formation \"{$this->formation->libelle}\" a été mis à jour à : {$this->candidature->etat}")
            ->action('Voir la candidature', url('/affiche_candidature'))
            ->line('Merci d\'utiliser notre application!');

        // Ajouter les emails du personnel en copie
        foreach ($personnelEmails as $email) {
            $mailMessage->cc($email);
        }

        return $mailMessage;
    }

    public function toArray($notifiable)
    {
        return [
            'message' => "L'état de votre candidature à la formation \"{$this->formation->libelle}\" a été mis à jour à : {$this->candidature->etat}",
            'candidature_id' => $this->candidature->id,
            'etat' => $this->candidature->etat, // Ajoutez cette ligne

            'formation_libelle' => $this->formation->libelle,
        ];
    }
}
