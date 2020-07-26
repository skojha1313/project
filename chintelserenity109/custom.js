$("body").on("click", ".modalImg", function(){
    var imgUrl = $(this).attr('src');
    $("#myModal").find("img").attr("src", imgUrl);
    $("#myModal").modal("show");
});
$("body").on("click", ".close", function(){
	$("#myModal").modal("hide");
});
var layout_selected = '';
$("body").on("click", ".layout-description", function(){
    var data_id = $(this).attr("data-id");
    if (data_id == layout_selected) {
        $(".layout-description-expend").find("." + data_id).toggleClass("d-none");
    } else {
        $(".layout-description-expend").find(".layout-description-content").addClass("d-none");
        $(".layout-description-expend").find("." + data_id).removeClass("d-none");
    }
    layout_selected = data_id;
});