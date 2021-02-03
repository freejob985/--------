<?php

namespace App\Notifications;

use App\contact;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class sendconact extends Notification
{
    use Queueable;
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    private $contact;

    public function __construct(contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }
    public function toDatabase()
    {
        return [
            'Name' => $this->contact->Name,
            'Mail' => $this->contact->Mail,
            'Subject' => $this->contact->Subject,
            'Mobile' => $this->contact->Mobile,
            'Message' => $this->contact->Message,
        ];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */

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
