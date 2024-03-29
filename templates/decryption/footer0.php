</div>

<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/jquery.min.js"></script>

<script>

    function decrypt(){
            const spinnerHtml = `
<div class="text-center align-middle">
<br><br>
<div class="spinner-border text-center" role="status">
  <span class="visually-hidden"></span>
</div>
<br><br><br>
</div>
`;

            const container = '.response-container';
            const cryptedtext = $('#textchiph_input').val();
            const key = $('#key_input').val();

            if (key.length < 16 || key.length > 16) {
                $('#key_input').addClass('is-invalid');
                return;
            } else {
                $('#key_input').removeClass('is-invalid');
            }

            $(container).html(spinnerHtml);
            $.ajax({
                method: 'GET',
                url: '../src/Handler-decryption.php',
                data: {
                    cryptedtext,
                    key
                },
                success: (response) => {
                    setTimeout(() => {
                        $(container).html(response);
                    }, 500)
                }
            });
        
    }
</script>

</body>
</html>