<div class="overlay" id="generalOverlay">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>

<script type="text/javascript">
    window.addEventListener('load', e => {
        const $overlay = document.querySelector('#generalOverlay')

        window.showSpinner = function() {
            $overlay.style.display = 'block';
        }

        window.hideSpinner = function() {
            $overlay.style.display = 'none';
        }
    })
</script>