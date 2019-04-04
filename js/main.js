<script>
    function validateForm() {
    var x = document.forms["myForm"]["name"].value;
    var b = document.forms["myForm"]["email"].value;
    var p = document.forms["myForm"]["password"].value;
    if (x == "") {
    alert("Name must be filled.");
     return false;
    }
    if (b == "") {
    alert("Email ID must be filled.");
    return false;
    }
    if (p == "") {
    alert("Password must be filled.");
    return false;
    }
    }
</script>