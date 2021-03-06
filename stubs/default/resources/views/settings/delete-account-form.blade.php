<x-form-section :action="route('settings.account.delete')" method="DELETE" confirmation="True">
    <x-slot name="title">
        {{ __('Delete Account') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Permanently delete your account.') }}
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted.') }}
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-button>
            {{ __('Delete Account') }}
        </x-button>
    </x-slot>
</x-form-section>
