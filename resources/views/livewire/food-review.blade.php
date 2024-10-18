<div class="group relative border-b border-r border-gray-200 p-4 sm:p-6">
    <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-200 group-hover:opacity-75">
        <img src="{{ $food->image }}" alt="{{ $food->name }}" class="h-full w-full object-cover object-center">
    </div>
    <div class="pb-4 pt-10 text-center">
        <p class="mt-4 text-base font-medium text-gray-900">
            <a href="{{ $food->slug }}">
                {{ $food->name }}
            </a>
        </p>

        <div class="mt-3 flex flex-col items-center">
            <p class="mt-1 text-sm text-gray-500">Vote Rasa Makanan</p>
            <div class="flex items-center">
                @for ($i = 1; $i <= 5; $i++)
                    <svg wire:click="reviewTaste({{ $i }})" class="{{ $i <= $food->taste_rating ? 'text-yellow-400' : 'text-gray-300' }} h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 2a1 1 0 00-.94.68L7.07 7.64H2.6a1 1 0 00-.66 1.77l4.15 3.4-1.44 5.22a1 1 0 001.52 1.1l4.33-2.72 4.34 2.72a1 1 0 001.52-1.1l-1.44-5.22 4.15-3.4a1 1 0 00-.66-1.77h-4.47L10.94 2.68A1 1 0 0010 2z" />
                    </svg>
                @endfor
            </div>
        </div>

        <div class="mt-3 flex flex-col items-center">
            <p class="mt-1 text-sm text-gray-500">Vote Porsi Makanan</p>
            <div class="flex items-center">
                @for ($i = 1; $i <= 5; $i++)
                    <svg wire:click="reviewPortion({{ $i }})" class="{{ $i <= $food->portion_rating ? 'text-yellow-400' : 'text-gray-300' }} h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 2a1 1 0 00-.94.68L7.07 7.64H2.6a1 1 0 00-.66 1.77l4.15 3.4-1.44 5.22a1 1 0 001.52 1.1l4.33-2.72 4.34 2.72a1 1 0 001.52-1.1l-1.44-5.22 4.15-3.4a1 1 0 00-.66-1.77h-4.47L10.94 2.68A1 1 0 0010 2z" />
                    </svg>
                @endfor
            </div>
        </div>
    </div>
</div>
