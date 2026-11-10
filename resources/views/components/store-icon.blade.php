@props(['name', 'class' => ''])
<svg {{ $attributes->merge(['class' => 'icon '.$class]) }} viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
    @switch($name)
        @case('arrow') <path d="M4 12h16m-6-6 6 6-6 6"/> @break
        @case('arrow-up') <path d="M6 18 18 6M6 6h12v12"/> @break
        @case('back') <path d="M20 12H4m6-6-6 6 6 6"/> @break
        @case('heart') <path d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.7l-1.1-1.1a5.5 5.5 0 0 0-7.8 7.8L12 21l8.8-8.6a5.5 5.5 0 0 0 0-7.8Z"/> @break
        @case('sparkle') <path d="m12 3 2.5 6.5L21 12l-6.5 2.5L12 21l-2.5-6.5L3 12l6.5-2.5L12 3Z"/> @break
        @case('flower') <path d="M12 8c-5-9-11-2-5 2-10 1-7 10 1 6-3 9 6 11 7 2 7 7 12-1 4-5 9-4 3-11-3-6 1-8-8-8-7 0"/><circle cx="12" cy="12" r="2.5"/> @break
        @case('search') <circle cx="10.5" cy="10.5" r="6.5"/><path d="m16 16 5 5"/> @break
        @case('close') <path d="m6 6 12 12M6 18 18 6"/> @break
        @case('menu') <path d="M4 7h16M4 12h16M4 17h16"/> @break
        @case('check') <path d="m5 12 4 4L19 6"/> @break
        @case('shield') <path d="M12 3 4 6v6c0 4 4 7 8 9 4-2 8-5 8-9V6l-8-3Z"/><path d="m8 12 3 3 5-6"/> @break
        @case('chat') <path d="M21 11.5a8.5 8.5 0 0 1-8.5 8.5 10 10 0 0 1-4.5-1L3 21l1.5-5a8.5 8.5 0 1 1 16.5-4.5Z"/><path d="M8 11h8M8 14h5"/> @break
        @case('headphones') <path d="M4 14v-3a8 8 0 0 1 16 0v3M4 12H3v7h4v-7H4Zm16 0h1v7h-4v-7h3Z"/> @break
        @case('play') <path d="m9 5 11 7-11 7V5Z"/> @break
        @case('grid') <rect x="3" y="3" width="7" height="7" rx="2"/><rect x="14" y="3" width="7" height="7" rx="2"/><rect x="3" y="14" width="7" height="7" rx="2"/><rect x="14" y="14" width="7" height="7" rx="2"/> @break
        @case('bag') <path d="M5 7h14l1 14H4L5 7Zm3 0V6a4 4 0 0 1 8 0v1"/> @break
        @case('clock') <circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/> @break
        @case('plus') <path d="M12 5v14M5 12h14"/> @break
        @case('chevron') <path d="m9 5 7 7-7 7"/> @break
        @case('wallet') <path d="M20 8V5H5a2 2 0 0 0 0 4h16v11H5a2 2 0 0 1-2-2V7m18 6h-5v4h5"/> @break
    @endswitch
</svg>
