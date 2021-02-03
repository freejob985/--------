<?php

namespace App\Notifications;

use App\consultation;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class consultationsend extends Notification
{
    use Queueable;
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    private $consultation;

    public function __construct(consultation $consultation)
    {
        $this->consultation = $consultation;
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
            'Name'=> $this->consultation->Name,
            'Day' => $this->consultation->Day,
            'complain' => $this->consultation->complain,
            'Phone' => $this->consultation->Phone,
            'Date' => $this->consultation->Date,
            'Time' => $this->consultation->Time,
            'request' => $this->consultation->request,
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
