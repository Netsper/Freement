@php
    $languageSwitch = \BezhanSalleh\FilamentLanguageSwitch\LanguageSwitch::make();
    $locales = $languageSwitch->getLocales();
    $hasFlags = filled($languageSwitch->getFlags());
    $placement = 'bottom-end';
@endphp

<x-filament-language-switch::lang-switch-dropdown class="p-1">
    <x-slot name="trigger">
        <div
            @class([
                'fi-dropdown-list-item flex w-full items-center gap-2 whitespace-nowrap rounded-md p-2 text-sm transition-colors duration-75 outline-none disabled:pointer-events-none disabled:opacity-70 fi-dropdown-list-item-color-gray hover:bg-gray-950/5 focus:bg-gray-950/5 dark:hover:bg-white/5 dark:focus:bg-white/5',
            ])
            x-tooltip="{
{{--                content: @js($languageSwitch->getLabel(app()->getLocale())),--}}
                content: @js(__('language_switcher.change_language')),
                theme: $store.theme,
                placement: 'bottom'
            }"
        >
            @if ($hasFlags)
                <x-filament-language-switch::flag
                    :src="$languageSwitch->getFlag(app()->getLocale())"
                    :circular="$isCircular"
                    :alt="$languageSwitch->getLabel(app()->getLocale())"
                    :switch="true"
                    class="w-7 h-4 w-fit"
                />
            @else
                <span class="font-semibold text-md ">{{ $languageSwitch->getCharAvatar(app()->getLocale()) }}</span>
            @endif

            <span>{{ $languageSwitch->getLabel(app()->getLocale()) }}</span>
        </div>
    </x-slot>

    <x-filament::dropdown.list class="h-full" style="height: --webkit-fill-available">
        @foreach ($locales as $locale)
            @if (!app()->isLocale($locale))
                <button
                    type="button"
                    wire:click="changeLocale('{{ $locale }}')"
                    @class([
                        'flex items-center w-full transition-colors duration-75 rounded-md outline-none fi-dropdown-list-item whitespace-nowrap disabled:pointer-events-none disabled:opacity-70 fi-dropdown-list-item-color-gray hover:bg-gray-950/5 focus:bg-gray-950/5 dark:hover:bg-white/5 dark:focus:bg-white/5 justify-start space-x-2 rtl:space-x-reverse p-2 '
                    ])
                >


                    @if ($hasFlags)
                        <x-filament-language-switch::flag
                            :src="$languageSwitch->getFlag($locale)"
                            :alt="$languageSwitch->getLabel($locale)"
                            class="w-7 h-4"
                        />
                    @else
                        <span
                                @class([
                                    'flex items-center justify-center flex-shrink-0 w-7 h-7 p-2 text-xs font-semibold group-hover:bg-white group-hover:text-primary-600 group-hover:border group-hover:border-primary-500/10 group-focus:text-white bg-primary-500/10 text-primary-600',
                                ])
                            >
                                {{ $languageSwitch->getCharAvatar($locale) }}
                            </span>
                    @endif
                    <span class="text-sm font-medium text-gray-600 hover:bg-transparent dark:text-gray-200">
                            {{ $languageSwitch->getLabel($locale) }}
                        </span>

                    @endif
                </button>
                @endforeach
    </x-filament::dropdown.list>
</x-filament-language-switch::lang-switch-dropdown>


