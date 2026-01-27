<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Schedule;

class ScheduleSeeder extends Seeder
{
    public function run(): void
    {
        Schedule::create([
            'subject' => 'Programmation PHP',
            'teacher' => 'M. Dossou',
            'room' => 'Salle 102',
            'day' => 'Lundi',
            'start_time' => '08:00:00',
            'end_time' => '10:00:00',
            'level' => 'L3',
            'major' => 'AL',
        ]);

        Schedule::create([
            'subject' => 'Base de Données',
            'teacher' => 'Mme Gnonlonfoun',
            'room' => 'Labo 1',
            'day' => 'Mardi',
            'start_time' => '10:30:00',
            'end_time' => '12:30:00',
            'level' => 'L3',
            'major' => 'AL',
        ]);
    }
}