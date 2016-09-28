@if (count($errors) > 0)
    <ui-alert type="error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </ui-alert>
@endif