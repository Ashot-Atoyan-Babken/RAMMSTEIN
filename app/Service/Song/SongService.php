<?php

namespace App\Service\Song;

use App\Models\Song;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SongService
{
    public function store($data)
    {
        try {
            DB::beginTransaction();
            $data['song_name'] = Storage::disk('public')->put('/songs', $data['song_name']);
            Song::firstOrCreate($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort('500');
        }
    }

    public function update($data, $song)
    {
        try {
            DB::beginTransaction();
            if (isset($data['song_name'])) {
                $data['song_name'] = Storage::disk('public')->put('/songs', $data['song_name']);
            }
            $song->update($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort('500');
        }
        return $song;
    }
}
