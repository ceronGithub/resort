$(document).ready(function(){
    $('.carousel').carousel();
    $package1 = document.getElementById('package-1');
    $package2 = document.getElementById('package-2');
    $package3 = document.getElementById('package-3');
    $package4 = document.getElementById('package-4');
    $package1.addEventListener('click', function(event){
        localStorage.setItem("package", "package-one");
        // alert(localStorage.getItem("package-one"));
        window.location = "http://localhost:8080/resort/reservation.html";
    });

    $package2.addEventListener('click', function(event){
        localStorage.setItem("package", "package-two");
        // alert(localStorage.getItem("package-one"));
        window.location = "http://localhost:8080/resort/reservation.html";
    });

    $package3.addEventListener('click', function(event){
        localStorage.setItem("package", "package-three");
        // alert(localStorage.getItem("package-one"));
        window.location = "http://localhost:8080/resort/reservation.html";
    });

    $package4.addEventListener('click', function(event){
        localStorage.setItem("package", "package-four");
        // alert(localStorage.getItem("package-one"));
        window.location = "http://localhost:8080/resort/reservation.html";
    });
});
