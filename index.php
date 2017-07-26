<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Employee</title>
<link rel="stylesheet" href="dist/bootstrap.min.css" type="text/css" media="all">

<link href="dist/jquery.bootgrid.css" rel="stylesheet" />

<script src="dist/jquery-1.11.1.min.js"></script>
<script src="dist/bootstrap.min.js"></script>
<script src="dist/jquery.bootgrid.min.js"></script>
<link href="style.css" rel="stylesheet" />
</head>
<body>
	<div class="container">
      <div class="">
        <h1>Employee</h1>						
        <div class="col-sm-8">
		<div class="well clearfix">
			<div class="pull-right"><button type="button" class="btn btn-xs btn-primary" id="command-add" data-row-id="0">
			<span class="glyphicon glyphicon-plus"></span>Add Employee</button></div></div>
		<table id="employee_grid" class="table table-condensed table-hover table-striped" width="60%" cellspacing="0" data-toggle="bootgrid">
			<thead>
				<tr>
				<!--This table contains the attributes that each employee has -->	
					<th data-column-id="id" data-type="numeric" data-identifier="true">id</th>
					<th data-column-id="employee_name">Name</th>
					<th data-column-id="employee_lastname">Last Name</th>
					<th data-column-id="employee_email">Email</th>
					<th data-column-id="employee_phone">Phone</th>
					<th data-column-id="employee_bridge">Bridge</th>
					<th data-column-id="employee_comments">Comments</th>
					<th data-column-id="commands" data-formatter="commands" data-sortable="false">Commands</th>
					
				</tr>
			</thead>
		</table>
    </div>
      </div>
    </div>
	
<div id="add_model" class="modal">
    <div class="modal-dialog">
	<!--This pop up dialog contains the attributes that the new employee will have -->	
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add Employee</h4>
            </div>
            <div class="modal-body">
                <form method="post" id="frm_add">
				<input type="hidden" value="add" name="action" id="action">
                  <div class="form-group">
                    <label for="name" class="control-label">Name:</label>
                    <input type="text" class="form-control" id="name" name="name"/>
                  </div>
				  <div class="form-group">
                    <label for="last name" class="control-label">Last Name:</label>
                    <input type="text" class="form-control" id="lastname" name="lastname"/>
                  </div>
                  <div class="form-group">
                    <label for="email" class="control-label">Email:</label>
                    <input type="text" class="form-control" id="email" name="email"/>
                  </div>
				  <div class="form-group">
                    <label for="phone" class="control-label">Phone:</label>
                    <input type="text" class="form-control" id="phone" name="phone"/>
                  </div>
				  <div class="form-group">
                    <label for="bridge" class="control-label">Bridge:</label>
						<select name="bridge" id="bridge">
							  <option value="None">None</option>
							  <option value="eAgent">eAgent</option>
							  <option value="iArts">iArts</option>
							  <option value="Orbit">Orbit</option>
							  <option value="G&G">G&G</option>
							  <option value="EstateWeb">EstateWeb</option>
							  <option value="Globalc">Globalc</option>
					</select>
                  </div>
				  <div class="form-group">
                    <label for="comments" class="control-label">Comments:</label>
                    <input type="text" class="form-control" id="comments" name="comments"/>
                  </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="btn_add" class="btn btn-primary">Save</button>
            </div>
			</form>
        </div>
    </div>
</div>
<div id="edit_model" class="modal fade">
    <div class="modal-dialog">
		<!--This pop up dialog contains the attributes that the registered employee has and user can edit -->	
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Edit Employee</h4>
            </div>
            <div class="modal-body">
                <form method="post" id="frm_edit">					
				<input type="hidden" value="edit" name="action" id="action">
				<input type="hidden" value="0" name="edit_id" id="edit_id">
                  <div class="form-group">
                    <label for="name" class="control-label">Name:</label>
                    <input type="text" class="form-control" id="edit_name" name="edit_name"/>
                  </div>
                  <div class="form-group">
                    <label for="lastname" class="control-label">Last Name:</label>
                    <input type="text" class="form-control" id="edit_lastname" name="edit_lastname"/>
                  </div>
				  <div class="form-group">
                    <label for="email" class="control-label">Email:</label>
                    <input type="text" class="form-control" id="edit_email" name="edit_email"/>
                  </div>
				  <div class="form-group">
                    <label for="phone" class="control-label">Phone:</label>
                    <input type="text" class="form-control" id="edit_phone" name="edit_phone"/>
                  </div>
				  <div class="form-group">
                    <label for="bridge" class="control-label">Bridge:</label>
                    <select name="edit_bridge" id="edit_bridge">
						  <option value="None">None</option>
						  <option value="eAgent">eAgent</option>
						  <option value="iArts">iArts</option>
						  <option value="Orbit">Orbit</option>
						  <option value="G&G">G&G</option>
						  <option value="EstateWeb">EstateWeb</option>
						  <option value="Globalc">Globalc</option>
					</select>
                  </div>
				  <div class="form-group">
                    <label for="comments" class="control-label">Comments:</label>
                    <input type="text" class="form-control" id="edit_comments" name="edit_comments"/>
                  </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="btn_edit" class="btn btn-primary">Save</button>
            </div>
			</form>
        </div>
    </div>
