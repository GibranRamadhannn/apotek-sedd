<nav class="flex" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-3">
        @foreach($breadcrumbs as $link)
        <li class="inline-flex items-center">
            @if(!$loop->last)
            {{-- Before Page --}}
            <a href="{{ $link['url'] }}" class="text-grayish-blue hover:text-grayish-cyan text-sm font-normal">
                {{ $link['name'] }}
            </a>
            <hr class="w-2 bg-dark-gray rounded ml-4">
            @else
            {{-- Current Page --}}
            <span class="text-grayish-cyan text-sm font-normal">{{ $link['name'] }}</span>
            @endif
        </li>
        @endforeach
    </ol>
</nav>