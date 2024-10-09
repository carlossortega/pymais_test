<?php

namespace App\Mail;

use App\Models\Team_members;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InviteMember extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function build()
    {
        return $this->subject('Set Your New Password')
                    ->view('auth.emails.set_password') // Vista para el correo
                    ->with([
                        'link' => url('set-password/' . $this->user->id), // Enlace para establecer la contraseña
                    ]);
    }
}
