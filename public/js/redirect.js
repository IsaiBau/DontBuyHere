document.getElementById("reviewButton").addEventListener("click", function() {
    if (isAuthenticated) {
        window.location.href = "/review";
    } else {
        window.location.href = "/login";
    }
});

document.getElementById("loginButton").addEventListener("click", function() {
    if (a) {
        window.location.href = "/login";
    } else {
        window.location.href = "/login";
    }
});

