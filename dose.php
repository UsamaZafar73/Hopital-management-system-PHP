	<div class="tab-content ">
						<div id="itemDetailsTab" class="container-fluid tab-pane active  text-dark" style="background-color:darkcyan">
							<br>
							<!-- Div to show the ajax message from validations/db submission -->
							<div id="itemDetailsMessage"></div>
                            
                           
                            
							<form action="update.php" method="post">
                                
                                  <div class="form-row">
<!--
							 
-->
                                      
                                      
                                       <div class="form-group col-md-4">
									<label for="road">Appointment ID<span class="requiredIcon">*</span></label>
									<input type="text" class="form-control" name="road" id="road" autocomplete="off">
									<div id="itemDetailsItemNameSuggestionsDiv" class="customListDivWidth"></div>
								  </div>
								  <div class="form-group col-md-8">
									<label for="location">Disease<span class="requiredIcon">*</span></label>
									<input type="text" class="form-control" name="location" id="location" autocomplete="off">
									<div id="itemDetailsItemNameSuggestionsDiv" class="customListDivWidth"></div>
								  </div>							  </div>

								 
                                 
                                <div class="form-row">
								  <div class="form-group col-md-12">
									<label for="location">Medication<span class="requiredIcon">*</span></label>
									<input type="text" class="form-control" name="medication" id="medication" autocomplete="off">
									<div id="itemDetailsItemNameSuggestionsDiv" class="customListDivWidth"></div>
								  </div>
								 
							  </div>
                                
                                
	 
                                 
                                
                                
                               
							  <br>
							 
                               
                                <div class="row" style="padding-left:5%; padding-bottom:5%">
                                    
                                    
							  <input type="submit" id="addItem" class="btn btn-success col-8"  >
							 
							  <button type="reset" class="btn btn-danger" id="itemClear col-2" style="margin-left:5%">Clear</button>
							
                                    </div>
                                    </form>
                                    
						</div>
                        
                                    
						</div>
                        
                                    
                         
                        