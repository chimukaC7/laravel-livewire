<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class UserDatatables extends LivewireDatatable
{
    public $model = User::class;

    public function builder()
    {
        return User::query();
        //return User::query()->leftJoin('planets', 'planets.id', 'users.planet_id');
    }



//    public function render()
//    {
//        return view('livewire.user-datatables');
//    }

    //@return response()
    public function columns()
    {
        return [
            NumberColumn::name('id')
                ->label('ID')
                ->sortBy('id'),

            Column::name('name')
                ->label('Name'),

            Column::name('email')
                ->searchable()
                ->hideable()
                ->filterable($this->email),

            DateColumn::name('created_at')
                ->label('Creation Date')
        ];
    }
}
