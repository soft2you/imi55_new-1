
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css"/>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.dataTables.min.css">
<style>

  table.dataTable tbody tr {
    background-color: #343a40;
  }
  table.dataTable.row-border tbody th, table.dataTable.row-border tbody td, table.dataTable.display tbody th, table.dataTable.display tbody td {
    border-top: 1px dotted#b90e2e;
}
.dataTables_wrapper .dataTables_paginate .paginate_button.disabled, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active {
    cursor: default;
    color: #f9f9f9 !important;
    border: 1px solid transparent;
    background: transparent;
    box-shadow: none;
}
.dataTables_wrapper .dataTables_paginate .paginate_button {
    box-sizing: border-box;
    display: inline-block;
    min-width: 1.5em;
    padding: 0.5em 1em;
    margin-left: 2px;
    text-align: center;
    text-decoration: none !important;
    cursor: pointer;
    *cursor: hand;
    color: #fffdfd !important;
    border: 1px solid transparent;
    border-radius: 2px;
}
.dataTables_wrapper .dataTables_paginate .paginate_button.current, .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
    color: #333 !important;
    border: 1px solid #979797;
    background-color: white;
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fff), color-stop(100%, #dcdcdc));
    background: -webkit-linear-gradient(top, #fff 0%, #dcdcdc 100%);
    background: -moz-linear-gradient(top, #fff 0%, #dcdcdc 100%);
    background: -ms-linear-gradient(top, #fff 0%, #dcdcdc 100%);
    background: -o-linear-gradient(top, #fff 0%, #dcdcdc 100%);
    background: linear-gradient(to bottom, #fff 0%, #dcdcdc 100%);
}
.dataTables_wrapper .dataTables_paginate .paginate_button:active {
    outline: none;
    background-color: #f9f9f9;
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #2b2b2b), color-stop(100%, #0c0c0c));
    background: -webkit-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);
    background: -moz-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);
    background: -ms-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);
    background: -o-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);
    background: linear-gradient(to bottom, #2b2b2b 0%, #0c0c0c 100%);
    box-shadow: inset 0 0 3px #fbfbfb;
}
.dataTables_wrapper .dataTables_paginate .paginate_button.disabled,
 .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover,
  .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active {
    cursor: default;
    color: #adaeaf !important;
    border: 1px solid #2d2a2a00;
    background: #343a40;
    box-shadow: none;
}
.dataTables_wrapper .dataTables_paginate {
    float: left;
    text-align: right;
    padding-top: 0.25em;
    background-color: #343a40;
    font-size: 12px;
}

.dataTables_length {
  display: none;
}
.pagination {
  display: none;
}
.dataTables_info {
  display: none;
}

</style>









<style type="text/css">
  .table th {
    color: #fff;
    font-weight: 400;
}
</style>

    <div class="d-flex justify-content-center mt-0 mt-md-3 pb-5"  style="padding-top: 70px;">
      <div class="container col-16" style="padding-right: 2px;">
        <div class="row d-flex flex-column justify-content-center align-items-center">
          <div class="section-1 col-16 col-md-10 col-lg-8 pb-2" style="box-shadow: 1px 4px 3px 0px rgb(239 255 0 / 30%);">
              <div class=" d-flex flex-column justify-content-center align-items-start mt-3">
                <div class="container">
                  <div style="text-align: center;">
           <b style="font-size: 1.5em;color: #ccff00;text-align: center;">รายงานบัญชี</b>
        </div>
                   <table id="myTable" class="table table-striped table-dark  display responsive nowrap" style="font-weight: 100;font-size: 11px">
        <thead>
          <tr >
            <th scope="col">#</th>
            <th scope="col">วันที่เวลา</th>
            <th scope="col">จำนวนเงิน</th>
            <th scope="col">สถานะ</th>
          </tr>
        </thead>
        <tbody style="color: #fff;">
          <?php 
          $i=1; 
          if(!empty($statement)){ 
            foreach($statement as $wd){ ?>
          <tr style="background-color:#343a40;font-size: 11px">
            <td><?=$i?></td>
            <td><?=date('d-m-y H:i',$wd['datetime'])?></td>
            <td class="text-right"><?=$wd['deposit']?></td>
            <td>
            <?php 
          if($wd['status'] == 1){
            echo 'รอพนักงาน';
          }else if($wd['status'] == 2){
            echo 'สำเร็จ';
          }else if($wd['status'] == 3){
            echo 'ยกเลิก';
          }else if($wd['status'] == 4){
            echo 'กำลังเช็ค';
          }else if($wd['status'] == 5){
            echo 'อัตโนมัติ 1';
          }else if($wd['status'] == 6){
            echo 'อัตโนมัติ 2';
          }else{
            echo 'Error';
          }
          ?>
          </td>
          </tr>
          <?php 
          $i++;
          } 
          }else{?>
        
          <tr>
          <td colspan="4">ไม่มีข้อมูล</td>
          </tr>
        <?php }?>
        </tbody>
      </table>

<div style="text-align: center;">
           <b style="font-size: 1.5em;color: #ccff00;text-align: center;">รายการถอน</b>
        </div>
      <table id="myTable2" class="table table-striped table-dark  display responsive nowrap" style="font-weight: 100;font-size: 11px">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">วันที่เวลา</th>
            <th scope="col">จำนวนเงิน</th>
            <th scope="col">สถานะ</th>
          </tr>
        </thead>
        <tbody style="color: #fff;">
          <?php 
          $i=1; 
          if(!empty($withdraw)){ 
            foreach($withdraw as $wd){ ?>
          <tr style="background-color:#343a40;font-size: 11px">
            <td><?=$i?></td>
            <td><?=date('d-m-y H:i',$wd['time'])?></td>
            <td class="text-right"><?=$wd['amount']?></td>
            <td>
            <?php 
          if($wd['status'] == 1){
            echo 'รอพนักงาน';
          }else if($wd['status'] == 2){
            echo 'สำเร็จ';
          }else if($wd['status'] == 3){
            echo 'ยกเลิก';
          }else if($wd['status'] == 4){
            echo 'กำลังเช็ค';
          }else if($wd['status'] == 5){
            echo 'อัตโนมัติ 1';
          }else if($wd['status'] == 6){
            echo 'อัตโนมัติ 2';
          }else{
            echo 'Error';
          }
          ?>
          </td>
          </tr>
          <?php 
          $i++;
          } 
          }else{?>
        
          <tr>
          <td colspan="4">ไม่มีข้อมูล</td>
          </tr>
        <?php }?>
        </tbody>
      </table>

      
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <div class="row my-5 pb-5"></div>


 
<script src="<?php echo base_url()?>public/tem_admin/vendors/jquery/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
<script>
  $(document).ready( function () {
    $('#myTable').DataTable({
      responsive: true,
      "searching": false,
      "pageLength": 5,
      "lengthChange": false,
      "ordering": false,
        "info":     false
    });
  } );
  $(document).ready( function () {
    $('#myTable2').DataTable({
      responsive: true,
      "searching": false,
      "pageLength": 5,
      "lengthChange": false,
      "ordering": false,
        "info":     false
    });
  } );
</script>