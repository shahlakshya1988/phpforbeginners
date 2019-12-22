$(document).on("click",".delete",function(e){
    e.preventDefault();
    if(confirm("Are You Sure You Want To Delete")){
        var frm = $("<form>");
        frm.attr("method","post");
        frm.attr("action",$(this).attr("href"));
        frm.appendTo("body");
        frm.submit();
    }
    // return false;
});