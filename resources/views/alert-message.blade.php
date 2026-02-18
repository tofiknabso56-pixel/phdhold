<script src="{{asset('public/assets/toast.js')}}"></script>
<script>
    @if(session()->has('success'))
        message('{{session()->get('success')}}')
    @endif

    @if(session()->has('error'))
        message('{{session()->get('error')}}')
    @endif

    @if(session()->has('message'))
        message('{{session()->get('message')}}')
    @endif

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            message('{{session()->get($error)}}')
        @endforeach
    @endif
</script>
