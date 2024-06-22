<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    // Affiche les notifications de l'utilisateur
    public function index()
    {
        $notifications = Auth::user()->notifications;

        return view('candidates.notifications.index', compact('notifications'));
    }

    // Marque une notification comme lue
    public function markAsRead($id)
    {
        $notification = Auth::user()->notifications()->findOrFail($id);
        $notification->markAsRead();

        return redirect()->back()->with('success', 'Notification marquée comme lue.');
    }
    // Marque une notification comme lue

    // Marque toutes les notifications comme lues
    public function markAllAsRead()
    {
        Auth::user()->unreadNotifications->markAsRead();

        return redirect()->back()->with('success', 'Toutes les notifications ont été marquées comme lues.');
    }
}
