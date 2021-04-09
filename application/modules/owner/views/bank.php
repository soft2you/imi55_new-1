<div class="row">
    <div class="col-md-11 col-sm-11 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>รายชื่อแบงค์<small></small></h2>
                <ul class="nav navbar-right panel_toolbox">

                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-12 col-sm-12 ">
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <table id="datatable-responsive"
                                    class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                                    width="100%">
                                    <thead style="background-color:#12205F;color: #FFF">
                                        <tr align="center">
                                            <th width="5%"> รหัส</th>
                                            <th> ชื่อแบงค์ </th>
                                            <th> เลขบัญชี </th>
                                            <th> ธนาคาร </th>
                                            <th> ประเภท </th>
                                            <th> ยอดคงเหลือ </th>
                                            <th width="5%">ดูรายการ </th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php $i=1; if(!empty($bank_web)){foreach($bank_web as $_b => $bnk){ ?>
                                        <tr>
                                            <td><?=$i?></td>
                                            <td><?=$bnk['name']?></td>
                                            <td><?=$bnk['account']?></td>
                                            <td style="text-align:center;"><?=$bnk['bank_short']?></td>
                                            <td style="text-align:center;"><?php
                          if ( $bnk[ 'type' ] == '1' ) {
                            echo 'ฝาก';
                          } else {
                            echo 'ถอน';
                          }
                          ?></td>
                                            <td style="text-align:right;"><?php
                          $sum_ste = $bnk[ 'sum_dps' ] - $bnk[ 'sum_wd' ];
                          echo number_format( $sum_ste, 2 );
                          ?></td>
                                            <td style="text-align:center;">
                                                <?php
                            if ($bnk['bank_short'] == 'BBL' && $bnk['status'] == 3) {?>
                                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                                    data-target="#modalstm" onclick="get_stm()">statement</button>
                                                <?php }else{ 

                           }?>
                                                <a href="bank/bank_statement/<?=$bnk['id']?>"
                                                    class="btn btn-sm btn-info">เรียกดู</a>
                                            </td>

                                        </tr>
                                        <?php $i++; ?>
                                        <?php }}else{ ?>
                                        <tr>
                                            <td colspan="9" style="text-align:center;background-color:#EBE6AB">
                                                ไม่มีข้อมูล</td>
                                            </td>
                                            <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<!-- Modal -->
<div class="modal fade" id="modalstm" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">

            <div class="modal-body">
                <h4 style="color: black">statement วันที่ <span id="dt"></span> <span style="float: right;"
                        id="num_stm"></span></h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">ลำดับ</th>
                            <th class="text-center">รายละเอียด</th>
                            <th class="text-center">วันที่</th>
                            <th class="text-center">จำนวนเงิน</th>
                            <th class="text-center">channel</th>
                        </tr>
                    </thead>
                    <tbody id="tb_val">

                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<script type="text/javascript">
function get_stm() {
    $.ajax({
            url: 'Bank/get_stm_bbl',
            type: 'GET',
            dataType: 'json',
        })
        .done(function(res) {
            //console.log(res);
            if (res.code == 1) {
                var trHTML = '';
                var i = 1;
                if (res.data.transactionList.length == 0) {
                    trHTML +=
                        `<tr>
                <td class="text-center" colspan="5" style="background-color:#F9EBDC"> ไม่มีข้อมูล </td>
              </tr>`;
                } else {
                    $.each(res.data.transactionList[0].transactions, function(index, val) {
                        if (val.amount > 0) {
                            trHTML += `<tr style="background-color:#F9EBDC">`;
                        } else {
                            trHTML += `<tr>`;
                        }
                        trHTML +=
                            `<td class="text-center">` + (i++) + `</td>
                <td class="text-center">` + val.detailedDescription1 + `</td>
                <td class="text-center">` + val.transactionTimestamp + `</td>
                <td class="text-center">` + val.amount + `</td>
                <td class="text-center">` + val.channel + `</td>
              </tr>`;
                    });
                }

                $('#tb_val').html(trHTML);
                $('#num_stm').html('จำนวน ' + res.data.totalCount + ' รายการ');
                $('#dt').html(res.data.transactionList[0].date);
            } else {
                swal({
                    icon: "error",
                    text: "ไม่สามารถดูรายการได้ในขณะนี้",
                });
            }
        })
        .fail(function() {
            console.log("error");
        });

}
</script>