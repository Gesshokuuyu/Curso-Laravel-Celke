
    @if(session('success'))
            <div class='alert-success'>
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class='alert-error'>
                {{ session('error') }}
            </div>
        @endif

@if ($errors->any())
            <div class='alert-error'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li><br>
                    @endforeach
                </ul>
            </div>
@endif