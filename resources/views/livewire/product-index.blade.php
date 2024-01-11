<div>
    <table class="min-w-full bg-white border rounded-md overflow-hidden">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="py-2 px-4">Status</th>
                <th class="py-2 px-4">Name</th>
                <th class="py-2 px-4">Brand</th>
                <th class="py-2 px-4">SKU</th>
                <th class="py-2 px-4">Stock</th>
                <th class="py-2 px-4">Product Type</th>
                <th class="py-2 px-4">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr class="hover:bg-gray-100 transition duration-150">
                <td class="py-2 px-4 text-center">{{ $product->status }}</td>
                <td class="py-2 px-4 text-center">
                    <span>{{ $product->attribute_data }}</span>
                </td>
                <td class="py-2 px-4 text-center">{{ optional($product->brand)->name ?? 'N/A' }}</td>
                <td class="py-2 px-4 text-center">{{ optional($product->variants)->sku ?? 'N/A' }}</td>
                <td class="py-2 px-4 text-center">{{ optional($product->variants)->stock ?? 'N/A' }}</td>
                <td class="py-2 px-4 text-center">{{ optional($product->productType)->name ?? 'N/A' }}</td>
                <td class="py-2 px-4 space-x-2 text-center">
                    <x-hub::button tag="a" href="{{ route('hub.products.show', ['product' => $product->id ?? '']) }}">
                        Edit
                    </x-hub::button>

                    <x-hub::button :disabled="false" wire:click="$set('showRestoreConfirm', true)" type="button"
                        theme="green" class="{{ $product->deleted_at ? '' : 'hidden' }}">
                        {{ __('adminhub::global.restore') }}
                    </x-hub::button>

                    <x-hub::button :disabled="false" wire:click="$set('showDeleteConfirm', true)" type="button"
                        theme="danger" class="{{ $product->deleted_at ? 'hidden' : '' }}">
                        {{ __('adminhub::global.delete') }}
                    </x-hub::button>
                </td>
            </tr>
            <x-hub::modal.dialog wire:model="showRestoreConfirm">
                <x-slot name="title">
                    {{ __('adminhub::catalogue.products.show.restore_title') }}
                </x-slot>

                <x-slot name="content">
                    {{ __('adminhub::catalogue.products.show.restore_strapline') }}
                </x-slot>

                <x-slot name="footer">
                    <div class="flex items-center justify-end space-x-4">
                        <x-hub::button theme="gray" type="button"
                            wire:click.prevent="$set('showRestoreConfirm', false)">
                            {{ __('adminhub::global.cancel') }}
                        </x-hub::button>

                        <x-hub::button wire:click="restore" theme="green">
                            {{ __('adminhub::catalogue.products.show.restore_btn') }}
                        </x-hub::button>
                    </div>
                </x-slot>
            </x-hub::modal.dialog>

            <x-hub::modal.dialog wire:model="showDeleteConfirm">
                <x-slot name="title">
                    {{ __('adminhub::catalogue.products.show.delete_title') }}
                </x-slot>

                <x-slot name="content">
                    {{ __('adminhub::catalogue.products.show.delete_strapline') }}
                </x-slot>

                <x-slot name="footer">
                    <div class="flex items-center justify-end space-x-4">
                        <x-hub::button theme="gray" type="button" wire:click.prevent="$set('showDeleteConfirm', false)">
                            {{ __('adminhub::global.cancel') }}
                        </x-hub::button>

                        <x-hub::button wire:click="delete" theme="danger">
                            {{ __('adminhub::catalogue.products.show.delete_btn') }}
                        </x-hub::button>
                    </div>
                </x-slot>
            </x-hub::modal.dialog>
            @endforeach
        </tbody>
    </table>
</div>