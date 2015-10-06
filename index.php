<?php require 'header.php'; ?>
<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button> -->
                <a class="navbar-brand" href="index.html"><p class="text-primary">Pig Farm Management System</p></a>
            </div>
            <!-- /.navbar-header -->
			 <ul class="nav navbar-top-links navbar-right">
            	<div >
            		<form class="form-inline">
					  <div class="form-group" style="margin-top: 50">
					    <label class="sr-only" for="exampleInputEmail3">Email address</label>
					    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
					  </div>
					  <div class="form-group">
					    <label class="sr-only" for="exampleInputPassword3">Password</label>
					    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
					  </div>
					  <!-- <div class="checkbox">
					    <label>
					      <input type="checkbox"> Remember me
					    </label>
					  </div> -->
					  <button type="submit" class="btn btn-default">Sign in</button>
					</form>
            	
            	
            	</div>

            </ul>
     	
 <!-- /.navbar-static-side -->
        </nav><br><br>
        
        
		        <div class="row">
					  <div class="col-xs-6">
					  
					  
					  
					  </div>
					  <div class="col-xs-6">
					  	<form class="form-inline">
						  <div class="form-group">
						    <input type="text" class="form-control" name="" placeholder="ชื่อ">
						  </div>
						  <div class="form-group">
						    <input type="text" class="form-control" name="" placeholder="นามสกุล">
						  </div><br><br>
						  <div class="form-group" >
						    <input type="text" class="form-control" name="" placeholder="อีเมลล์">
						  </div><br><br>
						  <div class="form-group">
						    <input type="text" class="form-control" name="" placeholder="รหัสผ่าน">
						  </div><br><br>
						  
						  <button type="submit" class="btn btn-default">ลงทะเบียน</button>
						</form>
					  
					  
					  
					  </div>
				</div>

<?php require 'script.php';?>