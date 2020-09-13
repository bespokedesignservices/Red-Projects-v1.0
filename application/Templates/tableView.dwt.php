<!-- //*********************************** Basic template construct *************************************************//
**                                         How to use this template!
**
** // - php language line for the title of the table - <//?= $this->lang->line('change_this'); ?>
**  (Remove the // from opening php tag above and place in between the <th></th> tags and edit the language file in         **  appliation/language/english/english_lang.php - file - )
**
**  // - php language line for table headers - <//?= $this->lang->line('change_this'); ?>
**  (Remove the // from opening php tag above and place in between the <th></th> tags and edit the language file in        **  appliation/language/english/english_lang.php - file - )
<!-- //********************************* Begin template content  ***************************************************// -->

<div class="content">
        <div class="container-fluid">
        <div id="loader"></div>

    <!--  dashboard content -->
  <div class="container-fluid animate-bottom" style="display:none;" id="myDiv">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
                        <!-- TemplateBeginEditable name="title" -->
						<h5 class="card-header bg-danger text-white font-weight-bold">

  
							<i class="material-icons text-white font-weight-bold pull-left">account_box</i>
						</h5>
                        <!-- TemplateEndEditable -->
						<div class="card-body">
							<p class="card-text">
                              <div class="row">
                                  <!-- TemplateBeginEditable name="table" -->
 <table class="table table-striped">
  <thead>
    <tr class="text-danger font-weight-bold">
     
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
     <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"><a class="btn btn-sm btn-success"><i class="material-icons text-white text-bold">add</i></a></th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <td class="text-danger font-weight-bold"><input type="text" value="" class="form-control"/> </td>
      <td><input type="text" value="" class="form-control"/> </td>
      <td><input type="text" value="" class="form-control"/></td>
         <td><input type="text" value="" class="form-control"/></td>
         <td><input type="text" value="" class="form-control"/></td>
     
     <td><a href="#"><i class="material-icons text-danger">delete</i></a><a href="#"><i class="material-icons text-success">visibility</i></a></td>
   <td></td>
    </tr>
  
  </tbody>
</table>
  <!-- TemplateEndEditable -->
                            </div>
							</p>
						</div>
						<div class="card-footer">
							
						</div>
					</div>
                  
			</div>
		</div>
	</div>
</div>
          </div>
          
        <!-- dashboard content end -->
</div></div>
