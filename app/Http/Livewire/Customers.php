<?php

namespace App\Http\Livewire;

use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Rules\Rule;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Customer;

class Customers extends DataTableComponent
{
    protected $model = Customer::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Customer name", "customer_name")
                ->sortable(),
            Column::make("Customer email", "customer_email")
                ->sortable(),
            Column::make("Customer phone", "customer_email")
                ->sortable(),
            Column::make("User id", "id")
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


    public function actionRules(): array
    {
        return [

            //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($user) => $user->id === 2)
                ->hide(),
        ];
    }

    public function createCustomer(){
        dd(__LINE__);
    }
}
