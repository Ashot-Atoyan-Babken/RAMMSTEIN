<?php

namespace App\Service\Pictures;

use App\Models\Album;
use App\Models\Pictures;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PictureService
{
    public function store($data)
    {
        try {
            DB::beginTransaction();
            $data['photos'] = Storage::disk('public')->put('/pictures', $data['photos']);
            Pictures::firstOrCreate($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort('500');
        }
    }

    public function update($data, $pictures)
    {
        try {
            DB::beginTransaction();
            if (isset($data['photos'])) {
                $data['photos'] = Storage::disk('public')->put('/pictures', $data['photos']);
            }
            $pictures->update($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort('500');
        }
        return $pictures;
    }
}
