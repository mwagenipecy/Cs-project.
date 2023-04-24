<div class="">
    <a href="{{route('addCustomers')}}">
    <x-primary-button class="mt-6 mb-6 ml-6 p-4" wire:ckick="createCustomer"> Create</x-primary-button></a>
    @if ($component->debugIsEnabled())
        @php
            $debuggable = [
                'query' => $component->getQuerySql(),
                'filters' => $component->getAppliedFilters(),
                'sorts' => $component->getSorts(),
                'search' => $component->getSearch(),
                'select-all' => $component->getSelectAllStatus(),
                'selected' => $component->getSelected(),
            ];
        @endphp

        <p><strong>@lang('Debugging Values'):</strong></p>

        @if (! app()->runningInConsole())
            <div class="mb-4">@dump($debuggable)</div>
        @endif
    @endif
</div>
