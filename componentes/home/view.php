<div >
   <h1>Esto es una tienda</h1>
</div>

<script type="text/javascript">
      const $titulo = $('h1');

    window.addEventListener('click', event_load => {
       
    
        $.ajax({
        url: '/dooddleye/',
        type: 'POST',
        data: {
            page: 'ajax',
            action: 'mostrarProductos'
        },
            success: function(data) {
                window.location.reload();
            },
            error: function(error) {
                
                alert(error);
            }
        })
        
    })

</script>