const to_logout = document.querySelectorAll(".to_logout");

to_logout.forEach( (tag_element) => {
    tag_element.addEventListener("click", () => location.href = '../logout.php');
});