<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class UsersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::select("id","name","email","phone","profile_image_url","street_address","city","state","country")->get();
    }

    public function headings(): array
    {
        return ["ID", "Name", "Email", "Phone", "Profile Image Url", "Street Address", "City", "State", "Country"];
    }
}
