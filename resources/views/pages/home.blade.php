@extends('layouts.main')

@section('content')
<div class="flex-1 overflow-auto p-8 flex items-center justify-center">
    <div class="w-full max-w-4xl bg-white dark:bg-[#252526] rounded-lg shadow-xl border border-gray-200 dark:border-gray-700 aspect-video flex flex-col">
        <div class="h-8 bg-gray-100 dark:bg-[#333333] rounded-t-lg border-b border-gray-200 dark:border-gray-600 flex items-center px-4 space-x-2">
            <div class="flex space-x-1.5">
                <div class="w-2.5 h-2.5 rounded-full bg-red-400"></div>
                <div class="w-2.5 h-2.5 rounded-full bg-yellow-400"></div>
                <div class="w-2.5 h-2.5 rounded-full bg-green-400"></div>
            </div>
            <div class="flex-1 flex justify-center">
                <div class="h-5 w-1/2 bg-white dark:bg-[#1e1e1e] rounded text-[10px] flex items-center justify-center text-gray-400">
                    localhost:3000/events/small-wedding
                </div>
            </div>
        </div>

        <div class="flex-1 p-8 flex flex-col items-center justify-center space-y-4">
            <div class="w-16 h-16 rounded-full bg-primary/20 flex items-center justify-center text-primary">
                <span class="material-icons-outlined text-3xl">celebration</span>
            </div>
            <h2 class="text-2xl font-bold text-gray-800 dark:text-white">Tiệc cưới nhỏ</h2>
            <p class="text-gray-500 dark:text-gray-400 text-center max-w-md">
                Intimate wedding packages tailored for small gatherings. Customize your venue, catering, and decorations here.
            </p>
            <div class="grid grid-cols-2 gap-4 w-full max-w-lg mt-8">
                <div class="h-24 bg-gray-50 dark:bg-[#1e1e1e] rounded border border-gray-100 dark:border-gray-600"></div>
                <div class="h-24 bg-gray-50 dark:bg-[#1e1e1e] rounded border border-gray-100 dark:border-gray-600"></div>
            </div>
        </div>
    </div>
</div>
@endsection