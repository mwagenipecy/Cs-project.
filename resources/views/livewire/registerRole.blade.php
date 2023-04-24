<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Role') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">

                    <form method="POST" action="{{route('admin/register/role')}}">
                        @csrf
                        <div>
                            <x-label for="Role name" value="{{ __('Role Name') }}" />
                            <x-input id="role_name" class="block mt-1 w-full" type="text" name="role_name" :value="old('role_name')" required autofocus autocomplete="role_name" />
                        </div>

                        <div class="flex justify-start mt-4">

                            <x-button class="ml-4">
                                {{ __('Register') }}
                            </x-button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>
