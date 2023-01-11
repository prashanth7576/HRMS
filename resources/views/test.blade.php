<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel 5.8 - Individual Column Search in Datatables using Ajax</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
  <div class="container">    
     <br />
     <h3 align="center">Laravel 5.8 - Custom Search in Datatables using Ajax</h3>
     <br />
            <br />
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="form-group">
                        <select name="filter_gender" id="filter_gender" class="form-control" required>
                            <option value="">Select product_id</option>
                            <option value="Male">1</option>
                            <option value="Female">2</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="filter_price" id="filter_price" class="form-control" required>
                            <option value="">Select price</option>
                            @foreach($country_name as $price)

                            <option value="{{ $price->price }}">{{ $price->price }}</option>

                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group" align="center">
                        <button type="button" name="filter" id="filter" class="btn btn-info">Filter</button>

                        <button type="button" name="reset" id="reset" class="btn btn-default">Reset</button>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
            <br />
   <div class="table-responsive">
    <table id="customer_data" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>product_id</th>
                            <th>price</th>
                            
                        </tr>
                    </thead>
                </table>
   </div>
            <br />
            <br />
  </div>
 </body>
</html>

<script>
$(document).ready(function(){

    fill_datatable();

    function fill_datatable(filter_product_id = '', filter_price = '')
    {
        var dataTable = $('#customer_data').DataTable({
            processing: true,
            serverSide: true,
            ajax:{
                url: "{{ route('test') }}",
                data:{filter_product_id:filter_product_id, filter_price:filter_price}
            },
            columns: [
                {
                    data:'product_id',
                    name:'product_id'
                },
                {
                    data:'price',
                    name:'price'
                }
                
            ]
        });
    }

    $('#filter').click(function(){
        var filter_product_id = $('#filter_product_id').val();
        var filter_price = $('#filter_price').val();

        if(filter_product_id != '' &&  filter_product_id != '')
        {
            $('#customer_data').DataTable().destroy();
            fill_datatable(filter_product_id, filter_product_id);
        }
        else
        {
            alert('Select Both filter option');
        }
    });

    $('#reset').click(function(){
        $('#filter_gender').val('');
        $('#filter_country').val('');
        $('#customer_data').DataTable().destroy();
        fill_datatable();
    });

});
</script>