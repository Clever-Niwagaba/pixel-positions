@props(['job'])
<x-panel class="flex flex-col text-center">
    <div class="self-start text-sm">{{$job->employer->name}}</div>
                
        <div class="py-8">
            <h1 class="group-hover:text-blue-600 text-xl font-bold transition-colors duration-400">
                <a href="{{$job->url}}" target="_blank">
                    {{$job->title}}
                </a>
            </h1>
            <p class="text-sm mt-4">{{$job->salary}}</p>
        </div>

        <div class="flex justify-between items-center mt-auto">
            <div>
                @foreach ($job->tags as $tag)
                    <x-tag :$tag size="small"/>
                @endforeach
                
            </div>

            <x-employer-logo :employer="$job->employer" :width="42"></x-employer-logo>
        </div>
</x-panel>