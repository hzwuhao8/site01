 

$("#isList").click(function() {
	ff("isList", this)
})

$("#isDetail").click(function() {
	ff("isDetail", this)
})

$("#fetch").click(function() {
	ff("fetch", this)
})

$("#parse").click(function() {
	ff("parse", this)
})

$("#getData").click(function() {
	ff("getData", this)
})


function  ff(mehtod,  that ){
	console.log("start exec  " + mehtod )
	$(that).parent().children().removeClass("active")
	$(that).addClass("active")
	var urls = $("textarea[name=urls]").val()
	console.log(urls)
	jQuery.get("/fetch/com/yachtharbour/ajax", {
		method : mehtod,
		urls : urls
	}, function(data) {
		console.log(data)
		var text = JSON.stringify(data);
		$("div#resultview").html(text);
	})
	
}
