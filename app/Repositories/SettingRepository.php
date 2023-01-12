<?php

namespace App\Repositories;

use App\Models\Setting;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class SettingRepository
{
    public function store($values): Model|Builder
    {
        return Setting::query()
            ->create([
                'projects_count' => $values['projects_count'],
                'customers_count' => $values['customers_count'],
                'team_count' => $values['team_count'],
                'experience_count' => $values['experience_count'],
                'linkedin' => $values['linkedin'],
                'instagram' => $values['instagram'],
                'telegram' => $values['telegram'],
                'whatsapp' => $values['whatsapp'],
                'email' => $values['email'],
                'address' => $values['address'],
                'phone' => $values['phone'],
                'mobile1' => $values['mobile1'],
                'mobile2' => $values['mobile2']
            ]);
    }

    public function show()
    {
        $data = Setting::query()
            ->get();
        if (count($data)) {
            return $data->first();
        } else {
            return $data->put('status', 'store');
        }
    }

    public function update($values, $id): int
    {
        return Setting::query()
            ->where('id', '=', $id)
            ->update([
                'projects_count' => $values['projects_count'],
                'customers_count' => $values['customers_count'],
                'team_count' => $values['team_count'],
                'experience_count' => $values['experience_count'],
                'linkedin' => $values['linkedin'],
                'instagram' => $values['instagram'],
                'telegram' => $values['telegram'],
                'whatsapp' => $values['whatsapp'],
                'email' => $values['email'],
                'address' => $values['address'],
                'phone' => $values['phone'],
                'mobile1' => $values['mobile1'],
                'mobile2' => $values['mobile2']
            ]);
    }
}
