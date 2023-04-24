




<div>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <a href="" class="px-4 py-2 bg-green-700 hover:bg-green-500; rounded-md ">Create</a>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <livewire:customers> </livewire:customers>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

</div>










{{--<div>--}}


{{--    <div>--}}
{{--        --}}{{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

{{--        <div class="py-12">--}}
{{--            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg w-full">--}}
{{--                    <livewire:customers> </livewire:customers>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--</div>--}}



{{--<div class="row">--}}
{{--                                   <div class="grid-cols-4">--}}
{{--                                       <form >--}}
{{--                                           <x-danger-button   wire:click="Delete({{$user->id}})"> Delete </x-danger-button>--}}
{{--                                       </form>--}}
{{--                                   </div>--}}
{{--                                   <div class="grid-cols-4">--}}

{{--                                       <form >--}}
{{--                                           <x-primary-button   wire:click="Edit"> Edit </x-primary-button>--}}
{{--                                       </form>--}}
{{--                                   </div>--}}

{{--                                   <div class="grid-cols-4">--}}

{{--                                       <form >--}}
{{--                                           <x-secondary-button   wire:click="View({{$user->id}})"> View </x-secondary-button>--}}
{{--                                       </form>--}}

{{--                                   </div>--}}

{{--                               </div>--}}
{{--                            </td>--}}

{{--    <div>--}}
{{--        @livewireScripts--}}

{{--            <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">--}}
{{--            <span>--}}
{{--                --}}{{-- Previous Page Link --}}
{{--                    <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md select-none">--}}
{{--                        {!! __('pagination.previous') !!}--}}
{{--                    </span>--}}
{{--                        <button type="button" dusk="previousPage" wire:click=" " wire:loading.attr="disabled" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">--}}
{{--                                {!! __('pagination.previous') !!}--}}
{{--                        </button>--}}
{{--                        <button type="button" wire:click="previousPage('')" wire:loading.attr="disabled" dusk="previousPage" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">--}}
{{--                                {!! __('pagination.previous') !!}--}}
{{--                        </button>--}}
{{--            </span>--}}

{{--                <span>--}}
{{--                --}}{{-- Next Page Link --}}
{{--                        <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md select-none">--}}
{{--                        {!! __('pagination.next') !!}--}}
{{--                    </span> </span>--}}
{{--            </nav>--}}
{{--    </div>--}}



