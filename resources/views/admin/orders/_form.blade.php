<div id="mobile-indicator"></div>
<div class="col-md-12">
	<div class="text-center" style="font-size: 20px"> <strong>فـــرعـــــــــون </strong>لخدمات النقل </div><br>
	<p class="text-center">إيصال استلام نقديه و تحديد . رقم الاوردر (<code>#100</code>) </p><br>	

<table class="table table-bordered table-responsive" id="summry">
	<tr>
		<td>
			ميعاد الأوردر يوم ( {!!Form::text('order_day',null,['style'=>'width:75px'])!!} )
		</td>
		<td>
			الموافق {!!Form::input('date','order_date',null,['style'=>'width: 150px;line-height:1 !important'])!!}
		</td>
		<td>
			الساعه {!!Form::input('time','order_time',null,['style'=>'width:100px;line-height:1 !important'])!!}
		</td>
		<td>
			إجمالي المبلغ المتفق عليه ( {!!Form::input('number','totalOrder',null,['style'=>'width:100px;line-height:1 !important'])!!} )  جنيه
		</td>
		<td>
			غير الإكراميه
		</td>		
	</tr>
</table>

<table class="table table-bordered table-responsive" id="client">
<tbody>
	<tr>
		<td> اسم العميل {!!Form::text('client_name',null)!!} </td>
		<td> الهاتف 1 {!!Form::text('phone1',null)!!} </td>
		<td> الهاتف 2 {!!Form::text('phone2',null)!!} </td>
	</tr>
	<tr>
		<td>العنوان من {!!Form::text('address_from',null)!!}  </td>
		<td>العنوان إلى{!!Form::text('address_to',null)!!}  </td>
	</tr>
	<tr><td></td></tr>
	<tr>
		<td>الدور من{!!Form::input('number','floor_from',null)!!}  </td>
		<td>الدور إلى{!!Form::input('number','floor_to',null)!!}</td>
	</tr>
</tbody>
<tbody>
	<tr>
		<td>{!!Form::checkbox('elevator',1)!!} يوجد أسانسير</td>

		<td>{!!Form::checkbox('wide_stares',1)!!} السلم واسع</td>
		
		<td >{!!Form::checkbox('passthru',1)!!} يوجد ممر</td>
		
	</tr>
</tbody>
</table>


<table class="table table-bordered table-responsive" id="items">
	<tr>
		<td>الأثاث</td>
		<td>حجره نوم</td>
		<td>حجره أطفال</td>
		<td>سفره</td>
		<td>نيش</td>
		<td>بوفيه</td>
		<td>انتريه</td>
		<td>صالون</td>
		<td>ليفينج</td>
		<td>ركنه</td>
		<td>مطبخ</td>
		<td>مكتب</td>
		<td>مكتبه</td>
		<td>الكراتين</td>
		<td>الشنط</td>
	</tr>
	<tr>
		<td>عدد</td>
		<td>{!!Form::checkbox('bedroom',1,null,['class'=>'furntire'])!!}</td>
		<td>{!!Form::checkbox('kidroom',1,null,['class'=>'furntire'])!!}</td>
		<td>{!!Form::checkbox('dinnerroom',1,null,['class'=>'furntire'])!!}</td>
		<td>{!!Form::checkbox('neesh',1,null,['class'=>'furntire'])!!}</td>
		<td>{!!Form::checkbox('bofue',1,null,['class'=>'furntire'])!!}</td>
		<td>{!!Form::checkbox('antreh',1,null,['class'=>'furntire'])!!}</td>
		<td>{!!Form::checkbox('salon',1,null,['class'=>'furntire'])!!}</td>
		<td>{!!Form::checkbox('living',1,null,['class'=>'furntire'])!!}</td>
		<td>{!!Form::checkbox('rokna',1,null,['class'=>'furntire'])!!}</td>
		<td>{!!Form::checkbox('kitchen',1,null,['class'=>'furntire'])!!}</td>
		<td>{!!Form::checkbox('office',1,null,['class'=>'furntire'])!!}</td>
		<td>{!!Form::checkbox('library',1,null,['class'=>'furntire'])!!}</td>
		<td>{!!Form::checkbox('cartoons',1,null,['class'=>'furntire'])!!}</td>
		<td>{!!Form::checkbox('cases',1,null,['class'=>'furntire'])!!}</td>
	</tr>
	<tr>
		<td>الأجهزه</td>
		<td>ثلاجه</td>
		<td>ديب فريزر</td>
		<td>غساله</td>
		<td>بوتوجاز</td>
		<td>غساله أطباق</td>
		<td>سخان</td>
		<td>تيليفزيون</td>
		<td>تكييف</td>
		<td>ميكروويف</td>
		<td>نجف</td>
		<td>سجاد</td>
		<td>مراتب</td>
		<td>طرابيزه</td>
		<td>جزامه</td>
	</tr>
	<tr>
		<td>عدد</td>
		<td>{!!Form::checkbox('fridge',1,null,['class'=>'devices'])!!}</td>
		<td>{!!Form::checkbox('deep_freezer',1,null,['class'=>'devices'])!!}</td>
		<td>{!!Form::checkbox('wacher',1,null,['class'=>'devices'])!!}</td>
		<td>{!!Form::checkbox('cocker',1,null,['class'=>'devices'])!!}</td>
		<td>{!!Form::checkbox('dish_wacher',1,null,['class'=>'devices'])!!}</td>
		<td>{!!Form::checkbox('heater',1,null,['class'=>'devices'])!!}</td>
		<td>{!!Form::checkbox('tv',1,null,['class'=>'devices'])!!}</td>
		<td>{!!Form::checkbox('condiner',1,null,['class'=>'devices'])!!}</td>
		<td>{!!Form::checkbox('microwave',1,null,['class'=>'devices'])!!}</td>
		<td>{!!Form::checkbox('nagaf',1,null,['class'=>'devices'])!!}</td>
		<td>{!!Form::checkbox('carpet',1,null,['class'=>'devices'])!!}</td>
		<td>{!!Form::checkbox('martb',1,null,['class'=>'devices'])!!}</td>
		<td>{!!Form::checkbox('tables',1,null,['class'=>'devices'])!!}</td>
		<td>{!!Form::checkbox('shoser',1,null,['class'=>'devices'])!!}</td>
	</tr>
</table>
</div>
<div class="col-md-7">
	<table class="table table-bordered table-responsive" id="sum">
		<tr>
			<td width="1%">1</td>
			<td width="30%">العمال</td>
			<td width="10%"></td>
			<td width="">{!!Form::input('number','workers',null,['style'=>'width:100px;line-height:1 !important','class'=>'total'])!!}</td>
			<td></td>
		</tr>
		<tr>
			<td width="1%">2</td>
			<td width="1%">العمال (نقله إضافيه)</td>
			<td width="10%"></td>
			<td width="">{!!Form::input('number','workers_plus',null,['style'=>'width:100px;line-height:1 !important','class'=>'total'])!!}</td>
			<td></td>
		</tr>
		<tr>
			<td width="1%">3</td>
			<td width="1%">السياره الأساسيه</td>
			<td width="10%"></td>
			<td width="">{!!Form::input('number','car',null,['style'=>'width:100px;line-height:1 !important','class'=>'total'])!!}</td>
			<td></td>
		</tr>
		<tr>
			<td width="1%">4</td>
			<td width="35%">السياره  (نقله إضافيه)</td>
			<td width="10%"></td>
			<td width="">{!!Form::input('number','car_plus',null,['style'=>'width:100px;line-height:1 !important','class'=>'total'])!!}</td>
			<td></td>
		</tr>

		<tr>
			<td width="1%">5</td>
			<td width="35%">النجار 100</td>
			<td width="10%">X</td>
			<td width="">{!!Form::input('number','carpenter_num',null,['style'=>'width:100px;line-height:1 !important'])!!}</td>
			<td width=""> = {!!Form::input('number','carpenter',null,['style'=>'width:100px;line-height:1 !important','class'=>'total'])!!}</td>
		</tr>

		<tr>
			<td width="1%">6</td>
			<td width="35%">المطبخ 100</td>
			<td width="10%">X</td>
			<td width="">{!!Form::input('number','kitchen_worker_num',null,['style'=>'width:100px;line-height:1 !important'])!!}</td>
			<td width=""> = {!!Form::input('number','kitchen_worker',null,['style'=>'width:100px;line-height:1 !important','class'=>'total'])!!}</td>
		</tr>

		<tr>
			<td width="1%">7</td>
			<td width="35%">النجف 20</td>
			<td width="10%">X</td>
			<td width="">{!!Form::input('number','nagaf_worker_num',null,['style'=>'width:100px;line-height:1 !important'])!!}</td>
			<td width=""> = {!!Form::input('number','nagaf_worker',null,['style'=>'width:100px;line-height:1 !important','class'=>'total'])!!}</td>
		</tr>

		<tr>
			<td width="1%">8</td>
			<td width="35%">تكييف 350</td>
			<td width="10%">X</td>
			<td width="">{!!Form::input('number','condiner_tech_num',null,['style'=>'width:100px;line-height:1 !important'])!!}</td>
			<td width=""> = {!!Form::input('number','condiner_tech',null,['style'=>'width:100px;line-height:1 !important','class'=>'total'])!!}</td>
		</tr>

		<tr>
			<td width="1%">9</td>
			<td width="35%">تغليف 150 خامات + 50 للعامل</td>
			<td width="10%">X</td>
			<td width="">{!!Form::input('number','casing_num',null,['style'=>'width:100px;line-height:1 !important'])!!}</td>
			<td width=""> = {!!Form::input('number','casing',null,['style'=>'width:100px;line-height:1 !important','class'=>'total'])!!}</td>
		</tr>
		<tr>
			
			<td colspan="3" width="10%"> <p class="text-right">الإجمالى</p></td>
			<td colspan="2" width="">= {!!Form::input('number','total',null,['style'=>'width:250px;line-height:1 !important','id'=>'totalOfAll'])!!}</td>
		</tr>
	</table>
</div>
<div class="col-md-5">
<br>
<br>
<br>
<img src="{{Url('/')}}/image.jpg" class="col-md-12" alt="">
</div>

<div class="col-md-12">
	<label for="">ملاحظات</label>
	{!!Form::textarea('notes',null,['style'=>'width:100%;resize:none'])!!}

</div>

<div class="col-md-12 text-center">
<br>
	<button class="btn btn-success" name="status" value="0"> تأكيد </button>
	<button class="btn btn-warning" name="status" value="1"> إنتظار </button>
	<button class="btn btn-danger" name="status" value="2"> إلغاء </button>
<br>
<br><br>
</div>


@section('inlineJs')
<!-- Latest compiled and minified CSS & JS -->
<script>


$(document).ready(function() {

    if ($('#mobile-indicator').is(':visible')) {
		TransposeTable('main');
		TransposeTable('client');
		TransposeTable('summry');
		TransposeTable('items');
		var img = $('img').remove();
		var tbod =$('#client').find('tbody');
		tbod[1].remove();
	}else{
		var tr =$('#client').find('tbody').find('tr');
		tr[2].remove();
	}
});

function TransposeTable(tableId)
{        
    var tbl = $('#' + tableId);
    var tbody = tbl.find('tbody');
    var oldWidth = tbody.find('tr:first td').length;
    var oldHeight = tbody.find('tr').length;
    var newWidth = oldHeight;
    var newHeight = oldWidth;

    var jqOldCells = tbody.find('td');        

    var newTbody = $("<tbody></tbody>");
    for(var y=0; y<newHeight; y++)
    {
        var newRow = $("<tr></tr>");
        for(var x=0; x<newWidth; x++)
        {
            newRow.append(jqOldCells.eq((oldWidth*x)+y));
        }
        newTbody.append(newRow);
    }

    tbody.replaceWith(newTbody);        
}



/** ************************* Calculate ******************************** **/
$('input[name="floor_from"]').on('change',function() {
	calculateFloors();
});
$('input[name="floor_to"]').on('change',function() {
	calculateFloors();
});


var tot = $('.total');

$('body').on("change",function(){
	var sum = 0;
	$('.total').each(function(){
		if($(this).val() != 'NaN' && $(this).val() != ""){
			sum += parseInt($(this).val());
		}
	$('#totalOfAll').val(sum);
	});
});

$('input[name="carpenter_num"]').on('change',function(){
	$('input[name="carpenter"]').val($(this).val()*100)
});

$('input[name="kitchen_worker_num"]').on('change',function(){
	$('input[name="kitchen_worker"]').val($(this).val()*100)
});

$('input[name="nagaf_worker_num"]').on('change',function(){
	$('input[name="nagaf_worker"]').val($(this).val()*20)
});

$('input[name="condiner_tech_num"]').on('change',function(){
	$('input[name="condiner_tech"]').val($(this).val()*350)
});

$('input[name="casing_num"]').on('change',function(){
	$('input[name="casing"]').val($(this).val()*200)
});


function calculateFloors() {
	var floor_from = $('input[name="floor_from"]').val();
	var floor_to = $('input[name="floor_to"]').val();
	var total = 0 ;
	if(floor_from == 1 && floor_to == 1){
		total = 550;
	}else if(floor_from  <= 2 && floor_to <= 2){
		total = 600;
	}else if(floor_from  <= 3 && floor_to <= 3){
		total = 700;
	}else if(floor_from  <= 4){
		if(floor_to  <= 4){
			total = 800;
		}else if(floor_to  <= 5){
			total = 900;
		}else if(floor_to  <= 6){
			total = 950;
		}else if(floor_to  <= 7){
			total = 1000;
		}else if(floor_to  <= 8){
			total = 1050;
		}else if(floor_to  <= 9){
			total = 1100;
		}else if(floor_to  <= 10){
			total = 1200;
		}else if(floor_to  <= 11){
			total = 1300;
		}else if(floor_to  <= 12){
			total = 1500;
		}else if(floor_to  <= 13){
			total = 1600;
		}
	}else if(floor_from  == 5 && floor_to == 5){
		total = 1000;
	}else if(floor_from  <= 6 && floor_to == 6){
		total = 1050;
	}else if(floor_from  <= 7 && floor_to == 7){
		total = 1100;
	}else if(floor_from  <= 8 && floor_to == 8){
		total = 1250;
	}else if(floor_from  <= 9 && floor_to == 9){
		total = 1400;
	}else if(floor_from  <= 10 && floor_to == 10){
		total = 1600;
	}else if(floor_from  <= 11 && floor_to == 11){
		total = 1800;
	}else if(floor_from  <= 12 && floor_to == 12){
		total = 2100;
	}else if(floor_from  <= 13 && floor_to == 13){
		total = 2300;
	}


	if(floor_to == 1 && floor_from == 1){
		total = 550;
	}else if(floor_to  <= 2 && floor_from <= 2){
		total = 600;
	}else if(floor_to  <= 3 && floor_from <= 3){
		total = 700;
	}else if(floor_to  <= 4){
		if(floor_from  <= 4){
			total = 800;
		}else if(floor_from  <= 5){
			total = 900;
		}else if(floor_from  <= 6){
			total = 950;
		}else if(floor_from  <= 7){
			total = 1000;
		}else if(floor_from  <= 8){
			total = 1050;
		}else if(floor_from  <= 9){
			total = 1100;
		}else if(floor_from  <= 10){
			total = 1200;
		}else if(floor_from  <= 11){
			total = 1300;
		}else if(floor_from  <= 12){
			total = 1500;
		}else if(floor_from  <= 13){
			total = 1600;
		}
	}else if(floor_to  == 5 && floor_from == 5){
		total = 1000;
	}else if(floor_to  <= 6 && floor_from == 6){
		total = 1050;
	}else if(floor_to  <= 7 && floor_from == 7){
		total = 1100;
	}else if(floor_to  <= 8 && floor_from == 8){
		total = 1250;
	}else if(floor_to  <= 9 && floor_from == 9){
		total = 1400;
	}else if(floor_to  <= 10 && floor_from == 10){
		total = 1600;
	}else if(floor_to  <= 11 && floor_from == 11){
		total = 1800;
	}else if(floor_to  <= 12 && floor_from == 12){
		total = 2100;
	}else if(floor_to  <= 13 && floor_from == 13){
		total = 2300;
	}
	$('input[name="workers"]').val(total);
	
	/*var totalOfTotals = 0 ;
	$(".total").each(function() {
		$(this).change(function(){

       		 alert($(this).val());
		});
    });

    $(".total").change(function(){
	    $(this).parents('form') // For each element, pick the ancestor that's a form tag.
	           .find('.total') // Find all the input elements under those.
	           .each(function(i) {
	        alert(this.name + " = " + i);
	    });
	});


	$('.total').change(function(totals){
		$.each(totals,function(key,val){
			totalOfTotals += val;
		});
		console.log('changed');
	});*/

}
/** ************************* Calculate ******************************** **/
</script>
@endsection
 
