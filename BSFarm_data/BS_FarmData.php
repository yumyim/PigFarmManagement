 <?php require 'BS_header.php';?>
 <?php require 'BSmenu.php' ;?>


 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">จัดการข้อมูลของฟาร์ม</h1>
                        	<div>

							  <!-- Nav tabs -->
							  <ul class="nav nav-tabs" role="tablist">
							    <li role="presentation" class="active"><a href="#owner" aria-controls="owner" role="tab" data-toggle="tab">ข้อมูลเจ้าของฟาร์ม</a></li>
							    <li role="presentation"><a href="#farm" aria-controls="farm" role="tab" data-toggle="tab">จัดการข้อมูลฟาร์ม</a></li>
							      <li role="presentation"><a href="#pig" aria-controls="pig" role="tab" data-toggle="tab">จำนวนสุกร</a></li>
							    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">ประเภทของฟาร์ม</a></li>
							    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">โรงเรือน</a></li>
							  </ul>
							
							  <!-- Tab panes -->
							  <div class="tab-content">
							    <div role="tabpanel" class="tab-pane active" id="owner">
							    	 	<div class="col-xs-2">
										   ชื่อ<input type="text" name="  " class="form-control" placeholder=" ">
										 </div>
										 <div class="col-xs-2">
										   นามสกุล <input type="text" name=" " class="form-control" placeholder=" ">
										 </div>
										 <div class="col-xs-2">
										   เบอร์โทร <input type="text" name=" " class="form-control" placeholder=" ">
										 </div><br><br><br>
										<div class="col-xs-4">
										  อีเมลล์ <input type="text" name=" " class="form-control" placeholder=" ">
										 </div><br><br><br>
										 <div class="col-xs-4">
										  รหัสผ่าน <input type="text" name=" " class="form-control" placeholder=" ">
										 </div><br><br><br>
										 
										 <button type="submit" class="btn btn-info">บันทึก</button>
							    
							    </div>
							    
							    
							    <div role="tabpanel" class="tab-pane" id="farm">
							    
							    		<div class="col-xs-4">
										   ชื่อฟาร์ม<input type="text" name="  " class="form-control" placeholder=" ">
										 </div><br><br><br>
										 <div class="col-xs-4">
										  ชื่อเจ้าของฟาร์ม <input type="text" name=" " class="form-control" placeholder=" ">
										 </div>
										 <div class="col-xs-2">
										   เบอร์โทร <input type="text" name=" " class="form-control" placeholder=" ">
										 </div><br><br><br>
										<div class="col-xs-6">
										 ที่อยู่ฟาร์ม  <input type="text" name=" " class="form-control" placeholder=" ">
										 </div><br><br><br>
										 <div class="col-xs-4">
										 เบอร์โทรศัพท์ (ฟาร์ม)<input type="text" name=" " class="form-control" placeholder=" ">
										 </div><br><br><br> 
										 <div class="col-xs-2">
										  รับรองเป็นมาตรฐานฟาร์มเลี้ยงสุกรของประเทศไทย ณ วันที่ <input type="text" name=" " class="form-control" placeholder=" ">
										 </div><br><br><br><br><br>
										
										 
										 <button type="submit" class="btn btn-info">บันทึก</butto>
							    
							    </div>
							    
							    <div role="tabpanel" class="tab-pane" id="pig">
							    
							    
							    
							    </div>
							    <div role="tabpanel" class="tab-pane" id="settings">
							    
							    
							    </div>
							    <div role="tabpanel" class="tab-pane" id="messages">
							    
							    
							    
							    </div>
							  
							   
							   
							    
							  </div>
							
							</div>
                        
                        
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
       
 	
							                        	
                    
   

 <?php require 'BSscript.php' ;?>