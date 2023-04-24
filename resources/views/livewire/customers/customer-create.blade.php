    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Register Customers') }}
        </h2>
    </x-slot>

    @livewireStyles

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class=" w-full">

                    <form action="{{route('registerCustomer')}}" method="post">@csrf

                        <div class="mb-4">
                            <x-label for="customer_name" value="{{ __('Customer Name') }}" />
                            <x-input id="customer_name" class="block mt-1 w-full" type="text" wire:model.defer="customer_name" name="customer_name" :value="old('customer_name')" required autofocus autocomplete="customer_name" />
                        </div>
                        <div class="mb-4">
                            <x-label for="email" value="{{ __('Customer Email') }}" />
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="email" />
                        </div>
                        <div class="mb-4">
                            <x-label for="customer_phone" value="{{ __('Customer Phone') }}" />
                            <x-input id="customer_phone" class="block mt-1 w-full" type="number" minlength="10" name="customer_phone" :value="old('customer_phone')" required autofocus autocomplete="customer_phone" />
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

        @livewireScripts

    </div>
