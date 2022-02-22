@if ($errors->count() > 0)
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <h4 class="text-light text-center mt-2">{{ $error }}</h4>
        </div>
        <script>
            setTimeout(function() { 
                    $(".alert").alert('close')
            }, 7000);
        </script>
    @endforeach
@endif