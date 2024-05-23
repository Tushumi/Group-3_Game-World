document.getElementById("logoutLink").addEventListener("click", function(event) {
    event.preventDefault(); 

    let modal = document.getElementById("confirmationModal");
    modal.style.display = "block"; 

    let closeBtn = document.getElementsByClassName("close")[0];
    let confirmBtn = document.getElementById("confirmLogout");
    let cancelBtn = document.getElementById("cancelLogout");

    closeBtn.onclick = function() {
        modal.style.display = "none";
    }

    cancelBtn.onclick = function() {
        modal.style.display = "none";
    }

    confirmBtn.onclick = function() {
        window.location.href = "logout.php";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
});  