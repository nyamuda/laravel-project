$(document).ready(function () {
    $(".user-btn").click(function (event) {
        var id = event.target.id;
        window.location = "/user/" + id;
    });
});
