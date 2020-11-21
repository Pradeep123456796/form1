<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<form method="POST" action="http://localhost:8000/stocks" accept-charset="UTF-8"><input name="_token" type="hidden" value="jgraS2oDCxmxrZohxm4fc6UjQgsoE1cQzqNhsEdg">
      <div class="row">
        <h5 class="col-12 pb-4">Main Fields</h5>

<div style="flex: 50%;max-width: 50%;padding: 0 4px;" class="column">
  
    <!-- Name Field -->
    <div class="form-group row ">
        <label for="product_id" class="col-3 control-label text-right">Product Name</label>
        <div class="col-9">
              <select name="cat_id"  id="category_id" class="form-control  @error('product_image') is-invalid @enderror"   >
          <option value="">
            Select Category Name
          </option>
            @foreach($lstdata as $list_value)
          <option      value="{{$list_value['id']}}"   {{ old('cat_id', $list_value['category_name'] ) == $list_value['id'] ? 'selected' : '' }} >{{$list_value['product_name']}}</option>
              @endforeach
        </select>
        <!-- <select class="select2 form-control select2-hidden-accessible" id="product_id" name="product_id" tabindex="-1" aria-hidden="true"><option value="3">Mobile Recharge</option><option value="4">Jio Recharge</option><option value="6">Recharge new</option><option value="8">mobile</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 423.715px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-product_id-container"><span class="select2-selection__rendered" id="select2-product_id-container" title="Mobile Recharge">Mobile Recharge</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> -->
            <div class="form-text text-muted">
               
            </div>
        </div>
    </div>
  
<!--Product Price Field -->
    <div class="form-group row ">
        <label for="product_rate" class="col-3 control-label text-right">Product Rate</label>
        <div class="col-9">
            <input class="form-control" placeholder="Rate" step="any"   name="product_rate" type="text" id="product_rate">
            <div class="form-text text-muted">
            Product Price
            </div>
        </div>
    </div>
    <!--Product GST Id Field -->
    <div class="form-group row ">
        <label for="product_gst" class="col-3 control-label text-right">Product GST</label>
        <div class="col-9">
            <select class="select2 form-control select2-hidden-accessible" id="product_gst" name="product_gst" tabindex="-1" product_gst aria-hidden="true"><option value="">Select GST</option>
            <option value="18">18%</option>
            <option value="15">15%</option>
            <option value="10">10%</option>
            </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 438.715px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-labelledby="select2-product_gst-container"><span class="select2-selection__rendered" id="select2-product_gst-container" title="Select GST">Select GST</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
            <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 367.5px;">
            <div class="form-text text-muted">Insert Product GST</div>
        </span></div> 
             
    </div>
   
    <div class="form-group row ">
        <label for="quantity" class="col-3 control-label text-right">Quantity</label>
        <div class="col-9">
            <input class="form-control" placeholder="Quantity" step="any" min="0" name="quantity" type="number" id="quantity">
            <div class="form-text text-muted">
            Number of item
            </div>
        </div>
    </div>

    

    
</div>
<div style="flex: 50%;max-width: 50%;padding: 0 4px;" class="column">

    <!-- Taxable Amount Field -->
    <div class="form-group row ">
        <label for="taxable_amount" class="col-3 control-label text-right">Taxable Amount</label>
        <div class="col-9">
            <input class="form-control" placeholder="Rate" step="any"  disabled="" min="0" name="taxable_amount" type="number" id="taxable_amount" value="" >
            <div class="form-text text-muted">
            Taxable Amount
            </div>
        </div>
    </div>
    <!-- GST Id Field -->
    <div class="form-group row ">
        <label for="gst" class="col-3 control-label text-right">GST</label>
        <div class="col-9">
            <select class="select2 form-control select2-hidden-accessible" id="gst" name="gst" tabindex="-1" aria-hidden="true"><option value="">Select GST</option>
            <option value="18">18%</option>
            <option value="15">15%</option>
            <option value="10">10%</option>
            </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 438.715px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-labelledby="select2-gst-container"><span class="select2-selection__rendered" id="select2-gst-container" title="Select GST">Select GST</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
            <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 367.5px;">
            <div class="form-text text-muted">Insert GST</div>
        </span></div> 
             
    </div>
  <!--   <input type="text" id="hiddendubbed">
      <input type="text" id="hiddendubbedq">  <input type="text" id="dubbed"> -->
   

     <!-- Total Amount-->
     <div class="form-group row ">
        <label for="amount" class="col-3 control-label text-right">Total Amount</label>
        <div class="col-9">
            <input class="form-control" placeholder="Rate" step="any"  disabled="" min="0" name="amount" type="number" id="amount">
            <div class="form-text text-muted">
            Total Amount
            </div>
        </div>
    </div>
   
    
    
    

</div>

    <div class="clearfix"></div>
    

<!-- Submit Field -->
<div class="form-group col-12 text-right">
    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save Stocks</button>
    <a href="http://localhost:8000/stocks" class="btn btn-default"><i class="fa fa-undo"></i> Cancel</a>
</div>
      </div>
      </form>

      <script type="text/javascript">
         function calculate(product_rate,gst_amount,quantity){
                var total = (gst_amount/100)*product_rate;
                total_count = parseInt(product_rate) + parseInt(total);
                total_quantity = total_count * quantity ;
                return total_quantity;
            }
    $("body").on("blur","#quantity,#product_rate ",function(){
        var product_rate = $("#product_rate").val();
        var gst_amount = $("#product_gst").val();
        var quantity = $("#quantity").val();
        if(quantity.length>0){
            var calculate_total =  calculate(product_rate,gst_amount,quantity)
            $("#taxable_amount").val(calculate_total);
        }
    })


    
   $("body").on("blur","#product_rate,#quantity",function(){
            var gst = $("#gst").val();
            if(gst.length>0){
            var gst = $("#gst").val();
            var taxable_amount =  $("#taxable_amount").val();
            var total_gst = (gst/100)*taxable_amount;
            var toatl_gst_amount =  parseInt(total_gst) + parseInt(taxable_amount);
             $("#amount").val(toatl_gst_amount);
            }
        
  })
   $("body").on("change","#product_gst",function(){
     var product_rate = $("#product_rate").val()
     var gst_amount = $("#product_gst").val();
     var gst = $("#gst").val();
     var quantity = $("#quantity").val();
        if(quantity.length>0){
            var calculate_total =  calculate(product_rate,gst_amount,quantity)
            $("#taxable_amount").val(calculate_total);
        }
         if(gst.length>0){
            var gst = $("#gst").val();
            var taxable_amount =  $("#taxable_amount").val();
            var total_gst = (gst/100)*taxable_amount;
            var toatl_gst_amount =  parseInt(total_gst) + parseInt(taxable_amount);
             $("#amount").val(toatl_gst_amount);
        }
  })

$("body").on("change","#gst",function(){
        var gst = $("#gst").val();
        var taxable_amount =  $("#taxable_amount").val();
        var total_gst = (gst/100)*(taxable_amount);
        var toatl_gst_amount =  parseInt(total_gst) + parseInt(taxable_amount);
         $("#amount").val(toatl_gst_amount);
  })
   
  

 </script>
 <script type="text/javascript">
$("body").on("change","#category_id",function(){
  var category_id = $("#category_id").val();
  $.ajax({
               type:'get',
               url:'/getdub',
               data:{'_token' : '<?php echo csrf_token() ?>','category_id':+category_id},
                success:function(data) {
                  $("#product_rate").val(data)

               }
            });

})
</script>