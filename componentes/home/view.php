<div class="row">
    <div display="none" id="productCard">
        <img src=""/>
        <span>Hover</span>
    </div>
    
</div>

<script type="text/javascript">
      const $titulo = $('h1');

    window.addEventListener('load', event_load => {
       
    
        $.ajax({
        url: '/dooddleye/',
        type: 'POST',
        dataType: "json",
        data: {
            page: 'ajax',
            action: 'mostrarProductos'
        },
            success: function(data) {
                console.log(data)
                const $originalCard = document.querySelector('#productCard')

                data.forEach(product => {
                    const clone = $originalCard.cloneNode(true)
                    clone.style.display = 'block'
                    const $productImg = clone.querySelector('.procut_img')
                    $productImg.setAttribute('src', ``)
                })
            },
            error: function(error) {
                
                alert(error+"lol");
            }
        })
        
    })

</script>