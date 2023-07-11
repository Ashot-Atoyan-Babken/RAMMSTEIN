<?php

namespace App\Service\Tour;

use App\Models\Tour;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TourService
{
    public function store($data)
    {
        try {
            DB::beginTransaction();
            $data['main_image'] = Storage::disk('public')->put('/tours', $data['main_image']);
            $tour = Tour::firstOrCreate($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort('500');
        }
    }

    public function update($data, $tour)
    {
        try {
            DB::beginTransaction();
            if (isset($data['main_image'])) {
                $data['main_image'] = Storage::disk('public')->put('/tours', $data['main_image']);
            }
            $tour->update($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort('500');
        }
        return $tour;
    }
}
