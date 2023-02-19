@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="text-red" style="font-weight: 500">
            {{ __('Whoops! Something went wrong.') }}
        </div>

        <ul class="list-disc text-red" style="font-size: 14px; margin-top: 3px">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
