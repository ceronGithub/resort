$(document).ready(function(){

    $get_package = localStorage.getItem("package");
    
    $package_input_fld = document.getElementById("package");
    $package_input_fld.value = $get_package;
    $package_input_fld.readOnly = true;
});