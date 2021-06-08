<?php

namespace App\Console\Commands;

use App\Notifications\NewsletterNotification;
use Illuminate\Console\Command;

class SendNewsletterCommand extends Command
{
 
    protected $signature = 'send:newsletter';
 

    protected $description = 'Sends a new email for newsletter';

 
    
    public function __construct()
    {
        parent::__construct();
    }
 

    
}
