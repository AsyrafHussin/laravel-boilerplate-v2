@if($errors->any())
<script>
    Swal.fire(
      'Oops...',
      'Something went wrong!',
      'error'
    )
</script>
@endif

@if (Session::has('successMessage'))
    <script>
        Swal.fire({
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
        Swal.fire(
          'Error',
          '{{ Session::get('errorMessage') }}',
          'error'
        )
    </script>
@endif
