<?php

namespace App\Console\Commands;

use App\User;
use App\Mail\NotifyMail;
use Illuminate\Console\Command;

class Notify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:emails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'To Notify Emails Add In DB With New Featchers';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // $users = User::select('email')->get();
        $emails = User::pluck('email')->toArray();
        $data = ['title' => 'No Title' , 'body' => 'Try Any Body To Send First'];
        foreach ($emails as $email) {
            Mail::To($email)->send(new NotifyMail($data));
        }
    }
}
