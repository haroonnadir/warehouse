<!-- <script src="public/js/jquery.js" type="text/javascript"></script> -->
<script src="public/js/jquery.js"></script>
<script src="public/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="public/js/script.js" type="text/javascript"></script>
<script language="javascript">
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0');
    var yyyy = today.getFullYear();

    today = yyyy + '-' + mm + '-' + dd;
    $('#date_picker').attr('min', today);
</script>
</body>

</html>