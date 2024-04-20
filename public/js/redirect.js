document.getElementById("reviewButton").addEventListener("click", function() {
    if (isAuthenticated) {
        window.location.href = "/review";
    } else {
        window.location.href = "/login";
    }
});