</div>
</body>
</html>
<script type="text/javascript">
$( document ).ready(function() {
	var grid = $("#employee_grid").bootgrid({
		ajax: true,
		rowSelect: true,
		post: function ()
		{
			
			return {
				id: "b0df282a-0d67-40e5-8558-c9e93b7befed"
			};
		},
		
		url: "response.php",
		formatters: {
		        "commands": function(column, row)
		        {
		            return "<button type=\"button\" class=\"btn btn-xs btn-default command-edit\" data-row-id=\"" + row.id + "\"><span class=\"glyphicon glyphicon-edit\"></span></button> " + 
		                "<button type=\"button\" class=\"btn btn-xs btn-default command-delete\" data-row-id=\"" + row.id + "\"><span class=\"glyphicon glyphicon-trash\"></span></button>";
		        }
		    }
   }).on("loaded.rs.jquery.bootgrid", function()
{
   
    grid.find(".command-edit").on("click", function(e)
    {
        
			var ele =$(this).parent();
			var g_id = $(this).parent().siblings(':first').html();
            var g_name = $(this).parent().siblings(':nth-of-type(2)').html();
            var g_lastname = $(this).parent().siblings(':nth-of-type(3)').html();
            var g_email = $(this).parent().siblings(':nth-of-type(4)').html();
            var g_phone = $(this).parent().siblings(':nth-of-type(5)').html();
            var g_bridge = $(this).parent().siblings(':nth-of-type(6)').html();
            var g_comments = $(this).parent().siblings(':nth-of-type(7)').html();
console.log(g_id);
                    console.log(g_name);

		
		$('#edit_model').modal('show');
					if($(this).data("row-id") >0) {   
							
                                //collecting the data
                                $('#edit_id').val(ele.siblings(':first').html());  
                                $('#edit_name').val(ele.siblings(':nth-of-type(2)').html());  
                                $('#edit_lastname').val(ele.siblings(':nth-of-type(3)').html());
                                $('#edit_email').val(ele.siblings(':nth-of-type(4)').html());
                                $('#edit_phone').val(ele.siblings(':nth-of-type(5)').html());
                                $('#edit_bridge').val(ele.siblings(':nth-of-type(6)').html());
                                $('#edit_comments').val(ele.siblings(':nth-of-type(7)').html());
					} else {
					 alert('No row selected! First select row, then click edit button');
					}
    }).end().find(".command-delete").on("click", function(e)
    {
	
		var conf = confirm('Delete ' + $(this).data("row-id") + ' items?');
					alert(conf);
                    if(conf){
                                $.post('response.php', { id: $(this).data("row-id"), action:'delete'}
                                    , function(){
                                    
										$("#employee_grid").bootgrid('reload');
                                }); 
								
                    }
    });
});

function ajaxAction(action) {
				data = $("#frm_"+action).serializeArray();
				$.ajax({
				  type: "POST",  
				  url: "response.php",  
				  data: data,
				  dataType: "json",       
				  success: function(response)  
				  {
					$('#'+action+'_model').modal('hide');
					$("#employee_grid").bootgrid('reload');
				  }   
				});
			}
			
			$( "#command-add" ).click(function() {
			  $('#add_model').modal('show');
			});
			$( "#btn_add" ).click(function() {
			  ajaxAction('add');
			});
			$( "#btn_edit" ).click(function() {
			  ajaxAction('edit');
			});
});
</script>
