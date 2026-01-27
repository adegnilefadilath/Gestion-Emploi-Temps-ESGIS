<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{
    /**
     * Affiche le planning de l'étudiant connecté.
     */
    public function index()
    {
        // 1. On récupère l'étudiant connecté
        $user = Auth::user();

        // 2. On cherche les cours qui correspondent à son niveau (L3) et sa filière (AL)
        $schedules = Schedule::where('level', $user->level)
                            ->where('major', $user->major)
                            ->orderBy('start_time')
                            ->get();

        // 3. On envoie les données à la vue
        return view('schedule.index', compact('schedules'));
    }
}