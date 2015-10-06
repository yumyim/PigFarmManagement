<?php require 'BS_header.php'; ?>
<?php  require 'BSmenu.php';?>


 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">จัดการข้อมูลเจ้าหน้าที่</h1>
                        	<div>

							  <!-- Nav tabs -->
							  <ul class="nav nav-tabs" role="tablist">
							    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">หน้าหลัก</a></li>
							    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">เพิ่มเจ้าหน้าที่</a></li>
							    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">..</a></li>
							    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">..</a></li>
							  </ul>
							
							  <!-- Tab panes -->
							  <div class="tab-content">
							    <div role="tabpanel" class="tab-pane active" id="home">
							    	<table class="table table-condensed">
									  <thead>
										<tr class="active">
											<th>ลำดับ</th>
											<th>ชื่อ</th>
											<th>นามสกุล</th>
											<th>ชื่อเล่น</th>
											<th>หน้าที่</th>
											<th>#</th>
											
										</tr>
									</thead>
									<tbody>
										<tr>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											
										</tr>
									</tbody>
									</table>
							    </div>
							    <div role="tabpanel" class="tab-pane" id="profile">
							    	<div class="col-xs-2">
										   ชื่อ<input type="text" name="  " class="form-control" placeholder=" ">
										 </div>
										 <div class="col-xs-2">
										   นามสกุล <input type="text" name=" " class="form-control" placeholder=" ">
										 </div><br><br><br>
										 <div class="col-xs-2">
										   ชื่อเล่น <input type="text" name=" " class="form-control" placeholder=" ">
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
										 <div class="col-xs-2">
										 หน้าที่<select class="form-control">
											  <option>ผู้ดูแลสุกร</option>
											  <option>สัตวแพทย์</option>
											</select>
										 </div><br><br><br>
										 
										 <button type="submit" class="btn btn-info">บันทึก</button>
							    
							    
							    </div>
							    <div role="tabpanel" class="tab-pane" id="messages">
							    
							    
							    
							    </div>
							    <div role="tabpanel" class="tab-pane" id="settings">
							    
							    
							    </div>
							  </div>
							
							</div>
                    </div>
                </div>
            </div>
        </div>
       

    
    
<?php require 'BSscript.php'; ?>
