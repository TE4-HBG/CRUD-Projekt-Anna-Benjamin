function redirectionToDelete(element) {
    var userId = element.getAttribute("id");
    window.location.href = "delete.php?id=" + userId;
}

function redirectionToEdit(element) {
    var userId = element.getAttribute("id");
    window.location.href = "edit.php?id=" + userId;
}

function logOut() {
    window.location.href = "http://localhost:8080";
}

