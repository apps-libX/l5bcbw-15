@if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>Whoops!</strong>
    There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


{{--Created by anonymoussc on 9/14/15 11:10 AM--}}
