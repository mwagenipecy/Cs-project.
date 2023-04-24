


<div>




    {{-- Because she competes with no one, no one can compete with her. --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Roles and Permissions') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8  ">
            <div class="ft-r -mr-2 md:border-l">

               <x-primary-button  class="origin-top-left "  wire:click="Create">  Create</x-primary-button>

            </div>
            <div class="bg-white overflow-hidden shadow-sm shadow-lg sm:rounded-lg">
                <div class="p-6 text-gray-900 text-center">
                   <h2>   {{ __("User Roles") }}</h2>
                </div>

                <div class="button-green">   </div>

                <table class="text-left w-full mb-4 ml-4">
                    <tr>
                        <th class="text-center"> Id</th>
                        <th> Role Name</th>
                        <th> Created At</th>
                        <th>status</th>
                        <th>Action</th>

                    </tr>
                    @foreach($roles as $role)

                    <tr>
                        <td class="text-center">{{$role->id}}</td>
                        <td>{{$role->name}}</td>
                        <td>{{$role->created_at->diffForHumans()}}</td>
                        <td> <x-secondary-button wire:click="assignPermissions">Assign Permission  </x-secondary-button> </td>
                        <td>
                            <x-success-button wire:click="Edit">Edit</x-success-button>
                            <x-danger-button wire:click="Delete({{$role->id}})" >Delete</x-danger-button>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

