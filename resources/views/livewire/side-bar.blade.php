<div class="max-h-screen sticky top-0 w-full rounded-xl p-2 space-y-4 text-white">
    <div class="flex flex-col md:min-h-[98vh]">
        <livewire:profile-section />

        <x-custom.navbar-section>
            <x-slot name="featured">
                <a href="/project/{{ $featuredLink->id }}" class="block hover:underline">Featured</a>
            </x-slot>

            <x-slot name="cvLink">
                {{ $CV->location }}
            </x-slot>
        </x-custom.navbar-section>

    </div>
</div>
