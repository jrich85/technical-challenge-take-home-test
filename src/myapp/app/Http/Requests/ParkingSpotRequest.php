<?php

namespace App\Http\Requests;

use App\Models\ParkingSpot;
use Illuminate\Database\Query\Builder;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ParkingSpotRequest extends FormRequest
{
    public function rules()
    {
        $this->merge(['parkingSpot' => $this->route('parkingSpot')]);
        return [
            'parkingSpot' => [
                Rule::exists('parking_spots','id')
                    ->where(fn (Builder $query) => $query->where('is_occupied', false))
            ],
            'occupant_type' => ['required', Rule::in(['car', 'motorcycle', 'van'])],
        ];
    }

    public function authorize():bool
    {
        return true;
    }
}
