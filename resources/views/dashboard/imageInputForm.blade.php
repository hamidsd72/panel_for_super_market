<div class="card text-right pt-2 pb-2 " >
    <div class="card-body text-center">
        @if (Auth::user()->image)
            <img src="{{Auth::user()->image}}" class="img img-avatar img-border-glass border mt-1 mb-2" >
        @else                
            <img src="/img/full-screen-image-3.jpg" class="img img-avatar img-border-glass border mt-1 mb-2" >
        @endif
        <form method="POST" action="{{ route('users.update',Auth::user()->id) }}" class="m-2 mt-4 redu5 dropzone" id="myawesomedropzone" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
        </form>
    </div>
    
</div>


<script>
    Dropzone.options.myawesomedropzone = {
        paramName: "image",
        maxFilesize: 1,
        dictDefaultMessage: "تصاویر آواتار را به درون این باکس هدایت کنید",
        acceptedFiles: "image/jpg,image/jpeg,image/png,image/gif"
    };
</script>