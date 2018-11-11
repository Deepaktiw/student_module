$(document).ready(function(){

    $("#passwordvalidate").click(function(){
        if($("#old").val().length==0){
          $("#oldm").text("Can't be left empty...");
          $("#old").focus();
        }
        if($("#new").val().length==0){
          $("#newm").text("Can't be left empty...");
          $("#new").focus();
        }
        if($("#newcon").val().length==0){
          $("#newconm").text("Can't be left empty...");
          $("#newcon").focus();
        }
        if($("#new").text()<8){
          $("#newm").text("Password too short...");
          $("#newcon").focus();
        }
        if($("#new").val()!=$("#newcon").val()){
        $("#message").text("Passwords dont match...");
        $("#new").focus();
        $("#newcon").focus();
      }

    });

	 /*$("#addqual").click(function(){
        $("#addingqual").append('<div class="form-group row">\
                        <div class="col-sm-4">\
                          <label class="form-control-label">Qualification</label>\
                          <select class="custom-select" name="ed_qualification">\
                            <option selected>Choose</option>\
                            <option value="Graduation">Graduation</option>\
                            <option value="Post Graduation">Post Graduation(Master\'s)</option>\
                            <option value="Doctoral(Phd)">Doctoral(Phd)</option>\
                          </select>\
                        </div>\
                        <div class="col-sm-8">\
                          <label class="form-control-label">Name of Institute</label>\
                          <input type="text" class="form-control" name="name_of_inst">\
                        </div>\
						</div>\
						<div class="form-group row">\
						<div class="col-sm-4">\
                          <label class="form-control-label">Percentage</label>\
                          <input type="text" class="form-control" name="name_of_inst">\
                        </div>\
						<div class="col-sm-4">\
                          <label class="form-control-label">Year</label>\
                          <input type="text" class="form-control" name="name_of_inst">\
                        </div>\
						<div class="col-sm-4">\
						<label class="form-control-label">Upload certificate</label>\
						<input type="file">\
						</div>\
						</div>');
    });

});*/
