<?php

namespace App\Http\Livewire;

use PowerComponents\LivewirePowerGrid\Button;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;

class UserTable extends DataTableComponent
{
    protected $model = User::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Name", "name")
                ->sortable(),
            Column::make("Email", "email")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }


    public function actions(): array
    {
        return [
            Button::make('edit', 'Edit')
                ->class('bg-dark cursor-pointer text-dark px-3 py-2.5 m-1 rounded text-sm')
                ->route('user.edit', ['user' => 'id']),

            Button::make('destroy', 'Delete')
                ->class('bg-danger cursor-pointer text-dark px-3 py-2 m-1 rounded text-sm')
                ->route('user.destroy', ['user' => 'id'])
                ->method('delete')
            ];


    }
}
