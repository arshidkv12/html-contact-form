window.onload = function() {
	editor = CodeMirror(document.getElementById("code"), {
	  lineNumbers: true,
	  mode: "text/html",
	  value: decodeURIComponent(document.getElementById("textArea").value)
	});

	var charCount = 0;
	editor.on("keyup", function (cm, event) {
        if (!cm.state.completionActive &&  event.keyCode != 13) { 
        	charCount = charCount + 1;
        	if(charCount >= 3){ 
        		charCount = 0;       
        		CodeMirror.commands.autocomplete(cm, null, {completeSingle: false});
        	}
        }
    });
};



jQuery(document).ready(function($){
	
	$("#textArea").hide();
	$("#saveBtn").click(function () {
		var htmlFormCode = editor.getValue();
		if(htmlFormCode.toLowerCase().indexOf('email') == -1){
			alert('Please add an input field for email...!');
			return false;
		}
		htmlFormCode = htmlFormCode.replace("name='name'","name='Name'");
		htmlFormCode = htmlFormCode.replace('name="name"','name="Name"');
		$("#textArea").text(encodeURIComponent(htmlFormCode));
	});
});



/* Detect ctrl + s */ 
jQuery(document).keydown(function(e) {
    if ((e.which == '115' || e.which == '83' ) && (e.ctrlKey || e.metaKey))
    {
        e.preventDefault();
        jQuery("#textArea").text(editor.getValue());
        jQuery("#saveBtn").trigger('click'); 
        return false;
    }
    return true;
}); 