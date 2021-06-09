<?php

namespace App\Http\Controllers\Reminder;

use App\Jobs\SendReminder;
use App\Reminder\Reminder;
use App\Mail\Reminder\Reminder as ReminderMail;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Reminder\Reminder as ReminderRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use function Illuminate\Mail\send;

class ReminderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $reminders = DB::table('reminders')->paginate(5);
        return view('reminder.reminders', [
            'reminders' => $reminders
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('reminder.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(ReminderRequest $request)
    {
        $reminder = Reminder::create(($request->all()));

        $data = [
            'reply_name' => $request->reminder,
            'reply_email' => $request->email,
            'reminder' => $request->reminder,
            ''
        ];


        if ($reminder->repetition == 2) {
            SendReminder::dispatch($data)->delay(now()->addDay(1));
        }

        if ($reminder->repetition == 3) {
            SendReminder::dispatch($data)->delay(now()->addHour(1));
        }

        return redirect()->route('reminder.index', [
            'reminder' => $reminder->id
        ])->with(['color' => 'green', 'message' => "Pedido Alteado com sucesso!"]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit(Reminder $reminder)
    {
        $reminder = Reminder::where('id', $reminder->id)->first();
        return view('reminder.edit', [
            'reminder' => $reminder
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ReminderRequest $request
     * @param Reminder $reminder
     * @return Response
     */
    public function update( Request $request, Reminder $reminder)
    {
        $reminderUpdate = Reminder::where('id', $reminder->id)->first();
        $reminderUpdate->fill($request->all());
        $reminderUpdate->save();

        return redirect()->route('reminder.edit', [
            'reminder' => $reminderUpdate->id
        ])->with('success', 'Lembrete alterado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
