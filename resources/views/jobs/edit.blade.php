<x-layout>
    <x-slot:heading>
        Edit Job: {{ $job->title }}
    </x-slot:heading>
    <form action="/jobs/{{$job->id}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
    
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input 
                                    id="title" 
                                    type="text" 
                                    name="title" 
                                    placeholder="Building Constructor"
                                    class="block min-w-0 grow py-1.5 px-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" 
                                    value="{{$job->title}}"
                                    required />
                            </div>
                            @error('title')
                                <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm/6 font-medium text-gray-900">Salary</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input 
                                    id="salary" 
                                    type="text" 
                                    name="salary" 
                                    placeholder="$50,000 USD"
                                    value="{{$job->salary}}"
                                    class="block min-w-0 grow py-1.5 px-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" required/>
                            </div>
                            @error('salary')
                                <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                {{-- <div class="mt-10">
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="text-red-500 italic">{{$error}}</li>
                            @endforeach
                        </ul>
                    @endif
                </div> --}}
            </div>
        </div>
            <div class="sm:justify-between sm: flex mt-6">
                <button 
                class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-red-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" 
                form="delete-form">Delete</button>

                <div class="flex items-center justify-end gap-x-6">
                    <a href="/jobs/{{$job->id}}" type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                    <button type="submit"
                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
                </div>
            </div>
    </form>
    <form action="/jobs/{{$job->id}}" method="POST" class="hidden" id="delete-form">
        @method('DELETE')
        @csrf
    </form>
</x-layout>