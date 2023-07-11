<?php

namespace App\Service\Concert;

use App\Models\Song;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ConcertService
{
    public function store($data)
    {
        try {
            DB::beginTransaction();
            $data['tour_photo'] = Storage::disk('public')->put('/concerts', $data['tour_photo']);
            Song::firstOrCreate($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort('500');
        }
    }

    public function update($data, $concert)
    {
        try {
            DB::beginTransaction();
            if (isset($data['tour_photo'])) {
                $data['tour_photo'] = Storage::disk('public')->put('/concerts', $data['tour_photo']);
            }
            $concert->update($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort('500');
        }
        return $concert;
    }
}
