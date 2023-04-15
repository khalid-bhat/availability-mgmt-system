<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AvailableTimeSlot;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AvailableTimeSlotController extends Controller
{
    public function __construct()
    {
        $this->user = auth()->user();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'date' => 'required|date_format:Y-m-d',
            'time_slots' => 'required|array',
            'time_slots.*.start_time' => 'required|date_format:H:i:s',
            'time_slots.*.end_time' => 'required|date_format:H:i:s|after:time_slots.*.start_time',
        ]);

        $user = $request->user();


                    // Check for overlapping time slots
            $existingTimeSlots = $user->availableTimeSlots()
            ->where('date', $validatedData['date'])
            ->where(function ($query) use ($validatedData) {
                foreach ($validatedData['time_slots'] as $timeSlot) {
                    $query->orWhere(function ($query) use ($timeSlot) {
                        $query->whereBetween('start_time', [$timeSlot['start_time'], $timeSlot['end_time']])
                            ->orWhereBetween('end_time', [$timeSlot['start_time'], $timeSlot['end_time']])
                            ->orWhere(function ($query) use ($timeSlot) {
                                $query->where('start_time', '<', $timeSlot['start_time'])
                                    ->where('end_time', '>', $timeSlot['end_time']);
                            });
                    });
                }
            })
            ->get();

        if ($existingTimeSlots->isNotEmpty()) {
            return response()->json(['error' => 'Time slots overlap, Please check data or previously created Time Slots '], 422);
        }

        // Create new time slots
        foreach ($validatedData['time_slots'] as $timeSlot) {
            AvailableTimeSlot::create([
                'user_id' => $user->id,
                'date' => $validatedData['date'],
                'start_time' => $timeSlot['start_time'],
                'end_time' => $timeSlot['end_time'],
            ]);
        }

        return response()->json(['message' => 'Availability Saved Successfully.'], 201);
}

    public function update(Request $request)
        {
            $validatedData = $request->validate([
                'date' => 'required|date_format:Y-m-d',
                'time_slots' => 'required|array',
                'time_slots.*.start_time' => 'required|date_format:H:i:s',
                'time_slots.*.end_time' => 'required|date_format:H:i:s|after:time_slots.*.start_time',
            ]);

            $user = $request->user();
                // Retrieve the user's availability record for the specified date
            $availability = $user->availableTimeSlots()->where('date', $validatedData['date'])->get()->toArray();
            if (!empty($availability)) {
                // Delete all available time slots for the availability record
                $user->availableTimeSlots()->where('date', $validatedData['date'])->delete();
            }
            else {
                return response()->json(['message' => 'Availability not present for given Date. Please add the availability for a date first'], 200);
            }

           $saved = $this->store($request);
           $content = $saved->getContent();
            $data = json_decode($content, true);
            if (isset($data['error']['message'])) {
                $errorMessage = $data['error']['message'];
                return $saved;
            } else {
                return response()->json(['message' => 'Availability Updated Successfully.'], 201);
            }

        }
        public function getAvailabilityForPatient(Request $request)
        {
            $validatedData = $request->validate([
                'date' => 'required|date_format:Y-m-d',
                'doctor_id' => 'required|exists:users,id',
            ]);

            $availability_slots = AvailableTimeSlot::where('user_id', $validatedData["doctor_id"])
                ->whereDate('date', $validatedData["date"])
                ->get()->toArray();
            if (!empty($availability_slots)) {
                $responseArray = [
                    'data'=>$availability_slots
                ];
                return response()->json($responseArray,200);
            }
            else{
                return response()->json(['message' => 'Doctor Not Available on given Date'], 200);
            }
        }



}
