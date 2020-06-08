<div>
    <div class="flex items-center justify-between mb-4">
        <div class="flex-1 pr-4">
            <div class="relative md:w-1/3">
                {{-- <input type="search"
                    class="w-full py-2 pl-10 pr-4 font-medium text-gray-600 rounded-lg shadow focus:outline-none focus:shadow-outline"
                    placeholder="Search...">
                <div class="absolute top-0 left-0 inline-flex items-center p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                        <circle cx="10" cy="10" r="7" />
                        <line x1="21" y1="21" x2="15" y2="15" />
                    </svg>
                </div> --}}
            </div>
        </div>
        <div>
            <button type="button"
                wire:click="$emit('createModel')"
                class="flex justify-center p-2 text-sm text-white transition duration-150 ease-in-out border border-transparent rounded-md bg-default-600 hover:bg-default-500 focus:outline-none focus:border-default-700 focus:shadow-outline-default active:bg-default-700">@lang('attributes::action.create')</button>
        </div>
    </div>

    <div class="overflow-x-auto overflow-y-auto bg-white rounded-lg shadow">
        <table class="relative w-full whitespace-no-wrap bg-white border-collapse table-auto table-striped">
            <thead>
                <tr class="text-left">
                    @foreach($this->cols as $col)
                        <th
                            class="sticky top-0 px-6 py-2 text-xs font-bold tracking-wider text-gray-600 uppercase bg-gray-100 border-b border-gray-200">
                            {{ $col['name'] }}</th>
                    @endforeach
                        <th
                            class="sticky top-0 px-6 py-2 text-xs font-bold tracking-wider text-center text-gray-600 uppercase bg-gray-100 border-b border-gray-200">
                            Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($this->rows as $row)
                    <tr>
                        @foreach($this->cols as $col)
                        <td class="text-sm border-t border-gray-200 border-dashed ">
                            <span class="flex items-center p-2 text-gray-700">{{ $row->{$col['code']} }}</span>
                        </td>
                        @endforeach
                        <td class="flex justify-center text-sm align-middle border-t border-gray-200 border-dashed ">
                            <button
                                wire:click="$emit('showModel',{{ $row->id }})"
                                class="flex justify-center p-1 mt-1 text-xs text-white transition duration-150 ease-in-out border border-transparent rounded bg-default-600 hover:bg-default-500 focus:outline-none focus:border-default-700 focus:shadow-outline-default active:bg-default-700">@lang('attributes::action.show')</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
    {{ $this->rows->links() }}
</div>
