<script>
    var myVar;

    function myFunction() {
        myVar = setTimeout(showPage, 3000)
    }

    function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("myDiv").style.display = "block";
    }
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
    });
</script>
<!-- Core Scripts - Include with every page -->
<script src="assets/plugins/jquery-2.1.1.min.js"></script>
<script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
<script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="assets/plugins/pace/pace.js"></script>
<script src="assets/scripts/siminta.js"></script>
<!-- Page-Level Plugin Scripts-->
<script src="assets/plugins/morris/raphael-2.1.0.min.js"></script>
<script src="assets/plugins/morris/morris.js"></script>
<script src="assets/scripts/dashboard-demo.js"></script>