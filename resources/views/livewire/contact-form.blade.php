<section class="space-y-4" id="contact">
    <h2 class="text-lg font-semibold heading text-black dark:text-white" data-section="contact">
        <span class="border-b border-[#A880A2] dark:border-[#A880A2] transition-all duration-300 block w-fit">
            Contact
        </span>
    </h2>
    <p class="text-sm text-black dark:text-white">
        I am always contactable via my contact information in the profile section. Or via filling in the form below.
    </p>

    <form wire:submit.prevent="save" class="space-y-2">
        <input type="text" wire:model="name" placeholder="Name" class="w-full px-3 py-2 rounded bg-gray-200 text-black dark:bg-[#1E1E1F] dark:text-white" />
        <input type="email" wire:model="email" placeholder="Email" class="w-full px-3 py-2 rounded bg-gray-200 text-black dark:bg-[#1E1E1F] dark:text-white" />
        <textarea wire:model="message" placeholder="Message" class="w-full px-3 py-2 rounded bg-gray-200 text-black dark:bg-[#1E1E1F] dark:text-white h-28"></textarea>

        <div class="flex items-center space-x-4">
            @if (session()->has('success'))
                <div class="flex items-center p-3 text-sm text-green-800 rounded-lg bg-green-100 dark:bg-green-200" role="alert">
                    <svg class="flex-shrink-0 w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.707a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 10-1.414 1.414L9 13.414l4.707-4.707z" clip-rule="evenodd" />
                    </svg>
                    <span class="font-medium">{{ session('success') }}</span>
                </div>
            @else
                <button type="submit" class="px-4 py-2 bg-[#A880A2] text-white rounded hover:bg-[#966c90] transition-all duration-300">
                    Send
                </button>
            @endif
        </div>
    </form>

</section>
