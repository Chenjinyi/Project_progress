@if(count($errors)>0)
    @foreach ($errors->all() as $error)
    <div class="alert alert-warning alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <strong>警告！</strong> {{$error}}
    </div>
    @endforeach
@endif