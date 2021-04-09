
  <div class="row">
    <div class="col-lg-8 col-md-12 col-sm-12 ">
      <div class="x_panel">
        <div class="x_title">
          <h2> รายการฝาก <small></small></h2>
          <div class="text-right">
            <select class="" id="type" onchange="type_stm()">
              <option value="1">รออนุมัติ</option>
              <option value="5">ซ่อน</option>
              <option value="4">ยกเลิก</option>
     
            </select>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="col-md-12 col-sm-12 ">
          <div class="x_content">
            <div class="row">
              <div class="card-box ">
                <table id="table" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%" >
                  <thead style="background-color: #2a3f54;color: #fff;">
                    <tr align="center" style="display: none;">
                      <th ></th>
                      <th></th>
                      <th ></th>
                      <th ></th>
                      <th ></th>
                    </tr>
                  </thead>
                  <tbody id="history_stm">
                    <?php
                    if ( !empty( $state_wcf ) ) {
                      $i = 1;
                      foreach ( $state_wcf as $key => $state ) {
                        ?>
                    <tr id="<?=$state['id']?>">
                      <td width="15%" align="center"><div class="row">
                          <div  class="col-md-12" style="font-size: 11px;"><b>วันที่/เวลา</b></div>
                          <div class="col-md-12"> <i style="font-weight: 700">
                            <?=date('d-m-y',$state['datetime'])?>
                            </i> </div>
                          <div class="col-md-12"> <i style="font-weight: 700">
                            <?=date('H:i',$state['datetime'])?>
                            น.</i> </div>
                        </div>
                      <td><div class="row" style="font-weight: bold; ">
                          <div  class="col-md-3 text-right">รหัส :</div>
                          <div class="col-md-9">DPS<?=substr(("000000" . (intval($state['id']))), -6)?>
                          </div>
                        </div>
                        <div class="row">
                          <div style="font-weight: bold;" class="col-md-3 text-right">ข้อมูล :</div>
                          <div class="col-md-9">
                            <?=$state['note']?>
                          </div>
                        </div>
                        <div class="row">
                          <div style="font-weight: bold;" class="col-md-3 text-right">เข้า :</div>
                          <div class="col-md-9"> <img  src='<?=base_url()?>public/tem_frontend/img/mapraw_icon/bank/<?=$state['bnkapi_web']?>.png' class="img-fluid" width="8%">
                            <?=$state['name']?>
                            [
                            <?=$state['bnkshort_web']?>
                            ] </div>
                        </div></td>
                      <td align="center"> ประเภท<br>
                        <?=$state['from_name']?></td>
                      <td width="15%" align="right"> 
                        <span class="" style="font-size: 16px;font-weight: 700">
                        <?=number_format($state['deposit'],2)?>
                        </span></td>
                      <td width="20%" align="center">
						  <div class="col-md-12 " style="font-size: 11px;">
                          กรุณาติดต่อแอดมิน

                          เพื่อยืนยันรายการฝาก
						  </div>
						  </td>
                    </tr>
                    <?php $i++; }}?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-12 ">
      <div class="x_panel">
        <div class="x_title">
          <h2> ทำรายการล่าสุด<small></small></h2>
          <div class="clearfix"></div>
        </div>
        <!--	  Kbank = 128f2d BAY = ffc43b  SCB = 4f2e7f-->
        <?php
        if ( !empty( $state_cf ) ) {
          foreach ( $state_cf as $key => $stm_cf ) {
            ?>
        <?php
        $sty_bank = '';
        if ( $stm_cf[ 'bnkapi_web' ] == '004' ) { //KBANK
          $sty_bank = 'style="background-color:RGBA(18,143,45,0.21);border-radius:5px;color:#000;margin-bottom: 0px;padding: 0 0;"';
        } else if ( $stm_cf[ 'bnkapi_web' ] == '002' ) { //BBL
          $sty_bank = 'style="background-color:RGBA(30,69,152,0.26);border-radius:5px;color: #000;margin-bottom: 0px;padding: 0 0;"';
        } else if ( $stm_cf[ 'bnkapi_web' ] == '025' ) { //BAY
          $sty_bank = 'style="background-color:RGBA(255,196,59,0.25);border-radius:5px;color: #000;margin-bottom: 0px;padding: 0 0;"';
        } else if ( $stm_cf[ 'bnkapi_web' ] == '014' ) { //SCB
          $sty_bank = 'style="background-color:RGBA(79,46,127,0.16);border-radius:5px;color: #000;margin-bottom: 0px;padding: 0 0;"';
        } else if ( $stm_cf[ 'bnkapi_web' ] == '006' ) { //KTB
          $sty_bank = 'style="background-color:RGBA(27,165,226,0.19);border-radius:5px;color: #000;margin-bottom: 0px;padding: 0 0;"';
        }


        ?>
        <div id="<?=$stm_cf['id']?>" class="x_panel"<?=$sty_bank?>>
          <div class="x_content" >
            <div class="card-box"> <img  src='<?=base_url()?>public/tem_frontend/img/mapraw_icon/bank/<?=$stm_cf['bnkapi_web']?>.png' style="border: 1px solid #FFF;border-radius:5px" class="img-fluid" width="25px"> <span>
              <?=$stm_cf['name']?>
              [
              <?=$stm_cf['bnkshort_web']?>
              ] <i style="font-size: 11px">
              <?=$stm_cf['id']?>
              </i> </span>
              <table width="100%" border="0" class="m-1">
                <tr>
                  <td> รหัส : </td>
                  <td><?php
                  if ( $stm_cf[ 'user' ] != '' ) {
                    echo '<span class="badge badge-secondary" style="font-size: 13px;">';
                    echo $stm_cf[ 'user' ];
                    echo '</span>';
                  } else {
                    echo '<i class="fa fa-remove text-danger"> ยกเลิกรายการ</i>';
                  }
                  ?></td>
                  <td> เบอร์ : </td>
                  <td><?=$stm_cf['username']?></td>
                </tr>
                <tr>
                  <td> ยอดเงิน :</td>
                  <td><span class="badge badge-secondary" style="font-size: 13px;">
                    <?=number_format($stm_cf['deposit'],2)?>
                    </span></td>
                  <td> พนักงาน :</td>
                  <td><?=$stm_cf['admin_name']?></td>
                </tr>
                <tr>
                  <td > ฝาก :</td>
                  <td><?=date('d-m-y H:i',$stm_cf['datetime'])?></td>
                  <td> เฟิร์ม :</td>
                  <td><?=date('d-m-y H:i',$stm_cf['dateCreate'])?></td>
				</tr>
              </table>
              <div class="float-right text-info" style="cursor: pointer" onClick="detail_stmcf('<?=$stm_cf['id']?>')">เพิ่มเติม >></div>
            </div>
          </div>
        </div>
        <?php  }}?>
      </div>
    </div>
  </div>

