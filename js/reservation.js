$(document).ready(function(){

    $get_package = localStorage.getItem("package");
    
    $package_input_fld = document.getElementById("package");
    $package_input_fld.value = $get_package;
    $package_input_fld.readOnly = true;

        var array = ["2025-05-25","2025-05-26","2025-05-27"]    
    $('#date0').datepicker({
        minDate: '0',
        beforeShowDay: function(date){
            var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
            return [ array.indexOf(string) == -1 ]
        }
    });
    $('#date1').datepicker({
        minDate: '0',
        beforeShowDay: function(date){
            var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
            return [ array.indexOf(string) == -1 ]
        }
    });
});