<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Auth\Notifications\ResetPassword;


class MyResetPassword extends ResetPassword
{
    use Queueable;

    public function toMail($notifiable)
    {
        return (new MailMessage)
        ->subject('Recuperación de contraseña')
        ->greeting('¡Saludos Neo Emprendedor!')
        ->line('Si solicitaste un cambio de contraseña haz "click" en el botón de abajo y sigue las indicaciones.')
        ->action('Recuperar contraseña', route('password.reset', $this->token))
        ->line('En caso de que no hayas hecho la solicitud, haz caso omiso a este correo.')
        ->salutation('Sigue emprendiendo hacia el futuro.');
    }

    
}
