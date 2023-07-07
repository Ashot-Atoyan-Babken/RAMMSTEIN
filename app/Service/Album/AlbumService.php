<?php

namespace App\Service\Album;

use App\Models\Album;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AlbumService
{
    public function store($data)
    {
        try {
            DB::beginTransaction();
            $data['main_image'] = Storage::disk('public')->put('/albums', $data['main_image']);
            $album = Album::firstOrCreate($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort('500');
        }
    }

    public function update($data, $album)
    {
        try {
            DB::beginTransaction();
            if (isset($data['main_image'])) {
                $data['main_image'] = Storage::disk('public')->put('/albums', $data['main_image']);
            }
            $album->update($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort('500');
        }
        return $album;
    }
}
