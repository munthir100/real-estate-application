<div>
    <ul>
        @foreach($facilities as $facility)
            <li>{{ $facility['name'] }}</li>
        @endforeach
    </ul>
</div>
