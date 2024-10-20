@extends('layouts.app')

@section('content')
    {{-- This is for getting showing the data --}}
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
            <thead class="text-left">
                <tr>
                    <th class="whitespace-nowrap px-4 py-2 text-gray-900">Title</th>
                    <th class="whitespace-nowrap px-4 py-2 text-gray-900">Description</th>
                    <th class="whitespace-nowrap px-4 py-2 text-gray-900">Priority Level</th>
                    <th class="whitespace-nowrap px-4 py-2 text-gray-900">Status</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200">
                @foreach ($allTasks as $task)
                    <tr>
                        <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ $task->title }}</td>
                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $task->description }}</td>
                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ ($task->priority?->name) ?? 'Empty' }}</td>
                        <td class="whitespace-nowrap px-4 py-2 font-bold
                            {{ $task->status->status == 'Pending' ? 'text-gray-700' : ($task->status->status == 'Cancelled' ? 'text-gray-700' : 'text-green-700') }}">
                            {{ ($task->status?->status) ?? 'Empty' }}
                        </td>
                        <td class="whitespace-nowrap px-4 py-2">
                            <a href="#"
                                class="inline-block rounded bg-indigo-600 px-4 py-2 text-xs font-medium text-white hover:bg-indigo-700">
                                Edit
                            </a>

                            <a href="#"
                                class="inline-block rounded bg-red-600 px-4 py-2 text-xs font-medium text-white hover:bg-red-700">
                                Delete
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
