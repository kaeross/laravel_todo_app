<div style="display: {{count($errors) ? 'block': 'none'}}">
        <ul style="list-style: none; padding-left: 0">
                @foreach ($errors->all() as $error)
                        <li class="alert alert-danger">{{$error}}</li>
                @endforeach  
        </ul>
</div>