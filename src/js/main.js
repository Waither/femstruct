// Main JS file

// Hide navbar
function hideNavbar() {
    $('.navbar-collapse').collapse('hide');
}

// Change stylesheet
function changeMDBstyle(check) {
    var value = 'light';
    if (check) {
        value = 'dark';
    }
    $.ajax({
        url: '/src/php/setCookie.php',
        type: 'POST',
        data: {
            name: 'MDBstyle',
            value: value
        },
        success: function(result) {
            setTimeout(location.reload(), 1000);
        }
    })
}