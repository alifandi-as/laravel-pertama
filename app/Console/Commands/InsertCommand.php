<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class InsertCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'insert:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Inserts 10 random data to user table';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $data = [[
            'name' => 'Lailil Mahfud',
            'password' => Hash::make('123456'),
            'phone' => '085111111',
            'email' => 'email@gmail.com',
            'address' => 'Jepara'
        ], [
            'name' => 'Scott Wozniak',
            'password' => Hash::make('heyallscotthere!'),
            'phone' => '0831749875',
            'email' => 'scotthere@scott.com',
            'address' => 'Ohio'
        ],[
            'name' => 'Afgan',
            'password' => Hash::make('@Fg4nTop'),
            'phone' => '081234794',
            'email' => 'afghan@test.com',
            'address' => 'Jakarta'
        ],[
            'name' => 'James Stephen Donaldson',
            'password' => Hash::make('mrbeast6000'),
            'phone' => '0875903248',
            'email' => 'mrbeast@mrbeast.com',
            'address' => 'North Carolina'
        ],[
            'name' => 'Udin',
            'password' => Hash::make('udinkelas5'),
            'phone' => '0812346795',
            'email' => 'email@gmail.com',
            'address' => 'Arjasa'
        ],[
            'name' => 'Jennifer Lawrence',
            'password' => Hash::make('JenniferL'),
            'phone' => '08477928349',
            'email' => 'jlactress@jl.com',
            'address' => 'Kentucky'
        ],[
            'name' => 'Linus Sebastian',
            'password' => Hash::make('lttrocks'),
            'phone' => '0856732984',
            'email' => 'lttrocks@sponsor.com',
            'address' => 'Surrey'
        ],[
            'name' => 'Lyodra',
            'password' => Hash::make('Ly0draMusIk'),
            'phone' => '0812374975',
            'email' => 'lyodramusik@lyodra.com',
            'address' => 'Meddan'
        ],[
            'name' => 'Virat Kohli',
            'password' => Hash::make('CricketCh4mp'),
            'phone' => '0871324234',
            'email' => 'viratcricket@virat.com',
            'address' => 'Delhi'
        ],[
            'name' => 'Alan Walker',
            'password' => Hash::make('@l4nW41ker'),
            'phone' => '0813274978',
            'email' => 'alanwalker@test.com',
            'address' => 'Bergen'
        ]];
        User::insert($data);
        return Command::SUCCESS;
    }
}
