@if($errors->any())
<script>
    swal(
      'Oops...',
      'Something went wrong!',
      'error'
    )
</script>
@endif

@if (Session::has('successMessage'))
    <script>
        swal({
          position: 'center',
          type: 'success',
          title: '{{ Session::get('successMessage') }}',
          showConfirmButton: false,
          timer: 1500
        })
    </script>
@endif

@if (Session::has('errorMessage'))
    <script>
        swal(
          'Error',
          '{{ Session::get('errorMessage') }}',
          'error'
        )
    </script>
@endif

