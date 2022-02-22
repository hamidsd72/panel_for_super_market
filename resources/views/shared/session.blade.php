@if (session()->has('flash_message'))
    <div class="alert alert-dark alert-dismissible fade show" role="alert">
        <h4 class="text-success text-center d-none d-lg-block" style="margin: 0%;margin-right: 10%;">{!! session()->get('flash_message') !!}</h4>
        <h6 class="text-success text-center d-lg-none">{!! session()->get('flash_message') !!}</h6>
    </div>
    <script>
        setTimeout(function() { 
                $(".alert").alert('close')
        }, 5000);
    </script>
@endif