<!--Modal-->
<!--Detail Statement Deposit-->
<div class="modal fade" id="m_detail_stmcf" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
       
		   <div id="detail_stmcf_show"></div>
		   <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>

    </div>
  </div>
</div>
<!--Admin Add credit-->
<div class="modal fade" id="m_add_credit" role="dialog">
  <div class="modal-dialog"> 
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">แอดลูกค้า<small> (กรอกเบอร์โทรหรือยูเซอร์)</small></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
        <div class="modal-body">
			<div class="col-md-12 col-sm-12  form-group has-feedback">
            <span class="text-danger">
				- กรอกรหัสลูกค้าเช่น <?=$this->getapi_model->agent()?>i001234 กรอกข้อมูลคือ 1234 <br>
				- กรณีกรอกเบอร์โทรศัพท์กรุณากรอกให้ครบ 10 หลัก เช่น 0912345678 โดยไม่มีเว้นวรรคหรืออัขระ
				</span>
			</div>
		  <div class="col-md-12 col-sm-12  form-group has-feedback text-dark">
			<b>
            <h6>รหัสฝาก : <span id="m_stmid"></span></h6>
            <h6>ยอดเงิน : <span id="m_stmamount"></span> บาท</h6
			</b>
			</div>
          <div class="col-md-12 col-sm-12  form-group has-feedback">
            <input type="text" class="form-control"  name="user_id" required="required" autocomplete="off" >
            <input type="hidden" class="form-control"  name="stm_id" required="required" autocomplete="off" >
            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span> </div>
        </div>
        <div class="modal-footer">
          <button onClick="add_credit_stm2()" class="btn btn-success">Save</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      
    </div>
  </div>
</div>
<!--Check Add credit  -->
<div class="modal fade" id="m_firm_credit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
       
		   <div id="firm_credit_show"></div>
		   <input type="hidden" class="form-control"  name="add_user_id" required="required" autocomplete="off" >
            <input type="hidden" class="form-control"  name="add_stm_id" required="required" autocomplete="off" >
      </div>
		<div class="modal-footer">
          <button  onClick="addcredit()" class="btn btn-success">Save</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>
