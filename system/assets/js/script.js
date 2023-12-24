$("[data-href]").click(function(){
    if(confirm("Are You sure you want to delete this?")){
        let url = $(this).attr("data-href")
        window.location = url
    }
    else{

    }
})