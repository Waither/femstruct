// Main JS file

// Set cookie
function setCookie(name, value) {
    $.ajax({
        url: '/src/php/setCookie.php',
        type: 'POST',
        data: {
            name: name,
            value: value
        },
        success: function(result) {
            setTimeout(location.reload(), 1000);
        }
    })
}

// Change language
function changeLanguage(lg) {
    setCookie('language', lg);
}

// Change stylesheet
function changeMDBstyle(check) {
    var value = 'light';
    if (check) {
        value = 'dark';
    }
    setCookie('MDBstyle', value);
}