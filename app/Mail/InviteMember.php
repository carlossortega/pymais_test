<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\URL;

class InviteMember extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $link;

    public function __construct(User $user, $link)
    {
        $this->user = $user;
        $this->link = $link;
    }

    public function build()
    {
        return $this->subject('Set Your New Password')
                    ->view('auth.emails.set_password') // Vista para el correo
                    ->with([
                        'link' => $this->link,
                        'user' => $this->user, // Enlace para establecer la contraseña
                    ]);
    }
}
