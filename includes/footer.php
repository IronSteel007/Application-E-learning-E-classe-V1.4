<?php

echo<<<'EOT'

<script>
function hidenav() {
    document.getElementById("mySidenav").style.display = "none";
    document.getElementById("oke").addEventListener("click", openNav)
    document.getElementById("closebtn_").addEventListener("click", closeNav)
    function openNav() {
        document.getElementById("mySidenav").style.display = "block";
        document.getElementById("mySidenav").style.width = "300px";
        document.getElementById("mySidenav").style.marginLeft = "0px";
    }
    function closeNav() {
        document.getElementById("mySidenav").style.display = "none";
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("mySidenav").style.marginLeft = "0";
    }
}

hidenav();
</script>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>

</html>

EOT;

?>