<script>
function type_stm()
	{
		var type = $('#type').val();
		$.ajax({
			url: '<?=base_url()?>sale/deposit/get_type_stm',
			type: 'POST',
			dataType: 'json',
			data: {status:type},
		}).done(function(res) {
			console.log(res);
			var history_stm = '';
			var conut 	= res.data.length;
			var stm		= res.data;
			if(stm.length >=1){
				for(var i=0; i < conut; i++){
					history_stm += '<tr>';
					history_stm += '<td width="15%" align="center"><div class="row">';
					history_stm += '<div  class="col-md-12" style="font-size: 11px;"><b>วันที่/เวลา</b></div>';
					history_stm += '<div class="col-md-12"> <i style="font-weight: 700">';
					history_stm +=  moment.unix(stm[i].datetime).format("DD-MM-YY");
					history_stm += '</i> </div>';
					history_stm += '<div class="col-md-12"> <i style="font-weight: 700">';
					history_stm += moment.unix(stm[i].datetime).format("HH:mm");
					history_stm += 'น.</i> </div>';
					history_stm += '</div>';
					history_stm += '<td><div class="row" style="font-weight: bold; ">';
					history_stm += '<div  class="col-md-3 text-right">รหัส :</div>';
					history_stm += '<div class="col-md-9">DPS'+stm[i].id;
					history_stm += '</div>';
					history_stm += '</div>';
					history_stm += '<div class="row">';
					history_stm += '<div style="font-weight: bold;" class="col-md-3 text-right">ข้อมูล :</div>';
					history_stm += '<div class="col-md-9">';
					history_stm += stm[i].note;
					history_stm += '</div>';
					history_stm += '</div>';
					history_stm += '<div class="row">';
					history_stm += '<div style="font-weight: bold;" class="col-md-3 text-right">เข้า :</div>';
					history_stm += '<div class="col-md-9"> <img  src="<?=base_url()?>public/tem_frontend/img/mapraw_icon/bank/'+stm[i].bnkapi_web+'.png" class="img-fluid" width="8%">';
					history_stm += '['+stm[i].name;
					history_stm += stm[i].bnkshort_web;
					history_stm += '] </div>';
					history_stm += '</div></td>';
					history_stm += '<td align="center"> ประเภท<br>';
					history_stm += stm[i].from_name+'</td>';
					history_stm += '<td width="15%" align="right"> ';
					history_stm += '<span class="" style="font-size: 16px;font-weight: 700">';
					history_stm += stm[i].deposit;
					history_stm += '</span></td>';
					history_stm += '<td width="15%" align="center">';
					if(type == 4){
						history_stm += '<div class="col-md-12">';
						history_stm += 'ยกเลิกรายการไปแล้ว';
						history_stm += '</div>';
					}else {
						history_stm += '<div class="col-md-12 " style="font-size: 11px;">กรุณาติดต่อแอดมิน เพื่อยืนยันรายการฝาก</div>';
					}
					
					
					
					history_stm += '</td></tr>';
				}
				
				$('#history_stm').html('');
				$('#history_stm').html(history_stm);
			}else{
				
			}         
		});
	}
function add_credit_stm(stm_id,stm_idshow,stm_amount)
	{
		$("input[name=stm_id]").val(stm_id);
		$('#m_stmid').html(stm_idshow);
		$('#m_stmamount').html(stm_amount);
		$('#m_add_credit').modal();
	}

function detail_stmcf(stm_id)
	{
		$('#m_detail_stmcf').modal();
		$.ajax({
			url: '<?=base_url()?>sale/deposit/get_stm',
			type: 'POST',
			dataType: 'json',
			data: {stm_id:stm_id},
		})
		.done(function(res) {
			$('#cover-spin').hide();
			if(res.code == 1 ){
				var stm = res.data;
				var detail_stmcf = '';
				detail_stmcf += '<i> Id : '+stm.id+' </i><br>';
				
				detail_stmcf += '<table width="100%" border="0" class="m-1 text-dark">';
				
				detail_stmcf += '<tr>';
				detail_stmcf += '<td width="20%">ต้นทาง :</td>';
				detail_stmcf += '<td colspan="3"><img  src="<?=base_url()?>public/tem_frontend/img/mapraw_icon/bank/'+stm.userApi+'.png" style="border: 1px solid #FFF;border-radius:5px" class="img-fluid" width="30px">';
				detail_stmcf += '<span> '+stm.userName+' ['+stm.userBank+'] </span></td>';
				detail_stmcf += '</tr>';
				
				detail_stmcf += '<tr>';
				detail_stmcf += '<td colspan="">ปลายทาง :</td>';
				detail_stmcf += '<td colspan="3"><img  src="<?=base_url()?>public/tem_frontend/img/mapraw_icon/bank/'+stm.webApi+'.png" style="border: 1px solid #FFF;border-radius:5px" class="img-fluid" width="30px">';
				detail_stmcf += '<span> '+stm.webName+' ['+stm.webBank+'] </span></td>'
				detail_stmcf += '</tr>';

				detail_stmcf += '<tr><td> รหัส : </td><td><b>'+stm.user+'</b></td><td> ชื่อ : </td><td><b>'+stm.userName+'</b></td></tr>';
				detail_stmcf += '<tr><td> ยอดเงิน :</td><td><span> <b>'+stm.deposit+' </b></span></td><td> พนักงาน :</td><td><b>'+stm.adminName+'</b></td></tr>';
				detail_stmcf += '<tr><td> ฝาก :</td><td><b>'+stm.dateIn+'</b></td><td> เฟิร์ม :</td><td><b>'+stm.dateFirm+'</b></td></tr>';
				detail_stmcf += '<tr><td> รายละเอียด :</td> <td colspan="3"><b>'+stm.note+'</b></td></tr>';
				detail_stmcf += '</table>';
	
				$('#detail_stmcf_show').html(detail_stmcf);
				$('#show_detail_stmcf').html(detail_stmcf);
			}else{
				swal('ไม่สำเร็จ','ไม่สามารถเรียกดูข้อมูลได้','error');
			}
		});
	}
</script>