function onLoadCallback() {
    gapi.load('auth2', initSigninV2);
}

function initSigninV2() {
    gapi.auth2.init({
        client_id: '54504204460-s1s929a9k8mksj07ubsfds0k4atcgif0.apps.googleusercontent.com'
    }).then(function (authInstance) {
        // now auth2 is fully initialized
    });
}

function onSuccess(googleUser) {
    var id_token = googleUser.getAuthResponse().id_token;
    // console.log("POST SEND");
    $.post( "login.php", { 'id_token': id_token })
        .done(function( data ) {
            if (data == "SUCCESS") {
                console.log(data);
                window.location.replace("dashboard.php");
            } else {
                var auth2 = gapi.auth2.getAuthInstance();
                auth2.disconnect().then(function () {
                    window.location.replace("index.php");
                });
            }
            // console.log("success");
            // console.log("POST RESPONSE");
            // console.log(data);
        });
    
}
function onFailure(error) {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.disconnect().then(function () {
        console.log('User signed out.');
        // window.location.replace("logout.php");
    });
}

 function renderButton() {
    gapi.signin2.render('my-signin2', {
        'scope': 'profile email',
        'width': 240,
        'height': 50,
        'longtitle': true,
        'theme': 'dark',
        'onsuccess': onSuccess,
        'onfailure': onFailure
    });
}

function renderButton2() {
    initSigninV2();
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.disconnect().then(function () {
        gapi.signin2.render('my-signup2', {
            'scope': 'profile email',
            'width': 240,
            'height': 50,
            'longtitle': true,
            'theme': 'dark',
            'onsuccess': onSignup,
            'onfailure': onFailure
        });
    });
    
}

function onSignup(googleUser) {
    var id_token_s = googleUser.getAuthResponse().id_token;
    
    
    $.post( "signup.php", { 'id_token': id_token_s })
        .done(function( data ) {
            var auth2 = gapi.auth2.getAuthInstance();
            auth2.disconnect().then(function () {
                window.location.replace("usuario.php");
            });
        });
}

function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.disconnect().then(function () {
        window.location.replace("logout.php");
    });
    
}
