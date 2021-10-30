$(function () {
    $(".add_component").on("click", function () {
        $(".add_component").after(
            '<div class="clone_components"><div class="input-group compo my-1"><input type="file" name="images[]" class="form-control" accept="image/*" required><div class="input-group-btn"><button class="btn bg-danger text-light del_component" type ="button"><span class="iconify" data-icon="mi:delete"></span></button></div></div></div>'
        );
    });

    $("body").on("click", ".del_component", function () {
        $(this).parents(".compo").remove();
    });
});
// gen year at copyright section
(function () {
    document.getElementById("year").innerHTML = new Date().getFullYear();
})();
