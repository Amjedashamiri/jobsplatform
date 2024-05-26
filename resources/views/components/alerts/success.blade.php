@if(Session::has('success'))
<div class="form-group text-center" id="success-alert">
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
</div>

<script>
    // Wait for the DOM to be loaded before running the script
    document.addEventListener('DOMContentLoaded', function () {
        // Set a timeout to hide the alert after 1000 seconds (1000000 milliseconds)
        setTimeout(function() {
            var successAlert = document.getElementById('success-alert');
            if (successAlert) {
                successAlert.style.display = 'none';
            }
        }, 8000);
    });
</script>
@endif
