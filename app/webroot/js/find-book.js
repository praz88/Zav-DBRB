var getInfo = function(isbn) {
			var url = "http://zavfoundation.org/zav/find-book.php?isbn="+isbn;
     // fade out bookinfo div
	$("#bookInfo-"+isbn).fadeOut("slow");
	// assign isbn value to var isbn
	// send isbn value as variable isbn and load result in bookinfo div
	  $("#bookInfo-"+isbn)
            .html('<object style="width:100%;height:50%" data="'+url+'" />');
 
	 	$("#bookInfo-"+isbn).fadeIn("slow");
};