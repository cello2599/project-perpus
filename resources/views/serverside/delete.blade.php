<form action="{{url('serverside/delete')}}" method="post" onsubmit="return confirm('Yakin ingin menghapus produk iini?')">
    @csrf
    @method("delete")
    <button class="btn btn-sm btn-outline-danger" id="delete"> <i class="fa-solid fa-trash-can"></i> </button>
    
</form>

<!--
<script>
    $(document).ready(function(){
        $('#delete').click(function(){
            // delete
            $.ajax({
                url: "{{url('serverside/delete')}}",
                type: "delete",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "id": id_buku
                },
                success: function(response){
                    console.log(response);
                    window.location.href = "{{url('serverside/master')}}";
                }
            });
        });
    });
</script>
